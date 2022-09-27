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
<body class="mypair">
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main">
	<div class="headerBack">
		<a class="back"><i class="fa fa-angle-left" aria-hidden="true"></i>我的配對</a>
    </div>
    <div class="mypairCount pairReport">
        <div class="mypairPad clear">
			<div class="mypairItem">
				<ul class="picture"><li><img alt="" src="images/user_photo_default_l.png" /></li></ul>
				<ul class="status"><li class="new"></li><li class="number">95</li></ul>
				<ul class="basicData">
					<li><p><i class="offline"></i>許瑋甯<span>台北市/35歲</span></p></li>
					<li class="heart3">互有好感</li>
				</ul>
				<ul class="infoData">
					<li><p>碩士</p>台北科技大學</li><li><p>知名外商</p>行銷企劃主管</li>
				</ul>
				<ul class="meetTag"><li><a class="btn_meet active"><span>約她</span><p>見面聊</p></a></li></ul>
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
			<div class="cssTable">
				<ul>
					<li><a class="chat" href="chatroom.php">聊天</a></li>
					<li><a class="like">LIKE</a></li>
					<li><a class="delite">刪除</a></li>
				</ul>
			</div>
        </div>
        
		<?php include_once("at_include/mypairreport_menu.php"); ?> <!-- 分類 -->
        
		<div class="testingReportCount">
			<div class="testingReportPad clear">        

				<div class="reportTitle">
					<h1>旅伴報告</h1>
					<p>選擇一起旅行的伴侶，需要考慮2個面向：旅行的目的和旅行的風格，目的的部分越像越好，風格的部分則要考慮彼此的搭配，以下是你們的旅伴報告。</p>
				</div>    
				<div class="reportItem">
					<h3>旅行目的</h3>
					<div class="pairScore">93<p>契合指數</p></div>
					<div class="reportDetial">
						<div class="script">旅行目的契合度，是旅伴選擇的首要關鍵，重要性略高於旅行風格的契合度，相似的旅行目的不但能減少衝突，更能使雙方對旅遊的滿意度大幅提升，所規劃的行程可以同時滿足彼此，而不需要有人犧牲自己的偏好。<br><br>妳在旅遊時最在乎的是看美景、感受文化，當然吃美食也要稍微兼顧，而買東西和住飯店，相形之下就沒那麼重要了。</div>
						<div class="reportChart topic_listNumber">
							<ol class="infoPad"><li class="info_0">你</li><li class="info_1">對方</li></ol>
							<ul class="active2"><li>感受文化</li><li>買東西</li><li>住飯店</li><li>吃美食</li><li>看美景</li></ul>
							<ul><li>感受文化</li><li>買東西</li><li>住飯店</li><li>吃美食</li><li>看美景</li></ul>
						</div>
					</div>
				</div>
				<div class="reportItem">
					<h3>旅行風格</h3>
					<div class="pairScore">93<p>契合指數</p></div>
					<div class="reportDetial">
						<div class="title">他的旅行風格：獅子型(DRL)</div>
						<div class="script">他屬於獅子型的人。對他而言，出來旅行就不必在乎預算的高低了，他不在乎花錢享用奢華的美食，或是昂貴的套裝行程；難得出來旅行，就是要把平日省下來的錢，拿來好好犒賞自己一番。他不喜歡快步調的旅行，旅行當中有太多的美好片刻值得駐足，與其跑遍所有的景點，他更愛緩慢地享受旅行的樂趣。對於旅程的規劃，他有很強烈的主導慾，他希望能夠掌控旅程當中的一切，希望能將旅程的步調與節奏操之在己。整體而言，他屬於一個預算高、主導性高、節奏性慢的旅者。</div>
						<div class="reportChart topic_level4">
							<h4>預算型</h4>
							<div>
								<ul><li class="active"></li><li></li><li class="active2"></li><li></li></ul>
								<ol class="infoPad"><li class="info_0">你</li><li class="info_1">對方</li></ol>
							</div>
							<p><span>背包客之旅(E)</span><span>享樂團之旅(D)</span></p>
						</div>
						<div class="reportChart topic_level4">
							<h4>節奏性</h4>
							<div><ul><li></li><li></li><li></li><li class="active"></li></ul></div>
							<p><span>行程排很鬆(R)</span><span>行程排很滿(T)</span></p>
						</div>
						<div class="reportChart topic_level4">
							<h4>主導性</h4>
							<div><ul><li></li><li class="active"></li><li></li><li></li></ul></div>
							<p><span>配合大家(F)</span><span>主導行程(L)</span></p>
						</div>
						<div class="title">你們的配對組合 (妳+他)：獅子 + 無尾熊</div>
						<div class="script">你們一方喜歡高預算的行程，另一方喜歡低預算的行程，這是你們唯一有所差異的一點，在這一點上面你們需要好好的溝通，才能讓你們的行程能夠一帆風順；雖然你們的預算上有所不同，但是在另外兩個向度上，你們是非常吻合的，你們一方喜歡主導旅行的進行，另一方則是非常的隨和，所以你們在旅行規劃上不會有太多的問題，很能夠找到彼此都想要的旅遊景點；你們也都很喜歡慢步調的旅行，都很樂意放慢步調，在旅程中享受平時所沒有的寧靜，這將使你們在規劃行程上更加的順利！</div>
					</div>
				</div>
				
				<!--
				<div class="reportItem">
					<h3>和妳最合的3種旅行風格</h3>
					<div class="reportDetial">
						<ul>
							<li class="title">No. 1: 狐狸 (ETL)</li>
							<li class="script">他是一個省吃儉用的人，即便在旅程當中也不例外。與其品嘗高檔餐廳，吃著當地的平價小吃也許更適合他。雖說如此，他對於旅程的節奏十分的重視，比起為了省錢而在一個景點駐足許久，能夠快速地在景點間轉換，遍覽風土民情，才能讓他覺得不虛此行，也許租機車會是一個很適合他的交通方式。最後，他很希望他能主導旅行中的一切，對於他想去的景點有著很深的執著，不太容許他人插手。整體而言，他是個預算性低，主導性高，節奏性快的人。</li>
							<li class="title">No. 2: 羚羊 (ETF)</li>
							<li class="script">他不在乎旅程的主導性，即便旅行中的一切都交由他人規劃他也無所謂。只要這趟行程能夠符合兩個重點即可，第一個是預算低，第二個是節奏快。他是一個低消費的人，太昂貴的套裝行程不適合他，他希望盡可能地壓低旅程中的大小花費，才不會讓旅行帶給他過多的開銷；同時，他喜歡輕巧地在景點與景點間轉換，如此一來他才能在有限的時間內，體驗不同的風土民情。整體而言，他是個預算性低，主導性低，節奏性快的人。</li>
							<li class="title">No. 3: 老鷹 (DTL)</li>
							<li class="script">他屬於老鷹型的人。對他而言，難得出來旅行，就是要把當地的名勝古蹟、大街小巷都逛遍才行，他習慣把行程排得滿滿的，每一個角落都不想放過；預算對他而言從來不是個問題，平日省吃儉用、辛苦存來的錢，就是為了這次旅行所準備的，能夠有一趟奢華的旅行，也是他所重視的；而他也很在意行程的規劃，如果可以的話，他會希望能夠主導整趟旅行的步調與內容。整體而言，他屬於一個預算高、主導性高、節奏快的旅者。</li>
						</ul>
					</div>
				</div>
				-->
				
				<div class="reportItem">
					<h3>其他旅行習慣</h3>
					<div class="reportDetial">
						<div class="script">其他旅行習慣可以幫助你們更了解彼此的行為模式，大致而言，旅行習慣越像越好。</div>
						<div class="reportChart topic_level4">
							<h4 class="title">旅行中如果臨時變更行程，你的想法是?</h4>
							<div><ul><li></li><li></li><li></li><li class="active"></li></ul></div>
							<p><span>行程已經排好了應該照計畫進行</span><span>旅行可以很隨興變更行程沒問題</span></p>
						</div>
						
						<div class="reportChart topic_listType">
							<h4 class="title">行程中如何安排餐廳？</h4>
							<div><ol class="infoPad"><li class="info_0">你</li><li class="info_1">對方</li></ol></div>
							<div class="dataPad">
								<ul>
									<li class="point2"></li><li>查詢必吃名店，只要想吃再不順路都要排進去</li>
								</ul>
								<ul>
									<li class="point"></li><li>依景點附近看有沒有好評店家</li>
								</ul>
								<ul>
									<li></li><li>不一定要是名店，但以當地餐廳為主</li>
								</ul>
								<ul>
									<li></li><li>吃根本不重要，隨便解決就好</li>
								</ul>
							</div>
						</div>
						
						<div class="reportChart topic_listType">
							<h4 class="title">下午即將搭飛機返國，你會？</h4>
							<div class="dataPad">
								<ul>
									<li class="point2"></li><li>提早到機場逛逛，買紀念品</li>
								</ul>
								<ul>
									<li class="point"></li><li>到賣場把握最後的買東西機會</li>
								</ul>
								<ul>
									<li></li><li>悠閒走走晃晃，再慢慢去機場</li>
								</ul>
								<ul>
									<li></li><li>排行程到最後一刻</li>
								</ul>
							</div>
						</div>
						
						<div class="reportChart topic_listType">
							<h4 class="title">一起出遊的旅伴逛街買東西超過預定的時間，你的反應是？</h4>
							<div class="dataPad">
								<ul>
									<li class="point2"></li><li>一起逛，買到開心為止</li>
								</ul>
								<ul>
									<li class="point"></li><li>你們慢慢買，我正好坐著休息一下</li>
								</ul>
								<ul>
									<li></li><li>妳買妳的，我逛我自己的</li>
								</ul>
								<ul>
									<li></li><li>催他們快一點，下一個行程快被影響到了</li>
								</ul>
							</div>
						</div>
						
						<div class="reportChart topic_listNumber">
							<h4 class="title ta-L">你關於住宿選擇你的考量順序為何？</h4>
							<ul class="active2"><li>價錢高低</li><li>交通便利性</li><li>生活機能度</li><li>飯店舒適度</li></ul>
							<ul><li>交通便利性</li><li>價錢高低</li><li>飯店舒適度</li><li>生活機能度</li></ul>
						</div>
						
						<div class="reportChart topic_listType">
							<h4 class="title">你希望早上幾點出門，開始一天的行程？</h4>
							<div class="dataPad">
								<ul>
									<li class="point2"></li><li>7:00以前</li>
								</ul>
								<ul>
									<li class="point"></li><li>8:00</li>
								</ul>
								<ul>
									<li></li><li>9:00</li>
								</ul>
								<ul>
									<li></li><li>10:00</li>
								</ul>
								<ul>
									<li></li><li>11:00以後</li>
								</ul>
							</div>
						</div>
						
						<div class="reportChart topic_listType">
							<h4 class="title">行程中如何安排餐廳？</h4>
							<div><ol class="infoPad"><li class="info_0">你</li><li class="info_1">對方</li></ol></div>
							<div class="dataPad">
								<ul>
									<li class="point2"></li><li>查詢必吃名店，只要想吃再不順路都要排進去</li>
								</ul>
								<ul>
									<li class="point"></li><li>依景點附近看有沒有好評店家</li>
								</ul>
								<ul>
									<li></li><li>不一定要是名店，但以當地餐廳為主</li>
								</ul>
								<ul>
									<li></li><li>吃根本不重要，隨便解決就好</li>
								</ul>
							</div>
						</div>
						
						<div class="reportChart topic_listType">
							<h4 class="title">天色已晚，朋友在帶路，可是迷路了，妳的反應是？</h4>
							<div class="dataPad">
								<ul>
									<li class="point2"></li><li>心裡會感覺不舒服，耽誤大家的時間，請朋友去問路</li>
								</ul>
								<ul>
									<li class="point"></li><li>心裡會感覺不舒服，耽誤大家的時間，自己幫忙去問路</li>
								</ul>
								<ul>
									<li></li><li>旅行就是這樣，沒有關係，請朋友去問路</li>
								</ul>
								<ul>
									<li></li><li>旅行就是這樣，沒有關係，自己幫忙去問路</li>
								</ul>
							</div>
						</div>
						
						<div class="reportChart topic_listType">
							<h4 class="title">關於拍照，你的習慣是？</h4>
							<div class="dataPad">
								<ul>
									<li class="point2"></li><li>難得出國，一定要拍到滿意為止</li>
								</ul>
								<ul>
									<li class="point"></li><li>拍一些照片作紀念，適度的記錄旅行</li>
								</ul>
								<ul>
									<li></li><li>不會主動拍照，請朋友分享照片就好</li>
								</ul>
								<ul>
									<li></li><li>不用拍照，好好旅遊，用心感受</li>
								</ul>
							</div>
						</div>
							
							
					</div>
				</div>

			</div>         
		</div><!-- testingReportCount END -->    
        
		
    </div><!-- mypairCount END -->
</div><!-- main END -->
<div id="popContainer" class="height_G" style="position:absolute;">
	<div class="popContent meetdataPop">
		<div class="meetListCount">
			<div class="meetListPad clear">
					<div class="meetPairData">
						<div class="dataArea pairData">
							<h2>見面聊聊</h2>
							<p><span>許瑋甯</span>可以見面聊，以下是他對見<br>面的期待，趕快發出你的邀請吧。</p>
						</div>
						<div class="dataArea">
							<h3>周末<span>下午茶、午餐</span></h3>
							<h3>周間<span>下午茶、午餐</span></h3>
							<div class="meetInterestList"><ul>
								<li>輕鬆聊</li><li>人生夢想</li><li>電視電影</li>
							</ul></div>
						</div>
						<div class="dataArea">
							<div class="meetlotionTitle"><i class="icon_pin01"></i><div><p>台北市</p><p>新北市</p></div></div>
							<div class="meetPairRule"><ul>
								<li><i class="icon_mn_pair"></i>各帶一位朋友</li>
								<li><i class="icon_meetchat_cup"></i>4人</li>
								<li><i class="icon_meetchat_toeat"></i>$300</li>
								<li><i class="icon_mn_deposit"></i>各付各的</li>
							</ul></div>
						</div>
						<div class="dataArea">								
							<h3>過去紀錄</h3>
							<div class="meetScore"><ul>
								<li><span>準時赴約</span><p>優秀<span>4.6</span>/5</p></li>
								<li><span>約會態度</span><p>良好<span>3.9</span>/5</p></li>
							</ul></div>
						</div>
					</div>
					<div class="meetCtrlPad">
						<a class="btn_acceptMeet" href="">發出見面聊邀請</a>
						<a href="meetchat_setting.php" class="btn_refuseMeet"><i></i>設定我的見面聊</a>
					</div>
			</div>
		</div><!-- meetListCount END -->
		<div class="btn_closePop"></div>
	</div>
	<div class="popContent photoPop">
		<div class="photoPopCtrl">
			<ul><li></li><li></li></ul>			
		</div>
		<img src="images/user_photo_default_l.jpg" alt="" />
		<div class="btn_closePop"></div>
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
			
		})
		$(document).ready(function() {
			$('.pageMenu').find('li').eq(2).addClass('active');
			$('.subHeader').find('li').eq(0).addClass('active');
			
			var Gw = $(window), Gww = Gw.width();
			var $ctrlPic = $('.userphoto').find('li'),
			    $ctrlPic_leng = $ctrlPic.length,
				$ctrlPicNow = 0,
				$mainPic = $('.popContent').find('img'),
				$btnMeet = $('.btn_meet');
			
			if(Gww > 980){
				$ctrlPic.click(function(){
					$ctrlPicNow = $(this).index();
					var $imgSrc = $(this).find('img').attr('src');						
					$mainPic.attr('src',$imgSrc);
					$('#popContainer').fadeIn();
					$('.photoPop').show();
					popUserPhotoCtrl();
				});
			}
			function popUserPhotoCtrl(){
				$('.photoPopCtrl').find('li:first-child').click(function(){
					if($ctrlPicNow > 0) {
						$ctrlPicNow --;
					}else{
						$ctrlPicNow = $ctrlPic_leng-1;
					}
					var $imgSrc = $ctrlPic.eq($ctrlPicNow).find('img').attr('src');	
					$mainPic.attr('src',$imgSrc);
				console.log($ctrlPicNow, "|", $ctrlPic_leng);
				});
				$('.photoPopCtrl').find('li:last-child').click(function(){
					if($ctrlPicNow < $ctrlPic_leng-1) {
						$ctrlPicNow ++;
					}else{
						$ctrlPicNow = 0;
					}
					var $imgSrc = $ctrlPic.eq($ctrlPicNow).find('img').attr('src');	
					$mainPic.attr('src',$imgSrc);
				console.log($ctrlPicNow, "|", $ctrlPic_leng);
				});
			}
			$btnMeet.click(function(){
				$('#popContainer').fadeIn();
				$('.meetdataPop').show();
			});
			
			$('.btn_closePop').click(function(){
				$('.meetdataPop').hide();
				$('.photoPop').hide();
			})
			$('#popContainer > .before').click(function(){
				$('.meetdataPop').hide();
				$('.photoPop').hide();
			});
			var mypairItem = $('.mypairItem'),
				$photo = $('.userphoto').find('li'),
				$length = $photo.length,
				$dot = "";
			
			if(Gww < 980){
				for(var i = 0; i < 2; i++) {$dot += "<li></li>";}
				mypairItem.append("<ul class='dot'>"  + $dot + "</ul>");
				
				$('.dot').find('li:last-child').click(function(){photoCtrl('Left')});
				$('.dot').find('li:first-child').click(function(){photoCtrl('')});
				
				$('.mypairItem').touchwipe({
					wipeLeft: function() {photoCtrl('Left')},
					wipeRight: function() {photoCtrl('')},
					preventDefaultEvents: false
				});
			}
			function photoCtrl(direction) {
				var $obj = $('.userphoto').find($('.active')),
					$ctr = $('.dot').find('li'),
					$now = $obj.index();
					console.log($now,direction);
				if ($now < $length - 1 && direction === 'Left') {
					var $ind = $now + 1;
					$ctrlPic.eq($ind).addClass('active').siblings().removeClass('active');					
				}else if($now === 0 && direction === ''){
					var $ind = $length - 1;
					$ctrlPic.eq($ind).addClass('active').siblings().removeClass('active');					
				}else if($now >= 0 && direction === ''){
					var $ind = $now - 1;
					$ctrlPic.eq($ind).addClass('active').siblings().removeClass('active');					
				}else{
					var $ind = 0;
					$ctrlPic.eq($ind).addClass('active').siblings().removeClass('active');					
				}				
			}
		});
	</script>
</body>
</html>
