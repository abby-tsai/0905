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
<body class="mission_try">
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main">
	<div class="headerBack">
		<a class="back"><i class="fa fa-angle-left" aria-hidden="true"></i>免費試用</a>
    </div>
	<div class="pageMenu blue CGt">
		<ul>
			<li class=""><a class="active">免費試用</a></li>
		</ul>
	</div>
    <div class="missionCount">
<!--        <h2><i class="icon_mn_present"></i>免費試用</h2>-->
        <div class="missionInfo">完成任務，免費取得3天VIP會期</div>
        <div class="missionPad clear">
				<a href="member.php"><div class="missionlist">
						<ul>
							<li class="title"><img alt="" src="images/icon_mission_photo.png"><span>上傳照片</span></li>
							<li class="status">
								<p class="day">3<span>天</span></p>
								<p class="checkIcon"><i class="fa fa-check" aria-hidden="true"></i></p>
								<p class="finish">任務<br>完成</p>
								<p class="info">免費VIP</p>
							</li>
							<li class="script"><p>上傳7張個人照片</p></li>
						</ul>
				</div></a>
				<a href="member.php" class="finish"><div class="missionlist">
						<ul>
							<li class="title"><img alt="" src="images/icon_mission_question.png"><span>關於我</span></li>
							<li class="status">
								<p class="day">3<span>天</span></p>
								<p class="checkIcon"><i class="fa fa-check" aria-hidden="true"></i></p>
								<p class="finish">任務完成</p>
								<p class="info">免費VIP</p>
							</li>
							<li class="script"><p>完成「關於我」的所有描述</p></li>
						</ul>
				</div></a>
				<a class="btn_openPop"><div class="missionlist W1">
						<ul>
							<li class="title"><img alt="" src="images/icon_mission_people.png"><span>邀請朋友</span></li>
							<li class="status">
								<p class="day">3<span>天</span></p>
								<p class="checkIcon"><i class="fa fa-check" aria-hidden="true"></i></p>
								<p class="finish">任務完成</p>
								<p class="info">免費VIP</p>
							</li>
							<li class="script"><p>讓朋友完成配對測驗及認證<span>(每位朋友都計算1次)</span></p></li>
						</ul>
				</div></a>
				<a href="testing_main_2personality.php" class="finish"><div class="missionlist">
						<ul>
							<li class="title"><img alt="" src="images/icon_mission_portrait.png"><span>性格測驗</span></li>
							<li class="status">
								<p class="day">3<span>天</span></p>
								<p class="checkIcon"><i class="fa fa-check" aria-hidden="true"></i></p>
								<p class="finish">任務完成</p>
								<p class="info">免費VIP</p>
							</li>
							<li class="script"><p>完成性格測驗</p></li>
						</ul>
				</div></a>
				<a href="mypairlist.php"><div class="missionlist">
						<ul>
							<li class="title"><img alt="" src="images/icon_message.png"><span>聊天</span></li>
							<li class="status">
								<p class="day">3<span>天</span></p>
								<p class="checkIcon"><i class="fa fa-check" aria-hidden="true"></i></p>
								<p class="finish">任務完成</p>
								<p class="info">免費VIP</p>
							</li>
							<li class="script"><p>跟3個人彼此聊天<span>(雙方訊息往返各3次)</span></p></li>
						</ul>
				</div></a>
				<a href="mypairlist.php" class="finish"><div class="missionlist">
						<ul>
							<li class="title"><img alt="" src="images/icon_mission_music.svg"><span>點歌</span></li>
							<li class="status">
								<p class="day">3<span>天</span></p>
								<p class="checkIcon"><i class="fa fa-check" aria-hidden="true"></i></p>
								<p class="finish">任務完成</p>
								<p class="info">免費VIP</p>
							</li>
							<li class="script"><p>找3個人互相點歌 <span>(雙方點歌往返各1次)</span></p></li>
						</ul>
				</div></a>
				<a href="meetchat_setting_finish.php"><div class="missionlist">
						<ul>
							<li class="title"><img alt="" src="images/icon_menu_meetchat.svg"><span>見面聊</span></li>
							<li class="status">
								<p class="day">3<span>天</span></p>
								<p class="checkIcon"><i class="fa fa-check" aria-hidden="true"></i></p>
								<p class="finish">任務完成</p>
								<p class="info">免費VIP</p>
							</li>
							<li class="script"><p>開啟見面聊，並發出1個見面邀請</p></li>
						</ul>
				</div></a>
				<a href="testing_main_3mylove.php"><div class="missionlist">
						<ul>
							<li class="title"><img alt="" src="images/icon_mission_language.png"><span>愛之語測驗</span></li>
							<li class="status">
								<p class="day">3<span>天</span></p>
								<p class="checkIcon"><i class="fa fa-check" aria-hidden="true"></i></p>
								<p class="finish">任務完成</p>
								<p class="info">免費VIP</p>
							</li>
							<li class="script"><p>完成愛之語測驗</p></li>
						</ul>
				</div></a>
				<a href="articlelist.php" class="finish"><div class="missionlist">
						<ul>
							<li class="title"><img alt="" src="images/icon_read.svg"><span>文章分享</span></li>
							<li class="status">
								<p class="day">3<span>天</span></p>
								<p class="checkIcon"><i class="fa fa-check" aria-hidden="true"></i></p>
								<p class="finish">任務完成</p>
								<p class="info">免費VIP</p>
							</li>
							<li class="script"><p>在閱讀愛情分享3篇文章給其他配對者</p></li>
						</ul>
				</div></a>
        </div><!--missionPad End-->
    </div><!--missionCount End-->
    
    <div class="depositCount">
		<!-- ?php include_once("at_include/deposit_info.php"); ?> <!-- 權益說明 -->
	</div>
    
</div><!-- Main End -->
<?php include_once("at_include/footer.php"); ?>
<div id="popContainer">
	<div class="popContent">
		<div class="shareLinkPad">
			<ul>
				<li class="title">邀請朋友完成配對測驗</li>
				<li class="shareList_Line">
					<a href="http://line.me/R/msg/text/?<?php echo $URL; ?>" target="_blank">
						<img src="images/social_line.svg" alt="img_Line" />
						<p class="title">分享配對測驗到line</p>
						<!-- <span>用心理學幫朋友找到對的愛</span> -->
					</a>
				</li>
				<li class="shareList_FB">
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $URL; ?>" target="_blank">
						<img src="images/social_fb.svg" alt="img_FB" />
						<p class="title">分享配對測驗到facebook</p>
						<!-- <span>用心理學幫朋友找到對的愛</span> -->
					</a>
				</li>
				<li class="shareList_Link"  data-clipboard-text="<?php echo $URL; ?>">
					<a>
						<img src="images/social_link.svg" alt="img_Link" />
						<p class="title">分享配對測驗連結</p>
						<!-- <span>幫助朋友找出1%最適合結婚的交往對象</span> -->
						<!-- <u>www.findtheone.com.tw/matchtest12345</u> -->
					</a>
				</li>
			</ul>
		</div>
		<!-- <div class="btn_closePop"></div> -->
	</div>
</div>
<!-- jQuery -->    
    <script type="text/javascript" src="js/jquery.min-2.2.4.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.touchwipe.min.js"></script>
    <script type="text/javascript" src="js/clipboard.js"></script>
    <script type="text/javascript" src="js/at_cage.js"></script>
    <script>
        $(window).load(function() {
        })
        $(document).ready(function() {
            $('.pageMenu').find('li').eq(0).addClass('active');
			$('.menu_pres').addClass('action');
        });
		 
		var clipboard = new Clipboard('.shareList_Link');

		clipboard.on('success', function(e) {
			alert('複製成功')
		});

		clipboard.on('error', function(e) {
			alert('複製失敗')
		});
    </script>
</body>
</html>