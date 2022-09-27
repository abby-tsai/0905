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
	<?php include_once("at_include/inc_facebook.php"); ?>
</head>

<body class="mypair">
	<div id="fb-root"></div>
	<?php include_once("at_include/header.php"); ?>
	<div id="main">
		<div class="headerBack">
			<a class="back"><i class="fa fa-angle-left" aria-hidden="true"></i>我的配對</a>
		</div>
		<div class="mypairCount pairReport">

			<div class="mt-10 dis-sp-none"></div>
			<div class="topNote ta-C">
				<p>最新名單多久會消失？
					<span id="noteBtn" class="note-btn">
						<img src="images/abby/5/question-icon.png" alt="">
					</span>
				</p>
				<div id="noteContent" class="note-content">
					<div class="note-row">
						<div class="block-md-6">
							<p>
								<strong>Q: 最新名單什麼時候會消失？</strong>
								<br><br>
								配對當天午夜12點前，雙方都未加好友，名單將消失
							</p>
						</div>
						<div class="block-md-6">
							<p>
								<strong>Q: 有辦法讓最新名單延後消失嗎？</strong>
								<br><br>
								符合至少一項，消失時間將延後24小時
								<br><br>
							</p>
							<ul>
								<li>其中一方加對方好友</li>
								<li>其中一方邀對方寫自我介紹</li>
							</ul>
						</div>
					</div>
					<button type="button" id="closeBtn" class="close-btn">
						<img src="images/abby/5/close-icon.png" alt="">
					</button>
				</div>
			</div>
			<div class="mt-15 dis-none dis-sp-block"></div>

			<div class="mypairPad clear">
				<div class="mypairItem">
					<ul class="picture">
						<li><img alt="" src="images/user_photo_default_l.png" /></li>
					</ul>
					<ul class="status">
						<li class="new"></li>
						<li class="number">95</li>
					</ul>
					<ul class="basicData">
						<li>
							<p><i class="offline"></i>許瑋甯<span>台北市/35歲</span></p>
						</li>
						<li class="pairState heart3" onClick="">互有好感</li><!--  切換 heart1 ~ heart4 -->
					</ul>
					<ul class="infoData">
						<li>
							<p>碩士</p>台北科技大學台北科技大學台北科技大學
						</li>
						<li>
							<p>知名外商</p>行銷企劃主管行銷企劃主管
						</li>
					</ul>
					<ul class="meetTag">
						<li><a class="btn_meet active"><span>可以</span>
								<p>見面聊</p>
							</a></li>
						<!--<li><a class="btn_meetInvite active"><p>前往邀請</p></a></li>-->
					</ul>
				</div>
				<div class="userphoto CGt">
					<ul>
						<li class="active"><img alt="" src="images/user_photo_default_l.png" /></li>
						<li><img alt="" src="images/user_default_0.jpg" /></li>
						<li><img alt="" src="images/portrait-img01.jpg" /></li>
						<li><img alt="" src="images/portrait-img02.jpg" /></li>
						<li><img alt="" src="images/user_default_1.jpg" /></li>
						<li><img alt="" src="images/image_06.jpg" /></li>
					</ul>
				</div>
				<div class="cssTable unselectable">
					<ul>
						<li><a class="btn-agree btn-red" id="addFriendBtn">加好友，再約見面聊</a></li>
					</ul>
					<ul class="tool-buttons">
						<li><a class="btn-agree">檢舉</a></li>
						<li><a class="btn-agree">封鎖</a></li>
					</ul>
					<p class="message-info">
						互加好友後，聊天室會開啟<br>實際見面時間，可約在一段時間之後
					</p>
				</div>
			</div>

			<div class="meetContPad">
				<!-- 未邀約狀態 -->
				<div class="meetListCount">
					<div id="meetListPad" class="meetListPad clear">
						<div class="meetPairData clear">
							<div class="dataArea pairData">
								<p>以下是<span>許瑋甯</span>對見面聊的期待，趕快發出你的邀請吧。</p>
							</div>
							<div class="dataArea pairData">
								<div class="dataH3">
									<h3>周末<span>下午茶、午餐</span></h3>
									<h3>周間<span>下午茶、午餐</span></h3>
								</div>
								<div class="meetInterestList">
									<ul>
										<li>輕鬆聊</li>
										<li>人生夢想</li>
										<li>電視電影</li>
									</ul>
								</div>
							</div>
							<div class="dataArea pairData">
								<!--<div class="meetlotionTitle"><i class="icon_pin01"></i><div><p>台北市</p><p>新北市</p></div></div>-->
								<div class="meetPairRule">
									<ul>
										<li><i class="icon_mn_pair"></i>各帶一位朋友</li>
										<li><i class="icon_meetchat_cup"></i>4人</li>
										<li><i class="icon_meetchat_toeat"></i>$300</li>
										<li><i class="icon_mn_deposit"></i>各付各的</li>
									</ul>
								</div>
							</div>
							<div class="dataArea pairData">
								<div class="meetScore clear">
									<ul>
										<li><span>準時赴約</span>
											<p>優秀 4.6/5</p>
										</li>
										<li><span>約會態度</span>
											<p>良好 3.9/5</p>
										</li>
									</ul>
								</div>
								<div class="meetText">
									<textarea placeholder="請寫下你的邀約留言。"></textarea>
								</div>
							</div>
							<div class="dataArea pairData">
							</div>

							<div class="meetCtrlPad">
								<a class="btn_sendMeet" href="">邀請見面聊</a>
							</div>
						</div>
					</div>
				</div><!-- meetListCount END -->

				<!-- 被邀約狀態 -->
				<div class="meetListCount">
					<div id="meetListPad" class="meetListPad clear">
						<div class="meetPairData clear">
							<div class="dataArea pairData">
								<p>以下是<span>許瑋甯</span>對見面聊的期待，趕快發出你的邀請吧。</p>
							</div>
							<div class="dataArea pairData">
								<div class="dataH3">
									<h3>周末<span>下午茶、午餐</span></h3>
									<h3>周間<span>下午茶、午餐</span></h3>
								</div>
								<div class="meetInterestList">
									<ul>
										<li>輕鬆聊</li>
										<li>人生夢想</li>
										<li>電視電影</li>
									</ul>
								</div>
							</div>
							<div class="dataArea pairData">
								<!--<div class="meetlotionTitle"><i class="icon_pin01"></i><div><p>台北市</p><p>新北市</p></div></div>-->
								<div class="meetPairRule">
									<ul>
										<li><i class="icon_mn_pair"></i>各帶一位朋友</li>
										<li><i class="icon_meetchat_cup"></i>4人</li>
										<li><i class="icon_meetchat_toeat"></i>$300</li>
										<li><i class="icon_mn_deposit"></i>各付各的</li>
									</ul>
								</div>
							</div>
							<div class="dataArea pairData">
								<div class="meetScore clear">
									<ul>
										<li><span>準時赴約</span>
											<p>優秀 4.6/5</p>
										</li>
										<li><span>約會態度</span>
											<p>良好 3.9/5</p>
										</li>
									</ul>
								</div>
								<div class="meetText">
									<p>你好，我是一個很愛旅行的人，也許我們可以一起喝杯咖啡，從旅行的經驗來認識彼此。</p>
								</div>
							</div>
							<div class="dataArea">
							</div>

							<div class="meetCtrlPad">
								<a class="btn_acceptMeet">發出見面聊邀請</a>
								<a class="btn_refuseMeet">婉拒對方邀請</a>
							</div>
						</div>
					</div>
				</div><!-- meetListCount END -->

				<!-- 已接受邀約狀態 -->
				<div class="meetListCount">
					<div id="meetListPad" class="meetListPad clear">
						<div class="meetPairData clear">
							<div class="dataArea pairData">
								<p><span>許瑋甯</span>已經答應見面聊，快去聊天室敲定見面細節吧!</p>
								<!--
								<a class="btn_blue w1">敲定見面細節</a>
								<p>見面後，請對約會狀況評分，幫助別人了解他的約會風格</p>
								<a class="btn_blue w1 btn_meet">見面後的回饋</a>
								-->
							</div>
							<div class="dataArea pairData">
								<div class="dataH3">
									<h3>周末<span>下午茶、午餐</span></h3>
									<h3>周間<span>下午茶、午餐</span></h3>
								</div>
								<div class="meetInterestList">
									<ul>
										<li>輕鬆聊</li>
										<li>人生夢想</li>
										<li>電視電影</li>
									</ul>
								</div>
							</div>
							<div class="dataArea pairData">
								<!--<div class="meetlotionTitle"><i class="icon_pin01"></i><div><p>台北市</p><p>新北市</p></div></div>-->
								<div class="meetPairRule">
									<ul>
										<li><i class="icon_mn_pair"></i>各帶一位朋友</li>
										<li><i class="icon_meetchat_cup"></i>4人</li>
										<li><i class="icon_meetchat_toeat"></i>$300</li>
										<li><i class="icon_mn_deposit"></i>各付各的</li>
									</ul>
								</div>
							</div>
							<div class="dataArea">
								<div class="meetScore clear">
									<ul>
										<li><span>準時赴約</span>
											<p>優秀 4.6/5</p>
										</li>
										<li><span>約會態度</span>
											<p>良好 3.9/5</p>
										</li>
									</ul>
								</div>
								<div class="meetText">
									<p>你好，我是一個很愛旅行的人，也許我們可以一起喝杯咖啡，從旅行的經驗來認識彼此。</p>
								</div>
							</div>
							<div class="meetCtrlPad">
								<a class="btn_blue">敲定見面細節</a>
								<a class="btn_blue btn_meet">見面後的回饋</a>
							</div>
						</div>
					</div>
				</div><!-- meetListCount END -->

				<!-- 已接受邀約狀態 -->
				<div class="meetListCount">
					<div id="meetListPad" class="meetListPad clear">
						<div class="meetPairData clear">
							<div class="dataArea pairData">
								<p><span>許瑋甯</span>已經答應見面聊，快去聊天室敲定見面細節吧!</p>
							</div>
							<div class="dataArea pairData">
								<div class="dataH3">
									<h3>周末<span>下午茶、午餐</span></h3>
									<h3>周間<span>下午茶、午餐</span></h3>
								</div>
								<div class="meetInterestList">
									<ul>
										<li>輕鬆聊</li>
										<li>人生夢想</li>
										<li>電視電影</li>
									</ul>
								</div>
							</div>
							<div class="dataArea pairData">
								<!--<div class="meetlotionTitle"><i class="icon_pin01"></i><div><p>台北市</p><p>新北市</p></div></div>-->
								<div class="meetPairRule">
									<ul>
										<li><i class="icon_mn_pair"></i>各帶一位朋友</li>
										<li><i class="icon_meetchat_cup"></i>4人</li>
										<li><i class="icon_meetchat_toeat"></i>$300</li>
										<li><i class="icon_mn_deposit"></i>各付各的</li>
									</ul>
								</div>
							</div>
							<div class="dataArea pairData">
								<div class="meetScore clear">
									<ul>
										<li><span>準時赴約</span>
											<p>優秀 4.6/5</p>
										</li>
										<li><span>約會態度</span>
											<p>良好 3.9/5</p>
										</li>
									</ul>
								</div>
								<div class="meetText">
									<p>你好，我是一個很愛旅行的人，也許我們可以一起喝杯咖啡，從旅行的經驗來認識彼此。</p>
								</div>
							</div>
							<div class="dataArea">
								<div class="meetedScore">
									<ul>
										<li class="clear"><span>對你的好感度</span>
											<p>很有好感 5/5</p>
										</li>
										<li class="clear"><span>對下次的見面</span>
											<p>非常期待 5/5</p>
										</li>
									</ul>
								</div>
							</div>
							<div class="meetCtrlPad">
								<a class="btn_blue">敲定見面細節</a>
								<a class="btn_blue btn_meet">見面後的回饋</a>
							</div>
						</div>
					</div>
				</div><!-- meetListCount END -->

			</div><!-- meetContPad END -->

			<?php include_once("at_include/mypairreport_menu.php"); ?>
			<!-- 分類 -->

			<div class="pairReportPad">
				<!--<div class="title"><h2>契合報告</h2></div>-->
				<div class="reportItem">
					<h3>綜合契合指數</h3>
					<div class="pairScore">93<p>契合指數</p>
					</div>
					<div class="reportDetial">
						<div class="script">這是你們的契合分析，以下面向對婚姻相處有高度的影響力，圖表說明你們在不同面向的契合程度</div>
						<div class="reportChart topic_percentBar">
							<ul>
								<li>安全感</li>
								<li><span>95</span>
									<div class="report_data"><i style="left:95%;"></i></div>
								</li>
							</ul>
							<ul>
								<li>衝突處理</li>
								<li><span>65</span>
									<div class="report_data"><i style="left:65%;"></i></div>
								</li>
							</ul>
							<ul>
								<li>婚姻價值</li>
								<li><span>77</span>
									<div class="report_data"><i style="left:77%;"></i></div>
								</li>
							</ul>
							<ul>
								<li>興趣</li>
								<li><span>0</span>
									<div class="report_data"><i style="left:0%;"></i></div>
								</li>
							</ul>
						</div>
						<div class="reportChart topic_percentBar">
							<ul>
								<li>生活習慣</li>
								<li><span>47</span>
									<div class="report_data"><i style="left:47%;"></i></div>
								</li>
							</ul>
							<ul>
								<li>家庭管理</li>
								<li><span>100</span>
									<div class="report_data"><i style="left:100%;"></i></div>
								</li>
							</ul>
							<ul>
								<li>性表達</li>
								<li><span>95</span>
									<div class="report_data"><i style="left:95%;"></i></div>
								</li>
							</ul>
						</div>
					</div><!-- reportDetial -->
				</div><!-- reportItem END -->

				<div class="reportItem">
					<h3>個人摘要</h3>
					<div class="reportDetial">
						<div class="myBasicdata clear">
							<div>
								<ul>
									<li>
										<p>暱稱</p>
										<p>海苔熊</p>
									</li>
									<li>
										<p>年齡</p>
										<p>32</p>
									</li>
									<li>
										<p>身高</p>
										<p>176</p>
									</li>
									<li>
										<p>居住地</p>
										<p>台北市</p>
									</li>
									<!--<li><p>國籍</p><p>中華民國</p></li>-->
									<li>
										<p>學歷</p>
										<p>碩士</p>
									</li>
								</ul>
								<ul>
									<li>
										<p>畢業學校</p>
										<p class="dataShow">北卡羅萊納大學格林斯博羅分校</p>
									</li>
									<li>
										<p>職務別</p>
										<p class="dataShow">CNC電腦程式編排人員</p>
									</li>
									<li>
										<p>服務機構</p>
										<p>明星企業</p>
									</li>
									<!--<li><p>工作資歷</p><p class="dataShow">公務員資格、外商企業、上市櫃公司</p></li>-->
									<li>
										<p>生小孩</p>
										<p>不一定</p>
									</li>
									<li>
										<p>宗教信仰</p>
										<p>基督教</p>
									</li>
								</ul>
								<ul>
									<li>
										<p>吃素</p>
										<p>無</p>
									</li>
									<li>
										<p>抽菸</p>
										<p>無</p>
									</li>
									<li>
										<p>國外經驗</p>
										<p>有</p>
									</li>
									<li class="basicData_work">
										<p>主要工作時間</p>
										<div class="reportDetial">
											<div class="reportChart topic_level4">
												<h4>週間</h4>
												<div>
													<ul>
														<li>
															<p>上午</p>
														</li>
														<li class="active">
															<p>下午</p>
														</li>
														<li class="active">
															<p>晚上</p>
														</li>
														<li>
															<p>凌晨</p>
														</li>
													</ul>
												</div>
											</div>
											<div class="reportChart topic_level4">
												<h4>假日</h4>
												<div>
													<ul>
														<li class="active"></li>
													</ul>
												</div>
											</div>
											<div class="reportChart topic_level4">
												<h4>輪班</h4>
												<div>
													<ul>
														<li class=""></li>
													</ul>
												</div>
											</div>
										</div>
									</li>
								</ul>
								<ul style="float:right;">
								</ul>
							</div>
						</div>
					</div><!-- reportDetial -->
				</div><!-- reportItem END -->

				<div class="reportItem">
					<h3>關於我</h3>
					<div class="reportDetial">
						<div class="aboutMe">
							<div>
								<ul>
									<li>自我介紹</li>
									<li>我們要愛地球。然後，愛地球之餘找個人來愛~2014年完成半年英國打工遊學的夢想；回到台灣去花蓮工作，體驗一年好山好水的東部風光，現在回到西部生活～</li>
								</ul>
								<ul>
									<li>別人對我的第一印象
										<!--<span>(以下各題都以30字為限)</span>-->
									</li>
									<li>如果把其他的交友服務比喻成人力銀行，可以提供數千筆的的求職者名單</li>
								</ul>
								<ul>
									<li>我的夢想是</li>
									<li>認真交往的關係、已結婚為前提的交往</li>
								</ul>
								<ul>
									<li>最讓我有熱情的是</li>
									<li>認真交往的關係、已結婚為前提的交往</li>
								</ul>
								<ul class="">
									<li>我的另一半最需要的特質</li>
									<li>認真交往的關係、已結婚為前提的交往</li>
								</ul>
								<ul>
									<li>我覺得最浪漫的事</li>
									<li>認真交往的關係、已結婚為前提的交往</li>
								</ul>
								<ul>
									<li>我生命中不可或缺的是</li>
									<li>認真交往的關係、已結婚為前提的交往</li>
								</ul>
								<ul>
									<li>休閒時最常做的ㄧ些事</li>
									<li>認真交往的關係、已結婚為前提的交往</li>
								</ul>
								<ul>
									<li>最喜歡的旅行方式</li>
									<li>認真交往的關係、已結婚為前提的交往</li>
								</ul>
							</div>
						</div>

					</div>
				</div><!-- reportItem END -->

				<div class="reportTitle">
					<h1>性格報告</h1>
					<p>性格分為16種類型，「性格」是每個人特有的，可以對個人外在的行為、態度提供統一的、內在的解釋。</p>
				</div>
				<div class="reportItem w1">
					<h3>性格報告</h3>
					<div class="reportDetial">
						<!--<div class="script">性格分為16種類型，「性格」是每個人特有的，可以對個人外在的行為、態度提供統一的、內在的解釋。</div>-->
						<div class="title">對方的性格分類: IFPA 藝術創作型</div>
						<div class="script">他的個性孤獨、害羞，需要自己的小天地。他友善的性格，不會將自己的意見加諸他人，也盡量避免衝突，對他來說，忠於自己想法和價值的人更勝強迫他人。他靈活、平易近人且有耐心，他無意當領導者，甘於作個追隨者，這樣他更可以從容地與他人相處和工作。在自己的小天地中與信賴的人相處，會帶給他能量和友誼。善於觀察生活、喜歡從經歷中直接瞭解和感受事物。<br><br>
							敏感的他對感情有種寧缺勿濫的執著，當有人一旦踏入他柔軟的心靈，那築起的保護牆就瞬間瓦解。</div>
						<div class="reportChart">
							<div>
								<ol class="infoPad">
									<li class="info_0">你</li>
									<li class="info_1">對方</li>
								</ol>
							</div>
						</div>
						<div class="reportPad">
							<div class="reportChart topic_level4">
								<h4>心靈能量的來源 <i></i></h4>
								<div>
									<ul>
										<li class="active"></li>
										<li></li>
										<li class="active2"></li>
										<li></li>
									</ul>
								</div>
								<p><span>外放型(O)</span><span>內斂型(I)</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>認識世界的角度 <i></i></h4>
								<div>
									<ul>
										<li></li>
										<li></li>
										<li></li>
										<li class="active3"></li>
									</ul>
								</div>
								<p><span>具體型(F)</span><span>洞察型(S)</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>做決策的依據 <i></i></h4>
								<div>
									<ul>
										<li></li>
										<li class="active"></li>
										<li></li>
										<li class="active2"></li>
									</ul>
								</div>
								<p><span>理性型(L)</span><span>感性型(P)</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>生活態度與價值觀 <i></i></h4>
								<div>
									<ul>
										<li class="active2"></li>
										<li></li>
										<li class="active"></li>
										<li></li>
									</ul>
								</div>
								<p><span>計畫型(D)</span><span>隨性型(A)</span></p>
							</div>
						</div>
					</div>
				</div>

				<div class="pairReportScript">
					<div class="title">
						<h2>深度契合分析</h2>
						<p>以下是各個心理面向的詳細契合度報告 ，幫助你們更深入的了解彼此</p>
					</div>
				</div>
				<div class="pairReportSub">
					<div class="reportItem">
						<h3>安全感</h3>
						<div class="pairScore">93<p>契合指數</p>
						</div>
						<div class="reportDetial">
							<div class="title">你的安全感類型：自在型</div>
							<div class="script">她的安全感類型比較高，能夠自在地做自己，也願意回應他人、親近伴侶。給彼此空間，又不會過於疏遠，大多數的時候都可以拿捏好關係中的距離。自在型的人，大多能夠給予伴侶信任、接納的感覺，但這並不表示她的戀愛不會出現任何問題，只是她比其他類型有更多的心理資源去面對與處理這些問題。</div>
							<div class="reportChart topic_XY_normal">
								<div>
									<ol class="infoPad">
										<li class="info_0">你</li>
										<li class="info_1">對方</li>
									</ol>
								</div>
								<div class="container">
									<div class="element">
										<ul class="bg">
											<li>超然型</li>
											<li>矛盾型</li>
											<li>重情型</li>
											<li>自在型</li>
										</ul>
										<ul>
											<li>高逃避</li>
											<li>高焦慮</li>
											<li>低逃避</li>
											<li>低焦慮</li>
										</ul>
										<ul class="infoPad">
											<li class="point" style="top:80%; left:20%"></li>
											<li class="point2" style="top:79%; left:21%"></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="title">配對組合: 成長配對 (你:重情型、對方:自在型)</div>
							<div class="script">你是很需要安全感的人，希望可以經常看到對方，她的陪伴會讓你覺得很安穩，在這段關係中可以感覺到彼此是如此地需要對方，不過偶爾她會需要一些自己的空間，有時候不要太黏，會讓你們的關係更自在。</div>
						</div>
					</div>
				</div>
				<div class="pairReportSub">
					<div class="reportItem">
						<h3>衝突因應</h3>
						<div class="pairScore">93<p>契合指數</p>
						</div>
						<div class="reportDetial">
							<div class="title">你的衝突因應模式：主導</div>
							<div class="script">在衝突中，她比較看重自己的想法，對自己的分析與決定很有信心，希望說服對方也能夠接受與認同她的想法。可是往往也因為這樣，容易忽略了對方的感受，有時將自己的需求，強加在對方身上，並以為那是對方需要的。</div>
							<div class="reportChart topic_XY_normal">
								<div>
									<ol class="infoPad">
										<li class="info_0">你</li>
										<li class="info_1">對方</li>
									</ol>
								</div>
								<div class="container">
									<div class="element">
										<ul class="bg">
											<li>逃避型</li>
											<li>謙讓型</li>
											<li>整合型</li>
											<li>主導型</li>
										</ul>
										<ul>
											<li>在意自己少</li>
											<li>在意對方多</li>
											<li>在意自己多</li>
											<li>在意對方少</li>
										</ul>
										<ul class="infoPad">
											<li class="point" style="top:80%; left:20%"></li>
											<li class="point2" style="top:79%; left:21%"></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="title">配對組合:守住界線型 (你：整合、對方：主導)</div>
							<div class="script">她比較希望你能接受她的看法或觀點，你有一些自己堅持，但也能接受她有不同的想法，有時她的固執可能會讓你感到不舒服，不過你通常能守住自己的界線，也會適時的與對方達成共識。</div>
						</div>
					</div>
				</div>
				<div class="pairReportSub">
					<div class="reportItem">
						<h3>婚姻價值</h3>
						<div class="pairScore">93<p>契合指數</p>
						</div>
						<div class="reportDetial">
							<div class="title">成長觀</div>
							<div class="script">成長觀：相信婚姻的成功須倚靠經營與發展，遭遇婚姻問題時，認為可以透過努力來解決。<br>
								非成長觀：相信婚姻的好壞是命中註定的，遇到婚姻挑戰時，認為是因為2個人先天上就夠不適合，並非靠努力可以解決 。</div>
							<div class="reportChart topic_level4">
								<h4>婚姻成長觀</h4>
								<div>
									<ol class="infoPad">
										<li class="info_0">你</li>
										<li class="info_1">對方</li>
									</ol>
								</div>
								<div>
									<ul>
										<li></li>
										<li class="active"></li>
										<li></li>
										<li></li>
										<li class="active2"></li>
										<li></li>
									</ul>
								</div>
								<p><span>非成長觀</span><span>成長觀</span></p>
							</div>
							<div class="title">婚姻傳統性</div>
							<div class="script">婚姻傳統性表達一個人對婚姻的信念。<br>
								傳統型：以男性為一家之主，認為整體家庭的和諧重於個人的幸福，強調長幼尊卑、傳宗接代，希望婚後與夫家同住，男女應為自己在家庭中的角色負起責任。<br>
								現代型：偏好兩性平權，尊重夫妻兩人在家庭生活中的快樂和需求，不強調尊卑的觀念，希望婚後能離開公婆自己住，重視感情交流更勝倫理規範。</div>
							<div class="reportChart topic_level4">
								<h4>婚姻傳統性</h4>
								<div>
									<ol class="infoPad">
										<li class="info_0">你</li>
										<li class="info_1">對方</li>
									</ol>
								</div>
								<div>
									<ul>
										<li></li>
										<li class="active"></li>
										<li></li>
										<li></li>
										<li class="active2"></li>
										<li></li>
									</ul>
								</div>
								<p><span>現代型</span><span>傳統型</span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="pairReportSub">
					<div class="reportItem">
						<h3>興趣</h3>
						<div class="pairScore">93<p>契合指數</p>
						</div>
						<div class="reportDetial">
							<div class="title">興趣</div>
							<div class="script">我們將每個人的興趣依照兩個向度來劃分，一個是執行時身體的活動程度高低(動態/靜態)，另一向度則是做這件事時傾向一個人還是有其他人陪伴完成(個人/群體)。一般來說兩人有共同的興趣，或類別相同的興趣，生活中會有更多的交集與話題。</div>
							<div>

								<div class="reportChart">
									<div>
										<ol class="infoPad">
											<li class="info_0">你</li>
											<li class="info_1">對方</li>
										</ol>
									</div>
								</div>
								<div class="reportChart topic_XY_large">
									<ul class="bg"></ul>
									<ul>
										<li>動態</li>
										<li>群體</li>
										<li>靜態</li>
										<li>個人</li>
									</ul>
									<ul class="infoPad">
										<li class="Q1">
											<p class="point2">聽音樂</p>
											<p class="point2">聽音樂</p>
											<p class="point2">聽音樂</p>
											<p class="point2">聽音樂</p>
										</li>
										<li class="Q2"></li>
										<li class="Q4">
											<p class="point3">慢跑、散步</p>
											<p class="point">慢跑、散步</p>
											<p class="point">慢跑、散步</p>
											<p class="point">慢跑、散步</p>
											<p class="point">慢跑、散步</p>
											<p class="point">慢跑、散步</p>
										</li>
										<li class="Q3"></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="pairReportSub">
					<div class="reportItem">
						<h3>生活習慣</h3>
						<div class="pairScore">93<p>契合指數</p>
						</div>
						<div class="reportDetial">
							<div class="script">一般來說生活習慣較相似的兩個人，婚後較容易適應彼此的生活步調，生活中的衝突和磨合會比較少，以下是你們在生活習慣的比較。</div>
							<div class="reportChart topic_level4">
								<h4>就寢時間</h4>
								<div>
									<ol class="infoPad">
										<li class="info_0">你</li>
										<li class="info_1">對方</li>
									</ol>
								</div>
								<div>
									<ul>
										<li></li>
										<li class="active"></li>
										<li></li>
										<li></li>
										<li class="active2"></li>
										<li></li>
									</ul>
								</div>
								<p class="flex"><span>22:00<br>以前</span><span>23:00</span><span>24:00</span><span>01:00</span><span>02:00</span><span>03:00<br>以後</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>乾淨程度</h4>
								<div>
									<ul>
										<li></li>
										<li class="active3"></li>
										<li></li>
										<li></li>
										<li></li>
										<li></li>
									</ul>
								</div>
								<p><span>非常不在意</span><span>非常在意</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>抽菸</h4>
								<div>
									<ul>
										<li class="active3"></li>
										<li></li>
									</ul>
								</div>
								<p><span>不抽菸</span><span>抽菸</span></p>
							</div>
							<div class="title">回婆家/回娘家頻率</div>
							<div class="script">華人社會，婚姻是雙方家族的結合，通常夫妻對於回婆家和回娘家的頻率越有共識，婚後的磨合與調整越少。</div>
							<div class="reportChart topic_level4">
								<h4>回娘家頻率</h4>
								<div>
									<ol class="infoPad">
										<li class="info_0">你</li>
										<li class="info_1">對方</li>
									</ol>
								</div>
								<div>
									<ul>
										<li></li>
										<li class="active"></li>
										<li></li>
										<li></li>
										<li class="active2"></li>
										<li></li>
									</ul>
								</div>
								<p class="flex"><span>每週</span><span>每兩週</span><span>每月</span><span>每季</span><span>每半年</span><span>每一年</span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="pairReportSub">
					<div class="reportItem">
						<h3>家庭管理-子女教養</h3>
						<div class="pairScore">93<p>契合指數<span>(子女+金錢+家事)</span></p>
						</div>
						<div class="reportDetial">
							<div class="script">夫妻雙方對於孩子的教養態度越相像者，不僅婚後的衝突越少，孩子在成長過程中也較少產生認知上的矛盾。以下是你們對於子女教養觀念的比較。</div>
							<div class="reportChart topic_level4">
								<h4>學習方式</h4>
								<div>
									<ol class="infoPad">
										<li class="info_0">你</li>
										<li class="info_1">對方</li>
									</ol>
								</div>
								<div>
									<ul>
										<li></li>
										<li class="active"></li>
										<li></li>
										<li></li>
										<li class="active2"></li>
										<li></li>
									</ul>
								</div>
								<p><span>贏在起跑點</span><span>快樂學習</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>物質供應</h4>
								<div>
									<ul>
										<li></li>
										<li class="active3"></li>
										<li></li>
										<li></li>
										<li class=""></li>
										<li></li>
									</ul>
								</div>
								<p><span>用最好的</span><span>能用就好</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>挫折處理</h4>
								<div>
									<ul>
										<li></li>
										<li class="active3"></li>
										<li></li>
										<li></li>
										<li class=""></li>
										<li></li>
									</ul>
								</div>
								<p><span>用最好的</span><span>能用就好</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>陪伴孩子</h4>
								<div>
									<ul>
										<li></li>
										<li class="active3"></li>
										<li></li>
										<li></li>
										<li class=""></li>
										<li></li>
									</ul>
								</div>
								<p><span>用最好的</span><span>能用就好</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>做決定</h4>
								<div>
									<ul>
										<li></li>
										<li class="active3"></li>
										<li></li>
										<li></li>
										<li class=""></li>
										<li></li>
									</ul>
								</div>
								<p><span>用最好的</span><span>能用就好</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>激勵方式</h4>
								<div>
									<ul>
										<li></li>
										<li class="active3"></li>
										<li></li>
										<li></li>
										<li class=""></li>
										<li></li>
									</ul>
								</div>
								<p><span>用最好的</span><span>能用就好</span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="pairReportSub">
					<div class="reportItem">
						<h3>家庭管理-金錢觀</h3>
						<div class="pairScore">93<p>契合指數<span>(子女+金錢+家事)</span></p>
						</div>
						<div class="reportDetial">
							<div class="script">金錢是婚後夫妻吵架的三大元兇之一，一般來說，夫妻的金錢觀越相像者，在婚後由金錢所挑起的爭端與衝突就越少。</div>
							<div class="reportChart topic_level4">
								<h4>大筆支出應徵得伴侶同意</h4>
								<div>
									<ol class="infoPad">
										<li class="info_0">你</li>
										<li class="info_1">對方</li>
									</ol>
								</div>
								<div>
									<ul>
										<li></li>
										<li class="active"></li>
										<li></li>
										<li></li>
										<li class="active2"></li>
										<li></li>
									</ul>
								</div>
								<p><span>非常不同意</span><span>非常同意</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>個人所得由自己保管和應用</h4>
								<div>
									<ul>
										<li></li>
										<li class="active"></li>
										<li></li>
										<li></li>
										<li class="active2"></li>
										<li></li>
									</ul>
								</div>
								<p><span>非常不同意</span><span>非常同意</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>個人所得由自己保管和應用</h4>
								<div>
									<ul>
										<li></li>
										<li class="active"></li>
										<li></li>
										<li></li>
										<li class="active2"></li>
										<li></li>
									</ul>
								</div>
								<p><span>非常不同意</span><span>非常同意</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>個人所得由自己保管和應用</h4>
								<div>
									<ul>
										<li></li>
										<li class="active"></li>
										<li></li>
										<li></li>
										<li class="active2"></li>
										<li></li>
									</ul>
								</div>
								<p><span>非常不同意</span><span>非常同意</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>個人所得由自己保管和應用</h4>
								<div>
									<ul>
										<li></li>
										<li class="active"></li>
										<li></li>
										<li></li>
										<li class="active2"></li>
										<li></li>
									</ul>
								</div>
								<p><span>非常不同意</span><span>非常同意</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>個人所得由自己保管和應用</h4>
								<div>
									<ul>
										<li></li>
										<li class="active"></li>
										<li></li>
										<li></li>
										<li class="active2"></li>
										<li></li>
									</ul>
								</div>
								<p><span>非常不同意</span><span>非常同意</span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="pairReportSub">
					<div class="reportItem">
						<h3>家庭管理-家務分工</h3>
						<div class="pairScore">93<p>契合指數<span>(子女+金錢+家事)</span></p>
						</div>
						<div class="reportDetial">
							<div class="script">家務分工是婚後滿意度的重要指標，一般來說結婚後丈夫都會比婚前所預期的做更少的家事，妻子則是比預期做更多的家事。研究發現，兩人若能彼此分擔家事，婚姻滿意度會較高。</div>
							<div class="reportChart topic_level4">
								<h4>照顧小孩生活起居</h4>
								<div>
									<ol class="infoPad">
										<li class="info_0">你</li>
										<li class="info_1">對方</li>
									</ol>
								</div>
								<div>
									<ul>
										<li></li>
										<li class="active"></li>
										<li></li>
										<li></li>
										<li class="active2"></li>
										<li></li>
									</ul>
								</div>
								<p><span>丈夫的責任</span><span>妻子的責任</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>管教小孩課業及生活規矩</h4>
								<div>
									<ul>
										<li></li>
										<li class="active"></li>
										<li></li>
										<li></li>
										<li class="active2"></li>
										<li></li>
									</ul>
								</div>
								<p><span>丈夫的責任</span><span>妻子的責任</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>做家事</h4>
								<div>
									<ul>
										<li></li>
										<li class="active"></li>
										<li></li>
										<li></li>
										<li class="active2"></li>
										<li></li>
									</ul>
								</div>
								<p><span>丈夫的責任</span><span>妻子的責任</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>照顧長輩生活</h4>
								<div>
									<ul>
										<li></li>
										<li class="active"></li>
										<li></li>
										<li></li>
										<li class="active2"></li>
										<li></li>
									</ul>
								</div>
								<p><span>丈夫的責任</span><span>妻子的責任</span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="pairReportSub">
					<div class="reportItem">
						<h3>性需求表達</h3>
						<div class="pairScore">93<p>契合指數</p>
						</div>
						<div class="reportDetial">
							<div class="script">心理學研究發現，越傾向彼此溝通性生活的感受與需求的夫妻，他們的婚姻滿意度越高。</div>
							<div class="reportChart topic_level4">
								<h4>性需求表達</h4>
								<div>
									<ol class="infoPad">
										<li class="info_0">你</li>
										<li class="info_1">對方</li>
									</ol>
								</div>
								<div>
									<ul>
										<li></li>
										<li class="active"></li>
										<li></li>
										<li></li>
										<li class="active2"></li>
										<li></li>
									</ul>
								</div>
								<p><span>傾向不表達</span><span>傾項表達</span></p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div><!-- mypairCount END -->

	</div><!-- main END -->
	<div id="popContainer" class="height_G">
		<!-- 見面聊評分 -->
		<div class="popContent basic meetdataPop">
			<div>
				<ul>
					<li class="title">見面後回饋</li>
					<li class="user_pic"><img src="images/user_photo_default_s.jpg" />
						<p><span>林志玲</span></p>
					</li>
					<li class="content pageGroup">
						<div class="page topic ansType_choiceLine">
							<div>
								<h3 class="">你對他的好感度如何?<span></span></h3>
								<div class="ansPad">
									<ul>
										<li><input type="radio" name="sel00" value="1" id="sel001"><label for="sel001">1<span>應該不適合</span></label></li>
										<li><input type="radio" name="sel00" value="2" id="sel002"><label for="sel002">2<span>有點不適合</span></label></li>
										<li><input type="radio" name="sel00" value="3" id="sel003"><label for="sel003">3<span>還不確定</span></label></li>
										<li><input type="radio" name="sel00" value="4" id="sel004"><label for="sel004">4<span>有點好感</span></label></li>
										<li><input type="radio" name="sel00" value="5" id="sel005"><label for="sel005">5<span>很有好感</span></label></li>
									</ul>
								</div>
								<div class="ctrlPad"><a class="next"></a></div>
							</div>
						</div>
						<div class="page topic ansType_choiceLine">
							<div>
								<h3 class="">你期待下次的見面嗎?<span></span></h3>
								<div class="ansPad">
									<ul>
										<li><input type="radio" name="sel02" value="1" id="sel021"><label for="sel021">1<span>應該不會</span></label></li>
										<li><input type="radio" name="sel02" value="2" id="sel022"><label for="sel022">2<span>不太確定</span></label></li>
										<li><input type="radio" name="sel02" value="3" id="sel023"><label for="sel023">3<span>不排斥</span></label></li>
										<li><input type="radio" name="sel02" value="4" id="sel024"><label for="sel024">4<span>有點期待</span></label></li>
										<li><input type="radio" name="sel02" value="5" id="sel025"><label for="sel025">5<span>非常期待</span></label></li>
									</ul>
								</div>
								<div class="ctrlPad"><a class="next"></a></div>
							</div>
						</div>
						<div class="page topic ansType_choiceLine">
							<div>
								<h3 class="">他準時赴約的情況?<span>(答案向對方隱藏)</span></h3>
								<div class="ansPad">
									<ul>
										<li><input type="radio" name="sel02" value="1" id="sel021"><label for="sel021">1<span>晚21分鐘以上</span></label></li>
										<li><input type="radio" name="sel02" value="2" id="sel022"><label for="sel022">2<span>晚11到20分鐘</span></label></li>
										<li><input type="radio" name="sel02" value="3" id="sel023"><label for="sel023">3<span>晚6到10分鐘</span></label></li>
										<li><input type="radio" name="sel02" value="4" id="sel024"><label for="sel024">4<span>正負5分鐘內</span></label></li>
										<li><input type="radio" name="sel02" value="5" id="sel025"><label for="sel025">5<span>早6分鐘以上</span></label></li>
									</ul>
								</div>
								<div class="ctrlPad"><a class="next"></a></div>
							</div>
						</div>
						<div class="page topic ansType_choiceLine">
							<div>
								<h3 class="">他的約會態度如何?<span>(答案向對方隱藏)</span></h3>
								<div class="ansPad">
									<ul>
										<li><input type="radio" name="sel03" value="1" id="sel031"><label for="sel031">1<span>傲慢無禮</span></label></li>
										<li><input type="radio" name="sel03" value="2" id="sel032"><label for="sel032">2<span>態度冷淡</span></label></li>
										<li><input type="radio" name="sel03" value="3" id="sel033"><label for="sel033">3<span>尚可接受</span></label></li>
										<li><input type="radio" name="sel03" value="4" id="sel034"><label for="sel034">4<span>應對合宜</span></label></li>
										<li><input type="radio" name="sel03" value="5" id="sel035"><label for="sel035">5<span>親切有禮</span></label></li>
									</ul>
								</div>
								<p>&nbsp;</p>
								<div class="ctrlPad"><a class="prev"></a> <input type="submit" class="btn_closePop btn_red" value="送出" /></div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- 照片 -->
		<div class="popContent photoPop unselectable">
			<div class="photoPopCtrl">
				<ul>
					<li></li>
					<li></li>
				</ul>
			</div>
			<img src="images/user_photo_default_l.jpg" alt="" />
			<div class="btn_closePop"></div>
		</div>
	</div>

	<div id="onboardingPop">
		<div class="boarding addFriend" id="addFriendOnBoard">
			<div class="title"></div>
			<div class="text-box">
				<p>點擊「加好友，再約見面聊」後，系統會以「簡訊或LINE」通知對方，確保對方收到邀約通知。</p>
			</div>
			<div class="ta-R">
				<button type="button" class="btn-blue onboardCloseBtn">開始使用</button>
			</div>
		</div>
	</div>

	<?php include_once("at_include/footer.php"); ?>
	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery.min-2.2.4.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery.touchwipe.min.js"></script>
	<script type="text/javascript" src="js/at_cage.js"></script>
	<script>
		$(window).load(function() {
			<?php include_once("at_include/page_menu_js.php"); ?>
		});
	</script>
	<script type="text/javascript" src="js/mypairreport.js"></script>

	<!-- 美術檔 js -->
	<script type="text/javascript" src="js/abby/abby.js"></script>
</body>

</html>