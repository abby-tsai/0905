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
<body class="meetchat">
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main">
	<div class="headerBack">
		<a class="back"><i class="fa fa-angle-left" aria-hidden="true"></i>見面聊</a>
    </div>
	<?php include_once("at_include/meetchat_menu.php"); ?> <!-- 分類 -->
    <div class="meetListCount">
		<div class="meetChatSrcipt">
			<p>這裡是你的見面聊紀錄，包含別人邀請你和你邀請別人。</p>
		</div>
        <div class="meetListPad clear">
        
			<div class="meetChatItem">
				<div class="mypairItem">
					<ul class="picture"><li><img alt="" src="images/user_photo_default_l2.jpg" /></li></ul>
					<ul class="status"><li class="timelimit">快消失</li><li class="number">95</li></ul>
					<ul class="basicData">
						<li><p><i class="offline"></i>金城武<span>台北市/38歲</span></p></li>
						<li class="heart3">互有好感</li>
					</ul>
					<ul class="infoData">
						<li><p>碩士</p>台北科技大學</li><li><p>知名外商</p>行銷企劃主管</li>
					</ul>
					<ul class="meetTag"><li><a href="" class="btn_meet forU active"><span>他邀請妳</span><p>見面聊</p></a></li></ul>
				</div>				
				<div class="meetCtrlPad">
					<a class="btn_acceptMeet">接受邀請</a>
					<a class="btn_refuseMeet">婉拒邀請</a>
				</div>
			</div>
        
			<div class="meetChatItem">
				<div class="mypairItem">
					<ul class="picture"><li><img alt="" src="images/user_photo_default_l2.jpg" /></li></ul>
					<ul class="status"><li class="new">NEW</li><li class="number">95</li></ul>
					<ul class="basicData">
						<li><p><i class="offline"></i>金城武<span>台北市/38歲</span></p></li>
						<li class="heart3">互有好感</li>
					</ul>
					<ul class="infoData">
						<li><p>碩士</p>台北科技大學</li><li><p>知名外商</p>行銷企劃主管</li>
					</ul>
					<ul class="meetTag"><li><a href="" class="btn_meet forU active"><span>他邀請妳</span><p>見面聊</p></a></li></ul>
				</div>				
				<div class="meetCtrlPad">
					<a class="btn_accepted">妳已接受邀請<span>到訊息室敲定細節</span><i>評分</i></a>
				</div>
			</div>
        
			<div class="meetChatItem">
				<div class="mypairItem">
					<ul class="picture"><li><img alt="" src="images/user_photo_default_l2.jpg" /></li></ul>
					<ul class="status"><li class="new">NEW</li><li class="number">95</li></ul>
					<ul class="basicData">
						<li><p><i class="offline"></i>金城武<span>台北市/38歲</span></p></li>
						<li class="heart3">互有好感</li>
					</ul>
					<ul class="infoData">
						<li><p>碩士</p>台北科技大學</li><li><p>知名外商</p>行銷企劃主管</li>
					</ul>
					<ul class="meetTag"><li><a href="" class="btn_meet forU active"><span>他邀請妳</span><p>見面聊</p></a></li></ul>
				</div>				
				<div class="meetCtrlPad">
					<a class="btn_unvip">成為VIP會員，即可回覆邀請</a>
				</div>
			</div>
       
			<div class="meetChatItem">
				<div class="mypairItem">
					<ul class="picture"><li><img alt="" src="images/user_photo_default_l.png" /></li></ul>
					<ul class="status"><li class="date">1/31</li><li class="number">95</li></ul>
					<ul class="basicData">
						<li><p><i class="offline"></i>許瑋甯<span>台北市/35歲</span></p></li>
						<li class="heart3">互有好感</li>
					</ul>
					<ul class="infoData">
						<li><p>碩士</p>台北科技大學</li><li><p>知名外商</p>行銷企劃主管</li>
					</ul>
					<ul class="meetTag"><li><a href="" class="btn_meet active"><span>妳邀請他</span><p>見面聊</p></a></li></ul>
				</div>
				<div class="meetChatDetailPad">
					<ul class="meetChatDetailCount"><li>
						<div class="meetPairData">
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
					</li></ul>
					<ul><li><a class="openChatDetail"></a><p>他已接受邀請<span>到訊息室敲定細節</span></p><a class="btn_accepted"><i>評分</i></a></li></ul>
				</div>
			</div>  
       
			<div class="meetChatItem">
				<div class="mypairItem">
					<ul class="picture"><li><img alt="" src="images/user_photo_default_l.png" /></li></ul>
					<ul class="status"><li class="timelimit">快消失</li><li class="number">95</li></ul>
					<ul class="basicData">
						<li><p><i class="offline"></i>許瑋甯<span>台北市/35歲</span></p></li>
						<li class="heart3">互有好感</li>
					</ul>
					<ul class="infoData">
						<li><p>碩士</p>台北科技大學</li><li><p>知名外商</p>行銷企劃主管</li>
					</ul>
					<ul class="meetTag"><li><a href="" class="btn_meet active"><span>妳邀請他</span><p>見面聊</p></a></li></ul>
				</div>
				<div class="meetChatDetailPad">
					<ul class="meetChatDetailCount"><li>
						<div class="meetPairData">
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
					</li></ul>
					<ul><li><a class="openChatDetail"></a>等待回覆<i>未讀</i></li></ul>
				</div>
			</div>  
       
			<div class="meetChatItem">
				<div class="mypairItem">
					<ul class="picture"><li><img alt="" src="images/user_photo_default_l.png" /></li></ul>
					<ul class="status"><li class="new">NEW</li><li class="number">95</li></ul>
					<ul class="basicData">
						<li><p><i class="offline"></i>許瑋甯<span>台北市/35歲</span></p></li>
						<li class="heart3">互有好感</li>
					</ul>
					<ul class="infoData">
						<li><p>碩士</p>台北科技大學</li><li><p>知名外商</p>行銷企劃主管</li>
					</ul>
					<ul class="meetTag"><li><a href="" class="btn_meet active"><span>妳邀請他</span><p>見面聊</p></a></li></ul>
				</div>
				<div class="meetChatDetailPad">
					<ul class="meetChatDetailCount"><li>
						<div class="meetPairData">
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
					</li></ul>
					<ul><li><a class="openChatDetail"></a>他已婉拒邀請<i></i></li></ul>
				</div>
			</div> 
       
        </div>
    </div><!-- meetListCount END -->
</div><!-- main END -->
<?php include_once("at_include/footer.php"); ?>
<!-- Light Box -->
<div id="popContainer">
	<div class="popContent meetChatScroe">
		<div><ul>
			<li class="title">見面聊評分</li>
			<li><span>(見面後填寫，對方不會看到你的評分)</span></li>
			<li class="content pageGroup">
				<div class="page topic ansType_choiceLine">
					<div>
						<h3 class="mobileTitle">對方準時赴約的情況?</h3>
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
						<h3 class="mobileTitle">對方的約會態度如何?</h3>
						<div class="ansPad">
							<ul>
								<li><input type="radio" name="sel03" value="1" id="sel031"><label for="sel031">1<span>傲慢無禮</span></label></li>
								<li><input type="radio" name="sel03" value="2" id="sel032"><label for="sel032">2<span>態度冷淡</span></label></li>  
								<li><input type="radio" name="sel03" value="3" id="sel033"><label for="sel033">3<span>尚可接受</span></label></li>
								<li><input type="radio" name="sel03" value="4" id="sel034"><label for="sel034">4<span>應對合宜</span></label></li>
								<li><input type="radio" name="sel03" value="5" id="sel035"><label for="sel035">5<span>親切有禮</span></label></li>
							</ul>
						</div>
						<div class="ctrlPad"><a class="prev"></a> <input type="submit" class="btn_closePop" value="送出" /></div>
					</div>
				</div>
			</li>
		</ul></div>	
		<div class="btn_closePop"></div>	
	</div>
</div>
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
			$('.pageMenu').find('li').eq(0).addClass('active');
			
			$('.btn_accepted').click(function(){
				$('#popContainer').fadeIn();
			});
			$('.openChatDetail').click(function(){
				$(this).parents('.meetChatDetailPad').toggleClass('active');
			});
		});
	</script>
</body>
</html>
