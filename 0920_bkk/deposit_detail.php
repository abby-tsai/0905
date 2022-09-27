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
<body class="deposit">
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main">
	<div class="headerBack">
		<a class="back"><i class="fa fa-angle-left" aria-hidden="true"></i>交易明細</a>
    </div>
    <?php include_once("at_include/deposit_menu.php"); ?> <!-- 分類 -->
    <div class="depositCount">
		<div class="depositDetailPad">
			<div class="cssTable">
				<ul>
					<li>方案名稱</li>
					<li>試用任務，上傳7張個人照片</li>
				</ul>
				<ul>
					<li>交易日期</li>
					<li>2016/10/31</li>
				</ul>
				<ul>
					<li>交易金額</li>
					<li>$3,375</li>
				</ul>
				<ul>
					<li>交易前會期</li>
					<li>無</li>
				</ul>
				<ul>
					<li>本次取得會期</li>
					<li>30天</li>
				</ul>
				<ul>
					<li>交易後會期</li>
					<li>2016/10/31 ~ 2017/01/30</li>
				</ul>
				<ul>
					<li>退款日期</li>
					<li>2016/11/30</li>
				</ul>
				<ul>
					<li>退款</li>
					<li>$1,876</li>
				</ul>
				<ul>
					<li>實付金額</li>
					<li>$1499</li>
				</ul>
				<ul>
					<li>退款後會期</li>
					<li>2016/10/31 ~ 2016/11/30</li>
				</ul>
			</div>       
		</div>
    </div> <!-- depositCount END -->
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
            $('.pageMenu').find('li').eq(1).addClass('active');
			$('.subHeader').find('li').eq(5).addClass('active');
        });
    </script>
</body>
</html>