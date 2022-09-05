"use strict";

(function (run, $) {

    var csrf = $('meta[name=csrf-token]').prop('content');

    var api = {
        mail: {
            get: function (data) {
                return $.ajax({
                    method: 'get',
                    url: '/ajax/mail',
                    data: data,
                });
            },
            post: function (data) {
                return $.ajax({
                    method: 'post',
                    url: '/ajax/mail',
                    data: data,
                    headers: {
                        'X-CSRF-Token': csrf,
                    },
                });
            },
        },

        notification: {
            post: function(data) {
                return $.ajax({
                    method: 'post',
                    url: '/ajax/notify',
                    data: data,
                    headers: {
                        'X-CSRF-Token': csrf,
                    },
                });
            },
        },
    };

    var elements = {
        datepicker: $('.member-index__datepicker'),
        searchForm: $('#search-form'),
        sendMailBtn: $('#member-index__send-mail'),
        mailModal: $('#member-index__mail-modal'),
        confirmBtn: $('#member-index__modal-confirm'),

        sendNotificationBtn: $('#member-index__send-notification'),
        notificationModal: $('#member-index__notification-modal'),
        notificationConfirmBtn: $('#member-index__notification_modal-confirm'),
    };

    run($, elements, api);

})(function ($, elements, api) {

    var publicData = {
        filterData: {},
    };

    init();

    function init() {
        initDatepicker();
        bindModalEvent();
        bindSendMailEvent();

        bindSendNotificationEvent();
    }

    function bindModalEvent() {
        elements.sendMailBtn.on('click', function (e) {
            e.preventDefault();

            var formArray = elements.searchForm.serializeArray();
            var formObject = serializeObject(formArray);

            api.mail.get(formObject).then(function (response) {
                if (response.data.length == 0) {
                    alert('沒有可寄信的使用者');
                    return;
                }

                publicData.filterData = formObject;
                elements.mailModal.modal('show');
            });
        });

        elements.sendNotificationBtn.on('click', function (e) {
            e.preventDefault();

            var ids = [];
            $('.user-id').each(function() {
                ids.push($(this).data('id'))
            });

            if (ids.length === 0) {
                alert('沒有可送通知的使用者');
                return;
            }

            publicData.filterData = {recipients: ids};
            elements.notificationModal.modal('show');
        });

        function serializeObject(formArray) {
            var result = {};
            for (var i = 0; i < formArray.length; i++) {
                result[formArray[i]['name']] = formArray[i]['value'];
            }

            return result;
        }
    }

    function bindSendMailEvent() {
        elements.confirmBtn.on('click', function (e) {
            var subject = $('#member-index__subject');
            var content = $('#member-index__content');
            var data = publicData.filterData;
            data.title = subject.val();
            data.content = content.val();

            api.mail.post(data).then(function (response) {
                elements.mailModal.modal('hide');
                subject.val('');
                content.val('');
            });
        });
    }

    function bindSendNotificationEvent() {
        elements.notificationConfirmBtn.on('click', function (e) {
            var sender = $('#member-index__sender');
            var message = $('#member-index__message');
            var click_url = $('#member-index__click_url');
            var data = publicData.filterData;
            data.sender = sender.val();
            data.message = message.val();
            data.clickUrl = click_url.val();
            if (data.clickUrl === '')
                data.clickUrl = '/';

            api.notification.post(data).then(function (response) {
                elements.notificationModal.modal('hide');
                sender.val('');
                message.val('');
                click_url.val('');
            });
        });
    }
    function initDatepicker() {
        elements.datepicker.datepicker({
            format: 'yyyy/mm/dd',
        });
    }

}, jQuery);