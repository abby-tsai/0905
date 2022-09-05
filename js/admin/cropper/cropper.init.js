/**
 * Created by jerry on 11/3/16.
 */
$(function () {

    $('.js-img-crop').launchCropper({
        needAjaxUpload: false,
        previewCallBack: function (el, previewElStr) {
            var $ipt_preview = $(el.data('preview-target')),
                dst_c_w = $ipt_preview.data('pre_width'),
                dst_c_h = $ipt_preview.data('pre_height'),
                pre_c_w = $(previewElStr).width(),
                pre_c_h = $(previewElStr).height(),
                img_w = $(previewElStr).children().width(),
                img_h = $(previewElStr).children().height(),
                pre_pst = $(previewElStr).children().position(),
                ratio_w = dst_c_w / pre_c_w,
                ratio_h = dst_c_h / pre_c_h,
                dst_h = img_h * ratio_h,
                dst_w = img_w * ratio_w,
                dst_pst_top = -(pre_pst.top * ratio_h),
                dst_pst_left = -(pre_pst.left * ratio_w);

            $(previewElStr).css({width: dst_c_w + 'px', height: dst_c_h + 'px'})
                .children('img').css({
                width: dst_w + 'px',
                height: dst_h + 'px',
                'margin-top': dst_pst_top,
                'margin-left': dst_pst_left
            });
            $ipt_preview.empty().append( previewElStr );
        }
    });
});
