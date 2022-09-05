$(window).on('load', function () {
    var Gww = $(window).width(),
        $pagePad = $('.pageMenu'),
        $pageMenu = $('.pageMenu > ul:first-child'),
        $pageMenuList = $pageMenu.find('li'),
        $pageMenuLi_w = $pageMenuList.width(),
        $pageMenu_w = 0,
        $limit = 0;

    for (var i=0; i < $pageMenuList.length; i++){
        $pageMenu_w += $pageMenuList.eq(i).width();
        $limit = $pageMenu_w - Gww;
    }

    if ($limit > 0) {
        $pagePad.addClass('wipeLR');
        $('.pageMenu ul.nav').addClass('left');
        $pageMenu.css({'width':$pageMenu_w+50});
        $('.pageMenu ul.nav').click(function(){
            if($(this).hasClass('left')){
                pageCtrl('Left');
            }else{
                pageCtrl('Right');
            }
        });
        $pageMenu.touchwipe({
            wipeLeft: function() {pageCtrl('Left')},
            wipeRight: function() {pageCtrl('Right')},
            preventDefaultEvents: true
        });
    } else {
        $pageMenu.css({'text-align':'center'});
    }

    function pageCtrl(distan) {
        var $now = parseInt($pageMenu.css('margin-left'));
        if (distan === 'Left' && $now >= ( 0 - $limit)) {
            $('.pageMenu ul.nav').removeClass('left').addClass('right');
            $pageMenu.stop().animate({marginLeft: Gww - $pageMenu_w - 50});
        } else if (distan === 'Right' && $now < 0){
            $('.pageMenu ul.nav').removeClass('right').addClass('left');
            $pageMenu.stop().animate({marginLeft: 0});
        }
    }

});