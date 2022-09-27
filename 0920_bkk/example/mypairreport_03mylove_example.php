<!doctype html>
<html>

<head>
  <?php include_once("../at_include/CG_config.php"); ?>
  <title><?php echo $webTitle; ?></title>
  <meta name="keywords" content="<?php echo $MetaCopyright; ?>" />
  <!-- 網頁描述 -->
  <meta name="description" content="<?php echo $MetaDescription; ?>" />
  <meta name="Author" content="<?php echo $MetaAuthor; ?>" />
  <meta name="copyright" content="<?php echo $MetaCopyright; ?>">
  <!-- iCon圖示 -->
  <link rel="shortcut icon" href="../favicon.ico">
  <!-- FB  -->
  <meta property="og:title" content="<?php echo $webTitle; ?>" />
  <meta property="og:url" content="<?php echo $URL; ?>" />
  <meta property="og:image" content="<?php echo $Meta_ogImg_0; ?>" />
  <meta property="og:description" content="<?php echo $MetaDescription; ?>" />
  <meta property="fb:app_id" content="<?php echo $FB_ID; ?>" />
  <!-- CSS -->
  <link href="../css/at_cage.css" rel="stylesheet" type="text/css" />
  <link href="../css/basic_findtheone.css" rel="stylesheet" type="text/css" />
	<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <?php include_once("../at_include/inc_facebook.php"); ?>
</head>

<body class="mypair onSign">
  <div id="fb-root"></div>
  <?php include_once("../example/at_include/header4_example.php"); ?>
  <div id="main">
    <div class="headerBack">
      <a class="back"><i class="fa fa-angle-left" aria-hidden="true"></i>愛之語報告</a>
    </div>
    <div class="mypairCount pairReport">

      <div class="mypairPad clear">
        <div class="mypairItem">
          <ul class="picture">
            <li><img alt="" src="../images/abby/abby_example/img-5.jpg" /></li>
          </ul>
          <ul class="status">
            <li class="new"></li>
            <li class="number bigger">93</li>
          </ul>
          <ul class="basicData">
            <li>
              <p>Kyle<span>新北市 / 30歲</span></p>
            </li>
          </ul>
          <ul class="infoData">
            <li>
              <p>碩士</p>國立成功大學
            </li>
            <li>
              工程師
            </li>
          </ul>
        </div>
        <div class="userphoto CGt">
          <ul>
            <li class="active"><img alt="" src="../images/user_photo_default_l.png" /></li>
            <li><img alt="" src="../images/user_default_0.jpg" /></li>
            <li><img alt="" src="../images/portrait-img01.jpg" /></li>
            <li><img alt="" src="../images/portrait-img02.jpg" /></li>
            <li><img alt="" src="../images/user_default_1.jpg" /></li>
            <li><img alt="" src="../images/image_06.jpg" /></li>
          </ul>
        </div>
        <div class="cssTable unselectable">
          <ul>
            <li><a class="btn-agree btn-red notApplyBtn" id="addFriendBtn">加好友，再約見面聊</a></li>
          </ul>
          <ul class="tool-buttons">
            <li><a class="btn-agree notApplyBtn">檢舉</a></li>
            <li><a class="btn-agree notApplyBtn">封鎖</a></li>
          </ul>
          <p class="message-info">
            互加好友後，聊天室會開啟<br>實際見面時間，可約在一段時間之後
          </p>
        </div>
      </div>

      <div class="meetContPad">
        <!-- 未邀約狀態 -->
        <div class="meetListCount">
          <div id="meetListPad" class="meetListPad clear">
            <div class="meetPairData clear autoHeight">
              <div class="dataArea pairData">
                <p>以下是 Kyle 過往約會所獲得的回饋</p>
              </div>
              <div class="dataArea pairData no-border has-note">
                <div class="meetScore clear">
                  <h3>約會風格</h3>
                  <ul>
                    <li><span>準時赴約</span>
                      <p>優秀 <span>5</span>/5</p>
                    </li>
                    <li><span>約會態度</span>
                      <p>優秀 <span>5</span>/5</p>
                    </li>
                  </ul>
                </div>
                <span class="note-box">其他會員<br>給他的回饋</span>
              </div>
            </div>
          </div>
        </div><!-- meetListCount END -->


      </div><!-- meetContPad END -->

      <div class="pageMenu list CGt unselectable">
        <ul>
          <li class="i_report_pair"><a href="mypairreport_01fit_example.php">契合<br>報告</a></li>
          <li class="i_report_mylove"><a href="mypairreport_03mylove_example.php">愛之語<br>報告</a></li>
          <li class="i_report_travel"><a href="mypairreport_04travelcomp_example.php">旅伴<br>報告</a></li>
        </ul>
        <ul class="nav"></ul>
      </div>
      <!-- 分類 -->

      <div class="testingReportCount">
        <div class="testingReportPad">

          <div class="reportTitle">
            <h1>愛之語報告</h1>
            <p>愛之語有五種，每個人都有自己偏好被愛的方式，當別人用正確的方式表達，我們就會感覺到被愛，反之，即使對方付出很多，但我們仍可能沒有被愛的感覺，經歷過不同的人生風景之後，我們的愛之語也會隨之調整。以下是妳的愛之語：</p>
          </div>
          <div class="reportItem noBG">
            <div class="reportDetial">
              <div class="reportChart canvas5">
                <canvas id="CG_star" width="240" height="240" style="background:none; margin:0px auto;"></canvas>
                <ul>
                  <li>肯定的語言</li>
                  <li>精心的時刻</li>
                  <li>接受禮物</li>
                  <li>服務的行動</li>
                  <li>身體的接觸</li>
                </ul>
              </div>
              <script>
                /* Canvas */
                var canvas = document.getElementById("CG_star");
                var ctx = canvas.getContext("2d");
                var reportValue = [65, 80, 10, 50, 40]; // 測驗報告參數 0 ~ 100
                var i, bg,
                  c_w = canvas.width,
                  c_h = canvas.height,
                  center = c_w * 0.5,
                  ang = Math.PI / 180,
                  radius = c_w * 0.4,
                  math_X = [0, Math.cos(18 * ang), Math.sin(36 * ang), -Math.sin(36 * ang), -Math.cos(18 * ang)],
                  math_Y = [-1, -Math.sin(18 * ang), Math.cos(36 * ang), Math.cos(36 * ang), -Math.sin(18 * ang)],
                  reVal = radius * 0.01,
                  bx = [],
                  by = [],
                  px = [],
                  py = [];

                for (i = 0; i < 5; i++) {
                  px[i] = reportValue[i] * reVal * math_X[i],
                    py[i] = reportValue[i] * reVal * math_Y[i];
                }
                ctx.translate(center, center * 1.02);
                for (i = 0; i < 5; i++) {
                  var level = 1 - i * 0.2,
                    newRadius = radius * level;
                  for (bg = 0; bg < 5; bg++) {
                    bx[bg] = newRadius * math_X[bg],
                      by[bg] = newRadius * math_Y[bg];
                  }
                  ctx.beginPath();
                  ctx.moveTo(bx[0], by[0]);
                  ctx.lineTo(bx[1], by[1]);
                  ctx.lineTo(bx[2], by[2]);
                  ctx.lineTo(bx[3], by[3]);
                  ctx.lineTo(bx[4], by[4]);
                  ctx.strokeStyle = '#cecece';
                  ctx.closePath();
                  ctx.stroke();
                }
                for (i = 0; i < 5; i++) {
                  ctx.beginPath();
                  ctx.moveTo(0, 0);
                  ctx.lineTo(radius * math_X[i], radius * math_Y[i]);
                  ctx.strokeStyle = '#cecece';
                  ctx.stroke();
                }

                ctx.beginPath();
                ctx.moveTo(px[0], py[0]);
                ctx.lineTo(px[1], py[1]);
                ctx.lineTo(px[2], py[2]);
                ctx.lineTo(px[3], py[3]);
                ctx.lineTo(px[4], py[4]);
                ctx.strokeStyle = '#85d7d1';
                ctx.lineWidth = 3;
                ctx.closePath();
                ctx.stroke();

                for (i = 0; i < 5; i++) {
                  ctx.beginPath();
                  ctx.arc(px[i], py[i], 5, 0, 2 * Math.PI);
                  ctx.fillStyle = 'black';
                  ctx.fill();
                }
              </script>
            </div>
          </div>
          <div class="reportItem">
            <h3>主要的愛之語：精心的時刻</h3>
            <div class="reportDetial">
              <div class="script">
                自始至終，他在乎的都是用心。更精確的說，他喜歡兩個人一起相處的時間。不論是放假時什麼也不做地一起在咖啡廳念書，或是每天晚上15分鐘專注地聊天與溝通，只要是花時間將注意力放在彼此身上，就是溫馨的時刻。例如，陪他聊天、做菜、玩電動、甚至只是一起泡澡，重點是在這段時間裡面，兩人都擁有彼此的全部，就比什麼都能讓他感受到愛與歸屬。
              </div>
              <div class="title">關於對方的愛之語，你可以怎麼做？</div>
              <div class="script">
                許多情侶雖然「在一起」，但是心卻沒有在一起。精心的時刻並不花時間，可能只是一天當中的一小個時段，或是一起從事某項活動，並從這項活動當中，建立兩人的親密感。<br><br>
                a.同在一起：每週花一段時間相處，可能是一起打球、一起讀書、一起吃飯或一起工作等等，重要不是作的事情本身，而是在這段時間裡，你們單單屬於彼此，不被外務所干擾。<br><br>
                b.精心對話：每週一次到三次，創造一個純淨的對話空間。或許是十分鐘，或許是十五分鐘，在這段時空裡面，你們可以分享自己的感覺、想法與價值觀，同理彼此的生活經歷與感受，注意聆聽，真誠分享，避免評價，並且，不要一邊滑手機或作自己的事情。<br><br>
                c.表達感受：對於某些人來說，表達感受是不容易的事情（蓋瑞將之稱為「死海型」的人）。但並不表示這項任務無法被達成。可以做「事件＋感受」的練習，範例句型像「今天......心裡覺得......」或「我......我覺得......」，如「我原先想超車，沒想到對方卻臨時煞車（事件1），當下心裡就很不爽（感覺1），我今天已經在公司忙了一天，很多事情都很不順（事件2），沒想到又遇到這個慢郎中，真的很想罵人（感覺2）」。<br><br>
                d.精心活動：試著想想，你們在一起從事什麼事情的時候，對方最能感覺到你的愛？例如有些人是「一起爬山，一邊走一邊聊天，然後在山頂上一起吃便當」，也有些人是「在房間陪他一起打羊毛氈，細心的按壓和互相幫忙」，這些都是精心的活動。試著每個月安排一次精心的活動，儲蓄彼此的幸福能量。
              </div>
            </div>
          </div>
          <div class="reportItem">
            <h3>次要的愛之語：肯定的言語</h3>
            <div class="reportDetial">
              <div class="script">
                他很需要被肯定、被看見。當別人稱讚他，或說他哪件事情做得特別好的時候，雖然會有些不好意思，但卻相當開心，因為一直以來他所追求的，就是那種被肯定、被重視、被需要的感覺。所以如果有人能夠接納他的意見、傾聽他分享成就或專業、對他表示感激等等，都會讓他有一種被在乎、被愛的感受。
              </div>
              <div class="title">關於對方的愛之語，妳可以怎麼做？</div>
              <div class="script">
                對方需要被看見、被鼓勵、被肯定，如果他所希望的愛是來自於你的支持和欣賞，你可以用下面幾種方式來表達你對他的關懷：<br><br>
                a.鼓勵：例如「我知道這對妳來說不太容易，但我相信你絕對辦得到！」、「雖然可能會花多一點時間，但我一直都會在身旁當你的啦啦隊！」等等，鼓勵的話之所以有效，是因為它可以給予對方行動的勇氣。<br><br>
                b.讚美：例如「一直以來都是你在支撐這間公司，你做得很棒。」、「你在社會企業上的付出，花時間跟那些孩子見面、爭取經費，老實說超偉大的！」等等，注意讚美必須有「具體事例」，不然容易流於形式與空泛。<br><br>
                c.仁慈：同樣一句話，說的方式不一樣，效果就會不同。盡量在話語中加入「溫度」，讓對方能感覺你的在乎，例如可以用「我知道你今天工作很累了，不如今天我來洗碗吧，你好好休息。」取代「看你那副死樣子，碗一定又是我要洗了。」<br><br>
                d.感謝：例如「謝謝你願意把你最真實的感受告訴我，我相信那需要很大的勇氣。」、「這星期還好有你幫我帶咖啡，不然我早上一定都會睡死在辦公桌上。」等等，一樣感謝必須具體真誠，不然容易讓人覺得是在敷衍。<br><br>
                e.寬恕：「老實說我很難過，因為你加班但沒有跟我說，我一直很擔心。不過我想到自己有時候也會忙過頭，所以能夠體諒你的心情，也希望下次如果要晚回來，你可以撥通電話。」、「我不確定能不能這麼快原諒你昨天對我說謊的事，但因為我重視這段關係，也重視你，所以希望我們好好討論彼此在乎的感受。」等等，寬恕是肯定的言語中最不容易的部份，不過如果能夠多次練習，通常能夠感覺到自己的成長，如果對方也誠心悔改的話，更能從對方身上接收到滿滿的能量。
              </div>
            </div>
          </div>

        </div>

        <div class="goTest pt-3 pb-5">
          <p class="title text-center">▼想擁有自己的報告，快來完成測驗吧▼</p>
          <div class="btn-box text-center">
            <a href="#" class="btn btn-sty1">
              開始心理學測驗 <span class="sp-txt-small">(10分鐘)</span>
            </a>
          </div>
        </div>
      </div><!-- testingReportCount END -->
    </div><!-- main END -->

    <div class="hintContainer">
      <p>
        此為範例
        <a href="../index5.php">回到首頁</a>
      </p>
    </div>

    <div id="popContainer" class="height_G">
      <!-- 見面聊評分 -->
      <div class="popContent basic meetdataPop">
        <div>
          <ul>
            <li class="title">見面後回饋</li>
            <li class="user_pic"><img src="../images/user_photo_default_s.jpg" />
              <p><span>林志玲</span></p>
            </li>
            <li class="content pageGroup">
              <div class="page topic ansType_choiceLine">
                <div>
                  <h3 class="">你對他的好感度如何?<span></span></h3>
                  <div class="ansPad">
                    <ul>
                      <li><input type="radio" name="sel00" value="1" id="sel001"><label for="sel001">1<span>應該不適合</span></label></li>
                      <li><input type="radio" name="sel00" value="2" id="sel002"><label for="sel002">2<span>有點不適合</span></label></li>
                      <li><input type="radio" name="sel00" value="3" id="sel003"><label for="sel003">3<span>還不確定</span></label></li>
                      <li><input type="radio" name="sel00" value="4" id="sel004"><label for="sel004">4<span>有點好感</span></label></li>
                      <li><input type="radio" name="sel00" value="5" id="sel005"><label for="sel005">5<span>很有好感</span></label></li>
                    </ul>
                  </div>
                  <div class="ctrlPad"><a class="next"></a></div>
                </div>
              </div>
              <div class="page topic ansType_choiceLine">
                <div>
                  <h3 class="">你期待下次的見面嗎?<span></span></h3>
                  <div class="ansPad">
                    <ul>
                      <li><input type="radio" name="sel02" value="1" id="sel021"><label for="sel021">1<span>應該不會</span></label></li>
                      <li><input type="radio" name="sel02" value="2" id="sel022"><label for="sel022">2<span>不太確定</span></label></li>
                      <li><input type="radio" name="sel02" value="3" id="sel023"><label for="sel023">3<span>不排斥</span></label></li>
                      <li><input type="radio" name="sel02" value="4" id="sel024"><label for="sel024">4<span>有點期待</span></label></li>
                      <li><input type="radio" name="sel02" value="5" id="sel025"><label for="sel025">5<span>非常期待</span></label></li>
                    </ul>
                  </div>
                  <div class="ctrlPad"><a class="next"></a></div>
                </div>
              </div>
              <div class="page topic ansType_choiceLine">
                <div>
                  <h3 class="">他準時赴約的情況?<span>(答案向對方隱藏)</span></h3>
                  <div class="ansPad">
                    <ul>
                      <li><input type="radio" name="sel02" value="1" id="sel021"><label for="sel021">1<span>晚21分鐘以上</span></label></li>
                      <li><input type="radio" name="sel02" value="2" id="sel022"><label for="sel022">2<span>晚11到20分鐘</span></label></li>
                      <li><input type="radio" name="sel02" value="3" id="sel023"><label for="sel023">3<span>晚6到10分鐘</span></label></li>
                      <li><input type="radio" name="sel02" value="4" id="sel024"><label for="sel024">4<span>正負5分鐘內</span></label></li>
                      <li><input type="radio" name="sel02" value="5" id="sel025"><label for="sel025">5<span>早6分鐘以上</span></label></li>
                    </ul>
                  </div>
                  <div class="ctrlPad"><a class="next"></a></div>
                </div>
              </div>
              <div class="page topic ansType_choiceLine">
                <div>
                  <h3 class="">他的約會態度如何?<span>(答案向對方隱藏)</span></h3>
                  <div class="ansPad">
                    <ul>
                      <li><input type="radio" name="sel03" value="1" id="sel031"><label for="sel031">1<span>傲慢無禮</span></label></li>
                      <li><input type="radio" name="sel03" value="2" id="sel032"><label for="sel032">2<span>態度冷淡</span></label></li>
                      <li><input type="radio" name="sel03" value="3" id="sel033"><label for="sel033">3<span>尚可接受</span></label></li>
                      <li><input type="radio" name="sel03" value="4" id="sel034"><label for="sel034">4<span>應對合宜</span></label></li>
                      <li><input type="radio" name="sel03" value="5" id="sel035"><label for="sel035">5<span>親切有禮</span></label></li>
                    </ul>
                  </div>
                  <p>&nbsp;</p>
                  <div class="ctrlPad"><a class="prev"></a> <input type="submit" class="btn_closePop btn_red" value="送出" /></div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <!-- 照片 -->
      <div class="popContent photoPop unselectable">
        <div class="photoPopCtrl">
          <ul>
            <li></li>
            <li></li>
          </ul>
        </div>
        <img src="../images/user_photo_default_l.jpg" alt="" />
        <div class="btn_closePop"></div>
      </div>
    </div>

    <div class="pop-sty-2">
      <div class="popBlock not-apply">
        <div class="contentBox">
          <ul>
            <li class="title">功能尚未開通</li>
            <li class="content">
              <p class="desc text-center">完成心理學測驗 (註冊)<br>即可解鎖完整功能</p>
              <div class="btn-box text-center">
                <a href="#" class="btn btn-sty1">
                  開始心理學測驗 <span class="txt-small">(10分鐘)</span>
                </a>
              </div>
              <div class="text-center">
                <button type="button" class="btn-consider popCloseBtn">再考慮一下</button>
              </div>
            </li>
          </ul>
          <button type="button" class="close-btn popCloseBtn">
            <img src="../images/abby/7/close-icon.png" alt="">
          </button>
        </div>
      </div>
    </div>

    <?php include_once("../at_include/footer.php"); ?>
    <!-- jQuery -->
    <script type="text/javascript" src="../js/jquery.min-2.2.4.js"></script>
    <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="../js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../js/jquery.touchwipe.min.js"></script>
    <script type="text/javascript" src="../js/at_cage.js"></script>

    <!-- abby JS -->
    <script type="text/javascript" src="../js/abby/abby_example.js"></script>
    <script type="text/javascript" src="../js/abby/abby.js"></script>

    <script>
      $(window).load(function() {
        <?php include_once("../at_include/page_menu_js.php"); ?>

      })
      $(document).ready(function() {
        $('.pageMenu').find('li').eq(1).addClass('active');
        $('.subHeader').find('li').eq(0).addClass('active');

        var Gw = $(window),
          Gww = Gw.width();
        var $ctrlPic = $('.userphoto').find('li'),
          $ctrlPic_leng = $ctrlPic.length,
          $ctrlPicNow = 0,
          $mainPic = $('.popContent').find('img'),
          $btnMeet = $('.btn_meet');

        if (Gww > 980) {
          $ctrlPic.click(function() {
            $ctrlPicNow = $(this).index();
            var $imgSrc = $(this).find('img').attr('src');
            $mainPic.attr('src', $imgSrc);
            $('#popContainer').fadeIn();
            $('.photoPop').show();
            popUserPhotoCtrl();
          });
        }

        function popUserPhotoCtrl() {
          $('.photoPopCtrl').find('li:first-child').click(function() {
            if ($ctrlPicNow > 0) {
              $ctrlPicNow--;
            } else {
              $ctrlPicNow = $ctrlPic_leng - 1;
            }
            var $imgSrc = $ctrlPic.eq($ctrlPicNow).find('img').attr('src');
            $mainPic.attr('src', $imgSrc);
            console.log($ctrlPicNow, "|", $ctrlPic_leng);
          });
          $('.photoPopCtrl').find('li:last-child').click(function() {
            if ($ctrlPicNow < $ctrlPic_leng - 1) {
              $ctrlPicNow++;
            } else {
              $ctrlPicNow = 0;
            }
            var $imgSrc = $ctrlPic.eq($ctrlPicNow).find('img').attr('src');
            $mainPic.attr('src', $imgSrc);
            console.log($ctrlPicNow, "|", $ctrlPic_leng);
          });
        }
        $btnMeet.click(function() {
          $('#popContainer').fadeIn();
          $('.meetdataPop').show();
        });

        $('.btn_closePop').click(function() {
          $('.meetdataPop').hide();
          $('.photoPop').hide();
        })
        $('#popContainer > .before').click(function() {
          $('.meetdataPop').hide();
          $('.photoPop').hide();
        });
        var mypairItem = $('.mypairItem'),
          $photo = $('.userphoto').find('li'),
          $length = $photo.length,
          $dot = "";

        if (Gww < 980) {
          for (var i = 0; i < 2; i++) {
            $dot += "<li></li>";
          }
          mypairItem.append("<ul class='dot'>" + $dot + "</ul>");

          $('.dot').find('li:last-child').click(function() {
            photoCtrl('Left')
          });
          $('.dot').find('li:first-child').click(function() {
            photoCtrl('')
          });

          $('.mypairItem').touchwipe({
            wipeLeft: function() {
              photoCtrl('Left')
            },
            wipeRight: function() {
              photoCtrl('')
            },
            preventDefaultEvents: false
          });
        }

        function photoCtrl(direction) {
          var $obj = $('.userphoto').find($('.active')),
            $ctr = $('.dot').find('li'),
            $now = $obj.index();
          console.log($now, direction);
          if ($now < $length - 1 && direction === 'Left') {
            var $ind = $now + 1;
            $ctrlPic.eq($ind).addClass('active').siblings().removeClass('active');
          } else if ($now === 0 && direction === '') {
            var $ind = $length - 1;
            $ctrlPic.eq($ind).addClass('active').siblings().removeClass('active');
          } else if ($now >= 0 && direction === '') {
            var $ind = $now - 1;
            $ctrlPic.eq($ind).addClass('active').siblings().removeClass('active');
          } else {
            var $ind = 0;
            $ctrlPic.eq($ind).addClass('active').siblings().removeClass('active');
          }
        }
      });
    </script>
</body>

</html>