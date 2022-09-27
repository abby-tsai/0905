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
    <link href="css/basic_findtheone_plus.css" rel="stylesheet" type="text/css" />
	<?php include_once("at_include/inc_facebook.php"); ?>
</head>
<body class="static">
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main">
	<div class="staticheader">
	</div>
	<div class="staticContent">
		<div class="icon_st icon_st_qa"></div>
		<h2>常見 Q &#38; A</h2>
		<h4>1. 為什麼要選擇meettheone？</h4>
		<p>A. 以見面為前提的婚戀交友平台<br/>
		過去的使用者經驗發現，實體婚友服務，優點在於互動真實，可以感受對方的談吐和肢體語言；缺點是會員人數少，認識誰完全碰運氣(看當天有誰參加活動)，見面之前看不到照片，而且費用昂貴。線上婚友的優點是會員人數多接觸面廣，可以自行決定互動的對象；但是透過線上聊天互動，過程很花時間，彼此的認識卻非常有限，雙方的熟悉感很難建立，不容易發展到見面階段。<br><br>
		meettheone結合實體與線上的優勢，將線上婚友實體化，推出以見面為前提的線上婚戀交友服務，把面對面聊天作為主要的互動形式，每天晚上12:00雙向配對當日名單，雙方同時取得彼此的契合報告，如果在24小時之內彼此同意見面，就可以成為朋友，聊天室會開啟，讓雙方敲定見面細節，從此線上交友也可以真實互動。
		</p>		
		<p>B. 把時間花在對的人身上<br/>
		心理學研究證實，兩個人能不能快樂的在一起很久，和他的依戀風格、家庭背景、價值觀、衝突的因應方式、教養態度等等有很大的關聯，我們花了三年左右的時間整合全球的兩性心理學研究，進行關鍵因子的篩選、心理測驗的編制、測試，完成了配對演算法的開發。我們用更科學的方法，以更少的時間，幫助用戶找出資料庫中最適合的1%人群，配對的雙方在心理特質的搭配組合上，具備較好的問題處理能力和更相近的價值觀與社經背景，讓使用者把時間花在心動又適合相處的人身上。</p>		
		<p>C. 認識新對象不再摸黑探索<br/>
		藉由整合全球心理學長期的研究成果，meettheone為用戶的每一個配對組合，提供客製且深度的相處模式分析，幫助使用者在認識新對象的時候，省掉許多摸黑探索的過程，即使未曾謀面，也能了解對方多面向的內在世界。你可以用這些省下來的時間，較深入地去認識和了解一個更適合的人；而我們提供的心理學專業文章，也讓你有機會去深思自己的感情模式，不再重蹈以往感情的覆轍。</p>
		<p>D. 排除不活躍帳戶，提供真實配對<br>交友平台最常被詬病的問題就是不活躍帳戶，許多業者號稱擁有數百萬會員，其實多數都是不再使用服務的不活躍帳戶，meettheone即時監控帳戶活躍狀態，將不活躍帳戶排除在配對名單之外，確保用戶所互動的對象都是真正有交友需求的使用者。</p>

		<h4>2.使用流程為何？</h4>
		<p>A. 填寫心理學配對測驗，完成認證，就可以開始配對並使用服務。</p>
		<p>B. 每天晚上12:00，心理學演算法會在最適合的1%人群中，嚴選當日的適配名單，雙方會同時收到彼此的名單和心理學契合報告</p>
		<p>C. 如果雙方在24小時之內彼此同意見面，就可以成為朋友，聊天室會開啟，讓彼此敲定見面細節，自行約定時間地點進行面對面的互動聊天。</p>
		<p>D. 次日晚上12:00一到，如果沒有成為朋友，對方將永遠消失，再也不會出現。</p>
		
		<h4>3. 心理學演算法的運作原理為何？</h4>
		<p>所有會員在使用meettheone的服務之前，都必須完成心理學配對測驗，每次有新會員加入的時候，系統就會讓新會員和所有的異性會員計算一次心理學契合程度，舉例來說，小熊剛剛完成配對測驗也通過驗證，假設此時資料庫中有10000筆的女性會員資料，系統會根據心理學演算法，去計算小熊和其他10000名女會員的契合程度，挑出當中契合度最高的1%人群，作為每日配對的適配名單，演算法的計算基礎包含社經地位、安全感、衝突處理、婚姻價值、生活習慣、家庭管理、性表達…等多重面向。</p>
		
		<h4>4. 如何確保平台會員都是尋找認真關係的族群？</h4>
		<p>A. 認同專業心理學分析的用戶，多為對於關係尋求認真的人群。</p>
		<p>B. 所有加入的會員都必須透過facebook帳戶才能註冊，註冊時我們會檢查用戶的facebook感情狀態，只接受感情狀態為單身、離婚或喪偶的用戶使用我們的服務，其他的感情狀態都無法使用，避免感情不專一的使用者成為會員。</p>
		<p>C. 所有會員必須通過手機認證，在台灣所有手機號碼的申請，都必須向政府登記身分證號碼，因此若有任何違法或騷擾情事，都可以透過檢警體系追查到該用戶，降低援交或一夜情等感情不專一人群的使用動機。</p>
		<p>D. 採用精準配對模式，只提供少量經過分析的名單，不開放任意瀏覽會員資料庫，援交或一夜情等感情不專一人群，需要接觸大量會員名單，我們的服務模式對他們而言缺少誘因。</p>
		
		<h4>5. 我可以重填配對測驗嗎？</h4>
		<p>很抱歉，為了避免測驗結果有偏差或人為操作，配對測驗只能填寫一次，不能修改。</p>

		<h4>6. 一般會員與VIP費會員所享有的服務有何不同？</h4>
		<table class="qaService">
			<tr>
				<td>會員權益</td>
				<td>一般會員</td>
				<td>VIP會員</td>
			</tr>
			<tr>
				<td>獲得配對名單</td>
				<td><img alt="" src="images/icon_membercheck.png"></td>
				<td><img alt="" src="images/icon_membercheck.png"></td>
			</tr>
			<tr>
				<td>瀏覽會員照片</td>
				<td><img alt="" src="images/icon_membercheck.png"></td>
				<td><img alt="" src="images/icon_membercheck.png"></td>
			</tr>
			<tr>
				<td>瀏覽契合報告摘要</td>
				<td><img alt="" src="images/icon_membercheck.png"></td>
				<td><img alt="" src="images/icon_membercheck.png"></td>
			</tr>
			<tr>
				<td>表達好感 (LIKE)</td>
				<td><img alt="" src="images/icon_membercheck.png"></td>
				<td><img alt="" src="images/icon_membercheck.png"></td>
			</tr>
			<tr>
				<td>閱讀兩性文章</td>
				<td><img alt="" src="images/icon_membercheck.png"></td>
				<td><img alt="" src="images/icon_membercheck.png"></td>
			</tr>
			<tr>
				<td class="member">無限次收發訊息</td>
				<td>-</td>
				<td><img alt="" src="images/icon_membercheck_R.png"></td>
			</tr>
			<tr>
				<td class="member">瀏覽完整契合報告</td>
				<td>-</td>
				<td><img alt="" src="images/icon_membercheck_R.png"></td>
			</tr>
			<tr>
				<td class="member">點歌給對方</td>
				<td>-</td>
				<td><img alt="" src="images/icon_membercheck_R.png"></td>
			</tr>
			<tr>
				<td class="member">送實體咖啡</td>
				<td>-</td>
				<td><img alt="" src="images/icon_membercheck_R.png"></td>
			</tr>
			<tr>
				<td class="member">邀請見面聊</td>
				<td>-</td>
				<td><img alt="" src="images/icon_membercheck_R.png"></td>
			</tr>
			<tr>
				<td class="member">心情佈告欄</td>
				<td>-</td>
				<td><img alt="" src="images/icon_membercheck_R.png"></td>
			</tr>
		</table><br/>
		
		<h4>9. 為何我無法使用findtheone的服務？</h4>
		<p>以下的原因可能導致您目前無法使用我們的服務<br/>
		A. 您沒有facebook帳戶：我們目前只接受使用facebook帳戶註冊，請先申請facebook帳戶後，再註冊find the one帳號，即可使用我們的服務。<br/>
		B. 您的手機不是台灣門號：我們目前只接受台灣的門號進行手機認證，未來將陸續開放其他國家的手機門號進行認證。<br/>
		C. 您的facebook感情狀態不符合使用條件：我們目前只接受facebook感情狀態為單身、離婚或喪偶的用戶使用我們的服務。<br/>
		D. 您的facebook朋友數不足20人，為避免機器人帳號干擾，我們只接受有20個朋友以上的facebook帳號使用我們的服務。<br/>
		E. 您的facebook電子郵件或朋友名單的隱私狀態沒有設為朋友或公開，這將導致系統無法存取註冊的必要資訊，解決的步驟如下:</p>
		<p>
			<dl>
				<dt>朋友名單的設定</dt>
				<dd>1. 到您的facebook/個人檔案/關於/聯絡和基本資料<br/>
				2. 確認您有設定電子郵件，並將電子郵件的隱私設定改為朋友或公開<br/>
				3. 接下來，到您的facebook/帳號設定/應用程式/使用facebook帳號登入<br/>
				4. 找到 findtheone的應用程式並開啟<br/>
				5. 檢查一下您提供給此應用程式的資料，是否有"電子郵件"(打勾)，如果沒有打勾，請打勾並儲存<br/>
				6. 如果找不到"電子郵件"，請把findtheone這個應用程式刪除。<br/>
				7. 回到findtheone首頁，點擊facebook登入，應該就可以繼續使用了。</dd>
			</dl>
			<dl>
				<dt>電子郵件的設定</dt>
				<dd>1. 到您的facebook/個人檔案/關於/聯絡和基本資料<br/>
				2. 確認您有設定電子郵件，並將電子郵件的隱私設定改為朋友或公開<br/>
				3. 接下來，到您的facebook/帳號設定/應用程式/使用facebook帳號登入<br/>
				4. 找到 findtheone的應用程式並開啟<br/>
				5. 檢查一下您提供給此應用程式的資料，是否有"電子郵件"(打勾)，如果沒有打勾，請打勾並儲存<br/>
				6. 如果找不到"電子郵件"，請把findtheone這個應用程式刪除。<br/>
				7. 回到findtheone首頁，點擊facebook登入，應該就可以繼續使用了。</dd>
			</dl>
		</p>
		
		<h4>10. 配對測驗未填完就離開，下次該怎麼辦？</h4>
		<p>不用擔心，只要在首頁上點擊”使用facebook註冊”或”配對測驗(免費)”，系統會自動帶您回到上次填寫的位置，繼續完成測驗。</p>
		
		<h4>11. 我每天都會收到適配名單嗎？</h4>
		<p>不一定。每天早上6:00，我們會根據心理學分析和社經地位，在最適合的1%人群中挑選當日的適配名單，若當日資料庫中沒有適合的人選，則適配名單將順延到次日提供。</p>
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
			
		})
	</script>
</body>
</html>
