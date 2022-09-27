<!doctype html>
<html>

<head>
	<?php include_once("at_include/CG_config.php"); ?>
	<title><?php echo $webTitle; ?></title>
	<meta name="keywords" content="<?php echo $MetaCopyright; ?>" />
	<!-- 網頁描述 -->
	<meta name="description" content="<?php echo $MetaDescription; ?>" />
	<meta name="Author" content="<?php echo $MetaAuthor; ?>" />
	<meta name="copyright" content="<?php echo $MetaCopyright; ?>">
	<!-- iCon圖示 -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- FB  -->
	<meta property="og:title" content="<?php echo $webTitle; ?>" />
	<meta property="og:url" content="<?php echo $URL; ?>" />
	<meta property="og:image" content="<?php echo $Meta_ogImg_0; ?>" />
	<meta property="og:description" content="<?php echo $MetaDescription; ?>" />
	<meta property="fb:app_id" content="<?php echo $FB_ID; ?>" />
	<!-- CSS -->
	<link href="css/at_cage.css" rel="stylesheet" type="text/css" />
	<link href="css/basic_findtheone.css" rel="stylesheet" type="text/css" />
	<link href="css/basic_findtheone_plus.css" rel="stylesheet" type="text/css" />
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<?php include_once("at_include/inc_facebook.php"); ?>

	<link href="css/mto.compiled.css" rel="stylesheet">

</head>

<body class="mypair onSign">
	<div id="fb-root"></div>
	<?php include_once("at_include/header.php"); ?>
	<div id="main" class="c1">
		<!--	<div class="headerBack">-->
		<!--		<a class="back"><i class="fa fa-angle-left" aria-hidden="true"></i>我的配對</a>-->
		<!--    </div>-->
		<div class="mypairCount pairList">
			<p>互相回饋，可成為朋友，並開啟聊天室</p>
			<div class="mypairPad clear">
				<!-- Pair list -->
				<div class="mypairWrapper">
					<div class="mypairMain mypairItem swiper-slide">
						<ul class="picture unselectable">
							<li>
								<a href="mypairreport.php">
									<div class="image is-square"><img width="350" height="350" alt="" src="images/user_photo_default_l.png" /></div>
								</a>
							</li>
						</ul>
						<ul class="status unselectable">
							<li class="new"></li>
							<li class="number">95</li>
						</ul>
						<div class="dataContent">
							<ul class="dialog wht">
								<p>許瑋甯：我也很愛旅行，去過15個國家，可以交流一下國外旅行的經歷，應該會很有趣</p>
							</ul>
							<ul class="basicData">
								<li>
									<p>許瑋甯<span>台北市/35歲</span></p>
								</li>
								<a class="readreport" href="">閱讀報告</a>
							</ul>
							<ul class="infoData">
								<li>
									<p>碩士</p>台北科技大學
								</li>
								<li>
									<p>知名外商</p>行銷企劃主管
								</li>
							</ul>
							<ul class="moreData">
								<li class="radar">
									<img class="graph" src="images/radar.png" alt="">
									<ul class="title">
										<li>安全感(99)</li>
										<li>性表達<br />(99)</li>
										<li>家庭觀<br />(99)</li>
										<li>生活習慣(99)</li>
										<li>婚姻觀<br />(99)</li>
										<li>衝突<br />(99)</li>
									</ul>
								</li>
								<li class="quadrant">
									<div class="catalog">興趣</div>
									<ul class="title">
										<li>動態</li>
										<li>群體</li>
										<li>靜態</li>
										<li>個人</li>
									</ul>
									<div class="area q1 p1"></div>
									<div class="area q2 p2"></div>
									<div class="area q3 p3"></div>
									<div class="area q4"></div>
								</li>
								<li class="variant1">
									<p>老家在台南，在墨爾本、北京打過工，是一名北漂到台北7年的軟體工程師，最愛的是美食和美景，興趣是馬拉松和爬山，喜歡與人互動交流...</p>
								</li>
							</ul>
						</div>
						<ul class="meetTag">
							<li><a class="btn_meet active"><span>請回覆</span>
									<p>約會邀請</p>
								</a></li>
							<!--<li><a class="btn_meetInvite active"><p>前往邀請</p></a></li>-->
						</ul>
					</div>
				</div>
				<div class="mypairWrapper">
					<div class="mypairMain mypairItem swiper-slide">
						<ul class="picture unselectable">
							<li>
								<a href="mypairreport.php">
									<div class="image is-square"><img width="350" height="350" alt="" src="images/user_photo_default_l.png" /></div>
								</a>
							</li>
						</ul>
						<ul class="status unselectable">
							<li class="new"></li>
							<li class="number">95</li>
						</ul>
						<div class="dataContent">
							<ul class="dialog blk">
								<p>許瑋甯：我也很愛旅行，去過15個國家，可以交流一下國外旅行的經歷，應該會很有趣</p>
							</ul>
							<ul class="basicData">
								<li>
									<p>許瑋甯<span>台北市/35歲</span></p>
								</li>
								<a class="readreport" href="">閱讀報告</a>
							</ul>
							<ul class="infoData">
								<li>
									<p>碩士</p>台北科技大學
								</li>
								<li>
									<p>知名外商</p>行銷企劃主管
								</li>
							</ul>
							<ul class="moreData">
								<li class="radar">
									<img class="graph" src="images/radar.png" alt="">
									<ul class="title">
										<li>安全感(99)</li>
										<li>性表達<br />(99)</li>
										<li>家庭觀<br />(99)</li>
										<li>生活習慣(99)</li>
										<li>婚姻觀<br />(99)</li>
										<li>衝突<br />(99)</li>
									</ul>
								</li>
								<li class="quadrant">
									<div class="catalog">興趣</div>
									<ul class="title">
										<li>動態</li>
										<li>群體</li>
										<li>靜態</li>
										<li>個人</li>
									</ul>
									<div class="area q1 p4"></div>
									<div class="area q2"></div>
									<div class="area q3 p1"></div>
									<div class="area q4 p1"></div>
								</li>
								<li class="variant2">
									<ul class="box1">
										<li>
											<p class="s1">對你好感度</p>
										</li>
										<li>
											<p class="s2">與你再見面</p>
										</li>
									</ul>
									<ul class="box2">
										<li>
											<p>她欣賞你的</p>
											<p># 外貌談吐</p>
											<p># 興趣嗜好</p>
											<p># 能力才華</p>
										</li>
									</ul>
								</li>
							</ul>
						</div>
						<ul class="meetTag">
							<li><a class="btn_meet active"><span>請回覆</span>
									<p>約會邀請</p>
								</a></li>
							<!--<li><a class="btn_meetInvite active"><p>前往邀請</p></a></li>-->
						</ul>
					</div>
				</div>
				<div class="mypairWrapper">
					<div class="mypairMain mypairItem swiper-slide">
						<ul class="picture unselectable">
							<li>
								<a href="mypairreport.php">
									<div class="image is-square"><img width="350" height="350" alt="" src="images/user_photo_default_l.png" /></div>
								</a>
							</li>
						</ul>
						<ul class="status unselectable">
							<li class="new"></li>
							<li class="number">95</li>
						</ul>
						<div class="dataContent">
							<ul class="basicData">
								<li>
									<p>許瑋甯<span>台北市/35歲</span></p>
								</li>
								<a class="readreport" href="">閱讀報告</a>
							</ul>
							<ul class="infoData">
								<li>
									<p>碩士</p>台北科技大學
								</li>
								<li>
									<p>知名外商</p>行銷企劃主管
								</li>
							</ul>
							<ul class="moreData">
								<li class="radar">
									<img class="graph" src="images/radar.png" alt="">
									<ul class="title">
										<li>安全感(99)</li>
										<li>性表達<br />(99)</li>
										<li>家庭觀<br />(99)</li>
										<li>生活習慣(99)</li>
										<li>婚姻觀<br />(99)</li>
										<li>衝突<br />(99)</li>
									</ul>
								</li>
								<li class="quadrant">
									<div class="catalog">興趣</div>
									<ul class="title">
										<li>動態</li>
										<li>群體</li>
										<li>靜態</li>
										<li>個人</li>
									</ul>
									<div class="area q1 p1"></div>
									<div class="area q2"></div>
									<div class="area q3 p5"></div>
									<div class="area q4"></div>
								</li>
								<li class="variant2">
									<ul class="box1">
										<li>
											<p class="s3">對你好感度</p>
										</li>
										<li>
											<p class="s4">與你再見面</p>
										</li>
									</ul>
									<ul class="box2">
										<li>
											<p>她欣賞你的</p>
											<p>(尚未回饋)</p>
										</li>
									</ul>
								</li>
							</ul>
						</div>
						<ul class="meetTag">
							<li><a class="btn_meet active"><span>請回覆</span>
									<p>約會邀請</p>
								</a></li>
							<!--<li><a class="btn_meetInvite active"><p>前往邀請</p></a></li>-->
						</ul>
					</div>
				</div>
				<div class="mypairWrapper">
					<div class="mypairMain mypairItem swiper-slide">
						<ul class="picture unselectable">
							<li>
								<a href="mypairreport.php">
									<div class="image is-square"><img width="350" height="350" alt="" src="images/user_photo_default_l.png" /></div>
								</a>
							</li>
						</ul>
						<ul class="status unselectable">
							<li class="new"></li>
							<li class="number">95</li>
						</ul>
						<div class="dataContent">
							<ul class="basicData">
								<li>
									<p>許瑋甯<span>台北市/35歲</span></p>
								</li>
								<a class="readreport" href="">閱讀報告</a>
							</ul>
							<ul class="infoData">
								<li>
									<p>碩士</p>台北科技大學
								</li>
								<li>
									<p>知名外商</p>行銷企劃主管
								</li>
							</ul>
							<ul class="moreData">
								<li class="radar">
									<img class="graph" src="images/radar.png" alt="">
									<ul class="title">
										<li>安全感(99)</li>
										<li>性表達<br />(99)</li>
										<li>家庭觀<br />(99)</li>
										<li>生活習慣(99)</li>
										<li>婚姻觀<br />(99)</li>
										<li>衝突<br />(99)</li>
									</ul>
								</li>
								<li class="quadrant">
									<div class="catalog">興趣</div>
									<ul class="title">
										<li>動態</li>
										<li>群體</li>
										<li>靜態</li>
										<li>個人</li>
									</ul>
									<div class="area q1"></div>
									<div class="area q2"></div>
									<div class="area q3"></div>
									<div class="area q4 p6"></div>
								</li>
								<li class="variant3">
									<p>還沒寫自我介紹？<br />快邀請他填寫吧！</p>
									<a href="#" class="invite">自介填寫邀請</a>
								</li>
							</ul>
						</div>
						<ul class="meetTag">
							<li><a class="btn_meet active"><span>請回覆</span>
									<p>約會邀請</p>
								</a></li>
							<!--<li><a class="btn_meetInvite active"><p>前往邀請</p></a></li>-->
						</ul>
					</div>
				</div>
				<div class="mypairWrapper">
					<div class="article">
						<p class="cap">《單身戀愛學》熱門文章</p>
						<img src="images/c1_article_demo_pic.png" alt="">
						<div class="content">
							<p class="title">原來追女生也有分階段？用對方法，不再處處碰壁</p>
							<p class="description">追求女生，對某些男生來說，像是天生具備的技能，他們總是有辦法輕鬆地交到女朋友；但對於其他男生而言，追女生就像是門高深莫測的學問，就算有不少「追求」的經驗，卻還是屢屢碰壁，摸不著頭緒也抓不到訣竅。事實上，如果你在追求異性的過程老是不順利，並不代表你「不夠好」或是「錯的人」</p>
							<div class="btnBox">
								<a href="" class="detail">閱讀全文</a>
								<a href="" class="more">更多相關文章</a>
							</div>
						</div>
					</div>
				</div>
				<div class="mypairWrapper">
					<div class="banner variant1">
						<p>想找到適合自己的對象?</p>
						<p class="title">《單身戀愛學》</p>
						<p>給你更多google不到的深度<br />「戀愛知識」與「實用方法」</p>
						<a href="">前往部落格</a>
					</div>
				</div>
				<div class="mypairWrapper">
					<div class="banner variant2">
						<p>想找到適合自己的對象?</p>
						<p class="title">《單身戀愛學》</p>
						<p>給你更多google不到的深度<br />「戀愛知識」與「實用方法」</p>
						<a href="">前往部落格</a>
					</div>
				</div>
			</div>
		</div><!-- mypairCount END -->

	</div><!-- main END -->
	<?php include_once("at_include/footer.php"); ?>

	<div class="pop-sty-1">
		<div id="popContainer">
			<div class="popContent basic">
				<ul>
					<li class="title">【我的朋友】使用說明</li>
					<li class="content my-friends">
						<div class="step-slider">
							<div class="wrapper">
								<div class="slides">
									<div class="slide" id="page1">
										<div class="img-box">
											<div class="image-bg myFriend-step-1"></div>
											<span class="mark"></span>
										</div>
										<div class="text-box ta-C">
											<h5 class="top">名單消失期限</h5>
											<p class="desc">
												若雙方未在期限內完成<br>
												約會設定，好友將消失
											</p>
										</div>
										<div class="btn-box ta-C">
											<button type="button" id="page1_next" class="button btn-blue">下一步</button>
										</div>
									</div>
									<div class="slide" id="page2">
										<div class="img-box">
											<div class="image-bg myFriend-step-1"></div>
											<span class="mark"></span>
										</div>
										<div class="text-box ta-C">
											<h5 class="top">前往聊天室</h5>
											<p class="desc">
												與對方敲定約會、回覆約會邀請
											</p>
										</div>
										<div class="btn-box ta-C">
											<button type="button" id="page2_prev" class="button btn-border">上一步</button>
											<button type="button" id="page2_next" class="button btn-blue">下一步</button>
										</div>
									</div>
									<div class="slide" id="page3">
										<div class="img-box">
											<div class="image-bg myFriend-step-3"></div>
											<span class="mark"></span>
										</div>
										<div class="text-box ta-C">
											<h5 class="top">約會回饋表</h5>
											<p class="desc">
												雙方見面後，可前往問卷，<br>
												給對方約會後的回饋
											</p>
										</div>
										<div class="btn-box ta-C">
											<button type="button" id="page3_prev" class="button btn-border">上一步</button>
											<button type="button" id="page3_done" class="button btn-blue">開始使用</button>
										</div>
									</div>
								</div>
							</div>
							<div class="bullet">
								<ul>
									<li id="b_1"><i></i></li>
									<li id="b_2"><i></i></li>
									<li id="b_3"><i></i></li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
				<button type="button" id="popCloseBtn" class="close-btn">
					<img src="images/abby/7/close-icon.png" alt="">
				</button>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery.min-2.2.4.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery.touchwipe.min.js"></script>
	<script type="text/javascript" src="js/at_Rev.min.js"></script>
	<script type="text/javascript" src="js/at_cage.js"></script>

	<!-- 美術檔 js -->
	<script type="text/javascript" src="js/abby/abby.js"></script>

	<script>
		$(window).load(function() {
			<?php include_once("at_include/page_menu_js.php"); ?>

		})
		$(document).ready(function() {
			var $selector = $('.pageMenu').find('a');
			$selector.click(function() {
				var $parent = $(this).parents();
				$parent.toggleClass('active');
			});
			$('.subHeader').find('li').eq(0).addClass('active');
			var $state = $('.basicData').find('li:nth-child(2)');
			$state.click(function() {
				console.log('test');
			});
		});
	</script>
</body>

</html>