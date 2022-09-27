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
    <link href="css/basic_findtheone_writer.css" rel="stylesheet" type="text/css" />
	<?php include_once("at_include/inc_facebook.php"); ?>
</head>
<body>
<div id="fb-root"></div>
<?php include_once("at_include/wt_header.php"); ?>
<div id="main">
	<div class="wt_myReport">
		<?php include_once("at_include/wt_myreport_menu.php"); ?> <!-- 分類 -->
		<div class="cssTable state">
			<ul>
				<li>夥伴名稱: <span>旅行酒吧</span></li>
				<li>累計註冊會員數: <span>328 人</span></li>
				<li>累計付費人數: <span>100 人</span></li>
			</ul>
		</div>
		<div class="cssTable date">
			<ul>
				<li>時間</li>
				<li><select><option>2017年1月</option></select></li>
				<li><input type="button" value="查詢" class="btn_search" /></li>
				<li>(本月之金額計算到昨日)</li>
			</ul>
		</div>
		
		<div class="cssTable data">
			<ul>
				<li>序號</li>
				<li>分潤對象</li>
				<li>分潤月份</li>
				<li>會員暱稱</li>
				<li>性別</li>
				<li>註冊日期</li>
				<li>貢獻金額</li>
				<li>營業稅5%</li>
				<li>手續費3%</li>
				<li>貢獻毛利</li>
				<li>分潤比例</li>
				<li>分潤金額</li>
			</ul>
			<ul>
				<li>1</li>
				<li>旅行酒吧</li>
				<li>2017.01</li>
				<li>阿部寬</li>
				<li>男</li>
				<li>2017.01.02</li>
				<li>1000</li>
				<li>50</li>
				<li>30</li>
				<li>920</li>
				<li>10%</li>
				<li>92</li>
			</ul>
			<ul>
				<li>1</li>
				<li>旅行酒吧</li>
				<li>2017.01</li>
				<li>阿部寬</li>
				<li>男</li>
				<li>2017.01.02</li>
				<li>1000</li>
				<li>50</li>
				<li>30</li>
				<li>920</li>
				<li>10%</li>
				<li>92</li>
			</ul>
			<ul>
				<li>1</li>
				<li>旅行酒吧</li>
				<li>2017.01</li>
				<li>阿部寬</li>
				<li>男</li>
				<li>2017.01.02</li>
				<li>1000</li>
				<li>50</li>
				<li>30</li>
				<li>920</li>
				<li>10%</li>
				<li>92</li>
			</ul>
			<ul>
				<li>1</li>
				<li>旅行酒吧</li>
				<li>2017.01</li>
				<li>阿部寬</li>
				<li>男</li>
				<li>2017.01.02</li>
				<li>1000</li>
				<li>50</li>
				<li>30</li>
				<li>920</li>
				<li>10%</li>
				<li>92</li>
			</ul>
			<ul>
				<li>合計</li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li>7000</li>
				<li>350</li>
				<li>210</li>
				<li>6440</li>
				<li></li>
				<li>3220</li>
			</ul>
		</div>
		
		
	</div>
</div><!-- main END -->
<?php include_once("at_include/footer.php"); ?>
<!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min-2.2.4.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/at_cage_writer.js"></script>
    <script>
		$(window).load(function() {
			$('.subHeader').find('li').eq(4).addClass('active');
			$('.pageMenu').find('li').eq(0).addClass('active');
		})
	</script>
</body>
</html>
