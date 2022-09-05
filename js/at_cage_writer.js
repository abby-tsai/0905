// JavaScript Document
// CaGe Wei  
$(window).on('load', function() {
	"use strict";
	var Gw = $(window), Gww = Gw.width(), Gwh = Gw.height(), Gd = $(document), Gdw = Gd.width(), Gdh = Gd.height();
	$('.height_G').css('height',Gdh);
	if (Gwh < Gdh){
		$('#footer').css({'position':'relative'});
	}else{
		$('#footer').css({'position':'fixed'});
	}
	/*
	$('.loadPad').animate({opacity:0},1000, function(){
		$('.loadPad').css({'display':'none'});
	});*/
});
$(document).ready(function(){
	"use strict";
	// ======= Project Coding ====== //
	var Gw = $(window), Gww = Gw.width(), Gwh = Gw.height(), Gd = $(document), Gdw = Gd.width(), Gdh = Gd.height(), 
		mainH = $('#main').height(), contentPad_H = Gwh - $('#header').height(), documentAll_H = contentPad_H - $('#footer').height(),
		navMenuHeight = contentPad_H - 45;
	var $chatHeigh = Gwh - $('.chatroomHeader').height() - $('.chatInputPad').height();
	$('.height_F').css({'height':Gwh});
	$('.height_F2').css({'height':contentPad_H});
	$('.height_FR2').css({'min-height':documentAll_H});
	
	if (Gww <= 980) {
		$('.height_R').css({'min-height':Gwh});
		$('.height_R2').css({'min-height':contentPad_H});
		$('.height_NAV').css({'min-height':navMenuHeight});
		$('.height_FR2').css({'min-height':contentPad_H});
		$('.height_Chat').css({'min-height':$chatHeigh});
		$('.menu_chat').find('a').attr('href','chatlist.php');
		$('.menu_mesg').find('a').attr('href','noticelist.php');
		$('.headerConts').find('ul.navBar').click(function(){
			$('.headerConts').toggleClass('active');
			$('.subHeader').toggleClass('active');
		});
	}
	
	if (Gww > 980) {
		$('.menu_chat').click(function(){
			$('.subHeader').find('.noticelistPad').fadeOut();
			$('.subHeader').find('.chatlistPad').fadeToggle();
		});
		$('.menu_mesg').click(function(){
			$('.subHeader').find('.chatlistPad').fadeOut();
			$('.subHeader').find('.noticelistPad').fadeToggle();
		});
		$('.icon_nav').click(function(){
			$(this).parent().toggleClass('active');
		});
		$('.subHeader').click(function(){
			$('.icon_nav').parent().removeClass('active');
		});
		$('#main').click(function(){
			$('.icon_nav').parent().removeClass('active');			
		});
	}
	
	if($('body').hasClass('testing_topics')) {
		$('.btn_toTest').click(function(){
			$('.pageGroup').fadeIn();
			$('.testingStart').fadeOut();
		});
	}
	
	$('.chatMusic').click(function(){
		chatClose();
		$('.sendCoffee').fadeOut();
		$('.msgReportForm').fadeOut();
		$('.sendMeetchat').fadeOut();
		$('.sendMusic').fadeToggle();
	});
	$('.chatPresent').click(function(){
		chatClose();
		$('.sendMusic').fadeOut();
		$('.msgReportForm').fadeOut();
		$('.sendMeetchat').fadeOut();
		$('.sendCoffee').fadeToggle();
	});
	$('.chatMeetchat').click(function(){
		chatClose();
		$('.sendMusic').fadeOut();
		$('.msgReportForm').fadeOut();
		$('.sendCoffee').fadeOut();
		$('.sendMeetchat').fadeToggle();
	});
	$('.chatAlert').click(function(){
		chatClose();
		$('.sendMusic').fadeOut();
		$('.sendCoffee').fadeOut();
		$('.msgReportForm').fadeToggle();
	});
	function chatClose() {
		if($('.chatClose').hasClass('action')){
			
		}else{
			$('.chatClose').addClass('action');
		}		
	}
	
	$('.chatClose').click(function(){
		$('.chatPlusPad').fadeOut();
		$(this).removeClass('action');
	});
	
	var $nextTest = $('.ctrlPad').find('.next');
	var $prevTest = $('.ctrlPad').find('.prev');
	$nextTest.click(function(){
		var $Gfath = $(this).parents('.pageGroup'),
			$ind = $(this).parents('.page').index(),
			$uncle = $Gfath.find('.page');
		$uncle.eq($ind).fadeOut();
		$uncle.eq($ind+1).fadeIn();
	});
	$prevTest.click(function(){
		var $Gfath = $(this).parents('.pageGroup'),
			$ind = $(this).parents('.page').index(),
			$uncle = $Gfath.find('.page');
		$uncle.eq($ind).fadeOut();
		$uncle.eq($ind-1).fadeIn();
	});
	var $back = $('a.back');
	$back .click(function(){window.history.go(-1);});
	
	//Topic Modle	
	var $check1 = $('.ansType_check_n').find('input');
	$check1.change(function(){
		var $leng = $(this).attr('data-rel'),
			$name = $(this).attr('name'),
			$siblin = "input[name=" + $name + "]:checked",
			$selected = $($siblin).length;
		if ($selected > $leng){
            $(this).prop("checked", "");			
            alert('最多只能選 ' + $leng + ' 項唷');
		}
	});
	
	var $autoNextInput = $('.ansType_inputNumber').find('input');
	$autoNextInput.keyup(function(){
		var _nowLength = $(this).val().length.toString();
		if(_nowLength === $(this).attr('maxlength')){
			$(this).next('input').focus(); 
		}
	});  
	
	//Report reportDetial
	var $reportBGpad = $('.reportChart').find('.bg'),
		$reportInfoPad = $('.reportChart').find('.infoPad');
	$reportBGpad.css('height',function(){return $(this).width();});
	$reportInfoPad.css({'width':function(){return $(this).siblings('.bg').width()-20;},'height':function(){return $(this).siblings('.bg').width()-20;}});
	
	// Logo Height
	/*
	var $headerLogo = $('.headerBasic').find($('.logo'));
	$(function(){
		var $ptHeight = $headerLogo.parent().height();
		$headerLogo.css({'height': $ptHeight});
	});
	*/
	
	// ======= AT CaGe Wei Basic ====== //
	// back Top
	$('.backTop').click(function(){$('html,body').animate({scrollTop:$('body').offset().top});});
		
	// LightBox
	$('#popContainer').hide();
	$('.btn_openPop').click(function(){
		$('#popContainer').fadeIn();
	});
	$('.btn_closePop').click(function(){$('#popContainer').fadeOut();});
	
	// FaceBook
	$('.shareToFB').attr({
		href:"https://www.facebook.com/sharer/sharer.php?u="+document.location.href, target:"_blank"});
	// Get Link
	
});

// Resize reload
$(window).resize(function(){
	"use strict";
	var Gw = $(window), Gww = Gw.width();	
	if (/ipad/i.test(navigator.userAgent.toLowerCase())) {
    	console.log("pad"); 
		
	} // 目前是用ipad瀏覽
	else if (/iphone|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase())) {
		console.log("mobile");
		
	} // 目前是用手機瀏覽
	else {
		location.reload();
		
	} // 目前是用電腦瀏覽	
});

$(window).scroll(function(){
	"use strict";
	var Gw = $(window), Gwh = Gw.height(),
		Gd = $(document), Gdh =Gd.height(),
		_nowHeight = $(window).scrollTop();
		
	//backTop BTN show & hide
	if (_nowHeight >= Gwh / 2) {$('.backTop').stop().animate({opacity:1});}else{$('.backTop').stop().animate({opacity:0});}
	//
	if (_nowHeight < Gdh / 4) {$('.p').stop().animate({backgroundColor:'#000000'});
	}else if (_nowHeight >= Gdh / 4 && _nowHeight < Gdh / 3 ) {$('.p').stop().animate({backgroundColor:'#f18c8c'});
	}else if(_nowHeight >= Gdh / 3 && _nowHeight < Gdh / 2) {$('.p').stop().animate({backgroundColor:'rgb(156,230,50)'});
	}else if(_nowHeight >= Gdh / 2 && _nowHeight < Gdh) {$('.p').stop().animate({backgroundColor:'#58f4e7'});
	}
});