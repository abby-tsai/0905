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
	<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<?php include_once("../at_include/inc_facebook.php"); ?>
</head>

<body class="mypair onSign">
	<div id="fb-root"></div>
	<?php include_once("../example/at_include/header4_example.php"); ?>
	<div id="main">
		<div class="headerBack">
			<a class="back"><i class="fa fa-angle-left" aria-hidden="true"></i>契合報告</a>
		</div>
		<div class="mypairCount pairReport">

			<div class="mypairPad clear">
				<div class="mypairItem">
					<ul class="picture">
						<li><img alt="" src="../images/abby/abby_example/img-5.jpg" /></li>
					</ul>
					<ul class="status">
						<li class="new"></li>
						<li class="number bigger">93</li>
					</ul>
					<ul class="basicData">
						<li>
							<p>Kyle<span>新北市 / 30歲</span></p>
						</li>
					</ul>
					<ul class="infoData">
						<li>
							<p>碩士</p>國立成功大學
						</li>
						<li>
							工程師
						</li>
					</ul>
				</div>
				<div class="userphoto CGt">
					<ul>
						<li class="active"><img alt="" src="../images/user_photo_default_l.png" /></li>
						<li><img alt="" src="../images/user_default_0.jpg" /></li>
						<li><img alt="" src="../images/portrait-img01.jpg" /></li>
						<li><img alt="" src="../images/portrait-img02.jpg" /></li>
						<li><img alt="" src="../images/user_default_1.jpg" /></li>
						<li><img alt="" src="../images/image_06.jpg" /></li>
					</ul>
				</div>
				<div class="cssTable unselectable">
					<ul>
						<li><a class="btn-agree btn-red notApplyBtn" id="addFriendBtn">加好友，再約見面聊</a></li>
					</ul>
					<ul class="tool-buttons">
						<li><a class="btn-agree notApplyBtn">檢舉</a></li>
						<li><a class="btn-agree notApplyBtn">封鎖</a></li>
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
						<div class="meetPairData clear autoHeight">
							<div class="dataArea pairData">
								<p>以下是 Kyle 過往約會所獲得的回饋</p>
							</div>
							<div class="dataArea pairData no-border has-note">
								<div class="meetScore clear">
									<h3>約會風格</h3>
									<ul>
										<li><span>準時赴約</span>
											<p>優秀 <span>5</span>/5</p>
										</li>
										<li><span>約會態度</span>
											<p>優秀 <span>5</span>/5</p>
										</li>
									</ul>
								</div>
								<span class="note-box">其他會員<br>給他的回饋</span>
							</div>
						</div>
					</div>
				</div><!-- meetListCount END -->
			</div><!-- meetContPad END -->

			<div class="pageMenu list CGt unselectable">
				<ul>
					<li class="i_report_pair"><a href="mypairreport_01fit_example.php">契合<br>報告</a></li>
					<li class="i_report_mylove"><a href="mypairreport_03mylove_example.php">愛之語<br>報告</a></li>
					<li class="i_report_travel"><a href="mypairreport_04travelcomp_example.php">旅伴<br>報告</a></li>
				</ul>
				<ul class="nav"></ul>
			</div>
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
								<li><span>92</span>
									<div class="report_data"><i style="left:92%;"></i></div>
								</li>
							</ul>
							<ul>
								<li>衝突處理</li>
								<li><span>79</span>
									<div class="report_data"><i style="left:79%;"></i></div>
								</li>
							</ul>
							<ul>
								<li>婚姻價值</li>
								<li><span>98</span>
									<div class="report_data"><i style="left:77%;"></i></div>
								</li>
							</ul>
							<ul>
								<li>興趣</li>
								<li><span>76</span>
									<div class="report_data"><i style="left:76%;"></i></div>
								</li>
							</ul>
						</div>
						<div class="reportChart topic_percentBar">
							<ul>
								<li>生活習慣</li>
								<li><span>94</span>
									<div class="report_data"><i style="left:94%;"></i></div>
								</li>
							</ul>
							<ul>
								<li>家庭管理</li>
								<li><span>81</span>
									<div class="report_data"><i style="left:81%;"></i></div>
								</li>
							</ul>
							<ul>
								<li>性表達</li>
								<li><span>97</span>
									<div class="report_data"><i style="left:97%;"></i></div>
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
										<p>Kyle</p>
									</li>
									<li>
										<p>年齡</p>
										<p>30歲</p>
									</li>
									<li>
										<p>居住地</p>
										<p>新北市</p>
									</li>
									<li>
										<p>身高</p>
										<p>175</p>
									</li>
									<!--<li><p>國籍</p><p>中華民國</p></li>-->
									<li>
										<p>學歷</p>
										<p>碩士</p>
									</li>
									<li class="basicData_work">
										<p>主要工作時間</p>
										<div class="reportDetial">
											<div class="reportChart topic_level4">
												<h4>週間</h4>
												<div>
													<ul>
														<li class="active">
															<p>上午</p>
														</li>
														<li class="active">
															<p>下午</p>
														</li>
														<li>
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
														<li></li>
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
								<ul>
									<li>
										<p>畢業學校</p>
										<p class="dataShow">國立成功大學</p>
									</li>
									<li>
										<p>職務別</p>
										<p class="dataShow">軟體工程師</p>
									</li>
									<li>
										<p>企業機構</p>
										<p>百大企業</p>
										<span class="note-box">
											機構名稱保密，舉例「華碩電腦」會顯示為「百大企業」
										</span>
									</li>
									<li>
										<p>感情狀態</p>
										<p>單身</p>
									</li>
									<!--<li><p>工作資歷</p><p class="dataShow">公務員資格、外商企業、上市櫃公司</p></li>-->
								</ul>
								<ul>
									<li>
										<p>生小孩</p>
										<p>要</p>
									</li>
									<li>
										<p>宗教信仰</p>
										<p>無信仰</p>
									</li>
									<li>
										<p>吃素</p>
										<p>否</p>
									</li>
									<li>
										<p>抽菸</p>
										<p>無</p>
									</li>
									<li>
										<p>國外生活經驗</p>
										<p>無</p>
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
									<li>平常喜歡上健身房，維持吃甜點的額度與保持生活的感受，有空會一個人看電影、追劇，我也很喜歡狗狗和貓貓，週末喜歡看海、熱愛大自然，最近想完成環島夢！</li>
								</ul>
								<ul>
									<li>別人對我的第一印象
										<!--<span>(以下各題都以30字為限)</span>-->
									</li>
									<li>有人說過很有學長的感覺，給人偏成熟，穩重且很有安全感的印象</li>
								</ul>
								<ul>
									<li>我的夢想是</li>
									<li>想和最愛的另一半，在髮華鬢白時，還能牽著手一起散步、聊天</li>
								</ul>
								<ul>
									<li>最讓我有熱情的是</li>
									<li>生活裡最有熱情的是運動健身；感情中，就是讓另一半有幸福的笑容</li>
								</ul>
								<ul class="">
									<li>我的另一半最需要的特質</li>
									<li>善良、願意溝通、體貼、調皮有想法、要讓我摸頭、不要太細心XD</li>
								</ul>
								<ul>
									<li>我覺得最浪漫的事</li>
									<li>在生活中、回憶裡處處留下倆人的足跡，最平凡的幸福最浪漫。</li>
								</ul>
								<ul>
									<li>我生命中不可或缺的是</li>
									<li>家庭、朋友、電影、運動和音樂</li>
								</ul>
								<ul>
									<li>休閒時最常做的ㄧ些事</li>
									<li>唱歌、打球、上健身房、看電影、追劇和看展</li>
								</ul>
								<ul>
									<li>最喜歡的旅行方式</li>
									<li>自助旅行，也可以一起跟朋友組團，但我喜歡行程是大家一起安排的</li>
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
						<div class="pairScore">92<p>契合指數</p>
						</div>
						<div class="reportDetial">
							<div class="title">恬適配對 (你：自在型、對方：自在型)</div>
							<div class="script">你們雙方都很有安全感，對自己和關係都較有自信，相處起來較為和諧與自在。若能夠持續培養對關係的共識，應能有不錯的發展。</div>
							<div class="reportChart topic_XY_normal">
								<div>
									<ol class="infoPad fixed">
										<li class="info_0">你</li>
										<li class="info_1">對方</li>
									</ol>
								</div>
								<div class="container">
									<div class="element">
										<ul class="bg fixed">
											<li>超然型</li>
											<li>矛盾型</li>
											<li>自在型</li>
											<li>重情型</li>
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
							<div class="title">他的安全感類型：自在型</div>
							<div class="script">他比較有安全感，能夠自在地做自己，也願意回應他人、親近伴侶，給彼此空間，保持適當彈性，大多數的時候都可以拿捏好關係中的距離。自在型的人，大多能夠給予伴侶信任、接納的感覺，雖然他比其他類型有更多的心理資源去面對與處理這些問題，關係仍須兩人共同齊心協力來維護。</div>
						</div>
					</div>
				</div>
				<div class="pairReportSub">
					<div class="reportItem">
						<h3>衝突因應</h3>
						<div class="pairScore">79<p>契合指數</p>
						</div>
						<div class="reportDetial">
							<div class="title">主導統治型 (你：主導、對方：謙讓)</div>
							<div class="script">在這段關係裡面，妳擁有更多決定與選擇的權力。對方比較會去滿足妳的需求，但相反的，也可能因為這樣，妳更需要試著多照顧對方的需要，才能呵護這段關係的長久。</div>
							<div class="reportChart topic_XY_normal">
								<div>
									<ol class="infoPad fixed">
										<li class="info_0">你</li>
										<li class="info_1">對方</li>
									</ol>
								</div>
								<div class="container">
									<div class="element">
										<ul class="bg fixed">
											<li>逃避型</li>
											<li>謙讓型</li>
											<li>主導型</li>
											<li>整合型</li>
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
							<div class="title">他的衝突因應模式：謙讓</div>
							<div class="script">他比較在意和諧，常常會順從對方的想法來避免衝突的發生，他比較重視對方的需求，常常降低自己的需要去符合對方的期待，以和為貴。</div>
						</div>
					</div>
				</div>
				<div class="pairReportSub">
					<div class="reportItem">
						<h3>婚姻價值</h3>
						<div class="pairScore">98<p>契合指數</p>
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
										<li></li>
										<li></li>
										<li></li>
										<li class="active"></li>
										<li class="active2"></li>
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
										<li class="active2"></li>
										<li class="active"></li>
										<li></li>
										<li></li>
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
						<div class="pairScore">76<p>契合指數</p>
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
											<p class="point2">健身運動</p>
										</li>
										<li class="Q2">
											<p class="point2">球類運動</p>
											<p class="point">旅行</p>
											<p class="point">爬山、攀岩</p>
											<p class="point">露營、溯溪</p>
										</li>
										<li class="Q4">
											<p class="point3">聽音樂</p>
											<p class="point2">藝文活動</p>
											<p class="point2">漫畫、動畫</p>
											<p class="point2">看電影</p>
											<p class="point">攝影、拍影片</p>
										</li>
										<li class="Q3">
											<p class="point">朋友聚會</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="pairReportSub">
					<div class="reportItem">
						<h3>生活習慣</h3>
						<div class="pairScore">94<p>契合指數</p>
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
										<li></li>
										<li></li>
										<li></li>
										<li class="active3"></li>
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
										<li></li>
										<li></li>
										<li class="active3"></li>
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
										<li></li>
										<li class="active3"></li>
									</ul>
								</div>
								<p><span>抽菸</span><span>不抽菸</span></p>
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
										<li></li>
										<li class="active"></li>
										<li class="active2"></li>
										<li></li>
										<li></li>
									</ul>
								</div>
								<p class="flex"><span>每週</span><span>每兩週</span><span>每月</span><span>每季</span><span>每半年</span><span>每一年</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>回婆家頻率</h4>
								<div>
									<ul>
										<li></li>
										<li></li>
										<li class="active"></li>
										<li class="active2"></li>
										<li></li>
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
						<div class="pairScore">81<p>契合指數<span>(子女+金錢+家事)</span></p>
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
										<li></li>
										<li></li>
										<li class="active"></li>
										<li></li>
										<li class="active2"></li>
									</ul>
								</div>
								<p><span>贏在起跑點</span><span>快樂學習</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>物質供應</h4>
								<div>
									<ul>
										<li></li>
										<li></li>
										<li class="active3"></li>
										<li></li>
										<li></li>
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
										<li></li>
										<li></li>
										<li class="active"></li>
										<li></li>
										<li class="active2"></li>
									</ul>
								</div>
								<p><span>替他排除困難</span><span>錯誤中學習</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>陪伴孩子</h4>
								<div>
									<ul>
										<li></li>
										<li></li>
										<li></li>
										<li class="active2"></li>
										<li class="active"></li>
										<li></li>
									</ul>
								</div>
								<p><span>有空才陪伴</span><span>排除萬難陪伴</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>做決定</h4>
								<div>
									<ul>
										<li></li>
										<li></li>
										<li class="active"></li>
										<li></li>
										<li class="active2"></li>
										<li></li>
									</ul>
								</div>
								<p><span>幫孩子做決定</span><span>讓孩子做決定</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>激勵方式</h4>
								<div>
									<ul>
										<li></li>
										<li class="active2"></li>
										<li class="active"></li>
										<li></li>
										<li></li>
										<li></li>
									</ul>
								</div>
								<p><span>多鼓勵與安慰</span><span>責備不夠努力</span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="pairReportSub">
					<div class="reportItem">
						<h3>家庭管理-金錢觀</h3>
						<div class="pairScore">81<p>契合指數<span>(子女+金錢+家事)</span></p>
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
										<li></li>
										<li></li>
										<li></li>
										<li class="active2"></li>
										<li class="active"></li>
									</ul>
								</div>
								<p><span>非常不同意</span><span>非常同意</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>個人所得由自己保管和應用</h4>
								<div>
									<ul>
										<li></li>
										<li></li>
										<li class="active2"></li>
										<li></li>
										<li class="active"></li>
										<li></li>
									</ul>
								</div>
								<p><span>非常不同意</span><span>非常同意</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>我傾向過簡樸的生活</h4>
								<div>
									<ul>
										<li></li>
										<li></li>
										<li class="active"></li>
										<li></li>
										<li class="active2"></li>
										<li></li>
									</ul>
								</div>
								<p><span>非常不同意</span><span>非常同意</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>生活中的物質享樂對我很重要</h4>
								<div>
									<ul>
										<li></li>
										<li class="active2"></li>
										<li></li>
										<li class="active"></li>
										<li></li>
										<li></li>
									</ul>
								</div>
								<p><span>非常不同意</span><span>非常同意</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>伴侶可以用自己的所得供養父母</h4>
								<div>
									<ul>
										<li></li>
										<li></li>
										<li></li>
										<li></li>
										<li class="active3"></li>
										<li></li>
									</ul>
								</div>
								<p><span>非常不同意</span><span>非常同意</span></p>
							</div>
							<div class="reportChart topic_level4">
								<h4>雙薪家庭，家用支出由誰承擔</h4>
								<div>
									<ul>
										<li></li>
										<li></li>
										<li class="active3"></li>
										<li></li>
										<li></li>
										<li></li>
									</ul>
								</div>
								<p><span>丈夫承擔</span><span>妻子承擔</span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="pairReportSub">
					<div class="reportItem">
						<h3>家庭管理-家事分配</h3>
						<div class="pairScore">81<p>契合指數<span>(子女+金錢+家事)</span></p>
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
										<li></li>
										<li></li>
										<li class="active3"></li>
										<li></li>
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
										<li class="active2"></li>
										<li class="active"></li>
										<li></li>
										<li></li>
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
										<li></li>
										<li class="active"></li>
										<li class="active2"></li>
										<li></li>
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
										<li class="active2"></li>
										<li class="active"></li>
										<li></li>
										<li></li>
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
						<div class="pairScore">97<p>契合指數</p>
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
										<li></li>
										<li></li>
										<li></li>
										<li class="active"></li>
										<li class="active2"></li>
									</ul>
								</div>
								<p><span>傾向不表達</span><span>傾項表達</span></p>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="goTest pt-3 pb-5">
				<p class="title text-center">▼想擁有自己的報告，快來完成測驗吧▼</p>
				<div class="btn-box text-center">
					<a href="#" class="btn btn-sty1">
						開始心理學測驗 <span class="sp-txt-small">(10分鐘)</span>
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

	<div id="popContainer">
		<!-- 照片 -->
		<div class="popContent photoPop unselectable">
			<div class="photoPopCtrl">
				<ul>
					<li></li>
					<li></li>
				</ul>
			</div>
			<img src="../images/user_photo_default_l.jpg" alt="" />
			<div class="btn_closePop"></div>
		</div>
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
	<script type="text/javascript" src="../js/at_cage.js"></script>

	<!-- abby JS -->
	<script type="text/javascript" src="../js/abby/abby_example.js"></script>
	<script type="text/javascript" src="../js/abby/abby.js"></script>

	<script>
		$(window).load(function() {
			<?php include_once("../at_include/page_menu_js.php"); ?>
		})
		$(document).ready(function() {
			$('.pageMenu').find('li').eq(0).addClass('active');
			$('.subHeader').find('li').eq(0).addClass('active');
			var Gw = $(window),
				Gww = Gw.width();
			var $ctrlPic = $('.userphoto').find('li'),
				$ctrlPic_leng = $ctrlPic.length,
				$ctrlPicNow = 0,
				$mainPic = $('.popContent').find('img'),
				$btnMeet = $('.btn_meet');

			if (Gww > 980) {
				$ctrlPic.click(function() {
					$ctrlPicNow = $(this).index();
					var $imgSrc = $(this).find('img').attr('src');
					$mainPic.attr('src', $imgSrc);
					$('#popContainer').fadeIn();
					$('.photoPop').show();
					popUserPhotoCtrl();
				});
			}

			function popUserPhotoCtrl() {
				$('.photoPopCtrl').find('li:first-child').click(function() {
					if ($ctrlPicNow > 0) {
						$ctrlPicNow--;
					} else {
						$ctrlPicNow = $ctrlPic_leng - 1;
					}
					var $imgSrc = $ctrlPic.eq($ctrlPicNow).find('img').attr('src');
					$mainPic.attr('src', $imgSrc);
					console.log($ctrlPicNow, "|", $ctrlPic_leng);
				});
				$('.photoPopCtrl').find('li:last-child').click(function() {
					if ($ctrlPicNow < $ctrlPic_leng - 1) {
						$ctrlPicNow++;
					} else {
						$ctrlPicNow = 0;
					}
					var $imgSrc = $ctrlPic.eq($ctrlPicNow).find('img').attr('src');
					$mainPic.attr('src', $imgSrc);
					console.log($ctrlPicNow, "|", $ctrlPic_leng);
				});
			}
			$btnMeet.click(function() {
				$('#popContainer').fadeIn();
				$('.meetdataPop').show();
			});
			$('.btn_closePop').click(function() {
				$('.meetdataPop').hide();
				$('.photoPop').hide();
			})
			$('#popContainer > .before').click(function() {
				$('.meetdataPop').hide();
				$('.photoPop').hide();
			});
			var mypairItem = $('.mypairItem'),
				$photo = $('.userphoto').find('li'),
				$length = $photo.length,
				$dot = "";

			if (Gww < 980) {
				for (var i = 0; i < 2; i++) {
					$dot += "<li></li>";
				}
				mypairItem.append("<ul class='dot'>" + $dot + "</ul>");

				$('.dot').find('li:last-child').click(function() {
					photoCtrl('Left')
				});
				$('.dot').find('li:first-child').click(function() {
					photoCtrl('')
				});

				$('.mypairItem').touchwipe({
					wipeLeft: function() {
						photoCtrl('Left')
					},
					wipeRight: function() {
						photoCtrl('')
					},
					preventDefaultEvents: false
				});
			}

			function photoCtrl(direction) {
				var $obj = $('.userphoto').find($('.active')),
					$ctr = $('.dot').find('li'),
					$now = $obj.index();
				console.log($now, direction);
				if ($now < $length - 1 && direction === 'Left') {
					var $ind = $now + 1;
					$ctrlPic.eq($ind).addClass('active').siblings().removeClass('active');
				} else if ($now === 0 && direction === '') {
					var $ind = $length - 1;
					$ctrlPic.eq($ind).addClass('active').siblings().removeClass('active');
				} else if ($now >= 0 && direction === '') {
					var $ind = $now - 1;
					$ctrlPic.eq($ind).addClass('active').siblings().removeClass('active');
				} else {
					var $ind = 0;
					$ctrlPic.eq($ind).addClass('active').siblings().removeClass('active');
				}
			}
		});
	</script>
</body>

</html>