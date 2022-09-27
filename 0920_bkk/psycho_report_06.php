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
        	<div class="title"><h2>衝突模式報告</h2><p></p></div>
            <div class="reportItem">
            	<h3>衝突因應</h3>
                <div class="reportDetial">
                	<div class="title">你的衝突因應模式：主導</div>
                	<div class="script">在衝突中，你比較看重自己的想法，你對自己的分析與決定很有信心，希望說服對方也能夠接受與認同你的想法。可是往往也因為這樣，容易忽略了對方的感受。<br><br>
                    在溝通時，試著多聽聽對方的需要是什麼，認同與了解對方並不意味著放棄自己的需求，而是更能找出雙方都能接受的平衡點。例如，你可以在你急著想要表達需求時，先冷靜下來，嘗試去聽聽對方的想法。溝通需要一點時間，當對方的需要愈被傾聽的時候，反而更能接受你的建議。</div>
                	<div class="reportChart topic_XY_normal">
                    	<ul class="bg"><li>逃避型</li><li>謙讓型</li><li>整合型</li><li>主導型</li></ul>
                    	<ul><li>在意自己少</li><li>在意對方多</li><li>在意自己多</li><li>在意對方少</li></ul>
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
