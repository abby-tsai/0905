

// 點擊對話框展開罐頭訊息
$('.chatInput').click(function() {
	if ($(this).hasClass('active')!=true){
        $(this).addClass('active');
		$('.cannedText').slideDown(300);
		$('.textBar').delay(100).fadeIn(200, function(){
			var hdr = $('#header').outerHeight();
				chdr = $('.chatroomHeader').outerHeight();
				chipt = $('.chatInputPad').outerHeight();
				height_Chat = $(window).height() - hdr - chdr - chipt;
			$('.height_Chat').css({'height': height_Chat});
		});
	}
});
$('#chat_pad').click(function() {
	if ($('.chatInput').hasClass('active')){
		$('.textBar').fadeOut(200);
		$('.chatInput').removeClass('active');
		$('.cannedText').slideUp(300);
		$('.textBar').delay(100).fadeOut(200, function(){
			var hdr = $('#header').outerHeight();
				chdr = $('.chatroomHeader').outerHeight();
				chipt = $('.chatInputPad').outerHeight();
				height_Chat = $(window).height() - hdr - chdr - chipt - 2;
			$('.height_Chat').css({'height': height_Chat});
		});
	}
});

// 清除訊息內容
$('.chatReset').click(function() {
	$('.chatInput').attr('value', '');
});

// 切換訊息內容
$('.cannedText .btn').click(function() {
	var text = $(this).find('span').text();
	$('.chatInput').attr('value',text);
});

// 開啟popup
$('.cannedText .openPop').click(function() {
	if ($(this).hasClass('setTime')) { $('#popup.setTime').fadeIn(300);}
	if ($(this).hasClass('setLocal')) { $('#popup.setLocal').fadeIn(300);}
	if ($(this).hasClass('setCity')) { $('#popup.setCity').fadeIn(300);}
});
$('.openPop.setAll').click(function() {
	$('#popup.setAll').fadeIn(300);
});

// 選取時間
$('#popup.set .timeTable .td').click(function() {
	if ($(this).parent().hasClass('disable')!=true) {
		$(this).toggleClass('active');
	}
});

// 其他時段
var timeCount = 0;
function addTime() {
	if (timeCount <= 6) {
		$('#popup.set .timeTable .tr').append('<li><div class="date">' + 'date' + '</div><div class="td">12:00</div><div class="td">15:00</div><div class="td">18:00</div></li>')
		timeCount++;
		addTime();
	} else {
		timeCount = 0;
	};
}
$('#popup.set .timeTable .more').click(function() {
	addTime();
});

// 選取地點
$('#popup.set .localTable ul li .content').click(function() {
		$(this).toggleClass('active');
});

// 其他城市的餐廳
var localCount = 0;
function addLocal() {
	if (localCount <= 2) {
		$('#popup.set .localTable ul').append('<li><img class="pic" src="' + 'images/location1.png' + '" alt="" /><div class="content"><a href="' + '超連結' + '" class="map"></a><div class="words"><p class="name">' + '店名' + '</p><p class="branch">' + '分店名' + '</p><p class="add">' + '地址' + '</p></div></div></li>')
		localCount++;
		addLocal();
	} else {
		localCount = 0;
	};
}
$('#popup.set .localTable .more').click(function() {
	addLocal();
});

// 選取城市
$('#popup.set .cityTable input').click(function() {
	var cityName = $(this).attr('value');
	$('#popup.set .cityTable input.active').removeClass('active');
	$(this).addClass('active');
	$('#popup.setCity .result .cap span').text(cityName);
});

// 設定人數
$('#popup.set .personTable input').click(function() {
	if ($(this).hasClass('active')!=true) {
		$('#popup.set .personTable input.active').removeClass('active');
		$(this).addClass('active');
	}
});


