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
<div id="main">
    <div class="signdataCount height_FR2">
	<div class="falseHeader"></div>
		<h2>人工認證</h2>
        <div class="padWhite">
				<div class="certifiPad">
					<p>
						沒有收到認證碼簡訊的原因，可能是由於您向電信運營商設定了不接收廣告簡訊。					
					</p>
					<p>
						請點擊申請人工認證按鍵，我們將於24小時內以電話方式向您驗證手機號碼，如遇假日，驗證時間將順延至工作日，通過後，在網站首頁點擊facebook登入，即可回到目前的步驟，繼續使用本服務。						
					</p>
					<form action="">
						<div class="ctrlPad">
							<div class="cssTable">
								<ul>
									<li style="width: 48%;"><input type="submit" class="btn_blue" value="申請人工認證"></li>
									<li></li>
									<li style="width: 48%;"><input type="button" class="btn_blue" value="回上一頁" onClick="window.history.go(-1);" style="line-height: 160%;"></li>
								</ul>
							</div>
							
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
    <script type="text/javascript" src="js/at_cage.js"></script>
    <script>
		$(window).load(function() {
		})
		$(document).ready(function() {
		});
	</script>
</body>
</html>
