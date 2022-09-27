"use strict";

(function (run) {

    var elements = {
        datepickers: $('.order-refund__datepicker'),
    };

    run(elements);

})(function (elements) {

    elements.datepickers.datepicker({
        format: 'yyyy/mm/dd',
    });

});