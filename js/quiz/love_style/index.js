"use strict";

(function (run, window, $) {

    $(function () {
        var elements = {
            prevBtn: $('.love-style-index__prev-btn'),
            nextBtn: $('.love-style-index__next-btn'),
            form: $('#love-style-index__form'),
            startTestBtn: $('#love-style-index__start-test-btn'),
            pageGroup: $('#love-style-index__page-group'),
            testStart: $('#love-style-index__test-start'),
            coverNextBtn: $('#love-style-index__cover-next-btn'),
            testCover: $('#love-style-index__test-cover'),
            pages: $('.love-style-index__page'),
            radioWrapper: $('.love-style-index__radio-wrapper'),
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

            if (that.is('.love-style-index__next-btn.next:last')) {
                formSubmit();
            } else {
                goToNext(that);
            }
        });
    }

    function bindQuizPrevBtnEvent() {
        elements.prevBtn.on('click', function () {
            var that = $(this);
            var current = that.parents('.love-style-index__page');
            var prev = current.prev();

            current.fadeOut(750, function () {
                prev.fadeIn(750);
            });
        });
    }

    function bindRadioWrapperEvent() {
        elements.radioWrapper.on('click', function () {
            var that = $(this);
            var current = that.parents('.love-style-index__page');
            var next = current.next();

            that.data('has-selected', true);

            if (!isSmallScreen()) {
                return;
            }

            if (that.is('.love-style-index__radio-wrapper:last')) {
                formSubmit();
            } else {
                goToNext(that);
            }
        });

        function isSmallScreen() {
            return window.matchMedia("(max-width: 980px)").matches;
        }
    }

    function formSubmit() {
        if (allRadioHasSelected()) {
            elements.form.submit();
            return;
        }

        highlightInvalidQuestions();
        elements.modal.fadeIn(750);

        function allRadioHasSelected(that) {
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
        var current = effectedElement.parents('.love-style-index__page');
        var next = current.next();
        var currentRadioWrapper = effectedElement.parents('.love-style-index__page')
            .find('.love-style-index__radio-wrapper');

        if (!currentRadioWrapper.data('has-selected')) {
            elements.modal.fadeIn(750);
            return;
        }

        current.fadeOut(750, function () {
            next.fadeIn(750);
        });
    }

}, window, jQuery);