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
        	<div class="title"><h2>安全感報告</h2><p></p></div>
            <div class="reportItem">
            	<h3>安全感</h3>
                <div class="reportDetial">
                	<div class="title">你的安全感類型：自在型</div>
                	<div class="script">你的安全感很高，能夠自在地做自己，也願意回應他人、親近伴侶、給彼此空間，又不會過於疏遠，大多數的時候都可以拿捏好關係中的距離。自在型的人，大多能夠給予伴侶信任、接納的感覺，大致來説，你擁有更多的心理資源，能去面對與學習親密關係中的各種情形。<br><br>一般來說自在型的兩個人相處起來是比較容易的，自在型也可能被其他類型的人所吸引，這是練習包容與耐心的好機會，在每一個吸引我們靠近的對象身上，總是潛藏著值得面對的親密功課，在面對喜歡的人時，我們需要記得自己雖是擁有較多資源的一方，對方身上可能也具有值得我們學習的特質。</div>
                	<div class="reportChart topic_XY_normal">
                    	<ul class="bg"><li>超然型</li><li>矛盾型</li><li>重情型</li><li>自在型</li></ul>
                    	<ul><li>高逃避</li><li>高焦慮</li><li>低逃避</li><li>低焦慮</li></ul>
                        <ul class="infoPad"><li class="info_0">你</li><li class="point" style="top:80%; left:20%"></li></ul>
                    </div>
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
