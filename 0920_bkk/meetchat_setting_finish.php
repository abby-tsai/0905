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
<body class="meetchat">
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main">
	<div class="headerBack">
		<a class="back"><i class="fa fa-angle-left" aria-hidden="true"></i> 見面聊</a>
    </div>
	<?php include_once("at_include/meetchat_menu.php"); ?> <!-- 分類 -->
    <div class="meetListCount">      
		<div class="meetSettingTop selectSetting">
			<h1>見面聊 <input type="checkbox" id="st_meetchat" checked /><label for="st_meetchat"></label></h1>
			<p>
				開啟見面聊功能，讓別人知道你有見面聊的意願，對方可以向你發出見面邀請，你可以決定是否接受邀請。
			</p>
		</div>
        <div class="meetListPad clear">
				<div class="mypairItem">
					<ul class="picture"><li><img alt="" src="images/user_photo_default_l.png" /></li></ul>
					<ul class="status"><li class=""></li><li class="number">95</li></ul>
					<ul class="basicData">
						<li><p><i class="online"></i>許瑋甯<span>台北市/35歲</span></p></li>
						<li class="heart3">互有好感</li>
					</ul>
					<ul class="infoData">
						<li><p>碩士</p>台北科技大學</li><li><p>知名外商</p>行銷企劃主管</li>
					</ul>
					<ul class="meetTag"><li><a href="" class="btn_meet active"><span>可以</span><p>見面聊</p></a></li></ul>
				</div>
				<div class="meetPairData">
					<div class="dataArea">
						<h3>周末<span>下午茶、午餐</span></h3>
						<div class="meetInterestList"><ul>
							<li>輕鬆聊</li><li>人生夢想</li><li>電視電影</li>
						</ul></div>
					</div>
					<div class="dataArea">
						<div class="meetlotionTitle"><i class="icon_pin01"></i><div>台北市<span>信義區、大安區</span></div></div>
						<div class="meetPairRule"><ul>
							<li><i class="icon_mn_pair"></i>各帶一位朋友</li>
							<li><i class="icon_meetchat_cup"></i>4人</li>
							<li><i class="icon_meetchat_toeat"></i>$300</li>
							<li><i class="icon_mn_deposit"></i>各付各的</li>
						</ul></div>
					</div>
				</div>
				<div class="meetCtrlPad">
					<a class="" href="meetchat_setting.php">編輯設定</a>
				</div>
        </div>
    </div><!-- meetListCount END -->
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
			<?php include_once("at_include/page_menu_js.php"); ?>
			
		})
		$(document).ready(function() {
			$('.pageMenu').find('li').eq(1).addClass('active');
			
		});
	</script>
</body>
</html>
