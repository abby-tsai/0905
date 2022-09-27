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
<body class="signin">
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main">
	<!-- 正常單身狀態 -->
	<div class="signCount height_FR2">
		<div class="falseHeader"></div>
	    <h1>準備出發</h1>
	    <div class="stupidPad">
			<form action="testing_pair_1habit.php">
				<div class="signin_pad">
					<input type="text" placeholder="請輸入非本名之暱稱" />
					<input type="email" disabled placeholder="noreply@findthe1.com"/>
					<div class="makeupInput"><ul><li>感情狀態: </li><li><span>單身</span><select><option>單身</option><option>一言難盡</option></select></li></ul></div>
					<div class="makeupInput"><ul><li>性別: </li><li><span>女性</span><select><option>女性</option><option>男性</option></select></li></ul></div>
				</div>
				<div class="ctrlPad">
					<input type="submit" value="心理學配對測驗" class="btn_toTest" />
					<p>配對測驗完成後無法重填，請認真填答</p>
				</div>
			</form>
		</div>                   
    </div><!-- signupCount 正常單身狀態 END -->   
    
	<!-- 感情狀態不符 -->
	<div class="signCount none">
	    <h1>暫時無法提供服務</h1>
		<div class="signin_pad">
			<p>
				很抱歉，我們的服務只針對非婚姻狀態並且沒有交往關係的單身用戶，您目前的感情狀態暫時還不適合使用我們的服務。<br><br>
				未來若有適當的時機，我們將竭誠為您服務。            		
			</p>
		</div>
		<div class="ctrlPad">
			<a class="btn_back btn_blue" href="index.php">回首頁</a>
		</div>                  
    </div><!-- signupCount 感情狀態不符 END -->   
    
	<!-- 朋友數量不符 -->
	<div class="signCount none">
	    <h1>暫時無法提供服務</h1>
		<div class="signin_pad">
			<p>
				很抱歉，為避免機器人帳號干擾，我們只接受有30個朋友以上的facebook帳號使用我們的服務，您的好友數可能不足夠，或您沒有允許我們取得您的好友名單。<br><br>
				若您的朋友數超過30位，可以試試以下的方法，幫助我們取得好友名單:
			</p>
			<div><ul>
			<li>到您的facebook帳號/設定/應用程式</li>
			<li>找到 find the one的應用程式並開啟</li>
			<li>檢查一下您提供給此應用程式的資料，是否有"朋友名單"(打勾)，如果沒有打勾，請打勾並儲存</li>
			<li>如果找不到"朋友名單"，請把find the one這個應用程式刪除。</li>
			<li>回到 find the one首頁，點擊facebook 登入，應該就可以繼續使用了。</li>			
			</ul></div>
		</div>
		<div class="ctrlPad">
			<a class="btn_back btn_blue" href="index.php">回首頁</a>
		</div>                  
    </div><!-- signupCount  END -->   
      
       
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
		})
		$(document).ready(function() {
		});
	</script>
</body>
</html>
