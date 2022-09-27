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
<body class="chatroom">
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main">
    <div class="chatroomCount sendedCount">
		<h2><i class="icon_chat"></i>訊息</h2>
        <div class="chatroomPad">
        	<div class="chatroomHeader">
        		<div>
					<a class="arrow back"></a>
					<a href="mypairreport.php">
	        			<img alt="" src="images/user_photo_default_s.jpg">
	        			<p>許瑋甯<i class="online"></i></p>
					</a>
        		</div>
<!--				<div class="ta-R"><a href="mypairreport.php" class="btn_red">契合報告</a></div>-->
				<div>
					<a class="chatClose back"></a>
				</div>
			</div>
      		<!-- Sended Pad --> 
       		<div class="sended_presentPad">
       			<div class="sendCoffee chatPlusPad">
					<h5><i></i>送他禮物</h5>
					<p>禮物已成功送出</p>
					<div class="presentSendedPad">
						<ul class="presentPad">
							<li>
								<img alt="" src="images/present_coffee.jpg" />
								<span class="title">7-11 City Cafe</span>
								<span class="name">中杯拿鐵 x 1</span>
								<span class="price">NT55</span>
							</li>
						</ul>
					</div>
					<p>查詢送出的禮物，請前往：MENU/禮物紀錄</p>
<!--					<a class="btn_red back">回聊天室</a>-->
				</div>
			</div>     		
        </div>
    </div><!-- chatroomCount END -->
   
</div><!-- main END -->
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
			
		});
	</script>
</body>
</html>
