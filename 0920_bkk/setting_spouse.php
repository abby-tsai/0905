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
<body class="settingPage">
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main">
	<?php include_once("at_include/setting_menu.php"); ?> <!-- 分類 -->
    <div class="settingCount">
		<p>設定你期望的擇偶條件，可幫助描繪出另一半的理想輪廓，透過將條件排序，釐清在抉擇時的優先順序。</p>
		<p>清單的內容與順序可以隨時調整，內容可以參考範例，也可以自行填寫，正面與負面的條件請不要重複一件事的正反面。</p>
		<p>互動一段時間後，可在"我的配對/吻合度”叫出這個清單，看看對方是否符合你的期待, 如果你喜歡對方，但是跟條件清單有較大的落差，有可能你們並不適合，只是被暫時吸引，也可能是你的擇偶條件需要調整，透過這個工具，可以幫助你在後續的發展中做出更正確的判斷。</p>
		<div class="spousePad">
			<div>
			
			
			</div>
		</div>    
    </div><!-- settingCount END -->    
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
			<?php include_once("at_include/page_menu_js.php"); ?> /* Testing Menu 控制*/				
		})
		$(document).ready(function() {
			$('.pageMenu').find('li').eq(3).addClass('active');
		});
	</script>
</body>
</html>
