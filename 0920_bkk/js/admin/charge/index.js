"use strict";

(function (run) {

    var api = {
        order: {
            get: function (orderId) {
                return $.ajax({
                    method: 'get',
                    url: '/ajax/payment-order/' + orderId,
                });
            },
        },
    };

    var elements = {
        datepicker: $('.order-index__datepicker'),
        buttons: $('.order-index__modal-button'),
        modal: {
            body: $('#order-index__modal'),
            title: $('#order-index__modal-title'),
            gender: $('#order-index__modal-gender'),
            phone: $('#order-index__modal-phone'),
            orderNum: $('#order-index__modal-order-number'),
            orderDatetime: $('#order-index__modal-order-datetime'),
            planName: $('#order-index__modal-plan-name'),
            vipSession: $('#order-index__modal-vip-session'),
            paymentStatus: $('#order-index__modal-payment-status'),
            paymentMethod: $('#order-index__modal-payment-method'),
            price: $('#order-index__modal-price'),
            actualAmount: $('#order-index__modal-actual-amount'),
            refund: $('#order-index__modal-refund'),
            refundReason: $('#order-index__modal-refund-reason'),
            refundDatetime: $('#order-index__modal-refund-datetime'),
            stopDatetime: $('#order-index__modal-stop-datetime'),
            period: $('#order-index__modal-period'),
        }
    };

    run(jQuery, elements, api);

})(function ($, elements, api) {

    init();

    function init() {
        initDatepicker();
        initModal();
    }

    function initDatepicker() {
        elements.datepicker.datepicker({
            format: 'yyyy/mm/dd',
        });
    }

    function initModal() {
        elements.buttons.on('click', function () {
            var that = $(this);
            var orderId = that.data('order-id');

            api.order.get(orderId).then(function (response) {
                appendData(response.data);
                elements.modal.body.modal('show');
            });
        });

        function appendData(data) {
            elements.modal.title.text(data.userName);
            elements.modal.gender.text(data.gender);
            elements.modal.phone.text(data.mobile);
            elements.modal.orderNum.text(data.serialNumber);
            elements.modal.orderDatetime.text(data.orderDatetime);
            elements.modal.planName.text(data.planName);
            elements.modal.vipSession.text(data.vipSession);
            elements.modal.paymentStatus.text(data.status);
            elements.modal.paymentMethod.text(data.paymentMethod);
            elements.modal.price.text(data.price);
            elements.modal.actualAmount.text(data.actualAmount);
            elements.modal.refund.text(data.refund);
            elements.modal.refundReason.text(data.refundReason);
            elements.modal.refundDatetime.text(data.refundDatetime);
            elements.modal.stopDatetime.text(data.stopDatetime);
            elements.modal.period.text(data.periodOfVipSession);
        }
    }
});