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
<body class="signup">
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main">
    <div class="signCount height_FR2">
		<div class="falseHeader"></div>
	    <h1>註冊</h1>
	    <div class="stupidPad">
			<p>為保障交友品質，本服務採用fb身分認證，我們會驗證您的感情狀態並取得電子郵件，但「絕不會」在 fb上以任何名義張貼內容。</p>
			<form action="signin.php">
				<p><input type="checkbox" /> 我已經閱讀過並同意<a href="static_rule.php" target="_blank">網站使用條款</a>與<a href="static_privacy.php" target="_blank">隱私權政策</a></p>
				<div class="ctrlPad">
					<input type="submit" value="使用facebook註冊" class="btn_fb" onClick="FB.login()" />
					<p>本服務目前僅供持有台灣手機門號之用戶<br />使用其他國家手機門號未來將陸續開放</p>
				</div>
			</form>
		</div>           
    </div><!-- signupCount END -->    
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
