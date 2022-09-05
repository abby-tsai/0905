/**
 * Created by jerry on 7/29/16.
 */
;(function ($) {
    $.fn.extend({
        launchCropper: function (options) {
            var defaults = {
                    needAjaxUpload: false,
                    previewCallBack: function () {}
                },
                opts = $.extend({}, defaults, options),
                $cropper_modal = $('body').find('#cropper-modal'),
                $cropper_wrapper = $cropper_modal.find('.cropper-wrapper'),
                $cropper_preview = $cropper_modal.find('.cropper-preview');

            $cropper_modal.on('shown.bs.modal', function () {
                // console.log('$cropper_modal shown');
            }).on('hidden.bs.modal', function () {
                // console.log('$cropper_modal hidden');

                $cropper_preview.empty();
                $cropper_wrapper.children('img').cropper('destroy').remove();
                $cropper_modal.off('click', '.js-cropper-save');
            }).on('click', '.js-act-btn', function (e) {
                e.preventDefault();

                var data = $(this).data();
                if (data.method) {
                    $cropper_wrapper.children('img').cropper(data.method, data.option);
                }
            });

            return this.each(function (i, d) {
                var obj = $(this),
                    data = obj.data();

                obj.on('change', function (e) {
                    e.preventDefault();

                    var files = $(this).prop('files'),
                        file = files[0];

                    if (files.length > 0) {
                        var img_url = URL.createObjectURL(file),
                            $img = $('<img src="' + img_url + '">');

                        $cropper_modal.modal('show');
                        setTimeout(function () {
                            $cropper_wrapper.empty().html($img);
                            $img.cropper({
                                aspectRatio: data.ratio,
                                viewMode: 2,
                                autoCropArea: 1,
                                dragMode: 'move',
                                movable: false,
                                scalable: false,
                                restore: false,
                                guides: false,
                                zoomable: false,
                                preview: $cropper_preview,
                                crop: function (e) {
                                    var json = [
                                        '{"x":' + e.x,
                                        '"y":' + e.y,
                                        '"height":' + e.height,
                                        '"width":' + e.width,
                                        '"rotate":' + e.rotate + '}'
                                    ].join();

                                    obj.next().val(json);

                                    var preview_img = $cropper_preview.clone();

                                    opts.previewCallBack(obj, preview_img[0]);
                                }
                            });
                        }, 250);

                        $cropper_modal.one('click', '.js-cropper-save', function(e) {
                            e.preventDefault();

                            $cropper_modal.modal('hide');

                            return false;
                        });

                    }

                });

            });

        }
    });
})(jQuery);
