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
  <?php include_once("../example/at_include/header6_example.php"); ?>
  <div id="main">
    <div class="headerBack">
      <a class="back"><i class="fa fa-angle-left" aria-hidden="true"></i>我的測驗</a>
    </div>

    <!-- 測驗分類 -->
    <div class="pageMenu CGt">
      <ul>
        <li class="i_report_pair"><a href="testing_main_1report_example.php">配對<br>報告</a></li>
        <li class="i_report_person"><a href="testing_main_2report_example.php">性格<br>測驗</a></li>
        <li class="i_report_mylove"><a href="testing_main_3report_example.php">愛之語<br>測驗</a></li>
        <li class="i_report_lovestyle"><a href="testing_main_5report_example.php">愛情風格<br>測驗</a></li>
        <li class="i_report_travel"><a href="testing_main_4report_example.php">旅伴<br>報告</a></li>
      </ul>
      <ul class="nav"></ul>
    </div>

    <div class="psychoCount">
      <div class="psychoTestListPad fix-list">
        <ul class="toSignup height_R2 has-linkPad">
          <li class="title">配對測驗</li>
          <li class="picture"><img alt="" src="../images/image_00.jpg" /></li>
          <li class="name">找出適合你的另一半</li>
          <li class="script">政大心理系教授、海苔熊推薦，排除95%不適人選，72H約到想見的人</li>
          <li class="tobeMamber"><a href="testing_main_1report_example.php" class="btn_orange CGc">閱讀報告</a></li>
          <li class="linkPad">
            <a class="shareToFB notApplyBtn"></a>
            <a class="shareToLine notApplyBtn"></a>
            <a class="getLink notApplyBtn"></a>
          </li>
        </ul>
        <ul class="height_R2 has-linkPad">
          <li class="title">性格測驗</li>
          <li class="picture"><img alt="" src="../images/image_02.jpg" /></li>
          <li class="name">我們其實不太了解自己</li>
          <li class="script">了解一個人最好的方法，就是認識他的性格。心理學家認為，性格是一個人面對周遭世界的態度，透過行為表現出來，別人所認識的你，反映了你的內在心理，想更深入的了解自己嗎？趕快開始這個探索的旅程吧！</li>
          <li><a href="testing_main_2report_example.php" class="btn_orange CGc">閱讀報告</a></li>
          <li class="linkPad">
            <a class="shareToFB notApplyBtn"></a>
            <a class="shareToLine notApplyBtn"></a>
            <a class="getLink notApplyBtn"></a>
          </li>
        </ul>
        <ul class="height_R2 has-linkPad">
          <li class="title">愛之語測驗</li>
          <li class="picture"><img alt="" src="../images/image_03.jpg" /></li>
          <li class="name">為什麼她都說感覺不到我的愛？</li>
          <li class="script">心理學家將愛的表達分成五種，不同的人對於被愛的方式，有不同的偏好，我們常不自覺的用自己喜歡的方式去愛另一半，但卻不是對方想要的方式，所以伴侶常常感覺不到愛，學會愛之語，讓你的付出事半功倍！</li>
          <li><a href="testing_main_3report_example.php" class="btn_orange CGc">閱讀報告</a></li>
          <li class="linkPad">
            <a class="shareToFB notApplyBtn"></a>
            <a class="shareToLine notApplyBtn"></a>
            <a class="getLink notApplyBtn"></a>
          </li>
        </ul>
        <ul class="height_R2 has-linkPad">
          <li class="title">愛情風格測驗</li>
          <li class="picture"><img alt="" src="../images/image_04.jpg" /></li>
          <li class="name">你知道自己的愛情風格嗎？</li>
          <li class="script">心理學家把愛情風格分為八種類型，不同的愛情風格在戀愛關係中會有不同的表現，在戀愛進行的過程中也會有不同的偏好和特質，了解自己的愛情風格有助於看清楚自己的戀愛模式。趕快開始這個重要的測驗吧！</li>
          <li><a href="testing_main_5report_example.php" class="btn_orange CGc">閱讀報告</a></li>
          <li class="linkPad">
            <a class="shareToFB notApplyBtn"></a>
            <a class="shareToLine notApplyBtn"></a>
            <a class="getLink notApplyBtn"></a>
          </li>
        </ul>
        <ul class="height_R2 has-linkPad">
          <li class="title">旅伴測驗</li>
          <li class="picture"><img alt="" src="../images/image_05.jpg" /></li>
          <li class="name">你適合跟誰一起旅行？</li>
          <li class="script">同樣的地方跟不同人去，有很不一樣的感受，你經歷過開心破表的旅行嗎？你曾有過痛苦不堪的旅程嗎？旅伴的好壞差別很大，你的旅行風格是什麼？你適合跟誰一起旅行？現在就開始這個重要的測驗吧！</li>
          <li><a href="testing_main_4report_example.php" class="btn_orange CGc">閱讀報告</a></li>
          <li class="linkPad">
            <a class="shareToFB notApplyBtn"></a>
            <a class="shareToLine notApplyBtn"></a>
            <a class="getLink notApplyBtn"></a>
          </li>
        </ul>
      </div><!-- psychoTestListPad END -->

      <div class="goTest pb-5">
        <p class="title text-center">▼想擁有自己的報告，快來完成測驗吧▼</p>
        <div class="btn-box text-center">
          <a href="#" class="btn btn-sty1">
            開始心理學測驗 <span class="sp-txt-small">(10分鐘)</span>
          </a>
        </div>
      </div>
    </div><!-- psychoCount END -->

  </div><!-- main END -->

  <div class="hintContainer">
    <p>
      此為範例
      <a href="../index5.php">回到首頁</a>
    </p>
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
  <script type="text/javascript" src="../js/clipboard.js"></script>
	<script type="text/javascript" src="../js/at_Rev.min.js"></script>
	<script type="text/javascript" src="../js/at_cage.js"></script>

  <!-- abby JS -->
  <script type="text/javascript" src="../js/abby/abby_example.js"></script>
  <script type="text/javascript" src="../js/abby/abby.js"></script>

  <script>
    $(window).load(function() {
      <?php include_once("../at_include/page_menu_js.php"); ?> /* Testing Menu 控制*/
    })
  </script>
</body>

</html>