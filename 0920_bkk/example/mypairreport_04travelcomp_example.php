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
      <a class="back"><i class="fa fa-angle-left" aria-hidden="true"></i>旅伴報告</a>
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

      <div class="testingReportCount">
        <div class="testingReportPad clear">

          <div class="reportTitle">
            <h1>旅伴報告</h1>
            <p>選擇一起旅行的伴侶，需要考慮2個面向：旅行的目的和旅行的風格，目的的部分越像越好，風格的部分則要考慮彼此的搭配，以下是你們的旅伴報告。</p>
          </div>
          <div class="reportItem">
            <h3>旅行目的</h3>
            <div class="pairScore">82<p>契合指數</p>
            </div>
            <div class="reportDetial">
              <div class="script">他在旅遊時最在乎的是吃美食、看美景，當然住飯店也要稍微兼顧，而感受文化和買東西，相形之下就沒那麼重要了。
                <br><br>旅行目的契合度，是旅伴選擇的首要關鍵，重要性略高於旅行風格的契合度。以下是你們在旅行目上各自的排序 ，依重要性由高至低依序排列，最重要為1，最不重要為5，一般而言，排序的相似性越高一起旅遊時的滿意度也越高。
              </div>
              <div class="reportChart topic_listNumber">
                <ol class="infoPad">
                  <li class="info_0">你</li>
                  <li class="info_1">對方</li>
                </ol>
                <ul class="active2">
                  <li>吃美食</li>
                  <li>看美景</li>
                  <li>住飯店</li>
                  <li>感受文化</li>
                  <li>買東西</li>
                </ul>
                <ul>
                  <li>感受文化</li>
                  <li>吃美食</li>
                  <li>看美景</li>
                  <li>住飯店</li>
                  <li>買東西</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="reportItem">
            <h3>旅行風格</h3>
            <div class="pairScore">91<p>契合指數</p>
            </div>
            <div class="reportDetial">
              <div class="title">他的旅行風格：海豚型 (DTF)</div>
              <div class="script">對於旅行，他很在意旅程的節奏，與其在同一個點駐足許久，不如遍覽當地的風景名勝，如此才能讓他覺得不虛此行。他不在意旅行的花費，即便奢華也無所謂，畢竟難得出來旅行，太省吃儉用似乎無法讓他盡興，不如就拋開平日的拘束，放肆的大玩特玩吧！雖說如此，他卻不太在意旅行的主導性，有人能夠為他規劃好旅行中的大小事，讓他省去了不少的麻煩，只要這趟規劃好的行程，能夠滿足他的輕快步調與豪放的購買慾即可。整體而言，他是個預算性高、主導性低、節奏性快的旅者。</div>
              <div class="reportChart topic_level4">
                <h4>預算型</h4>
                <div>
                  <ul>
                    <li></li>
                    <li></li>
                    <li class="active3"></li>
                    <li></li>
                  </ul>
                  <ol class="infoPad">
                    <li class="info_0">你</li>
                    <li class="info_1">對方</li>
                  </ol>
                </div>
                <p><span>背包客之旅(E)</span><span>享樂團之旅(D)</span></p>
              </div>
              <div class="reportChart topic_level4">
                <h4>節奏性</h4>
                <div>
                  <ul>
                    <li></li>
                    <li class="active"></li>
                    <li class="active2"></li>
                    <li></li>
                  </ul>
                </div>
                <p><span>行程排很鬆(R)</span><span>行程排很滿(T)</span></p>
              </div>
              <div class="reportChart topic_level4">
                <h4>主導性</h4>
                <div>
                  <ul>
                    <li></li>
                    <li class="active3"></li>
                    <li></li>
                    <li></li>
                  </ul>
                </div>
                <p><span>配合大家(F)</span><span>主導行程(L)</span></p>
              </div>
              <div class="title">你們的配對組合 (你+他)：大象 + 海豚</div>
              <div class="script">你們都喜歡高預算的旅行，這是一個好消息，因為你們比較不會因為旅行花費這件事起爭執，能夠愉快的享受高消費的旅行；在旅行規畫上，你們兩個都很隨和，不太會為了要去哪裡玩而吵架，不過也因為這樣，可能會變成雙方都不想規劃的窘境，建議你們可以一起規劃行程，也藉此培養你們的好默契喔！最後，你們一個人喜歡快節奏的旅行，另一個人卻喜歡慢節奏的，關於這方面，如果你們能在不同的旅行當中採取不同的節奏，也許會有助於你們雙方都能享受到彼此喜歡的模式喔！</div>
            </div>
          </div>

          <div class="reportItem">
            <h3>其他旅行習慣</h3>
            <div class="reportDetial">
              <div class="script">其他旅行習慣可以幫助你們更了解彼此的行為模式，大致而言，旅行習慣越像越好。</div>
              <div class="reportChart topic_level4">
                <h4 class="title">旅行中如果臨時變更行程，你的想法是?</h4>
                <div>
                  <ul>
                    <li></li>
                    <li class="active2"></li>
                    <li class="active"></li>
                    <li></li>
                  </ul>
                </div>
                <p><span>行程已經排好了應該照計畫進行</span><span>旅行可以很隨興變更行程沒問題</span></p>
              </div>

              <div class="reportChart topic_listType">
                <h4 class="title">行程中如何安排餐廳？</h4>
                <div>
                  <ol class="infoPad">
                    <li class="info_0">你</li>
                    <li class="info_1">對方</li>
                  </ol>
                </div>
                <div class="dataPad">
                  <ul>
                    <li></li>
                    <li>查詢必吃名店，只要想吃再不順路都要排進去</li>
                  </ul>
                  <ul>
                    <li class="point2"></li>
                    <li>依景點附近看有沒有好評店家</li>
                  </ul>
                  <ul>
                    <li class="point"></li>
                    <li>不一定要是名店，但以當地餐廳為主</li>
                  </ul>
                  <ul>
                    <li></li>
                    <li>吃根本不重要，隨便解決就好</li>
                  </ul>
                </div>
              </div>

              <div class="reportChart topic_listType">
                <h4 class="title">下午即將搭飛機返國，你會？</h4>
                <div class="dataPad">
                  <ul>
                    <li></li>
                    <li>提早到機場逛逛，買紀念品</li>
                  </ul>
                  <ul>
                    <li></li>
                    <li>到賣場把握最後的買東西機會</li>
                  </ul>
                  <ul>
                    <li class="point3"></li>
                    <li>悠閒走走晃晃，再慢慢去機場</li>
                  </ul>
                  <ul>
                    <li></li>
                    <li>排行程到最後一刻</li>
                  </ul>
                </div>
              </div>

              <div class="reportChart topic_listType">
                <h4 class="title">一起出遊的旅伴逛街買東西超過預定的時間，你的反應是？</h4>
                <div class="dataPad">
                  <ul>
                    <li></li>
                    <li>一起逛，買到開心為止</li>
                  </ul>
                  <ul>
                    <li class="point3"></li>
                    <li>你們慢慢買，我正好坐著休息一下</li>
                  </ul>
                  <ul>
                    <li></li>
                    <li>妳買妳的，我逛我自己的</li>
                  </ul>
                  <ul>
                    <li></li>
                    <li>催他們快一點，下一個行程快被影響到了</li>
                  </ul>
                </div>
              </div>

              <div class="reportChart topic_listNumber">
                <h4 class="title ta-L">你關於住宿選擇你的考量順序為何？</h4>
                <ul class="active2">
                  <li>交通便利性</li>
                  <li>價錢高低</li>
                  <li>飯店舒適度</li>
                  <li>生活機能度</li>
                </ul>
                <ul>
                  <li>交通便利性</li>
                  <li>價錢高低</li>
                  <li>飯店舒適度</li>
                  <li>生活機能度</li>
                </ul>
              </div>

              <div class="reportChart topic_listType">
                <h4 class="title">你希望早上幾點出門，開始一天的行程？</h4>
                <div class="dataPad">
                  <ul>
                    <li></li>
                    <li>7:00以前</li>
                  </ul>
                  <ul>
                    <li></li>
                    <li>8:00</li>
                  </ul>
                  <ul>
                    <li class="point2"></li>
                    <li>9:00</li>
                  </ul>
                  <ul>
                    <li class="point"></li>
                    <li>10:00</li>
                  </ul>
                  <ul>
                    <li></li>
                    <li>11:00以後</li>
                  </ul>
                </div>
              </div>

              <div class="reportChart topic_listType">
                <h4 class="title">行程中如何安排餐廳？</h4>
                <div class="dataPad">
                  <ul>
                    <li class="point2"></li>
                    <li>查詢必吃名店，只要想吃再不順路都要排進去</li>
                  </ul>
                  <ul>
                    <li class="point"></li>
                    <li>依景點附近看有沒有好評店家</li>
                  </ul>
                  <ul>
                    <li></li>
                    <li>不一定要是名店，但以當地餐廳為主</li>
                  </ul>
                  <ul>
                    <li></li>
                    <li>吃根本不重要，隨便解決就好</li>
                  </ul>
                </div>
              </div>

              <div class="reportChart topic_listType">
                <h4 class="title">天色已晚，朋友在帶路，可是迷路了，妳的反應是？</h4>
                <div class="dataPad">
                  <ul>
                    <li></li>
                    <li>心裡會感覺不舒服，耽誤大家的時間，請朋友去問路</li>
                  </ul>
                  <ul>
                    <li></li>
                    <li>心裡會感覺不舒服，耽誤大家的時間，自己幫忙去問路</li>
                  </ul>
                  <ul>
                    <li></li>
                    <li>旅行就是這樣，沒有關係，請朋友去問路</li>
                  </ul>
                  <ul>
                    <li class="point3"></li>
                    <li>旅行就是這樣，沒有關係，自己幫忙去問路</li>
                  </ul>
                </div>
              </div>

              <div class="reportChart topic_listType">
                <h4 class="title">關於拍照，你的習慣是？</h4>
                <div>
                  <ol class="infoPad">
                    <li class="info_0">你</li>
                    <li class="info_1">對方</li>
                  </ol>
                </div>
                <div class="dataPad">
                  <ul>
                    <li></li>
                    <li>難得出國，一定要拍到滿意為止</li>
                  </ul>
                  <ul>
                    <li class="point3"></li>
                    <li>拍一些照片作紀念，適度的記錄旅行</li>
                  </ul>
                  <ul>
                    <li></li>
                    <li>不會主動拍照，請朋友分享照片就好</li>
                  </ul>
                  <ul>
                    <li></li>
                    <li>不用拍照，好好旅遊，用心感受</li>
                  </ul>
                </div>
              </div>

              <div class="reportChart topic_listType">
                <h4 class="title">朋友邀約一起出國玩，你覺得？</h4>
                <div class="dataPad">
                  <ul>
                    <li></li>
                    <li>不要，我只想一個人或只與另一半出國</li>
                  </ul>
                  <ul>
                    <li class="point3"></li>
                    <li>好啊，但不要太多人，三、四個人就好</li>
                  </ul>
                  <ul>
                    <li></li>
                    <li>好啊，越多人出去越好玩</li>
                  </ul>
                  <ul>
                    <li></li>
                    <li>都沒差</li>
                  </ul>
                </div>
              </div>


            </div>
          </div>

        </div>
      </div><!-- testingReportCount END -->

      <div class="goTest pt-3 pb-5">
        <p class="title text-center">▼想擁有自己的報告，快來完成測驗吧▼</p>
        <div class="btn-box text-center">
          <a href="#" class="btn btn-sty1">
            開始心理學測驗 <span class="sp-txt-small">(10分鐘)</span>
          </a>
        </div>
      </div>


    </div><!-- mypairCount END -->
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
      $('.pageMenu').find('li').eq(2).addClass('active');
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