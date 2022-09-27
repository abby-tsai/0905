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
		<a class="back"><i class="fa fa-angle-left" aria-hidden="true"></i>配對設定</a>
    </div>
	<?php include_once("at_include/setting_menu.php"); ?> <!-- 分類 -->
    <div class="settingCount">
    	<form>
		<div class="settingPad selectSetting">
			<ul class="title"><li>你可以接受對方的居住地是? (可複選)</li></ul>
			<ul>
				<li>台灣</li><li><input type="checkbox" id="st_001" checked /><label for="st_001"></label></li>
			</ul>
			<ol>
				<li>北北基宜</li><li><input type="checkbox" id="st_002" /><label for="st_002"></label></li>
			</ol>
			<ol>
				<li>桃竹竹苗</li><li><input type="checkbox" id="st_003" /><label for="st_003"></label></li>
			</ol>
			<ol>
				<li>中彰投</li><li><input type="checkbox" id="st_004" /><label for="st_004"></label></li>
			</ol>
			<ol>
				<li>雲嘉嘉南</li><li><input type="checkbox" id="st_005" /><label for="st_005"></label></li>
			</ol>
			<ol>
				<li>中彰投</li><li><input type="checkbox" id="st_006" /><label for="st_006"></label></li>
			</ol>
			<ol>
				<li>高屏</li><li><input type="checkbox" id="st_007" checked /><label for="st_007"></label></li>
			</ol>
			<ol>
				<li>花東</li><li><input type="checkbox" id="st_008" checked /><label for="st_008"></label></li>
			</ol>
			<ol>
				<li>金馬澎湖</li><li><input type="checkbox" id="st_009" /><label for="st_009"></label></li>
			</ol>
       		<ul>
       			<li>中港澳</li><li><input type="checkbox" id="st_010" /><label for="st_010"></label></li>
       		</ul>
       		<ul>
       			<li>日韓</li><li><input type="checkbox" id="st_011" checked /><label for="st_011"></label></li>
       		</ul>
       		<ul>
       			<li>美加</li><li><input type="checkbox" id="st_012" /><label for="st_012"></label></li>
       		</ul>
       		<ul>
       			<li>東南亞</li><li><input type="checkbox" id="st_013" /><label for="st_013"></label></li>
       		</ul>
       		<ul>
       			<li>其他地區</li><li><input type="checkbox" id="st_014" /><label for="st_014"></label></li>
       		</ul>
        </div>
		<div class="settingPad selectSetting">
			<ul class="title"><li>你可以接受對方的信仰是? (可複選)</li></ul>
			<ul>
				<li>基督教</li><li><input type="checkbox" id="st_021" /><label for="st_021"></label></li>
			</ul>
			<ul>
				<li>天主教</li><li><input type="checkbox" id="st_022" /><label for="st_022"></label></li>
			</ul>
			<ul>
				<li>佛教</li><li><input type="checkbox" id="st_023" /><label for="st_023"></label></li>
			</ul>
			<ul>
				<li>道教</li><li><input type="checkbox" id="st_024" /><label for="st_024"></label></li>
			</ul>
			<ul>
				<li>一貫道</li><li><input type="checkbox" id="st_025" /><label for="st_025"></label></li>
			</ul>
			<ul>
				<li>回教</li><li><input type="checkbox" id="st_026" /><label for="st_026"></label></li>
			</ul>
			<ul>
				<li>印度教</li><li><input type="checkbox" id="st_027" /><label for="st_027"></label></li>
			</ul>
			<ul>
				<li>其他</li><li><input type="checkbox" id="st_028" /><label for="st_028"></label></li>
			</ul>
			<ul>
				<li>無</li><li><input type="checkbox" id="st_029" /><label for="st_029"></label></li>
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
    <script type="text/javascript" src="js/at_Rev.min.js"></script>
    <script type="text/javascript" src="js/at_cage.js"></script>
    <script>
		$(window).load(function() {
			<?php include_once("at_include/page_menu_js.php"); ?> /* Testing Menu 控制*/				
		})
		$(document).ready(function() {
			$('.pageMenu').find('li').eq(0).addClass('active');
		});
	</script>
</body>
</html>
