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
<body class="present_self">
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main">
	<?php include_once("at_include/present_menu.php"); ?> <!-- 分類 -->
    <div class="presentCount">
		<div class="presentInfo"> 這些是別人送給你的禮物，請持電子禮卷前往全台7-11門市兌換。</div>  
        <div class="presentPad clear">        
 			<!-- Present List -->
 			<div class="presentlist">
				<div class="cssTable">
					<ul>
						<li>
							<a href=""><img alt="" src="images/portrait-img01.jpg"></a>
						</li>
						<li>
							<h4>許瑋甯<span>已讀，下午2:17</span></h4>
							<p>早安，送你一杯咖啡，希望你今天充滿活力。</p>
						</li>
					</ul>
				</div>	  
				<ul>
					 <li class="presentImage"><img alt="" src="images/present_coffee.jpg"></li>
					 <li class="presentMsg">7-11 City Cafe 中杯拿鐵  x 1</li>
				</ul>
 			</div><!-- Present List Once End --> 
 			<!-- Present List -->
 			<div class="presentlist">
				<div class="cssTable">
					<ul>
						<li>
							<a href=""><img alt="" src="images/portrait-img01.jpg"></a>
						</li>
						<li>
							<h4>許瑋甯<span>已讀，下午2:17</span></h4>
							<p>早安，送你一杯咖啡，希望你今天充滿活力。</p>
						</li>
					</ul>
				</div>	  
				<ul>
					 <li class="presentImage"><img alt="" src="images/present_coffee.jpg"></li>
					 <li class="presentMsg">7-11 City Cafe 中杯拿鐵  x 1</li>
				</ul>
 			</div><!-- Present List Once End --> 
 			<!-- Present List -->
 			<div class="presentlist">
				<div class="cssTable">
					<ul>
						<li>
							<a href=""><img alt="" src="images/portrait-img01.jpg"></a>
						</li>
						<li>
							<h4>許瑋甯<span>未讀，下午2:17</span></h4>
							<p>早安，送你一杯咖啡，希望你今天充滿活力。</p>
						</li>
					</ul>
				</div>	  
				<ul>
					 <li class="presentImage"><img alt="" src="images/present_coffee.jpg"></li>
					 <li class="presentMsg">7-11 City Cafe 中杯拿鐵  x 1</li>
				</ul>
 			</div><!-- Present List Once End --> 
 			<!-- Present List -->
 			<div class="presentlist">
				<div class="cssTable">
					<ul>
						<li>
							<a href=""><img alt="" src="images/portrait-img01.jpg"></a>
						</li>
						<li>
							<h4>許瑋甯<span>未讀，下午2:17</span></h4>
							<p>早安，送你一杯咖啡，希望你今天充滿活力。</p>
						</li>
					</ul>
				</div>	  
				<ul>
					 <li class="presentImage"><img alt="" src="images/present_coffee.jpg"></li>
					 <li class="presentMsg">7-11 City Cafe 中杯拿鐵  x 1</li>
				</ul>
 			</div><!-- Present List Once End --> 
 			<!-- Present List -->
 			<div class="presentlist">
				<div class="cssTable">
					<ul>
						<li>
							<a href=""><img alt="" src="images/portrait-img01.jpg"></a>
						</li>
						<li>
							<h4>許瑋甯<span>未讀，下午2:17</span></h4>
							<p>早安，送你一杯咖啡，希望你今天充滿活力。</p>
						</li>
					</ul>
				</div>	  
				<ul>
					 <li class="presentImage"><img alt="" src="images/present_coffee.jpg"></li>
					 <li class="presentMsg">7-11 City Cafe 中杯拿鐵  x 1</li>
				</ul>
 			</div><!-- Present List Once End -->
       
       
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
			$('.pageMenu').find('li').eq(1).addClass('active');
		});
	</script>
</body>
</html>