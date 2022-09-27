"use strict";

(function (run) {

    run(jQuery, Pace);

})(function ($, Pace) {
    $(document).ajaxStart(function () {
        Pace.restart();
    });
});
