"use strict";

(function (run, $) {

    var elements = {
        inviteFriendBtn: $('#free-trial-index__invite-friend-btn'),
        popContainer: $('.free-trial-index__pop-container'),
        fbLink: $('#free-trial-index__fb-link'),
        shareLink: $('#free-trial-index__share-link'),
        link: $('#free-trial-index__link'),
    };

    var helper = {
        copyToClipboard: function (element) {
            var $temp = $('<input>');

            $('body').append($temp);
            $temp.val(element.val()).select();
            document.execCommand('copy');
            $temp.remove();
        },
    };

    run($, elements, helper);

})(function ($, elements, helper) {

    init();

    function init() {
        elements.inviteFriendBtn.on('click', function (e) {
            elements.popContainer.fadeIn();
        });

        elements.shareLink.on('click', function (e) {
            helper.copyToClipboard(elements.link);
            alert('已複製到連結');
        });
    }


}, jQuery);
