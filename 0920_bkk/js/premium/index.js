"use strict";

(function (run, $, async) {

    var csrf = $('meta[name=csrf-token]').prop('content');

    var api = {
        order: {
            post: function (data) {
                return $.ajax({
                    method: 'post',
                    url: '/ajax/payment-order',
                    data: data,
                    headers: {
                        'X-CSRF-Token': csrf,
                    }
                });
            },
        },
        spgateway: {
            get: function (data) {
                return $.ajax({
                    method: 'get',
                    url: '/ajax/spgateway',
                    data: data,
                });
            },
        },
        invoice: {
            post: function (data) {
                return $.ajax({
                    method: 'post',
                    url: '/ajax/invoice',
                    data: data,
                    headers: {
                        'X-CSRF-Token': csrf,
                    },
                });
            },
        },
    };

    var elements = {
        form: {
            form: $('#spgateway-form'),
            timestamp: $('#spgateway-timestamp'),
            notifyUrl: $('#spgateway-notify-url'),
            returnUrl: $('#spgateway-return-url'),
            orderNum: $('#spgateway-order-num'),
            amount: $('#spgateway-amount'),
            description: $('#spgateway-description'),
            checkValue: $('#spgateway-check-value'),
        },
        upgradeButton: $('#upgrade-button'),
        plans: $('.plan'),
        invoices: $('.invoice'),
        carriers: $('.carrier'),
        carrierMobileRadio: $('#carrier-mobile-radio'),
        carrierCitizenRadio: $('#carrier-citizen-radio'),
        carrierMobile: $('#carrier-mobile'),
        carrierMobileVerify: $('#carrier-mobile-verify'),
        carrierCitizen: $('#carrier-citizen'),
        carrierCitizenVerify: $('#carrier-citizen-verify'),
    };

    var constants = {
        invoiceCategory: {
            B2B: '1',
            B2C: '2',
            DONATE: '3',
        },
        carrierType: {
            MOBILE: '0',
            CITIZEN_DIGITAL_CERT: '1',
            PAY2GO: '2',
        },
    };

    run($, async, constants, elements, api);

})(function ($, async, constants, elements, api) {

    init();

    function init() {
        bindingEvents(elements);
    }

    function bindingEvents(elements) {
        var planId = null;

        elements.plans.on('click', function (e) {
            var that = $(this);
            var selected = $('.plan.select');

            selected.removeClass('select');
            that.addClass('select');
            planId = that.data('plan-id');
        });

        elements.upgradeButton.on('click', function (e) {
            e.preventDefault();

            if (!planId) {
                alert('請選擇其中一項方案');
                return;
            }

            if (elements.carrierMobileRadio.prop('checked')) {
                if (!elements.carrierMobile.val()) {
                    alert('請輸入手機載具');
                    return;
                }

                if (elements.carrierMobile.val() !== elements.carrierMobileVerify.val()) {
                    alert('重新輸入的手機載具號碼不正確');
                    return;
                }
            }

            if (elements.carrierCitizenRadio.prop('checked')) {
                if (!elements.carrierCitizen.val()) {
                    alert('請輸入自然人憑證號碼');
                    return;
                }

                if (elements.carrierCitizen.val() !== elements.carrierCitizenVerify.val()) {
                    alert('重新輸入的自然人憑證號碼不正確');
                    return;
                }
            }

            async.waterfall([
                function (callback) {
                    elements.upgradeButton.prop('disabled', true);
                    elements.upgradeButton.val('處理中...');
                    api.order.post({
                        plan_id: planId,
                    }).then(function (response) {

                        if( response.paymentFree === true ){
                            elements.upgradeButton.val('付款');
                            elements.upgradeButton.prop('disabled', false);

                            location.href = '/transaction-histories/'+response.data.id;

                            return true;
                        } else {
                            callback(null, response.data);
                        }

                    }).fail(function () {
                        callback('出現未知錯誤，請稍後再試。');
                    });
                },
                function (order, callback) {
                    var data = buildInvoicePostData(order.id);
                    api.invoice.post(data).then(function (response) {
                        callback(null, order);
                    }).fail(function (xhr) {
                        var error = getError(xhr);
                        callback(error);
                    });
                },
                function (order, callback) {
                    api.spgateway.get({
                        plan_id: planId,
                        order_id: order.id,
                        timestamp: order.serialNumber,
                    }).then(function (response) {
                        appendData(elements.form, response.data);
                        elements.form.form.submit();
                    }).fail(function () {
                        callback('出現未知錯誤，請稍後再試。');
                    }).always(function() {
                        // iOS back button workaround
                        if (_.has(window, 'webkit.messageHandlers.NativeApp.postMessage')) {
                            log('iOS', 'Enable back button');
                            webkit.messageHandlers.NativeApp.postMessage({backUI: true});
                        }

                        elements.upgradeButton.val('付款');
                        elements.upgradeButton.prop('disabled', false);
                    });
                },
            ], function (err, result) {
                elements.upgradeButton.val('付款');
                elements.upgradeButton.prop('disabled', false);
                alert(err);
            });
        });

        elements.invoices.on('click', function (e) {
            var that = $(this);
            var targetName = that.data('target');
            $('.invoice-panel.active').removeClass('active');
            $(targetName).addClass('active');
        });

        elements.carriers.on('click', function (e) {
            var that = $(this);
            var targetName = that.data('target');
            $('.carrier-panel.active').removeClass('active');
            $(targetName).addClass('active');
        });

        $('.depositProgram').on('click', function (e) {
            var paymentFree = $(this).data('payment-free');
            if( paymentFree === 'yes' ){
                $('.paymentInfoPad').hide();
            } else {
                $('.paymentInfoPad').show();
            }
        });

        function buildInvoicePostData(orderId) {
            var invoiceCategory = $('.invoice:checked').val();
            var loveCode = getLoveCode();
            var companyId = getCompanyId();
            var companyName = getCompanyName();
            var companyAddress = getCompanyAddress();
            var carrierType = getCarrierType();
            var carrierNumber = getCarrierNumber(carrierType);

            return {
                order_id: orderId,
                invoice_category: invoiceCategory,
                love_code: loveCode,
                company_id: companyId,
                company_name: companyName,
                company_address: companyAddress,
                carrier_type: carrierType,
                carrier_number: carrierNumber,
            };

            function getLoveCode() {
                if (invoiceCategory == constants.invoiceCategory.DONATE) {
                    return $('#love-code').val();
                }

                return null;
            }

            function getCompanyId() {
                if (invoiceCategory == constants.invoiceCategory.B2B) {
                    return $('#company-id').val();
                }

                return null;
            }

            function getCompanyName() {
                if (invoiceCategory == constants.invoiceCategory.B2B) {
                    return $('#company-name').val();
                }

                return null;
            }

            function getCompanyAddress() {
                if (invoiceCategory == constants.invoiceCategory.B2B) {
                    return $('#company-address').val();
                }

                return null;
            }

            function getCarrierType() {
                if (invoiceCategory == constants.invoiceCategory.B2C) {
                    return $('input[name=carrier_type]:checked').val();
                }

                return null;
            }

            function getCarrierNumber(carrierType) {
                switch (carrierType) {
                    case constants.carrierType.MOBILE:
                        return elements.carrierMobile.val();
                    case constants.carrierType.CITIZEN_DIGITAL_CERT:
                        return elements.carrierCitizen.val();
                    default:
                        return null;
                }
            }
        }

        function appendData(form, data) {
            form.timestamp.val(data.timestamp);
            form.notifyUrl.val(data.notifyUrl);
            form.returnUrl.val(data.returnUrl);
            form.orderNum.val(data.orderNum);
            form.amount.val(data.amount);
            form.description.val(data.description);
            form.checkValue.val(data.checkValue);
        }

        function getError(xhr) {
            var key = Object.keys(xhr.responseJSON)[0];
            var error = '';

            if ($.type(xhr.responseJSON[key]) === 'array') {
                error = xhr.responseJSON[key][0];
            }

            if ($.type(xhr.responseJSON[key]) === 'string') {
                error = xhr.responseJSON[key];
            }

            return error;
        }
    }

}, jQuery, async);