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
			<div class="testingReportPad">

				<?php include_once("at_include/testingReport_03mylove.php"); ?> 

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
			$('.pageMenu').find('li').eq(1).addClass('active');
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
