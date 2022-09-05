/**
 * Created by andy.kuo on 3/22/2017.
 */
//"use strict";

/**
 * Global variables for popUserPhotoCtrl
 */
var $ctrlPic,
    $ctrlPic_leng,
    $ctrlPicNow,
    $mainPic;

/**
 * Photo control for desktop/tablets
 */
function popUserPhotoCtrl() {
    $('.photoPopCtrl').find('li:first-child').click(function(){
        if($ctrlPicNow > 0) {
            $ctrlPicNow --;
        }else{
            $ctrlPicNow = $ctrlPic_leng-1;
        }
        var $imgSrc = $ctrlPic.eq($ctrlPicNow).find('img').attr('src');
        $mainPic.attr('src',$imgSrc);
        console.log($ctrlPicNow, "|", $ctrlPic_leng);
    });
    $('.photoPopCtrl').find('li:last-child').click(function(){
        if($ctrlPicNow < $ctrlPic_leng-1) {
            $ctrlPicNow ++;
        }else{
            $ctrlPicNow = 0;
        }
        var $imgSrc = $ctrlPic.eq($ctrlPicNow).find('img').attr('src');
        $mainPic.attr('src',$imgSrc);
        console.log($ctrlPicNow, "|", $ctrlPic_leng);
    });
}


/**
 * Global variables for photoCtrl
 */
var $length;

/**
 * Photo control for phones
 *
 * @param string direction 'Left'|''
 */
function photoCtrl(direction) {
    var $obj = $('.userphoto').find($('.active')),
        $ctr = $('.dot').find('li'),
        $now = $obj.index();
    console.log($now,direction);
    if ($now < $length - 1 && direction === 'Left') {
        var $ind = $now + 1;
        $ctrlPic.eq($ind).addClass('active').siblings().removeClass('active');
    }else if($now === 0 && direction === ''){
        var $ind = $length - 1;
        $ctrlPic.eq($ind).addClass('active').siblings().removeClass('active');
    }else if($now >= 0 && direction === ''){
        var $ind = $now - 1;
        $ctrlPic.eq($ind).addClass('active').siblings().removeClass('active');
    }else{
        var $ind = 0;
        $ctrlPic.eq($ind).addClass('active').siblings().removeClass('active');
    }
}

/**
 * Photo viewer/control registration (hook up with the document)
 */
function registerPhotoViewer() {
    var Gw = $(window), Gww = Gw.width();
    $ctrlPic = $('.userphoto').find('li');
    $ctrlPic_leng = $ctrlPic.length;
    $ctrlPicNow = 0;
    $mainPic = $('.popContent').find('img');

    // 照片
    if(Gww > 980){
        $ctrlPic.click(function(){
            $ctrlPicNow = $(this).index();
            var $imgSrc = $(this).find('img').attr('src');
            $mainPic.attr('src',$imgSrc);
            $('#popContainer').fadeIn();
            $('.photoPop').show();
            popUserPhotoCtrl();
        });
    }

    var mypairItem = $('.mypairItem'),
        $photo = $('.userphoto').find('li'),
        $dot = "";
    $length = $photo.length;

    // 照片
    if(Gww < 980){
        for(var i = 0; i < 2; i++) {$dot += "<li></li>";}
        mypairItem.append("<ul class='dot'>"  + $dot + "</ul>");

        $('.dot').find('li:last-child').click(function(){photoCtrl('Left')});
        $('.dot').find('li:first-child').click(function(){photoCtrl('')});

        $('.mypairItem').touchwipe({
            wipeLeft: function() {photoCtrl('Left')},
            wipeRight: function() {photoCtrl('')},
            preventDefaultEvents: false
        });
    }
}

$(window).resize(function() { registerPhotoViewer(); });

$(document).ready(function() {
    $('.pageMenu').find('li').eq(0).addClass('active');
    $('.subHeader').find('li').eq(0).addClass('active');

    registerPhotoViewer();

    // 見面聊
    $('.btn_meet').click(function(){
        $('#popContainer').fadeIn();
        $('.meetdataPop').show();
    });

    $('.btn_closePop').click(function(){
        $('.meetdataPop').hide();
        $('.photoPop').hide();
    });

    registerUnclickEvent("#meetListPad", function(target) {
        if (target.filter('#popContainer').length !== 0 &&
            $('#popContainer').css('visibility') == 'visible')
            $('.btn_closePop').click();
    })
});
