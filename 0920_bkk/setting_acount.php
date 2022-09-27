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
<body class="settingPage">
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main">
	<div class="headerBack">
		<a class="back"><i class="fa fa-angle-left" aria-hidden="true"></i>我的設定</a>
    </div>
	<?php include_once("at_include/setting_menu.php"); ?> <!-- 分類 -->
    <div class="settingCount settingAccount clear">
    	<form>
<!--
			<div class="settingPad selectSetting">
				<ul class="title"><li>facebook ID 分享</li><li><input type="checkbox" id="st_fbshare" checked /><label for="st_fbshare"></label></li></ul>
				<ol><li>
					<p>針對我有表達好感 (LIKE) 的配對名單，向對方顯示我的facebook ID。</p>
					<p>顯示facebook ID可以提高對方對你的信任感，增加互有好感的機會，對方可以找到你的FB帳號，但你仍保有權利決定是否加對方為好友。</p>
				</li></ol>
			</div>
-->
			<div class="settingPad selectSetting registerPad">
				<ul class="title"><li>註冊帳號</li></ul>
				<div class="cssTable">
					<ol><li style="width:4em;">會員狀態</li><li><input type="text" value="VIP會員．2017/9/20到期" readonly /></li></ol>
					<ol><li>手機號碼</li><li><input type="text" value="0937807519" readonly /></li></ol>
					<ol><li>註冊帳號</li><li><input type="email" value="dennis.6312@gmail.com" readonly /></li></ol>
					<ol>
						<li>收件信箱</li>
						<li><input type="email" value="dennis.6312@gmail.com" readonly />
							<p style="color:#aaa;">請檢查 service@meettheone.com.tw的郵件，以確認郵件地址正確。</p>
							<p>
								<a href="#" style="font-size:0.9em;">變更收件信箱</a>
								<a href="#" style="font-size:0.9em; margin-left:15px;">取消</a>
							</p>
						</li>
					</ol>
				</div>
			</div>
			<div class="settingPad selectSetting">
				<ul class="title"><li>暫停配對</li><li><input type="checkbox" id="st_pausepair" /><label for="st_pausepair"></label></li></ul>
				<ol>
					<li>
						<p>1. 停止提供新的配對</p>
						<p>2. 停止寄送與配對相關的通知信</p>
						<!--
						<p style="padding-top:20px;"><strong>暫停原因</strong></p>
						<div class="ansType_basic">
						<div class="ansPad">
							<ul>
								<li><label><input type="radio" name="sel01" value="2" id="sel011"><span>在find the one 找到交往對象了</span></label></li>
								<li><label><input type="radio" name="sel01" value="2" id="sel012"><span>在其他地方找到交往對象了</span></label></li>
								<li><label><input type="radio" name="sel01" value="2" id="sel013"><span>最近很忙，暫時沒空使用</span></label></li>
								<li><label><input type="radio" name="sel01" value="2" id="sel014"><span>在find the one 找不到對象，不想使用了</span></label></li>
								<li class="other"><label><input type="radio" name="sel01" value="2" id="sel015"><span>其他</span></label><input type="text" /></li>
							</ul>
						</div>
						</div>
						-->
					</li>
				</ol>
			</div>
			<div  class="clear"></div>
			<div class="ctrlPad" style="padding-top:20px;">
				<input type="submit" class="btn_blue" value="儲存" />
			</div>
		</form>    
    </div><!-- settingCount END -->    
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
			<?php include_once("at_include/page_menu_js.php"); ?> /* Testing Menu 控制*/				
		})
		$(document).ready(function() {
			$('.pageMenu').find('li').eq(1).addClass('active');
		});
	</script>
</body>
</html>
