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
	<?php include_once("at_include/inc_facebook.php"); ?>
</head>

<body class="signdata signdataInfo">
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main">
    <div class="signdataCount height_FR2">
		<div class="falseHeader"></div>
		<h2>服務模式說明</h2>
		<div class="padWhite">
			<p>Hi, XXXXXX :
			<p>恭喜，配對測驗和認證已經完成！</p>
			<p>以下是我們的進行方式:</p>
			<p>1. 每天早上6:00以前，我們會根據心理學分析，在最適合的1%人群中挑選當日的適配名單，若當日無適合的人選，則配對將順延到次日。</p>
			<p>2. 名單為雙向配對，男女雙方會同時取得彼此的基本資料和契合指數。</p>
			<p>3. 完成試用任務，可以免費獲得VIP會期，會期內可使用平台完整的功能。</p>
			<p>4. 成為VIP加值會員，可以無限次收發訊息，並閱讀完整的心理學契合報告。</p>
			<p>5. 把握時間積極的和對方互動，如果在15天之內雙方都互相表達好感 (互相LIKE)，你們就會在彼此的適配名單中留下，繼續更深入的交流，否則適配名單就會永遠消失。</p>
			<p>幸福掌握在你的手中，勇敢地前進吧!</p>	
			<div class="ctrlPad"><a href="mypairlist.php" class="btn_blue CGc">閱讀配對報告</a></div>
		</div>
				
    </div><!-- testingCount END -->
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
		$(document).ready(function() {
		});
	</script>
</body>
</html>
