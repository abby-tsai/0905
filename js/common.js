var ajaxCall = function(options) {
        var settings = {
                headers: {},
                url: '',
                type: 'POST',
                dataType: 'json',
                data: {},
                beforeSendCall: null,
                successCall: null,
                failCall: null,
                completeCall: null,
                timeout: 10000
            },
            opt = $.extend(settings, options);

        $.ajax({
            cache: false,
            headers: opt.headers,
            url: opt.url,
            type: opt.type,
            dataType: opt.dataType,
            data: opt.data,
            timeout: !isNaN(opt.timeout) ? opt.timeout : 10000,
            beforeSend: function() {
                if (typeof opt.beforeSendCall == 'function') {
                    opt.beforeSendCall();
                }
            },
            success: function(data) {
                if (typeof opt.successCall == 'function') {
                    opt.successCall(data);
                }
            },
            error: function() {
                if (typeof opt.failCall == 'function') {
                    opt.failCall();
                }
            },
            complete: function() {
                if (typeof opt.completeCall == 'function') {
                    opt.completeCall();
                }
            }
        });
    },
    // check if a string is a valid JSON string
    isJSONString = function(text) {
        if (/^[\],:{}\s]*$/.test(text.replace(/\\["\\\/bfnrtu]/g, '@').
            replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, ']').
            replace(/(?:^|:|,)(?:\s*\[)+/g, ''))
        ) {
            return true;
        }
    },
    ellipsisString = function (class_name, length) {
        $('.' + class_name).each(function(i){
            if ($(this).text().length > length) {
                $(this).attr("title", $(this).text());
                var text = $(this).text().substring(0, length - 1) + "...";
                $(this).text(text);
            }
            $(this).removeClass(class_name)
        });
    },
    tranPublishDate = function() {
        $('.published-at.ori-date').each(function() {
            var oriDate = $(this).data('published_at');
            $(this).text(moment(oriDate, "YYYY-MM-DD").fromNow()).removeClass('ori-date');
        });
    };

// Production steps of ECMA-262, Edition 5, 15.4.4.18
// Reference: http://es5.github.io/#x15.4.4.18
if (!Array.prototype.forEach) {

    Array.prototype.forEach = function(callback, thisArg) {

        var T, k;

        if (this == null) {
            throw new TypeError(' this is null or not defined');
        }

        // 1. Let O be the result of calling toObject() passing the |this| value as the argument.
        var O = Object(this);

        // 2. Let lenValue be the result of calling the Get() internal method of O with the argument "length".
        // 3. Let len be toUint32(lenValue).
        var len = O.length >>> 0;

        // 4. If isCallable(callback) is false, throw a TypeError exception.
        // See: http://es5.github.com/#x9.11
        if (typeof callback !== "function") {
            throw new TypeError(callback + ' is not a function');
        }

        // 5. If thisArg was supplied, let T be thisArg; else let T be undefined.
        if (arguments.length > 1) {
            T = thisArg;
        }

        // 6. Let k be 0
        k = 0;

        // 7. Repeat, while k < len
        while (k < len) {

            var kValue;

            // a. Let Pk be ToString(k).
            //    This is implicit for LHS operands of the in operator
            // b. Let kPresent be the result of calling the HasProperty
            //    internal method of O with argument Pk.
            //    This step can be combined with c
            // c. If kPresent is true, then
            if (k in O) {

                // i. Let kValue be the result of calling the Get internal method of O with argument Pk.
                kValue = O[k];

                // ii. Call the Call internal method of callback with T as
                // the this value and argument list containing kValue, k, and O.
                callback.call(T, kValue, k, O);
            }
            // d. Increase k by 1.
            k++;
        }
        // 8. return undefined
    };
}
