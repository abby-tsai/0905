"use strict";

(function (run, $) {
    
    var elements = {
        eachMaleVipSession: $('.plan-index__vip-session-male'),
        maleVipSession: $('#plan-index__vip-session-male-all'),
        eachFemaleVipSession: $('.plan-index__vip-session-female'),
        femaleVipSession: $('#plan-index__vip-session-female-all'),
        removeBtn: $('.plan-index__remove'),
        removeModal: $('#plan-index__delete-modal'),
        removeForm: $('#plan-index__remove-form'),
    };

    run($, elements);

})(function ($, elements) {

    init();

    function init() {
        elements.maleVipSession.on('keyup', function () {
            var vipSessionCount = elements.maleVipSession.val();
            elements.eachMaleVipSession.val(vipSessionCount);
        });

        elements.femaleVipSession.on('keyup', function () {
            var vipSessionCount = elements.femaleVipSession.val();
            elements.eachFemaleVipSession.val(vipSessionCount);
        });

        elements.removeBtn.on('click', function (e) {
            var that = $(this);
            var planId = that.data('plan-id');
            elements.removeForm.prop('action', '/_fto/plan/' + planId);
            elements.removeModal.modal('show');
        });
    }

}, jQuery);