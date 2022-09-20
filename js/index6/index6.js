"use strict";

// 1920px ＆ 767px 電腦版輪播 *------------------

// 21對成功案例 輪播 - 1920px 電腦版
let success_laptop_Slider = document.getElementById('success_laptop_Slider'),
  success_laptop_SliderItems = document.getElementById('success_laptop_Slides'),
  success_laptop_prev = document.getElementById('success_laptop_prev'),
  success_laptop_next = document.getElementById('success_laptop_next'),
  success_laptop_SlidesLi = document.querySelectorAll("#success_laptop_Slides .slide .lists > ul > li"),
  success_laptop_Dots = document.querySelector("#success_laptop_Slider .dotsList");
slider(success_laptop_Slider, success_laptop_SliderItems, success_laptop_prev, success_laptop_next, success_laptop_SlidesLi, success_laptop_Dots);
// end 21對成功案例 輪播 - 1920px 電腦版

// 21個見面後的感想 輪播 - 1920px 電腦版
let feedback_laptop_Slider = document.getElementById('feedback_laptop_Slider'),
  feedback_laptop_SliderItems = document.getElementById('feedback_laptop_Slides'),
  feedback_laptop_prev = document.getElementById('feedback_laptop_prev'),
  feedback_laptop_next = document.getElementById('feedback_laptop_next'),
  feedback_laptop_SlidesLi = document.querySelectorAll("#feedback_laptop_Slides .slide .lists > ul > li"),
  feedback_laptop_Dots = document.querySelector("#feedback_laptop_Slider .dotsList");
slider(feedback_laptop_Slider, feedback_laptop_SliderItems, feedback_laptop_prev, feedback_laptop_next, feedback_laptop_SlidesLi, feedback_laptop_Dots);
// end 21個見面後的感想 輪播 - 1920px 電腦版

// 21對成功案例 輪播 - 767px 手機版
let success_mobile_Slider = document.getElementById('success_mobile_Slider'),
  success_mobile_SliderItems = document.getElementById('success_mobile_Slides'),
  success_mobile_prev = document.getElementById('success_mobile_prev'),
  success_mobile_next = document.getElementById('success_mobile_next'),
  success_mobile_SlidesLi = document.querySelectorAll("#success_mobile_Slides .slide .lists > ul > li"),
  success_mobile_Dots = document.querySelector("#success_mobile_Slider .dotsList");
slider(success_mobile_Slider, success_mobile_SliderItems, success_mobile_prev, success_mobile_next, success_mobile_SlidesLi, success_mobile_Dots);
// end 21對成功案例 輪播 - 767px 手機版

// 21個見面後的感想 輪播 - 767px 手機版
let feedback_mobile_Slider = document.getElementById('feedback_mobile_Slider'),
  feedback_mobile_SliderItems = document.getElementById('feedback_mobile_Slides'),
  feedback_mobile_prev = document.getElementById('feedback_mobile_prev'),
  feedback_mobile_next = document.getElementById('feedback_mobile_next'),
  feedback_mobile_SlidesLi = document.querySelectorAll("#feedback_mobile_Slides .slide .lists > ul > li"),
  feedback_mobile_Dots = document.querySelector("#feedback_mobile_Slider .dotsList");
slider(feedback_mobile_Slider, feedback_mobile_SliderItems, feedback_mobile_prev, feedback_mobile_next, feedback_mobile_SlidesLi, feedback_mobile_Dots);
// end 21個見面後的感想 輪播 - 767px 手機版

function slider(wrapper, items, prev, next, slidesLi, dots) {
  let
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
    allowShift = true,
    dotLi = dots.getElementsByTagName("li");

  // dots
  let num = ""
  for (let i = 0; i < slidesLi.length; i++) {
    num += `<li><i></i></li>`
  }
  dots.innerHTML = num;

  if (window.innerWidth >= 768) {
    for (let i = 0; i <= 2; i++) {
      dotLi[i].classList.add("active")
    }
  } else {
    dotLi[0].classList.add("active")
  }
  // end dots

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

      // dots
      if (window.innerWidth >= 768) {
        if (index == 0 || index == 7) {
          for (let i = 0; i < dotLi.length; i++) {
            for (let j = 0; j <= 2; j++) {
              dotLi[j].classList.add("active")
            }
            dotLi[i].classList.remove("active")
          }
        }

        if (index == 1) {
          for (let i = 0; i < dotLi.length; i++) {
            for (let j = 3; j <= 5; j++) {
              dotLi[j].classList.add("active")
            }
            dotLi[i].classList.remove("active")
          }
        }

        if (index == 2) {
          for (let i = 0; i < dotLi.length; i++) {
            for (let j = 6; j <= 8; j++) {
              dotLi[j].classList.add("active")
            }
            dotLi[i].classList.remove("active")
          }
        }

        if (index == 3) {
          for (let i = 0; i < dotLi.length; i++) {
            for (let j = 9; j <= 11; j++) {
              dotLi[j].classList.add("active")
            }
            dotLi[i].classList.remove("active")
          }
        }

        if (index == 4) {
          for (let i = 0; i < dotLi.length; i++) {
            for (let j = 12; j <= 14; j++) {
              dotLi[j].classList.add("active")
            }
            dotLi[i].classList.remove("active")
          }
        }

        if (index == 5) {
          for (let i = 0; i < dotLi.length; i++) {
            for (let j = 15; j <= 17; j++) {
              dotLi[j].classList.add("active")
            }
            dotLi[i].classList.remove("active")
          }
        }

        if (index == 6 || index == -1) {
          for (let i = 0; i < dotLi.length; i++) {
            for (let j = 18; j <= 20; j++) {
              dotLi[j].classList.add("active")
            }
            dotLi[i].classList.remove("active")
            dotLi[20].classList.add("active")
          }
        }
      } else {
        if (index == 0 || index == 21) {
          for (let i = 0; i < dotLi.length; i++) {
            dotLi[0].classList.add("active")
            dotLi[i].classList.remove("active")
          }
        }
        if (index == 1) {
          for (let i = 0; i < dotLi.length; i++) {
            dotLi[1].classList.add("active")
            dotLi[i].classList.remove("active")
          }
        }
        if (index == 2) {
          for (let i = 0; i < dotLi.length; i++) {
            dotLi[2].classList.add("active")
            dotLi[i].classList.remove("active")
          }
        }
        if (index == 3) {
          for (let i = 0; i < dotLi.length; i++) {
            dotLi[3].classList.add("active")
            dotLi[i].classList.remove("active")
          }
        }
        if (index == 4) {
          for (let i = 0; i < dotLi.length; i++) {
            dotLi[4].classList.add("active")
            dotLi[i].classList.remove("active")
          }
        }
        if (index == 5) {
          for (let i = 0; i < dotLi.length; i++) {
            dotLi[5].classList.add("active")
            dotLi[i].classList.remove("active")
          }
        }
        if (index == 6) {
          for (let i = 0; i < dotLi.length; i++) {
            dotLi[6].classList.add("active")
            dotLi[i].classList.remove("active")
          }
        }
        if (index == 7) {
          for (let i = 0; i < dotLi.length; i++) {
            dotLi[7].classList.add("active")
            dotLi[i].classList.remove("active")
          }
        }
        if (index == 8) {
          for (let i = 0; i < dotLi.length; i++) {
            dotLi[8].classList.add("active")
            dotLi[i].classList.remove("active")
          }
        }
        if (index == 9) {
          for (let i = 0; i < dotLi.length; i++) {
            dotLi[9].classList.add("active")
            dotLi[i].classList.remove("active")
          }
        }
        if (index == 10) {
          for (let i = 0; i < dotLi.length; i++) {
            dotLi[10].classList.add("active")
            dotLi[i].classList.remove("active")
          }
        }
        if (index == 11) {
          for (let i = 0; i < dotLi.length; i++) {
            dotLi[11].classList.add("active")
            dotLi[i].classList.remove("active")
          }
        }
        if (index == 12) {
          for (let i = 0; i < dotLi.length; i++) {
            dotLi[12].classList.add("active")
            dotLi[i].classList.remove("active")
          }
        }
        if (index == 13) {
          for (let i = 0; i < dotLi.length; i++) {
            dotLi[13].classList.add("active")
            dotLi[i].classList.remove("active")
          }
        }
        if (index == 14) {
          for (let i = 0; i < dotLi.length; i++) {
            dotLi[14].classList.add("active")
            dotLi[i].classList.remove("active")
          }
        }
        if (index == 15) {
          for (let i = 0; i < dotLi.length; i++) {
            dotLi[15].classList.add("active")
            dotLi[i].classList.remove("active")
          }
        }
        if (index == 16) {
          for (let i = 0; i < dotLi.length; i++) {
            dotLi[16].classList.add("active")
            dotLi[i].classList.remove("active")
          }
        }
        if (index == 17) {
          for (let i = 0; i < dotLi.length; i++) {
            dotLi[17].classList.add("active")
            dotLi[i].classList.remove("active")
          }
        }
        if (index == 18) {
          for (let i = 0; i < dotLi.length; i++) {
            dotLi[18].classList.add("active")
            dotLi[i].classList.remove("active")
          }
        }
        if (index == 19) {
          for (let i = 0; i < dotLi.length; i++) {
            dotLi[19].classList.add("active")
            dotLi[i].classList.remove("active")
          }
        }
        if (index == 20 || index == -1) {
          for (let i = 0; i < dotLi.length; i++) {
            dotLi[i].classList.remove("active")
            dotLi[20].classList.add("active")
          }
        }
      }
      // end dots

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
// end 1920px ＆ 767px 筆電＆手機版輪播 *------------------


// 影片 light box 點開自動播放，關閉暫定 *------------------
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

let video_1 = document.querySelector("#video-1")
let video_1_btnLightbox = video_1.querySelector(".btnLightbox")
let video_1_lightboxTarget = video_1.querySelector(".lightboxTarget")
let video_1_lightboxClose = video_1.querySelector(".lightboxClose")
let video_1_lightboxBlock = video_1.querySelector(".videoLightboxBlock")

let video_2 = document.querySelector("#video-2")
let video_2_btnLightbox = video_2.querySelector(".btnLightbox")
let video_2_lightboxTarget = video_2.querySelector(".lightboxTarget")
let video_2_lightboxClose = video_2.querySelector(".lightboxClose")
let video_2_lightboxBlock = video_2.querySelector(".videoLightboxBlock")

let video_3 = document.querySelector("#video-3")
let video_3_btnLightbox = video_3.querySelector(".btnLightbox")
let video_3_lightboxTarget = video_3.querySelector(".lightboxTarget")
let video_3_lightboxClose = video_3.querySelector(".lightboxClose")
let video_3_lightboxBlock = video_3.querySelector(".videoLightboxBlock")

// 判斷當前裝置
let ua = navigator.userAgent;
let android = ua.indexOf('Android') > -1 || ua.indexOf('Adr') > -1; // android
let iOS = !!ua.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); // ios

function onYouTubeIframeAPIReady() {

  var player_1;
  var player_2;
  var player_3;

  player_1 = new YT.Player('video_iframe_1', {
    videoId: 'GQe7YHqGe8c',
    width: '400',
    height: '400',
    playerVars: {
      autoplay: 0, // 自動播放影片
      controls: 1, // 顯示播放器
      showinfo: 0, // 隱藏影片標題
      modestbranding: 1, // 隱藏YouTube Logo
      loop: 0, // 重覆播放
      fs: 0, // 隱藏全螢幕按鈕
      cc_load_policty: 0, // 隱藏字幕
      iv_load_policy: 3, // 隱藏影片註解
      autohide: 0, // 影片播放時，隱藏影片控制列
    },
    events: {
      onReady: function (e) {
        // e.target.mute();      //播放時靜音
        // e.target.playVideo(); //強制播放(手機才會自動播放，但僅限於Android)
      }
    }
  });
  player_2 = new YT.Player('video_iframe_2', {
    videoId: '18CY5D4Kif8',
    width: '400',
    height: '400',
    playerVars: {
      autoplay: 0, // 自動播放影片
      controls: 1, // 顯示播放器
      showinfo: 0, // 隱藏影片標題
      modestbranding: 1, // 隱藏YouTube Logo
      loop: 0, // 重覆播放
      fs: 0, // 隱藏全螢幕按鈕
      cc_load_policty: 0, // 隱藏字幕
      iv_load_policy: 3, // 隱藏影片註解
      autohide: 0, // 影片播放時，隱藏影片控制列
    },
    events: {
      onReady: function (e) {
        // e.target.mute();      //播放時靜音
        // e.target.playVideo(); //強制播放(手機才會自動播放，但僅限於Android)
      }
    }
  });
  player_3 = new YT.Player('video_iframe_3', {
    videoId: '18CY5D4Kif8',
    width: '400',
    height: '400',
    playerVars: {
      autoplay: 0, // 自動播放影片
      controls: 1, // 顯示播放器
      showinfo: 0, // 隱藏影片標題
      modestbranding: 1, // 隱藏YouTube Logo
      loop: 0, // 重覆播放
      fs: 0, // 隱藏全螢幕按鈕
      cc_load_policty: 0, // 隱藏字幕
      iv_load_policy: 3, // 隱藏影片註解
      autohide: 0, // 影片播放時，隱藏影片控制列
    },
    events: {
      onReady: function (e) {
        // e.target.mute();      //播放時靜音
        // e.target.playVideo(); //強制播放(手機才會自動播放，但僅限於Android)
      }
    }
  });

  video_1_btnLightbox.addEventListener("click", function () {
    player_1.playVideo();
    video_1_lightboxTarget.classList.add('show');
    if (android == true) {
      video_1_lightboxTarget.classList.remove('show');
    }
    video_1_btnLightbox.classList.add('active');
    document.querySelector("body").classList.add('open_lightbox');
    openVideo_phoneSystem(video_1_lightboxBlock, video_1_lightboxTarget);
  });
  video_1_lightboxClose.addEventListener("click", function () {
    player_1.pauseVideo();
    video_1_lightboxTarget.classList.remove('show');
    video_1_btnLightbox.classList.remove('active');
    document.querySelector("body").classList.remove('open_lightbox');
    closeVideo_phoneSystem();
  });

  video_2_btnLightbox.addEventListener("click", function () {
    player_2.playVideo();
    video_2_lightboxTarget.classList.add('show');
    if (android == true) {
      video_2_lightboxTarget.classList.remove('show');
    }
    video_2_btnLightbox.classList.add('active');
    document.querySelector("body").classList.add('open_lightbox');
    openVideo_phoneSystem(video_2_lightboxBlock, video_2_lightboxTarget);
  });
  video_2_lightboxClose.addEventListener("click", function () {
    player_2.pauseVideo();
    video_2_lightboxTarget.classList.remove('show');
    video_2_btnLightbox.classList.remove('active');
    document.querySelector("body").classList.remove('open_lightbox');
    closeVideo_phoneSystem();
  });

  video_3_btnLightbox.addEventListener("click", function () {
    player_3.playVideo();
    video_3_lightboxTarget.classList.add('show');
    if (android == true) {
      video_3_lightboxTarget.classList.remove('show');
    }
    video_3_btnLightbox.classList.add('active');
    document.querySelector("body").classList.add('open_lightbox');
    openVideo_phoneSystem(video_3_lightboxBlock, video_3_lightboxTarget);
  });
  video_3_lightboxClose.addEventListener("click", function () {
    player_3.pauseVideo();
    video_3_lightboxTarget.classList.remove('show');
    video_3_btnLightbox.classList.remove('active');
    document.querySelector("body").classList.remove('open_lightbox');
    closeVideo_phoneSystem();
  });
}

// 開啟全螢幕
var requestFullscreen = function (ele) {
  if (ele.requestFullscreen) {
    ele.requestFullscreen({ navigationUI: 'hide' });
  } else if (ele.webkitRequestFullscreen) {
    ele.webkitRequestFullscreen({ navigationUI: 'hide' });
  } else if (ele.mozRequestFullScreen) {
    ele.mozRequestFullScreen({ navigationUI: 'hide' });
  } else if (ele.msRequestFullscreen) {
    ele.msRequestFullscreen({ navigationUI: 'hide' });
  }
};

// 關閉全螢幕
var exitFullscreen = function () {
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.webkitExitFullscreen) {
    document.webkitExitFullscreen();
  } else if (document.mozCancelFullScreen) {
    document.mozCancelFullScreen();
  } else if (document.msExitFullscreen) {
    document.msExitFullscreen();
  }
};

// 點擊播放影片按鈕，判斷裝置
function openVideo_phoneSystem(lightboxBlock, lightboxTarget) {
  if (android == true && window.innerWidth < 768) {
    // 裝置是 Android
    lightboxTarget.classList.remove('is-ios');
    requestFullscreen(lightboxBlock);
  } else if (iOS == true) {
    // 裝置是 iOS
    lightboxTarget.classList.add('is-ios');
    doOnOrientationChange(lightboxTarget);
  }
}

// 點擊關閉/暫停影片按鈕，判斷裝置
function closeVideo_phoneSystem() {
  if (android == true && window.innerWidth < 768) {
    // 裝置是 Android
    exitFullscreen();
  }
}

// 監聽手機轉向
window.addEventListener('orientationchange', doOnOrientationChange);
// 判斷手機當前方向
let height = window.innerHeight;
function doOnOrientationChange() {
  switch (window.orientation) {
    case -90:
    case 90:
      // 手機轉橫向
      video_1_lightboxTarget.classList.add('is-landscape');
      video_2_lightboxTarget.classList.add('is-landscape');
      video_3_lightboxTarget.classList.add('is-landscape');

      if (iOS == true) {
        document.querySelector("#video_iframe_1").style.height = height + "px";
        document.querySelector("#video_iframe_2").style.height = height + "px";
        document.querySelector("#video_iframe_3").style.height = height + "px";
        window.addEventListener('resize', () => {
          height = window.innerHeight;
          document.querySelector("#video_iframe_1").style.height = height + "px";
          document.querySelector("#video_iframe_2").style.height = height + "px";
          document.querySelector("#video_iframe_3").style.height = height + "px";
        });
      }
      break;
    default:
      // 手機轉直向
      video_1_lightboxTarget.classList.remove('is-landscape');
      video_2_lightboxTarget.classList.remove('is-landscape');
      video_3_lightboxTarget.classList.remove('is-landscape');

      if (iOS == true) {
        document.querySelector("#video_iframe_1").style.height = "calc(100vh - 250px)";
        document.querySelector("#video_iframe_2").style.height = "calc(100vh - 250px)";
        document.querySelector("#video_iframe_3").style.height = "calc(100vh - 250px)";
        window.addEventListener('resize', () => {
          document.querySelector("#video_iframe_1").style.height = "calc(100vh - 250px)";
          document.querySelector("#video_iframe_2").style.height = "calc(100vh - 250px)";
          document.querySelector("#video_iframe_3").style.height = "calc(100vh - 250px)";
        });
      }

      break;
  }
}
// end 影片 light box 點開自動播放，關閉暫定 *------------------


// 由上到下滑到物件範圍就會跑動畫 *------------------
let animate_block_1 = document.querySelector("#animate_block_1");
let offset_1 = animate_block_1.getBoundingClientRect();
let animate_block_2 = document.querySelector("#animate_block_2");
let offset_2 = animate_block_2.getBoundingClientRect();

// 物件只要在畫面的範圍，就跑動畫
if (offset_1.top <= window.innerHeight) {
  animateOn_1();
}
if (offset_2.top <= window.innerHeight) {
  animateOn_2();
}

// 當滾動畫面
document.addEventListener("scroll", function () {
  // 指定物件 和 整個網站的最頂端 的距離
  let offset_1 = animate_block_1.getBoundingClientRect();
  let offset_2 = animate_block_2.getBoundingClientRect();

  if (offset_1.top <= window.innerHeight || offset_1.bottom <= 0) {
    // 如果 物件的頂部 到 目前畫面頂部 的距離 小於 畫面高度 (＝如果往下滑碰到物件的頂部) 就跑動畫
    // 或者
    // 如果 物件的底部 到 目前畫面頂部 的距離 小於 0px (＝如果畫面是在物件以下的區域) 就跑動畫
    animateOn_1();
  }
  if (offset_1.top > window.innerHeight) {
    // 如果 物件的頂部 到 目前畫面頂部 的距離 大於 畫面高度 (＝如果往上滑到物件的頂部以上) 就關動畫
    animateOff_1();
  }

  if (offset_2.top <= window.innerHeight || offset_2.bottom <= 0) {
    // 如果 物件的頂部 到 目前畫面頂部 的距離 小於 畫面高度 (＝如果往下滑碰到物件的頂部) 就跑動畫
    // 或者
    // 如果 物件的底部 到 目前畫面頂部 的距離 小於 0px (＝如果畫面是在物件以下的區域) 就跑動畫
    animateOn_2();
  }
  if (offset_2.top > window.innerHeight) {
    // 如果 物件的頂部 到 目前畫面頂部 的距離 大於 畫面高度 (＝如果往上滑到物件的頂部以上) 就關動畫
    animateOff_2();
  }
});
function animateOn_1() {
  animate_block_1.classList.add("on");
}
function animateOff_1() {
  animate_block_1.classList.remove("on");
}
function animateOn_2() {
  animate_block_2.classList.add("on");
}
function animateOff_2() {
  animate_block_2.classList.remove("on");
}
// end 由上到下滑到物件範圍就會跑動畫 *------------------


// 看報告範例 - 開啟和關閉 *------------------
$(document).ready(function () {

    $('.popBlock').hide();

    // 開啟
    $('.exampleOpenBtn').click(function () {
      $('.popBlock.see-example').fadeIn();
    });
    // 關閉
    $('.popCloseBtn').click(function () {
      $('.popBlock').fadeOut();
    });
  })
// end 看報告範例 - 開啟和關閉 *------------------


// 新增 Noto Sans Tc 字型 *------------------
var link = document.createElement("link");
link.href = "https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap";
var linkTags = document.querySelectorAll("link");
var firstCssTag = document.getElementsByTagName("link")[0];
console.log(firstCssTag);
firstCssTag.parentNode.appendChild(link);
// end 新增 Noto Sans Tc 字型 *------------------