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
<body class="deposit">
<div id="fb-root"></div>
<?php include_once("at_include/header2.php"); ?>
<div id="main">
	<div class="headerBack">
		<a class="back"><i class="fa fa-angle-left" aria-hidden="true"></i>會員加值</a>
    </div>
    <?php include_once("at_include/date_menu.php"); ?> <!-- 分類 -->
    <div class="depositCount">
        
		<div class="date_coupon">
			<div class="total">累計折扣券: <span class="count">100元*12</span></div>
			<div class="cssTable">
				<ul class="th">
					<li>餐費補助金<span>(7-11電子購物金)</span></li>
					<li>約會對象</li>
					<li>領取狀態</li>
				</ul>
				<ul>
					<li class="seven11"><span class="date">2019/10/20取得</span>100元<span class="date">2020/10/20到期</span></li>
					<li class="name"><span class="underline">John</span><span class="date">2019/10/20</span></li>
					<li class="couponArea"><span class="desc">7-11電子購物金</span><a href="#" class="getCoupon"></a></li>
				</ul>
				<ul>
					<li class="seven11"><span class="date">2019/10/20取得</span>100元<span class="date">2020/10/20到期</span></li>
					<li class="name"><span class="underline">John</span><span class="date">2019/10/20</span></li>
					<li class="couponArea done"><span class="desc">密碼: 1234</span><a href="#" class="getCoupon loading done"></a><a class="how2use" href="#">如何使用?</a></li>
				</ul>
				<ul>
					<li class="seven11"><span class="date">2019/10/20取得</span>100元<span class="date">2020/10/20到期</span></li>
					<li class="name">無</li>
					<li class="unable">完成1次約會<br />即可領取</li>
				</ul>
			</div>
			<br><br>
			<div class="cssTable">
				<ul class="th">
					<li>折扣券</li>
					<li>抵扣額</li>
					<li>使用狀態</li>
				</ul>
				<ul>
					<li class="seven11"><span class="date">2020/7/31取得</span><span class="serialNumber">C191210-01</span><span class="date">2021/7/31到期</span></li>
					<li class="">100元</li>
					<li><span class="status">已使用</span><span class="date">訂單: 1907010010</span></li>
				</ul>
				<ul>
					<li class="seven11"><span class="date">2020/7/31取得</span><span class="serialNumber">C191210-02</span><span class="date">2021/7/31到期</span></li>
					<li class="">100元</li>
					<li><span class="status">已使用</span><span class="date">訂單: 1907010010</span></li>
				</ul>
				<ul>
					<li class="seven11"><span class="date">2020/7/31取得</span><span class="serialNumber">C191210-03</span><span class="date">2021/7/31到期</span></li>
					<li class="">100元</li>
					<li><span class="status">未使用</span></li>
				</ul>
			</div>
		</div>

    </div>
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
			<?php include_once("at_include/page_menu_js.php"); ?>
        })
        $(document).ready(function() {
			$('.subHeader').find('.menu_paid').addClass('active');
            $('.pageMenu').find('li').eq(2).addClass('active');
			$('.choiceRadio').click(function(){$('html,body').delay(800).animate({scrollTop:$('.paymentInfoPad').offset().top},500);});
			
			var $selecter = $('.selectCtrl > label > input');
			$selecter.click(function(){
				var $ind = $(this).parent().index();
				$(this).parents('.selectCtrl').siblings().eq($ind).addClass('active').siblings().removeClass('active');
			});
			
			// 領取電子購物金
			$('.getCoupon').on('click touch', function(e) {
			    var getCoupon = $(this);
			    	couponArea = getCoupon.parent();
			    	pwd = 1234;
			    if(!getCoupon.hasClass('loading')) {
			        getCoupon.addClass('loading');
			        setTimeout(function() {
			            getCoupon.addClass('done');
			            couponArea.find('.desc').html('密碼: ' + pwd);
			            couponArea.append('<a class="how2use" href="#">如何使用?</a>');
			        }, 3200);
			    }
			});

        });
    </script>
</body>
</html>