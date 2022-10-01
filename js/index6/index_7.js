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

// 21對成功案例 輪播 - 767px 手機版
let success_mobile_Slider = document.getElementById('success_mobile_Slider'),
  success_mobile_SliderItems = document.getElementById('success_mobile_Slides'),
  success_mobile_prev = document.getElementById('success_mobile_prev'),
  success_mobile_next = document.getElementById('success_mobile_next'),
  success_mobile_SlidesLi = document.querySelectorAll("#success_mobile_Slides .slide .lists > ul > li"),
  success_mobile_Dots = document.querySelector("#success_mobile_Slider .dotsList");
slider(success_mobile_Slider, success_mobile_SliderItems, success_mobile_prev, success_mobile_next, success_mobile_SlidesLi, success_mobile_Dots);
// end 21對成功案例 輪播 - 767px 手機版

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
    threshold = slideSize / 7, // 手指滑動到slide尺寸的1/7寬度，就會到下一個slide
    allowShift = true,
    dotLi = dots.getElementsByTagName("li");

  console.log(threshold);

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
      // 算出共有幾組輪播
      let dotIndex = Math.floor(dotLi.length / 3);
      let dotIndexArr = [];
      for (let i = 0; i < dotIndex; i++) {
        dotIndexArr.push(i)
      }

      // 一個輪播呈現幾個元件
      let sliderPerItem = 3;
      // 餘數
      let sliderPar = dotLi.length % sliderPerItem;

      // 沒有餘數
      function dotActive(index) {
        dotLi[index].classList.add("active")
        dotLi[index + 1].classList.add("active")
        dotLi[index + 2].classList.add("active")
      }

      // 有餘數
      function dotActiveHasPar(index) {
        dotLi[index].classList.add("active")
        dotLi[index + sliderPar - 1].classList.add("active")
      }

      for (let i = 0; i < dotLi.length; i++) {
        dotLi[i].classList.remove("active");

        // console.log(dotIndexArr.length, index);

        if (window.innerWidth >= 768) {
          for (let j = 0; j < dotIndexArr.length; j++) {
            if (index == 0 || index == dotIndexArr.length + 1 && sliderPar !== 0) {
              // 當輪播在第一個，或在最後一個且輪播元件無法整除
              dotActive(0);
            } else if (index == dotIndexArr.length && sliderPar == 0) {
              // 當輪播在最後一個，且輪播元件可以整除
              dotActive(0);
            } else if (index == j) {
              dotActive(index * 3);
            } else if (index == dotIndexArr.length && sliderPar !== 0) {
              dotActiveHasPar(index * 3);
            } else if (index == -1 && sliderPar == 0) {
              dotActive((dotIndexArr.length - 1) * 3)
            } else if (index == -1 && sliderPar !== 0) {
              dotActiveHasPar((dotIndexArr.length) * 3)
            }
          }
        } else {
          // console.log(dotLi.length);
          if (index == i) {
            dotLi[i].classList.add("active")
          } else if (index == -1) {
            // 最後一個
            dotLi[dotLi.length - 1].classList.add("active")
          } else if (index == dotLi.length) {
            // 第一個
            dotLi[0].classList.add("active")
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


