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
<body class="testing_topics">
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main">
	<div class="headerBack">
		<a class="back"><i class="fa fa-angle-left" aria-hidden="true"></i>旅伴測驗</a>
    </div>
	<?php include_once("at_include/testing_menu.php"); ?> <!-- 測驗分類 -->
    <div class="testingCount">
    	<!-- 以下可以用資料庫 -->
        <div class="testingPad">
            <div class="testingStart">
				<ul>
					<?php include_once("at_include/testListCover_05travelcomp.php"); ?>
					<li class="btnArea"><a class="btn_toTest CGc">開始測驗</a></li>
				</ul>
            </div>
            <form action="testing_main_4report.php">
        	<div class="pageGroup">
                <?php include_once("at_include/testingCount_05travelcomp.php"); ?>    
        	</div>
        	</form>
        </div>        
    	<!-- 以上可以用資料庫 END -->
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
			<?php include_once("at_include/page_menu_js.php"); ?> /* Testing Menu 控制*/	
			
		})
		$(document).ready(function() {
			$('.pageMenu').find('li').eq(3).addClass('active');
			$('.subHeader').find('li').eq(1).addClass('active');
			$('.off_psyc').addClass('active');
			var Gd = $(document), Gdw = Gd.width();
			if(Gdw <= 360){
				$('.pageMenu').find('ul').css('margin-left','-122px');
			}
		});
		$(function () {
			$(".ansPad .items").sortable({
				connectWith: ".items"  
			});
		});
	</script>
</body>
</html>
