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
<body class="deposit onSign">
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main">
	<div class="headerBack">
		<a class="back"><i class="fa fa-angle-left" aria-hidden="true"></i>會員加值</a>
    </div>
    <?php include_once("at_include/deposit_menu.php"); ?> <!-- 分類 -->
    <div class="depositCount">
        
		<?php include_once("at_include/deposit_info.php"); ?> <!-- 權益說明 -->
       
        <div class="depositProgramPad clear">
            <div class="depositInfo">請選擇本次加值方案</div>
        <form>
        	<div class="depositProgramPad">
				<div class="depositProgram">
					<p>方案A-360天</p>
					<p class="price">$499<span>元/30天</span></p>
					<p class="percent">省67%</p>
					<p>總計 $5988元</p>
				</div>
				<div class="depositProgram">
					<p>方案B-180天</p>
					<p class="price">$749<span>元/30天</span></p>
					<p class="percent">省50%</p>
					<p>總計 $4494元</p>
				</div>
				<div class="depositProgram">
					<p>方案C-90天</p>
					<p class="price">$999<span>元/30天</span></p>
					<p class="percent">省33%</p>
					<p>總計 $2997元</p>
				</div>
				<div class="depositProgram">
					<p>方案D-30天</p>
					<p class="price">$1499<span>元/30天</span></p>
					<p class="percent">原價</p>
					<p>總計 $1499元</p>
				</div>
			</div>
            <div class="paymentInfoPad">
				<h3>發票資訊</h3>
				<div class="invoiceCountPad">
					<ul>
						<li class="selectCtrl">
							<label><input type="radio" name="invoice_A" checked /><span>捐款發票</span></label>
							<label><input type="radio" name="invoice_A" /><span>二聯式發票</span></label>
							<label><input type="radio" name="invoice_A" /><span>三聯式發票</span></label>
						</li>
						<li class="invoice_1 active">
							<h4>發揮愛心，用發票幫助更需要的人! 捐助單位: </h4>
							<p>
								<select>
									<option>選擇受贈單位</option>
									<option>社團法人中華基督教以林關懷協會以林少年學苑</option>
									<option>台灣國際兒童村</option>
								</select>
							</p>
						</li>
						<li class="invoice_2">
							<h4>響應發票無紙化，依據"消費者通路開立電子發票試辦要點"開立電子發票</h4>
							<p>依統一發票使用辦法規定:個人戶(二聯式)發票一經開立，無法任意更改或改開公司戶(三聯式)發票</p>
							<div class="invoicePresonPad">
								<ul>
									<li class="selectCtrl">
										<label><input type="radio" name="invoice_B" checked /><span>會員載具</span></label>
										<label><input type="radio" name="invoice_B" /><span>手機載具</span></label>
										<label><input type="radio" name="invoice_B" /><span>自然人憑證載具</span></label>
									</li>
									<li class="active">
										<p>使用智付寶會員載具，由智付寶自動為您兌獎，中獎後主動通知您。</p>
									</li>
									<li>
										<p>您須持有手機載具，詳見財政部<a href="https://www.einvoice.nat.gov.tw/" target="_blank">"電子發票整合服務平台"</a>說明。</p>
										<div class="cssTable">
											<ul>
												<li>請輸入手機載具:</li>
												<li><input type="text" placeholder="(限英數字)" /></li>
											</ul>
											<ul>
												<li>請再次輸入手機載具</li>
												<li><input type="text" placeholder="(限英數字)" /></li>
											</ul>
										</div>
									</li>
									<li>
										<p>您須持有自然人憑證載具，詳見財政部<a href="https://www.einvoice.nat.gov.tw/" target="_blank">"電子發票整合服務平台"</a>說明。</p>
										<div class="cssTable">
											<ul>
												<li>請輸入自然人憑證條碼:</li>
												<li><input type="text" placeholder="(限英數字)" /></li>
											</ul>
											<ul>
												<li>請再次輸入自然人憑證條碼:</li>
												<li><input type="text" placeholder="(限英數字)" /></li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</li>
						<li class="invoice_3">
							<h4>發票主動寄出</h4>
							<p>統一編號 <input type="text" placeholder="(限8位數字)" /></p>
							<p>發票抬頭 <input type="text" placeholder="(限20個全形文字)" /></p>
							<p>發票地址 <input type="text" placeholder="(限120個全形文字)" /></p>
						</li>
					</ul>
				</div>
				<h3>兌換代碼</h3>
				<div class="paymentCouponPad">
					<ol>
						<li>
							<input type="text" placeholder="請輸入兌換代碼"/>
							<a class="btn_bluelight">兌換</a>
						</li>
					</ol>
				</div>
				<h3>請選擇付款方式</h3>
				<div class="paymentMethPad">
					<ul>
						<li>
							<p><label><input type="radio" name="payment" checked ><span>信用卡支付</span><img src="images/payment_creditcard.svg" class="payment_creditcard" alt="" /></label></p>
							<p><label><input type="radio" name="payment" ><span>ATM轉帳</span></label></p>
						</li>
					</ul>
				</div>
			</div>
            <input class="choiceSubmit CGc" type="submit" value="付款">
        </form>
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
            $('.pageMenu').find('li').eq(0).addClass('active');
			$('.choiceRadio').click(function(){$('html,body').delay(800).animate({scrollTop:$('.paymentInfoPad').offset().top},500);});
			
			var $selecter = $('.selectCtrl > label > input');
			$selecter.click(function(){
				var $ind = $(this).parent().index();
				$(this).parents('.selectCtrl').siblings().eq($ind).addClass('active').siblings().removeClass('active');
			});
			
        });
    </script>
</body>
</html>