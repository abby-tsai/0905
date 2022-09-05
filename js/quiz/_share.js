"use strict";

(function (run, window, $) {

    var elements = {
        pairTab: {
            element: $('#tab-pair'),
            active: function () {
                this.element.addClass('active');
            },
        },
        personalityTab: {
            element: $('#tab-personality'),
            active: function () {
                this.element.addClass('active');
            },
        },
        loveWordTab: {
            element: $('#tab-love-word'),
            active: function () {
                this.element.addClass('active');
            },
        },
        loveStyleTab: {
            element: $('#tab-love-style'),
            active: function () {
                this.element.addClass('active');
            },
        },
    };

    run(window, $, elements);

})(function (window, $, elements) {

    $(function () {
        init();
    });

    function init() {
        activeTab();
    }

    function activeTab() {
        var pathName = window.location.pathname;
        var actionName = pathName.split('/')[2];

        if (actionName == 'pair') {
            elements.pairTab.active();
        }

        if (actionName == 'personality') {
            elements.personalityTab.active();
        }

        if (actionName == 'love-word') {
            elements.loveWordTab.active();
        }

        if (actionName == 'love-style') {
            elements.loveStyleTab.active();
        }
    }

}, window, jQuery);