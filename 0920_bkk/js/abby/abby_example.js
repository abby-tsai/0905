$(document).ready(function () {

  // 尚未解鎖視窗 - 開啟和關閉
  // 開啟
  $('.notApplyBtn').click(function () {
    $('.popBlock.not-apply').fadeIn();
  });

  // 選單下拉
  // 電腦版
  $('.icon_nav').click(function () {
    $(this).parent().toggleClass('active');
    $(this).next().toggle();
  });

  // 手機版
  $('#mobile_navBar').click(function(){
    $('.headerConts').toggleClass('active');
    // 當選單打開的狀態，不能滑動
    if($('.headerConts').hasClass('active')){
      $('body').css('overflow', 'hidden');
    } else {
      $('body').css('overflow', 'auto');
    }
  })

});