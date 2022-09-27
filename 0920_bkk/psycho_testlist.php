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
<body class="psycho_test">
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main">
	<div class="headerBack">
		<a class="back"><i class="fa fa-angle-left" aria-hidden="true"></i>心理測驗</a>
    </div>
    <div class="psychoCount">
	    <div class="psychoTestListPad">
        	<ul class="toSignup height_R2">
				<?php include_once("at_include/testListCover_01pair.php"); ?>
        		<li><a href="signup.php" class="btn_toTest CGc">配對測驗</a></li>
        	</ul>
        	<ul class="height_R2">
				<?php include_once("at_include/testListCover_02personality.php"); ?>
        		<li><a href="psycho_test_02.php" class="btn_toTest CGc">開始測驗</a></li>
        	</ul>
        	<ul class="height_R2">
				<?php include_once("at_include/testListCover_03mylove.php"); ?>
        		<li><a href="psycho_test_03.php" class="btn_toTest CGc">開始測驗</a></li>
        	</ul>
        	<ul class="height_R2">
				<?php include_once("at_include/testListCover_04lovestyle.php"); ?>
        		<li><a href="psycho_test_04.php" class="btn_toTest CGc">開始測驗</a></li>
        	</ul>
        	<ul class="height_R2">
				<?php include_once("at_include/testListCover_05travelcomp.php"); ?>
        		<li><a href="psycho_test_05.php" class="btn_toTest CGc">開始測驗</a></li>
        	</ul>
        	<ul class="height_R2">
				<?php include_once("at_include/testListCover_06conflict.php"); ?>
        		<li><a href="psycho_test_06.php" class="btn_toTest CGc">開始測驗</a></li>
        	</ul>
        	<ul class="height_R2">
				<?php include_once("at_include/testListCover_07security.php"); ?>
        		<li><a href="psycho_test_07.php" class="btn_toTest CGc">開始測驗</a></li>
        	</ul>
        
	    </div><!-- psychoTestListPad END -->
                       
    </div><!-- psychoCount END -->
    
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
			$('.off_psyc').addClass('active');
		});
	</script>
</body>
</html>
