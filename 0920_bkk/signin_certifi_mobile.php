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
<body class="signdata">
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main" class="">
    <div class="signdataCount height_FR2">
	<div class="falseHeader"></div>
		<h2>手機認證</h2>
        <div class="signdataPad">
			<div class="certifiPad">
				<form action="">
					<div class="certifi_get">
						<li class="ctrlPad"><input type="text" placeholder="請輸入手機號碼"></li>
						<li class="ctrlPad">
							<input type="submit" class="btn_blue CGc" value="取得驗證碼">
							<p>系統會立即以簡訊發送一組驗證碼</p>
						</li>
					</div>
				</form>
				<form action="signin_picture.php">
					<div class="certifi_send">
						<li class="ctrlPad"><input type="text" placeholder="請輸入驗證代碼"></li>
						<li class="ctrlPad">
							<input type="submit" class="btn_red CGc" value="送出驗證碼">
							<p><a href="signin_certifi.php">沒收到手機認證碼簡訊</a></p>
						</li>
					</div>
				</form>
			</div>
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
