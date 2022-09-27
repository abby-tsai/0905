<!doctype html>
<html><head>
	<?php include_once("at_include/CG_config.php"); ?> 
	<title><?php echo $webTitle; ?></title>
	<meta name="keywords" content="<?php echo $MetaCopyright; ?>"/> 
    <!-- 網頁描述 -->
	<meta name="description" content="<?php echo $MetaDescription; ?>"/>
	<meta name="Author" content="<?php echo $MetaAuthor; ?>"/>
	<meta name="copyright" content="<?php echo $MetaCopyright; ?>"> 
    <!-- iCon圖示 -->
	<link rel="shortcut icon" href="favicon.ico">
    <!-- FB  -->
    <meta property="og:title" content="<?php echo $webTitle; ?>"/>
    <meta property="og:url" content="<?php echo $URL; ?>"/>
    <meta property="og:image" content="<?php echo $Meta_ogImg_0; ?>"/>
    <meta property="og:description" content="<?php echo $MetaDescription; ?>"/>
    <meta property="fb:app_id" content="<?php echo $FB_ID; ?>"/>    
    <!-- CSS -->    
    <link href="css/at_cage.css" rel="stylesheet" type="text/css" />
    <link href="css/basic_findtheone.css" rel="stylesheet" type="text/css" />
    <link href="css/basic_findtheone_plus.css" rel="stylesheet" type="text/css" />
	<?php include_once("at_include/inc_facebook.php"); ?>
</head>
<body class="static">
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main">
	<div class="staticheader">
	</div>
	<div class="staticContent">
		<div class="icon_st icon_st_contact"></div>
		<h2>連絡我們</h2>
		<form action="" name="" method="" class="stContactForm">
			<h4><label for="name">您的大名<span>*</span></label>
			<input type="text" name="" value="" required="required" placeholder="Dennis" id="name"></h4>
			<h4><label for="email">您的郵箱<span>*</span></label>
			<input type="email" name="" value="" required="required" placeholder="dennis@findtheone.com.tw" id="email"></h4>
			<h4><label for="title">信件標題<span>*</span></label>
			<input type="text" name="" value="" required="required" placeholder="收不到簡訊" id="title"></h4>
			<h4><label for="detail">信件內容<span>*</span></label>
  			<textarea name="" cols="" rows="12" required id="detail" placeholder="findtheone你好，於是我們策劃了findtheone心理學演算法婚友配對平台，整合全球的兩性心理學研究，希望藉由心理學演算法的配對機制，用更科學的方法，以更少的時間，找到更適合交往的人，並且在接觸之前，了解彼此的相處模式。我們也希望藉由一些虛擬互動工具，達成實體的人際互動效果，讓技巧生疏、不知道要如何開始的人，有更簡單的方式與對方建立關係。Dennis"></textarea></h4>
			<input type="submit" name="" value="送出" class="btn_blue">
			<p class="ta-C">客服信箱：service@meettheone.com.tw</p>
		</form>
	</div>
</div><!-- main END -->
<?php include_once("at_include/footer.php"); ?>
<!-- jQuery -->    
    <script type="text/javascript" src="js/jquery.min-2.2.4.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.touchwipe.min.js"></script>
    <script type="text/javascript" src="js/at_Rev.min.js"></script>
    <script type="text/javascript" src="js/at_cage.js"></script>
    <script>
		$(window).load(function() {
			
		})
	</script>
</body>
</html>
