!function(){"use strict";function e(n){return"undefined"==typeof this||Object.getPrototypeOf(this)!==e.prototype?new e(n):(O=this,O.version="3.3.1",O.tools=new E,O.isSupported()?(O.tools.extend(O.defaults,n||{}),t(O.defaults),O.store={elements:{},containers:[]},O.sequences={},O.history=[],O.uid=0,O.initialized=!1):"undefined"!=typeof console&&null!==console,O)}function t(e){if(e&&e.container){if("string"==typeof e.container)return window.document.documentElement.querySelector(e.container);if(O.tools.isNode(e.container))return e.container}return O.defaults.container}function n(e,t){return"string"==typeof e?Array.prototype.slice.call(t.querySelectorAll(e)):O.tools.isNode(e)?[e]:O.tools.isNodeList(e)?Array.prototype.slice.call(e):[]}function i(){return++O.uid}function o(e,t,n){t.container&&(t.container=n),e.config?e.config=O.tools.extendClone(e.config,t):e.config=O.tools.extendClone(O.defaults,t),"top"===e.config.origin||"bottom"===e.config.origin?e.config.axis="Y":e.config.axis="X"}function r(e){var t=window.getComputedStyle(e.domEl);e.styles||(e.styles={transition:{},transform:{},computed:{}},e.styles.inline=e.domEl.getAttribute("style")||"",e.styles.inline+="; visibility: visible; ",e.styles.computed.opacity=t.opacity,t.transition&&"all 0s ease 0s"!==t.transition?e.styles.computed.transition=t.transition+", ":e.styles.computed.transition=""),e.styles.transition.instant=s(e,0),e.styles.transition.delayed=s(e,e.config.delay),e.styles.transform.initial=" -webkit-transform:",e.styles.transform.target=" -webkit-transform:",a(e),e.styles.transform.initial+="transform:",e.styles.transform.target+="transform:",a(e)}function s(e,t){var n=e.config;return"-webkit-transition: "+e.styles.computed.transition+"-webkit-transform "+n.duration/1e3+"s "+n.easing+" "+t/1e3+"s, opacity "+n.duration/1e3+"s "+n.easing+" "+t/1e3+"s; transition: "+e.styles.computed.transition+"transform "+n.duration/1e3+"s "+n.easing+" "+t/1e3+"s, opacity "+n.duration/1e3+"s "+n.easing+" "+t/1e3+"s; "}function a(e){var t,n=e.config,i=e.styles.transform;t="top"===n.origin||"left"===n.origin?/^-/.test(n.distance)?n.distance.substr(1):"-"+n.distance:n.distance,parseInt(n.distance)&&(i.initial+=" translate"+n.axis+"("+t+")",i.target+=" translate"+n.axis+"(0)"),n.scale&&(i.initial+=" scale("+n.scale+")",i.target+=" scale(1)"),n.rotate.x&&(i.initial+=" rotateX("+n.rotate.x+"deg)",i.target+=" rotateX(0)"),n.rotate.y&&(i.initial+=" rotateY("+n.rotate.y+"deg)",i.target+=" rotateY(0)"),n.rotate.z&&(i.initial+=" rotateZ("+n.rotate.z+"deg)",i.target+=" rotateZ(0)"),i.initial+="; opacity: "+n.opacity+";",i.target+="; opacity: "+e.styles.computed.opacity+";"}function l(e){var t=e.config.container;t&&O.store.containers.indexOf(t)===-1&&O.store.containers.push(e.config.container),O.store.elements[e.id]=e}function c(e,t,n){var i={target:e,config:t,interval:n};O.history.push(i)}function f(){if(O.isSupported()){y();for(var e=0;e<O.store.containers.length;e++)O.store.containers[e].addEventListener("scroll",d),O.store.containers[e].addEventListener("resize",d);O.initialized||(window.addEventListener("scroll",d),window.addEventListener("resize",d),O.initialized=!0)}return O}function d(){T(y)}function u(){var e,t,n,i;O.tools.forOwn(O.sequences,function(o){i=O.sequences[o],e=!1;for(var r=0;r<i.elemIds.length;r++)n=i.elemIds[r],t=O.store.elements[n],q(t)&&!e&&(e=!0);i.active=e})}function y(){var e,t;u(),O.tools.forOwn(O.store.elements,function(n){t=O.store.elements[n],e=w(t),g(t)?(t.config.beforeReveal(t.domEl),e?t.domEl.setAttribute("style",t.styles.inline+t.styles.transform.target+t.styles.transition.delayed):t.domEl.setAttribute("style",t.styles.inline+t.styles.transform.target+t.styles.transition.instant),p("reveal",t,e),t.revealing=!0,t.seen=!0,t.sequence&&m(t,e)):v(t)&&(t.config.beforeReset(t.domEl),t.domEl.setAttribute("style",t.styles.inline+t.styles.transform.initial+t.styles.transition.instant),p("reset",t),t.revealing=!1)})}function m(e,t){var n=0,i=0,o=O.sequences[e.sequence.id];o.blocked=!0,t&&"onload"===e.config.useDelay&&(i=e.config.delay),e.sequence.timer&&(n=Math.abs(e.sequence.timer.started-new Date),window.clearTimeout(e.sequence.timer)),e.sequence.timer={started:new Date},e.sequence.timer.clock=window.setTimeout(function(){o.blocked=!1,e.sequence.timer=null,d()},Math.abs(o.interval)+i-n)}function p(e,t,n){var i=0,o=0,r="after";switch(e){case"reveal":o=t.config.duration,n&&(o+=t.config.delay),r+="Reveal";break;case"reset":o=t.config.duration,r+="Reset"}t.timer&&(i=Math.abs(t.timer.started-new Date),window.clearTimeout(t.timer.clock)),t.timer={started:new Date},t.timer.clock=window.setTimeout(function(){t.config[r](t.domEl),t.timer=null},o-i)}function g(e){if(e.sequence){var t=O.sequences[e.sequence.id];return t.active&&!t.blocked&&!e.revealing&&!e.disabled}return q(e)&&!e.revealing&&!e.disabled}function w(e){var t=e.config.useDelay;return"always"===t||"onload"===t&&!O.initialized||"once"===t&&!e.seen}function v(e){if(e.sequence){var t=O.sequences[e.sequence.id];return!t.active&&e.config.reset&&e.revealing&&!e.disabled}return!q(e)&&e.config.reset&&e.revealing&&!e.disabled}function b(e){return{width:e.clientWidth,height:e.clientHeight}}function h(e){if(e&&e!==window.document.documentElement){var t=x(e);return{x:e.scrollLeft+t.left,y:e.scrollTop+t.top}}return{x:window.pageXOffset,y:window.pageYOffset}}function x(e){var t=0,n=0,i=e.offsetHeight,o=e.offsetWidth;do isNaN(e.offsetTop)||(t+=e.offsetTop),isNaN(e.offsetLeft)||(n+=e.offsetLeft),e=e.offsetParent;while(e);return{top:t,left:n,height:i,width:o}}function q(e){function t(){var t=c+a*s,n=f+l*s,i=d-a*s,y=u-l*s,m=r.y+e.config.viewOffset.top,p=r.x+e.config.viewOffset.left,g=r.y-e.config.viewOffset.bottom+o.height,w=r.x-e.config.viewOffset.right+o.width;return t<g&&i>m&&n>p&&y<w}function n(){return"fixed"===window.getComputedStyle(e.domEl).position}var i=x(e.domEl),o=b(e.config.container),r=h(e.config.container),s=e.config.viewFactor,a=i.height,l=i.width,c=i.top,f=i.left,d=c+a,u=f+l;return t()||n()}function E(){}var O,T;e.prototype.defaults={origin:"bottom",distance:"20px",duration:500,delay:0,rotate:{x:0,y:0,z:0},opacity:0,scale:.9,easing:"cubic-bezier(0.6, 0.2, 0.1, 1)",container:window.document.documentElement,mobile:!0,reset:!1,useDelay:"always",viewFactor:.2,viewOffset:{top:0,right:0,bottom:0,left:0},beforeReveal:function(e){},afterReveal:function(e){},beforeReset:function(e){},afterReset:function(e){}},e.prototype.isSupported=function(){var e=document.documentElement.style;return"WebkitTransition"in e&&"WebkitTransform"in e||"transition"in e&&"transform"in e},e.prototype.reveal=function(e,s,a,d){var u,y,m,p,g,w;if(void 0!==s&&"number"==typeof s?(a=s,s={}):void 0!==s&&null!==s||(s={}),u=t(s),y=n(e,u),!y.length)return O;a&&"number"==typeof a&&(w=i(),g=O.sequences[w]={id:w,interval:a,elemIds:[],active:!1});for(var v=0;v<y.length;v++)p=y[v].getAttribute("data-sr-id"),p?m=O.store.elements[p]:(m={id:i(),domEl:y[v],seen:!1,revealing:!1},m.domEl.setAttribute("data-sr-id",m.id)),g&&(m.sequence={id:g.id,index:g.elemIds.length},g.elemIds.push(m.id)),o(m,s,u),r(m),l(m),O.tools.isMobile()&&!m.config.mobile||!O.isSupported()?(m.domEl.setAttribute("style",m.styles.inline),m.disabled=!0):m.revealing||m.domEl.setAttribute("style",m.styles.inline+m.styles.transform.initial);return!d&&O.isSupported()&&(c(e,s,a),O.initTimeout&&window.clearTimeout(O.initTimeout),O.initTimeout=window.setTimeout(f,0)),O},e.prototype.sync=function(){if(O.history.length&&O.isSupported()){for(var e=0;e<O.history.length;e++){var t=O.history[e];O.reveal(t.target,t.config,t.interval,!0)}f()}return O},E.prototype.isObject=function(e){return null!==e&&"object"==typeof e&&e.constructor===Object},E.prototype.isNode=function(e){return"object"==typeof window.Node?e instanceof window.Node:e&&"object"==typeof e&&"number"==typeof e.nodeType&&"string"==typeof e.nodeName},E.prototype.isNodeList=function(e){var t=Object.prototype.toString.call(e),n=/^\[object (HTMLCollection|NodeList|Object)\]$/;return"object"==typeof window.NodeList?e instanceof window.NodeList:e&&"object"==typeof e&&n.test(t)&&"number"==typeof e.length&&(0===e.length||this.isNode(e[0]))},E.prototype.forOwn=function(e,t){if(!this.isObject(e))throw new TypeError('Expected "object", but received "'+typeof e+'".');for(var n in e)e.hasOwnProperty(n)&&t(n)},E.prototype.extend=function(e,t){return this.forOwn(t,function(n){this.isObject(t[n])?(e[n]&&this.isObject(e[n])||(e[n]={}),this.extend(e[n],t[n])):e[n]=t[n]}.bind(this)),e},E.prototype.extendClone=function(e,t){return this.extend(this.extend({},e),t)},E.prototype.isMobile=function(){return/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)},T=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||function(e){window.setTimeout(e,1e3/60)},"function"==typeof define&&"object"==typeof define.amd&&define.amd?define(function(){return e}):"undefined"!=typeof module&&module.exports?module.exports=e:window.ScrollReveal=e}();
// JavaScript Document
//--------------------------------------------------------------------------------
// Andy
//--------------------------------------------------------------------------------
"use strict";
var clickEventListners = [];
var unclickEventListeners = [];

/**
 * For complex click behavior, register click handler
 *
 * Don't use this
 *
 * @param string  selector
 * @param functor handler
 */
function registerClickEvent(selector, handler) {
	clickEventListners.push({selector:selector, handler:handler});
}

/**
 * For complex click behavior, register unclick handler
 *
 * Unclick handler will be called when the no click target and its parents match the selector
 *
 * @param string  selector
 * @param functor handler
 */
function registerUnclickEvent(selector, handler) {
    unclickEventListeners.push({selector:selector, handler:handler});
}

/**
 * Global click event handler for complex behavior
 */
$(document).ready(function() {
    $(document).click(function(event) {
    	var target = $(event.target);
        var candidates = target.parents();
        candidates.push(target[0]);
  	    for (var i = 0; i < unclickEventListeners.length; ++i) {
            if (candidates.filter(unclickEventListeners[i].selector).length === 0)
                unclickEventListeners[i].handler(target);
        }
    });
});


/**
 * Quiz size adjustment
 */
function scaleQuiz() {
	// SPA pages does not need these workaround stuff
	if (typeof app === 'undefined' || app.$store.state.container.isSpa)
		return;

	var Gww = $(window).width(), Gwh = $(window).height();
	var contentPad_H = Gwh;
	    if ($('#header').length)
			contentPad_H -= $('#header').height()
		if ($('#categoryMenu').length)
			contentPad_H -= $('#categoryMenu').height() - 1; // workaround floating point
    if (Gww <= 768) {
        $('.height_R').css({'min-height': Gwh});
        $('.height_R2').css({'min-height': contentPad_H});
    } else {
        $('.height_R').css({'min-height': '1px'});
        $('.height_R2').css({'min-height': '1px'});
	}
};


//--------------------------------------------------------------------------------
// CaGe Wei
//--------------------------------------------------------------------------------
$(window).on('load', function() {
	var Gw = $(window), Gww = Gw.width(), Gwh = Gw.height(), Gd = $(document), Gdw = Gd.width(), Gdh = Gd.height();
});

$(document).ready(function(){
    //--------------------------------------------------------------
    // Main/sub menus toolbars
    //--------------------------------------------------------------
	var Gw = $(window), Gww = Gw.width(), Gwh = Gw.height(), Gd = $(document), Gdw = Gd.width(), Gdh = Gd.height(),
		mainH = $('#main').height(), contentPad_H = Gwh - $('#header').height(), documentAll_H = contentPad_H - $('#footer').height(),
		navMenuHeight = contentPad_H/* - 45*/;

	if (Gww <= 768) {
        $('.height_FR2').css({'min-height':contentPad_H});  // signup.php
	}
	if (Gww > 768) {
		// 聊天 notifications
		$('#menu_chat').click(function(){
            $('#chatlistPad').fadeToggle();
		});
		registerUnclickEvent('#menu_chat', function() { if ($('#chatlistPad').is(":visible")) $('#chatlistPad').fadeOut(); });

		// 訊息 notifications
		$('#menu_mesg').click(function(){
            $('#noticelistPad').fadeToggle();
		});
        registerUnclickEvent('#menu_mesg', function() { if ($('#noticelistPad').is(":visible")) $('#noticelistPad').fadeOut(); });
	}


    //---------------------------------------------------------------------------------------
    // Non-layout related
    //---------------------------------------------------------------------------------------

    //--------------------------------------------------------------
    // Chat
    //--------------------------------------------------------------
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

	var $autoNextInput = $('.ansType_inputNumber').find('input');
	$autoNextInput.keyup(function(){
		var _nowLength = $(this).val().length.toString();
		if(_nowLength === $(this).attr('maxlength')){
			$(this).next('input').focus();
		}
	});

	// ======= AT CaGe Wei Basic ====== //
	// back Top
	$('.backTop').click(function(){$('html,body').animate({scrollTop:$('body').offset().top});});

	// LightBox
	$('#popContainer').hide();
	$('.btn_openPop').click(function(){
		$('#popContainer').fadeIn();
	});
	$('.btn_closePop').click(function(){$('#popContainer').fadeOut();});
	$('#popContainer').prepend('<div class="before"></div>');
	$('#popContainer > .before').click(function(){$('#popContainer').fadeOut();});

	// SPA pages does not need these workaround stuff
	if (typeof app === 'undefined' || app.$store.state.container.isSpa)
		return;

	scaleQuiz();

    //--------------------------------------------------------------
	// Surveys
	//
	// Only register quiz page need this
	//--------------------------------------------------------------
	if ($('body').hasClass('testing_pairs')) {
		var $nextTest = $('.ctrlPad').find('.next');
		var $prevTest = $('.ctrlPad').find('.prev');
		$nextTest.click(function(){
			var $Gfath = $(this).parents('.pageGroup'),
				$ind = $(this).parents('.page').index(),
				$uncle = $Gfath.find('.page');
			$uncle.eq($ind).fadeOut(300, function() {$uncle.eq($ind+1).fadeIn(0);});
		});
		$prevTest.click(function(){
			var $Gfath = $(this).parents('.pageGroup'),
				$ind = $(this).parents('.page').index(),
				$uncle = $Gfath.find('.page');
			$uncle.eq($ind).fadeOut(300, function() {$uncle.eq($ind-1).fadeIn(0);});
		});
	}
});


//backTop button
$(window).scroll(function(){
	var Gw = $(window), Gwh = Gw.height(),
		Gd = $(document), Gdh =Gd.height(),
		_nowHeight = $(window).scrollTop();

	if (_nowHeight >= Gwh / 2) {$('.backTop').stop().animate({opacity:1});}else{$('.backTop').stop().animate({opacity:0});}
	//
	if (_nowHeight < Gdh / 4) {$('.p').stop().animate({backgroundColor:'#000000'});
	}else if (_nowHeight >= Gdh / 4 && _nowHeight < Gdh / 3 ) {$('.p').stop().animate({backgroundColor:'#f18c8c'});
	}else if(_nowHeight >= Gdh / 3 && _nowHeight < Gdh / 2) {$('.p').stop().animate({backgroundColor:'rgb(156,230,50)'});
	}else if(_nowHeight >= Gdh / 2 && _nowHeight < Gdh) {$('.p').stop().animate({backgroundColor:'#58f4e7'});
	}
});

$(window).resize(function(){
    scaleQuiz();
});

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



// 企業名單 輪播 新
var clientSlider = document.getElementById('clientSlider'),
  clientSliderItems = document.getElementById('clientSlides'),
  clientprev = document.getElementById('clientprev'),
  clientnext = document.getElementById('clientnext');

// 使用者體驗 輪播 新
var userSlider = document.getElementById('userSlider'),
  userSliderItems = document.getElementById('userSlides'),
  userprev = document.getElementById('userprev'),
  usernext = document.getElementById('usernext');

// 企業名單
slide_client(clientSlider, clientSliderItems, clientprev, clientnext);

// 使用者體驗
slide_user(userSlider, userSliderItems, userprev, usernext);

function slide_client(wrapper, items, prev, next) {
  var
    posX1 = 0,
    posX2 = 0,
    posStart,
    posInitial,
    posFinal,
    slides = items.getElementsByClassName('slide'),
    slidesLength = slides.length,
    slideSize = items.getElementsByClassName('slide')[0].offsetWidth,
    firstSlide = slides[0],
    lastSlide = slides[slidesLength - 1], // 取得最後一個要用 "全部長度 - 1" 
    cloneFirst = firstSlide.cloneNode(true), // 複製第一個
    cloneLast = lastSlide.cloneNode(true), // 複製最後一個
    index = 0,
    threshold = slideSize / 4, // 手指滑動到slide尺寸的1/4寬度，就會到下一個slide
    allowShift = true;

  console.log(threshold);

  // 複製第一個和最後一個 slide 到 DOM 中
  items.appendChild(cloneFirst); // 把複製的第一個slide，放到 #clientSlides 的內部最後面
  items.insertBefore(cloneLast, firstSlide); // 把複製的最後一個slide，放到 #clientSlides 的內部指定的子元件(firstSlide) 的前面

  wrapper.classList.add('loaded');

  // 電腦版 - mouse events (判斷滑鼠是否開啟左右滑動)
  // items.onmousedown = dragStart;

  // 手機版 - 手指觸碰 touch events
  if (window.innerWidth < 1025) {
    items.addEventListener('touchstart', dragStart);
    items.addEventListener('touchend', dragEnd);
    items.addEventListener('touchmove', dragAction);
  }

  // 左右鍵 - Click events
  prev.addEventListener('click', function () {
    shiftSlide(-1)
  });
  next.addEventListener('click', function () {
    shiftSlide(1)
  });

  function dragStart(e) {
    e = e || window.event;
    // e.preventDefault();
    posInitial = items.offsetLeft;

    if (e.type == 'touchstart') {
      posX1 = e.touches[0].clientX;
    } else {
      posX1 = e.clientX;
      document.onmouseup = dragEnd;
      document.onmousemove = dragAction;
    }
  }

  function dragAction(e) {
    e = e || window.event;
    if (e.type == 'touchmove') {
      posX2 = e.touches[0].clientX;
    } else {
      posX2 = e.clientX;
    }
  }

  function dragEnd(e) {

    items.classList.add('dragEnd');
    // 手指開始碰到的位置
    posStart = posX1

    // 手指最後離開的位置
    posFinal = e.changedTouches[0].clientX;

    // 如果 離開的位置 - 開始的位置 < -偏移
    if (posFinal - posStart < -threshold) {
      shiftSlide(1, 'drag');
    } else if (posFinal - posStart > threshold) {
      shiftSlide(-1, 'drag');
    } else {
      items.style.left = (posInitial) + "px";
    }

    document.onmouseup = null;
    document.onmousemove = null;

  }

  function shiftSlide(dir, action) {
    items.classList.add('shifting');
    if (allowShift) {
      if (!action) {
        posInitial = items.offsetLeft;
      }

      if (dir == 1) {
        items.style.left = (posInitial - slideSize) + "px";
        index++;
      } else if (dir == -1) {
        items.style.left = (posInitial + slideSize) + "px";
        index--;
      }
    };
    allowShift = false;
  }

  // css Transition 動作結束後要執行的函式 
  items.addEventListener('transitionend', checkIndex);

  function checkIndex() {
    items.classList.remove('shifting');
    items.classList.remove('dragEnd');
    if (index == -1) {
      items.style.left = -(slidesLength * slideSize) + "px";
      index = slidesLength - 1;
    }
    if (index == slidesLength) {
      items.style.left = -(1 * slideSize) + "px";
      index = 0;
    }
    allowShift = true;
  }
}

function slide_user(wrapper, items, prev, next) {
  var
    posX1 = 0,
    posX2 = 0,
    posStart,
    posInitial,
    posFinal,
    slides = items.getElementsByClassName('slide'),
    slidesLength = slides.length,
    slideSize = items.getElementsByClassName('slide')[0].offsetWidth,
    firstSlide = slides[0],
    lastSlide = slides[slidesLength - 1], // 取得最後一個要用 "全部長度 - 1" 
    cloneFirst = firstSlide.cloneNode(true), // 複製第一個
    cloneLast = lastSlide.cloneNode(true), // 複製最後一個
    index = 0,
    threshold = slideSize / 6, // 手指滑動到slide尺寸的1/6寬度，就會到下一個slide
    allowShift = true;

  console.log(threshold);

  // 複製第一個和最後一個 slide 到 DOM 中
  items.appendChild(cloneFirst); // 把複製的第一個slide，放到 #clientSlides 的內部最後面
  items.insertBefore(cloneLast, firstSlide); // 把複製的最後一個slide，放到 #clientSlides 的內部指定的子元件(firstSlide) 的前面

  wrapper.classList.add('loaded');

  // 電腦版 - mouse events (判斷滑鼠是否開啟左右滑動)
  // items.onmousedown = dragStart;

  // 手機版 - 手指觸碰 touch events
  if (window.innerWidth < 1025) {
    items.addEventListener('touchstart', dragStart);
    items.addEventListener('touchend', dragEnd);
    items.addEventListener('touchmove', dragAction);
  }

  // 左右鍵 - Click events
  prev.addEventListener('click', function () {
    shiftSlide(-1)
  });
  next.addEventListener('click', function () {
    shiftSlide(1)
  });

  function dragStart(e) {
    e = e || window.event;
    // e.preventDefault();
    posInitial = items.offsetLeft;

    if (e.type == 'touchstart') {
      posX1 = e.touches[0].clientX;
    } else {
      posX1 = e.clientX;
      document.onmouseup = dragEnd;
      document.onmousemove = dragAction;
    }
  }

  function dragAction(e) {
    e = e || window.event;
    if (e.type == 'touchmove') {
      posX2 = e.touches[0].clientX;
    } else {
      posX2 = e.clientX;
    }
  }

  function dragEnd(e) {

    items.classList.add('dragEnd');
    // 手指開始碰到的位置
    posStart = posX1

    // 手指最後離開的位置
    posFinal = e.changedTouches[0].clientX;

    // 如果 離開的位置 - 開始的位置 < -偏移
    if (posFinal - posStart < -threshold) {
      shiftSlide(1, 'drag');
    } else if (posFinal - posStart > threshold) {
      shiftSlide(-1, 'drag');
    } else {
      items.style.left = (posInitial) + "px";
    }

    document.onmouseup = null;
    document.onmousemove = null;

  }

  function shiftSlide(dir, action) {
    items.classList.add('shifting');
    if (allowShift) {
      if (!action) {
        posInitial = items.offsetLeft;
      }

      if (dir == 1) {
        items.style.left = (posInitial - slideSize) + "px";
        index++;
      } else if (dir == -1) {
        items.style.left = (posInitial + slideSize) + "px";
        index--;
      }
    };
    allowShift = false;
  }

  // css Transition 動作結束後要執行的函式 
  items.addEventListener('transitionend', checkIndex);

  function checkIndex() {
    items.classList.remove('shifting');
    items.classList.remove('dragEnd');
    if (index == -1) {
      items.style.left = -(slidesLength * slideSize) + "px";
      index = slidesLength - 1;
    }
    if (index == slidesLength) {
      items.style.left = -(1 * slideSize) + "px";
      index = 0;
    }
    allowShift = true;
  }
}

// end *------------------



// 影片 light box
const btnLightbox = $('.btnLightbox');
const lightboxTarget = $('.lightboxTarget');
const lightboxClose = $('.lightboxClose');

btnLightbox.click(function () {
  lightboxTarget.addClass('show');
  btnLightbox.addClass('active');
});

lightboxClose.click(function () {
  lightboxTarget.removeClass('show');
  btnLightbox.removeClass('active');
});
// end *------------------

// countUp jquery
jQuery(document).ready(function ($) {
  $('.counter').each(function () {
    const $this = $(this),
      countTo = $this.attr('data-count');
    $({
      countNum: $this.text()
    }).animate({
      countNum: countTo
    }, {
      duration: 8000,
      easing: 'linear',
      step: function () {
        $this.text(addCommas(Math.floor(this.countNum)));
      },
      complete: function () {
        $this.text(addCommas(this.countNum));
        // console.log('finished')
      }
    });

    function addCommas(nStr) {
      return nStr.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
    }
  });
});
// end *------------------