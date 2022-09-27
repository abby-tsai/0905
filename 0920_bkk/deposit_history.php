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
		<a class="back"><i class="fa fa-angle-left" aria-hidden="true"></i>會員加值</a>
    </div>
    <?php include_once("at_include/deposit_menu.php"); ?> <!-- 分類 -->
    <div class="depositCount">
        <div class="depositInfo">請選擇本次加值方案</div>
		<div class="depositHistoryPad">
			<div class="cssTable">
				<ul>
					<li>日期</li>
					<li>方案名稱</li><!-- RWD -->
					<li>金額</li>
					<li>明細</li>
				</ul>
				<ul>
					<li>2015<span>05/01</span></li>
					<li>方案A - 30天[原價]</li>
					<li>$5988</li>
					<li><a href="deposit_detail.php" class="checkDeposit">查看</a></li>
				</ul>
				<ul>
					<li>2015<span>05/01</span></li>
					<li>方案A - 30天[原價]</li>
					<li>$5988</li>
					<li><a href="deposit_detail.php" class="checkDeposit">查看</a></li>
				</ul>
				<ul>
					<li>2015<span>05/01</span></li>
					<li>方案A - 30天[原價]</li>
					<li>$5988</li>
					<li><a href="deposit_detail.php" class="checkDeposit">查看</a></li>
				</ul>
				<ul>
					<li>2015<span>05/01</span></li>
					<li>方案A - 30天[原價]</li>
					<li>$5988</li>
					<li><a href="deposit_detail.php" class="checkDeposit">查看</a></li>
				</ul>
				<ul>
					<li>2015<span>05/01</span></li>
					<li>方案A - 30天[原價]</li>
					<li>$5988</li>
					<li><a href="deposit_detail.php" class="checkDeposit">查看</a></li>
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