"use strict";

(function (run, window, $) {

    var elements = {};

    var tabPremium = {
        element: $('#tab-premium'),
        active: function () {
            this.element.addClass('active');
        },
        inactive: function () {
            this.element.removeClass('active');
        },
    };

    var tabHistory = {
        element: $('#tab-history'),
        active: function () {
            this.element.addClass('active');
        },
        inactive: function () {
            this.element.removeClass('active');
        },
    };

    var tabTickets = {
        element: $('#tab-tickets'),
        active: function () {
            this.element.addClass('active');
        },
        inactive: function () {
            this.element.removeClass('active');
        },
    };

    elements.tabPremium = tabPremium;
    elements.tabHistory = tabHistory;
    elements.tabTickets = tabTickets;

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
        var actionName = pathName.split('/')[1];

        if (actionName == 'premium') {
            elements.tabPremium.active();
            elements.tabHistory.inactive();
            elements.tabTickets.inactive();
        }

        if (actionName == 'transaction-histories') {
            elements.tabPremium.inactive();
            elements.tabHistory.active();
            elements.tabTickets.inactive();
        }

        if (actionName == 'tickets') {
            elements.tabPremium.inactive();
            elements.tabHistory.inactive();
            elements.tabTickets.active();
        }
    }

}, window, jQuery);