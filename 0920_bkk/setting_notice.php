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
	<div class="headerBack">
		<a class="back"><i class="fa fa-angle-left" aria-hidden="true"></i>通知設定</a>
    </div>
	<?php include_once("at_include/setting_menu.php"); ?> <!-- 分類 -->
    <div class="settingCount">
    	<form>
			<div class="settingPad selectSetting">
				<ul class="title"><li>通知信件</li></ul>
				<ul>
					<li>今日配對</li><li><input type="checkbox" id="st_031" checked /><label for="st_031"></label></li>
				</ul>
				<ul>
					<li>配對名單即將消失</li><li><input type="checkbox" id="st_032" /><label for="st_032"></label></li>
				</ul>
				<ul>
					<li>表達好感</li><li><input type="checkbox" id="st_033" /><label for="st_033"></label></li>
				</ul>
				<ul>
					<li>訊息通知</li><li><input type="checkbox" id="st_034" /><label for="st_034"></label></li>
				</ul>
			</div>
			<div class="settingPad selectSetting">
				<ul class="title"><li>推播通知</li></ul>
				<ul>
					<li>今日配對</li><li><input type="checkbox" id="st_041" checked /><label for="st_041"></label></li>
				</ul>
				<ul>
					<li>配對名單即將消失</li><li><input type="checkbox" id="st_042" checked /><label for="st_042"></label></li>
				</ul>
				<ul>
					<li>表達好感</li><li><input type="checkbox" id="st_043" checked /><label for="st_043"></label></li>
				</ul>
				<ul>
					<li>訊息留言</li><li><input type="checkbox" id="st_044" checked /><label for="st_044"></label></li>
				</ul>
				<ul>
					<li>瀏覽過你的檔案</li><li><input type="checkbox" id="st_045" checked /><label for="st_045"></label></li>
				</ul>
				<ul>
					<li>文章閱讀邀請</li><li><input type="checkbox" id="st_046" checked /><label for="st_046"></label></li>
				</ul>
				<ul>
					<li>收到禮卷</li><li><input type="checkbox" id="st_047" checked /><label for="st_047"></label></li>
				</ul>
				<ul>
					<li>你送的禮券被讀取</li><li><input type="checkbox" id="st_048" checked /><label for="st_048"></label></li>
				</ul>
				<ul>
					<li>收到點歌</li><li><input type="checkbox" id="st_049" checked /><label for="st_049"></label></li>
				</ul>
				<ul>
					<li>你送的點歌被讀取</li><li><input type="checkbox" id="st_050" /><label for="st_050"></label></li>
				</ul>
				<ul>
					<li>試用任務已完成</li><li><input type="checkbox" id="st_051" /><label for="st_051"></label></li>
				</ul>
				<ul>
					<li>收到見面聊邀請</li><li><input type="checkbox" id="st_050" /><label for="st_050"></label></li>
				</ul>
				<ul>
					<li>收到見面聊回覆</li><li><input type="checkbox" id="st_051" /><label for="st_051"></label></li>
				</ul>
			</div>      
			<div class="ctrlPad">
				<input type="submit" class="btn_blue" value="儲存" />
			</div>
		</form>  
    </div><!-- settingCount END -->    
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
			<?php include_once("at_include/page_menu_js.php"); ?> /* Testing Menu 控制*/				
		})
		$(document).ready(function() {
			$('.pageMenu').find('li').eq(2).addClass('active');
		});
	</script>
</body>
</html>
