$(function() {
    var $frm = $('#frm'),
        $change_cover = $('#change_cover'),
        $trial_content = $('#trial_content'),
        $description = $('#description'),
        $del_form = $('#frm-del-article'),
        save = function(e) {
            e.preventDefault();

            $('#approval_pass').val($(this).data('status'));

            var err_counts = 0;

            if (!window.validate('#title')) {
                err_counts += 1;
            }

            if (!window.validate('.js-checkbox-category', { type: 'checkbox' })) {
                err_counts += 1;
            }

            if (!window.validate('.js-checkbox-theory', { type: 'checkbox' })) {
                err_counts += 1;
            }

            if ($change_cover.val() == 1) {
                if (!window.validate('#cover', {type: 'file'})) {
                    err_counts += 1;
                }
            }

            if (!window.validate('#digest')) {
                err_counts += 1;
            }

            if (!window.validate('#trial_content', { type: 'wysiwyg' })) {
                err_counts += 1;
            }

            if (!window.validate('#description', { type: 'wysiwyg' })) {
                err_counts += 1;
            }

            if (err_counts > 0) {
                // show error
                $('#popContainer').find('.validate-err').siblings().css({'display': 'none'}).end().css({'display': 'block'}).end().show();
                $('body').one('click', function(e) {
                    e.preventDefault();

                    if ($('.validate-error').length > 0) {
                        $('html, body').animate({ scrollTop: $('div.validate-error').eq(0).offset().top - 30}, 400);
                    }

                    $('#popContainer').fadeOut();
                });
                return false;
            } else {
                $frm.submit();
            }

        };

    // add #description and #trial_content value on submit event
    $frm.on('submit', function(e) {
        var _this = $(this),
            trial_content_makrup = $trial_content.html(),
            description_makrup = $description.html(),
            params = [
                {
                    name: "trial_content",
                    value: trial_content_makrup
                },
                {
                    name: "description",
                    value: description_makrup
                }
            ];

        $.each(params, function(i, param){
            $('<input />').attr('type', 'hidden')
                .attr('name', param.name)
                .attr('value', param.value)
                .appendTo( _this );
        });

        return true;
    });

    // saving
    $('#btn_save, #btn_draft').on('click', save);

    // change image
    $('.js-change-img').on('click', function(event) {
        event.preventDefault();

        var target = $(this).data('target'),
            showUpload = $(this).data('show-upload'),
            originPreview = $(this).data('origin-preview');
        $(target).val(1);
        $(showUpload).show();
        $(originPreview).remove();
    });

    $('#btn_del').on('click', function(event) {
        event.preventDefault();

        $('#popContainer').find('.del-confirm').siblings().css({'display': 'none'}).end().css({'display': 'block'}).end().show();
        $('.dlg-yes-btn').one('click', function () {
            $del_form.submit();
        });
    });
});
