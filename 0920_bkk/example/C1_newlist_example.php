<!doctype html>
<html>

<head>
	<?php include_once("../at_include/CG_config.php"); ?>
	<title><?php echo $webTitle; ?></title>
	<meta name="keywords" content="<?php echo $MetaCopyright; ?>" />
	<!-- 網頁描述 -->
	<meta name="description" content="<?php echo $MetaDescription; ?>" />
	<meta name="Author" content="<?php echo $MetaAuthor; ?>" />
	<meta name="copyright" content="<?php echo $MetaCopyright; ?>">
	<!-- iCon圖示 -->
	<link rel="shortcut icon" href="../favicon.ico">
	<!-- FB  -->
	<meta property="og:title" content="<?php echo $webTitle; ?>" />
	<meta property="og:url" content="<?php echo $URL; ?>" />
	<meta property="og:image" content="<?php echo $Meta_ogImg_0; ?>" />
	<meta property="og:description" content="<?php echo $MetaDescription; ?>" />
	<meta property="fb:app_id" content="<?php echo $FB_ID; ?>" />
	<!-- CSS -->
	<link href="../css/at_cage.css" rel="stylesheet" type="text/css" />
	<link href="../css/basic_findtheone.css" rel="stylesheet" type="text/css" />
	<link href="../css/basic_findtheone_plus.css" rel="stylesheet" type="text/css" />
	<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<?php include_once("../at_include/inc_facebook.php"); ?>

	<link href="../css/mto.compiled.css" rel="stylesheet">

</head>

<body class="mypair onSign">
	<div id="fb-root"></div>
	<?php include_once("../example/at_include/header5_example.php"); ?>
	<div id="main" class="c1">

		<div class="headerBack" style="top:-90px;">
			<a class="back">
				<i class="fa fa-angle-left" aria-hidden="true"></i>最新名單
			</a>
		</div>

		<div class="mypairCount pairList">
			<p>互相回饋，可成為朋友，並開啟聊天室</p>

			<div class="mt-10"></div>
			<div class="newList-topNote">
				<div class="topNote ta-C">
					<p>
						※為提升使用體驗，即日起未解鎖前，<span class="color-red">每日只提供最多2個名單</span>，快前往解鎖，認識更多人！
					</p>
				</div>
			</div>
			<div class="mt-10"></div>

			<div class="mypairPad clear">
				<!-- Pair list -->
				<div class="mypairWrapper tablet-order-2">
					<div class="mypairMain mypairItem swiper-slide">
						<ul class="picture unselectable">
							<li>
								<a href="mypairreport_01fit_example.php">
									<div class="image is-square"><img width="350" height="350" alt="" src="../images/abby/abby_example/img-4.jpg" /></div>
								</a>
							</li>
						</ul>
						<ul class="status unselectable">
							<li class="new"></li>
							<li class="number bigger">91</li>
						</ul>
						<div class="dataContent">
							<!-- <ul class="dialog wht">
								<p>許瑋甯：我也很愛旅行，去過15個國家，可以交流一下國外旅行的經歷，應該會很有趣</p>
							</ul> -->
							<ul class="basicData">
								<li>
									<p>Andy<span>台南市 / 28歲</span></p>
								</li>
								<a class="readreport" href="mypairreport_01fit_example.php">閱讀報告</a>
							</ul>
							<ul class="infoData">
								<li>
									<p>碩士</p>臺灣科技大學
								</li>
								<li>
									顧問人員
								</li>
							</ul>
							<ul class="moreData">
								<li class="radar">
									<img class="graph" src="../images/radar.png" alt="">
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
								<span class="note-box">雷達圖快速查看<br>各種契合分數</span>
								<li class="variant1">
									<p>嗨！我是Andy，高雄人，最近正在努力學習攝影中，希望有朝一日可以成為獨立知名攝影師，用鏡頭紀錄更多美好的畫面：）</p>
								</li>
							</ul>
						</div>
						<ul class="meetTag">
							<!-- <li><a class="btn_meet active"><span>請回覆</span>
									<p>約會邀請</p>
								</a></li> -->
							<!--<li><a class="btn_meetInvite active"><p>前往邀請</p></a></li>-->
						</ul>
					</div>
				</div>
				<div class="mypairWrapper tablet-order-1">
					<div class="mypairMain mypairItem swiper-slide">
						<ul class="picture unselectable">
							<li>
								<a href="mypairreport_01fit_example.php">
									<div class="image is-square"><img width="350" height="350" alt="" src="../images/abby/abby_example/img-5.jpg" /></div>
								</a>
							</li>
						</ul>
						<ul class="status unselectable">
							<li class="new"></li>
							<li class="number bigger has-note">
								93
								<span class="note-box">契合分數</span>
							</li>
						</ul>
						<div class="dataContent">
							<!-- <ul class="dialog wht">
								<p>許瑋甯：我也很愛旅行，去過15個國家，可以交流一下國外旅行的經歷，應該會很有趣</p>
							</ul> -->
							<ul class="basicData">
								<li>
									<p>Kyle<span>新北市 / 30歲</span></p>
								</li>
								<a class="readreport" href="mypairreport_01fit_example.php">閱讀報告</a>
								<span class="note-box tablet-block">閱讀<br>範例報告</span>
							</ul>
							<ul class="infoData">
								<li>
									<p>碩士</p>國立成功大學
								</li>
								<li>
									工程師
								</li>
							</ul>
							<ul class="moreData">
								<li class="radar">
									<img class="graph" src="../images/radar.png" alt="">
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
								<li class="variant1">
									<p>臺南人，在台北讀書後繼續北漂工作中，興趣很多，但最喜歡吃！希望能找到一個不怕胖，願意和我一起嚐遍全台美食的好夥伴！</p>
								</li>
							</ul>
						</div>
						<ul class="meetTag">
							<!-- <li><a class="btn_meet active"><span>請回覆</span>
									<p>約會邀請</p>
								</a></li> -->
							<!--<li><a class="btn_meetInvite active"><p>前往邀請</p></a></li>-->
						</ul>
					</div>
				</div>
				<div class="mypairWrapper tablet-order-3">
					<div class="mypairMain mypairItem swiper-slide">
						<ul class="picture unselectable">
							<li>
								<a href="mypairreport_01fit_example.php">
									<div class="image is-square"><img width="350" height="350" alt="" src="../images/abby/abby_example/img-6.jpg" /></div>
								</a>
							</li>
						</ul>
						<ul class="status unselectable">
							<li class="new"></li>
							<li class="number bigger">96</li>
						</ul>
						<div class="dataContent">
							<!-- <ul class="dialog wht">
								<p>許瑋甯：我也很愛旅行，去過15個國家，可以交流一下國外旅行的經歷，應該會很有趣</p>
							</ul> -->
							<ul class="basicData">
								<li>
									<p>Calvin<span>台北市 / 38歲</span></p>
								</li>
								<a class="readreport" href="mypairreport_01fit_example.php">閱讀報告</a>
								<span class="note-box tablet-none">閱讀<br>範例報告</span>
							</ul>
							<ul class="infoData">
								<li>
									<p>碩士</p>台灣大學
								</li>
								<li>
									自僱
								</li>
							</ul>
							<ul class="moreData">
								<li class="radar">
									<img class="graph" src="../images/radar.png" alt="">
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
								<li class="variant1">
									<p>擔任多年業務後決定創業，平時關注科技、投資、極限運動，最近也開始練習日文，希望可以找到對於一樣熱愛學習任何有挑戰性事物的另一半！：）</p>
								</li>
							</ul>
						</div>
						<ul class="meetTag">
							<!-- <li><a class="btn_meet active"><span>請回覆</span>
									<p>約會邀請</p>
								</a></li> -->
							<!--<li><a class="btn_meetInvite active"><p>前往邀請</p></a></li>-->
						</ul>
					</div>
				</div>

			</div>

			<div class="goTest pt-3 pb-5">
				<p class="greenTitle text-center">每日5~10個配對 (互相拿到名單)<br>提高你的能見度，不被淹沒在一堆名單中</p>
				<p class="title text-center">▼想擁有自己的報告，快來完成測驗吧▼</p>
				<div class="btn-box text-center">
					<a href="#" class="btn btn-sty1">
						開始心理學測驗 <span class="txt-small">(10分鐘)</span>
					</a>
				</div>
			</div>

		</div><!-- mypairCount END -->

	</div><!-- main END -->

	<div class="hintContainer">
		<p>
			此為範例
			<a href="../index5.php">回到首頁</a>
		</p>
	</div>

	<div class="pop-sty-2">
		<div class="popBlock not-apply">
			<div class="contentBox">
				<ul>
					<li class="title">功能尚未開通</li>
					<li class="content">
						<p class="desc text-center">完成心理學測驗 (註冊)<br>即可解鎖完整功能</p>
						<div class="btn-box text-center">
							<a href="#" class="btn btn-sty1">
								開始心理學測驗 <span class="txt-small">(10分鐘)</span>
							</a>
						</div>
						<div class="text-center">
							<button type="button" class="btn-consider popCloseBtn">再考慮一下</button>
						</div>
					</li>
				</ul>
				<button type="button" class="close-btn popCloseBtn">
					<img src="../images/abby/7/close-icon.png" alt="">
				</button>
			</div>
		</div>
	</div>

	<?php include_once("../at_include/footer.php"); ?>

	<!-- jQuery -->
	<script type="text/javascript" src="../js/jquery.min-2.2.4.js"></script>
	<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="../js/jquery.touchwipe.min.js"></script>
	<script type="text/javascript" src="../js/at_Rev.min.js"></script>
	<script type="text/javascript" src="../js/at_cage.js"></script>

	<!-- 美術檔 js -->
	<script type="text/javascript" src="../js/abby/abby.js"></script>

	<!-- abby JS -->
	<script type="text/javascript" src="../js/abby/abby_example.js"></script>
    <script type="text/javascript" src="../js/abby/abby.js"></script>

	<script>
		$(window).load(function() {
			<?php include_once("../at_include/page_menu_js.php"); ?>
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