window.validate = function (element, option) {
    var defaults = {

            // text, radio, checkbox, file, wysiwyg
            type: 'text'
        },
        opt = $.extend({}, defaults, option),
        has_error = false;

    switch (opt.type) {
        case 'text':
            has_error = window.validate_checker.text(element);
            break;
        case 'radio':
            has_error = window.validate_checker.radio(element);
            break;
        case 'checkbox':
            has_error = window.validate_checker.checkbox(element);
            break;
        case 'file':
            has_error = window.validate_checker.file(element);
            break;
        case 'wysiwyg':
            has_error = window.validate_checker.wysiwyg(element);
            break;
    }
    window.validate_err_presenter(opt.type, element, has_error);

    return !has_error;
};

window.validate_checker = {
    text: function (element) {
        return ($.trim($(element).val()) == '');
    },
    radio: function (element) {
        var checked = false;
        $(element).each(function () {
            if ($(this).prop('checked')) {
                checked = true;
            }
        });
        return !checked;
    },
    checkbox: function (element) {
        var checked = false;
        $(element).each(function () {
            if ($(this).prop('checked')) {
                checked = true;
            }
        });
        return !checked;
    },
    file: function (element) {
        return !$(element)[0].files.length >= 1;
    },
    wysiwyg: function (element) {
        return ($.trim($(element).text()) == '');
    }
};

window.validate_err_presenter = function (type, element, visible) {
    var err_target = '',
        $parent = $(element).parents('div:first');
    switch (type) {
        case 'text':
            err_target = $(element).data('err-target');
            break;
        case 'radio':
            err_target = $(element).eq(0).data('err-target');
            break;
        case 'checkbox':
            err_target = $(element).eq(0).data('err-target');
            break;
        case 'file':
            err_target = $(element).data('err-target');
            break;
        case 'wysiwyg':
            err_target = $(element).data('err-target');
            break;
    }

    if (visible) {
        $(err_target).removeClass('hidden').siblings('.help-block').addClass('hidden');
        $parent.addClass('validate-error');
    } else {
        $(err_target).addClass('hidden').siblings('.help-block').removeClass('hidden');
        $parent.removeClass('validate-error');
    }
};
