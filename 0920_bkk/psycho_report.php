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
<body class="testreport">
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main">
    <div class="testreportCount">
        <div class="testreportPad">
        	<div class="title"><h2></h2><p></p></div>
            <div class="reportItem">
            	<h3></h3>
                <div class="reportDetial">
                	<!-- 下面列表依報告內容而不同 -->
                	<li class="script"></li>
                	<div class="reportChart">
                    </div>
                	<div class="reportChart">
                    </div>
                	<li class="title"></li>
                	<li class="script"></li>
                	<!-- -->
                </div>
            </div>
        
        </div>
        <div class="articlePlus_ad">
            <?php include("at_include/plus_article.php"); ?> <!-- 文章補充 -->      
        </div> 
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
