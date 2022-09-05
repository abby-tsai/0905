"use strict";

(function (run, window, $) {

    $(function () {
        var elements = {
            prevBtn: $('.personality-index__prev-btn'),
            nextBtn: $('.personality-index__next-btn'),
            form: $('#personality-index__form'),
            startTestBtn: $('#personality-index__start-test-btn'),
            testStart: $('#personality-index__test-start'),
            pageGroup: $('#personality-index__page-group'),
            coverNextBtn: $('#personality-index__cover-next-btn'),
            testCover: $('#personality-index__test-cover'),
            pages: $('.personality-index__page'),
            radioWrapper: $('.personality-index__radio-wrapper'),
            modal: $('.quiz-modal'),
        };

        run($, window, elements);
    });

})(function ($, window, elements) {

    init();

    function init() {
        bindStartTestBtnEvent();
        bindCoverNextBtnEvent();
        bindQuizNextBtnEvent();
        bindQuizPrevBtnEvent();
        bindRadioWrapperEvent();
    }

    function bindStartTestBtnEvent() {
        elements.startTestBtn.on('click', function () {
            elements.testStart.fadeOut(750, function () {
                elements.pageGroup.fadeIn(750);
            });
        });
    }

    function bindCoverNextBtnEvent() {
        elements.coverNextBtn.on('click', function () {
            elements.testCover.fadeOut(750, function () {
                elements.pages.first().fadeIn(750);
            });
        });
    }

    function bindQuizNextBtnEvent() {
        elements.nextBtn.on('click', function () {
            var that = $(this);

            if (that.is('.personality-index__next-btn.next:last')) {
                formSubmit();
            } else {
                goToNext(that);
            }
        });
    }

    function bindQuizPrevBtnEvent() {
        elements.prevBtn.on('click', function () {
            var that = $(this);
            var current = that.parents('.personality-index__page');
            var prev = current.prev();

            current.fadeOut(750, function () {
                prev.fadeIn(750);
            });
        });
    }

    function bindRadioWrapperEvent() {
        elements.radioWrapper.find('label').on('click', function () {
            var that = $(this);
            that.parents('.personality-index__radio-wrapper').data('has-selected', true);
        });

        elements.radioWrapper.find('input:radio').on('click', function () {
            var that = $(this);
            var parents = that.parents('.personality-index__radio-wrapper');

            parents.data('has-selected', true);

            if (!isSmallScreen()) {
                return;
            }

            if (parents.is('.personality-index__radio-wrapper:last')) {
                formSubmit();
            } else {
                goToNext(that);
            }

            function isSmallScreen() {
                return window.matchMedia("(max-width: 980px)").matches;
            }
        });
    }

    function formSubmit() {
        if (allRadioHasSelected()) {
            elements.form.submit();
            return;
        }

        highlightInvalidQuestions();
        elements.modal.fadeIn();

        function allRadioHasSelected() {
            var hasSelected = true;

            elements.radioWrapper.each(function () {
                var that = $(this);
                if ( ! that.data('has-selected')) {
                    hasSelected = false;
                }
            });

            return hasSelected;
        }

        function highlightInvalidQuestions() {
            elements.radioWrapper.each(function () {
                var that = $(this);
                var effectedElement = that.parent().parent().find('h2');

                if (!that.data('has-selected')) {
                    effectedElement.css('color', 'red');
                } else {
                    effectedElement.css('color', 'black');
                }
            });
        }
    }

    function goToNext(effectedElement) {
        var current = effectedElement.parents('.personality-index__page');
        var next = current.next();
        var currentRadioWrapper = effectedElement.parents('.personality-index__page')
            .find('.personality-index__radio-wrapper');

        if (!currentRadioWrapper.data('has-selected')) {
            elements.modal.fadeIn();
            return;
        }

        current.fadeOut(750, function () {
            next.fadeIn(750);
        });
    }

}, window, jQuery);
