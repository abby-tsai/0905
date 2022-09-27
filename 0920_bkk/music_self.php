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
<body class="music_foru">
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main">
	<?php include_once("at_include/music_menu.php"); ?> <!-- 分類 -->
 	<div class="musicCount">
		<div class="musicInfo"> 分享音樂是認識彼此很好的方式，這些是你點過的歌。</div>
 		<div class="musicPad">
 			<!-- music List -->
 			<div class="musiclist">
	 			<div class="CG_yt169">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/ZcTAnpMgBxE" frameborder="0" allowfullscreen></iframe>
	 			</div>
				<div class="cssTable">
					<ul>
						<li>
							<a href=""><img alt="" src="images/portrait-img01.jpg"></a>
						</li>
						<li>
							<h4>許瑋甯<span>下午2:17</span></h4>
							<p>我很喜歡這首歌，讓我有ㄧ種被了解的感動，可以帶給我力量，送給你。</p>
						</li>
					</ul>
				</div>	  
 			</div><!-- music List Once End -->

 			 <!-- music List -->
 			<div class="musiclist">
	 			<div class="CG_yt169">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/ZcTAnpMgBxE" frameborder="0" allowfullscreen></iframe>
	 			</div>
				<div class="cssTable">
					<ul>
						<li>
							<a href=""><img alt="" src="images/portrait-img01.jpg"></a>
						</li>
						<li>
							<h4>許瑋甯<span>下午2:17</span></h4>
							<p>我很喜歡這首歌，讓我有ㄧ種被了解的感動，可以帶給我力量，送給你。</p>
						</li>
					</ul>
				</div>	  
 			</div><!-- music List Once End -->

 			 <!-- music List -->
 			<div class="musiclist">
	 			<div class="CG_yt169">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/ZcTAnpMgBxE" frameborder="0" allowfullscreen></iframe>
	 			</div>
				<div class="cssTable">
					<ul>
						<li>
							<a href=""><img alt="" src="images/portrait-img01.jpg"></a>
						</li>
						<li>
							<h4>許瑋甯<span>下午2:17</span></h4>
							<p>我很喜歡這首歌，讓我有ㄧ種被了解的感動，可以帶給我力量，送給你。</p>
						</li>
					</ul>
				</div>	  
 			</div><!-- music List Once End -->

			 <!-- music List -->
 			<div class="musiclist">
	 			<div class="CG_yt169">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/ZcTAnpMgBxE" frameborder="0" allowfullscreen></iframe>
	 			</div>
				<div class="cssTable">
					<ul>
						<li>
							<a href=""><img alt="" src="images/portrait-img01.jpg"></a>
						</li>
						<li>
							<h4>許瑋甯<span>下午2:17</span></h4>
							<p>我很喜歡這首歌，讓我有ㄧ種被了解的感動，可以帶給我力量，送給你。</p>
						</li>
					</ul>
				</div>	  
 			</div><!-- music List Once End --> 			
        </div>

    </div><!-- music Count END -->
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