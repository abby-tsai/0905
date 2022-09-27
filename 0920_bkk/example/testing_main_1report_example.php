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

<body class="testingReport onSign">
  <div id="fb-root"></div>
  <?php include_once("../example/at_include/header6_example.php"); ?>
  <div id="main">
    <div class="headerBack">
      <a class="back"><i class="fa fa-angle-left" aria-hidden="true"></i>配對報告</a>
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

    <div class="testingReportCount">
      <div class="testingReportPad clear">
        <div class="reportTitle">
          <h1>配對報告</h1>
          <p>以下是你的配對測驗報告，我們將從安全感、衝突處理、婚姻價值和興趣的角度，幫助你認識自己，並且了解和另一半的相處時，你的行為模式。</p>
        </div>

        <?php include_once("../example/at_include/testingReport_01habit_example.php"); ?>

      </div>
    </div><!-- testingReportCount END -->

    <div class="goTest pb-5">
      <p class="title text-center">▼想擁有自己的報告，快來完成測驗吧▼</p>
      <div class="btn-box text-center">
        <a href="#" class="btn btn-sty1">
          開始心理學測驗 <span class="sp-txt-small">(10分鐘)</span>
        </a>
      </div>
    </div>

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
  <script type="text/javascript" src="../js/jquery.touchwipe.min.js"></script>
  <script type="text/javascript" src="../js/at_Rev.min.js"></script>
  <script type="text/javascript" src="../js/at_cage.js"></script>

  <!-- abby JS -->
  <script type="text/javascript" src="../js/abby/abby_example.js"></script>
  <script type="text/javascript" src="../js/abby/abby.js"></script>

  <script>
    $(window).load(function() {
      <?php include_once("../at_include/page_menu_js.php"); ?> /* Testing Menu 控制*/
    })
    $(document).ready(function() {
      $('.pageMenu').find('li').eq(0).addClass('active');
    });
  </script>
</body>

</html>