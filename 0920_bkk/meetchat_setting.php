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
		<a class="back"><i class="fa fa-angle-left" aria-hidden="true"></i> 見面聊</a>
    </div>
	<?php include_once("at_include/meetchat_menu.php"); ?> <!-- 分類 -->
   <form action="meetchat_setting_finish.php">
    <div class="meetListCount">       
		<div class="meetSettingTop selectSetting">
			<h1>見面聊</h1>
			<p>
				開啟見面聊功能，讓別人知道你有見面聊的意願，對方可以向你發出見面邀請，你可以決定是否接受邀請。
			</p>
		</div>
		<h2>功能開啟之前，請先完成以下的設定。</h2>
   		<div class="meetSettingArea">
			<h3>可以的時間<span>(複選)</span></h3>
   			<div class="meetSettingSelectPad selectMeet1">
   				<ul class="itmeSelect">
					<li><input type="checkbox" id="m001" checked /><label for="m001">週間</label></li>
					<li><input type="checkbox" id="m002" /><label for="m002">早餐</label></li>
					<li><input type="checkbox" id="m003"  /><label for="m003">午餐</label></li>
					<li><input type="checkbox" id="m004" checked  /><label for="m004">下午茶</label></li>
					<li><input type="checkbox" id="m005"  /><label for="m005">晚餐</label></li>
				</ul>
   				<ul class="itmeSelect">
					<li><input type="checkbox" id="m011" checked /><label for="m011">週末</label></li>
					<li><input type="checkbox" id="m012" /><label for="m012">早餐</label></li>
					<li><input type="checkbox" id="m013" checked  /><label for="m013">午餐</label></li>
					<li><input type="checkbox" id="m014"  /><label for="m014">下午茶</label></li>
					<li><input type="checkbox" id="m015"  /><label for="m015">晚餐</label></li>
				</ul>
			</div>   			
		</div>
   		<div class="meetSettingArea">
			<h3>想聊的話題<span>(複選)</span></h3>
   			<div class="meetSettingSelectPad selectMeet1">
   				<ul>
					<li><input type="checkbox" id="m021" /><label for="m021">輕鬆聊</label></li>
					<li><input type="checkbox" id="m022" /><label for="m022">人生夢想</label></li>
					<li><input type="checkbox" id="m023" /><label for="m023">生涯規劃</label></li>
					<li><input type="checkbox" id="m024" /><label for="m024">感情</label></li>
					<li><input type="checkbox" id="m025" /><label for="m025">價值觀</label></li>
					<li><input type="checkbox" id="m026" /><label for="m026">生活哲學</label></li>
					<li><input type="checkbox" id="m027" /><label for="m027">文學閱讀</label></li>
					<li><input type="checkbox" id="m028" /><label for="m028">電影電視</label></li>
					<li><input type="checkbox" id="m029" /><label for="m029">旅行</label></li>
					<li><input type="checkbox" id="m030" /><label for="m030">美食</label></li>
					<li><input type="checkbox" id="m031" /><label for="m031">娛樂八卦</label></li>
					<li><input type="checkbox" id="m032" /><label for="m032">政治時事</label></li>
					<li><input type="checkbox" id="m033" /><label for="m033">金融理財</label></li>
					<li><input type="checkbox" id="m034" /><label for="m034">音樂</label></li>
					<li><input type="checkbox" id="m035" /><label for="m035">運動健身</label></li>
					<li><input type="checkbox" id="m036" /><label for="m036">烹飪</label></li>
					<li><input type="checkbox" id="m037" /><label for="m037">寵物</label></li>
					<li><input type="checkbox" id="m038" /><label for="m038">行銷管理</label></li>
				</ul>
			</div>		
		</div>
   		<div class="meetSettingArea">
			<h3>方便的地點<span>(複選)</span></h3>
   			<div class="meetSettingSelectPad selectMeet1">
   				<ul>
					<li><input type="checkbox" id="m041" /><label for="m041">台北市</label></li>
					<li><input type="checkbox" id="m042" /><label for="m042">新北市</label></li>
					<li><input type="checkbox" id="m043" /><label for="m043">基隆市</label></li>
					<li><input type="checkbox" id="m044" /><label for="m044">桃園市</label></li>
					<li><input type="checkbox" id="m045" /><label for="m045">新竹市</label></li>
					<li><input type="checkbox" id="m046" /><label for="m046">新竹縣</label></li>
					<li><input type="checkbox" id="m047" /><label for="m047">苗栗縣</label></li>
					<li><input type="checkbox" id="m048" /><label for="m048">台中市</label></li>
					<li><input type="checkbox" id="m049" /><label for="m049">價值觀</label></li>
					<li><input type="checkbox" id="m050" /><label for="m050">美食</label></li>
					<li><input type="checkbox" id="m051" /><label for="m051">運動健身</label></li>
					<li><input type="checkbox" id="m052" /><label for="m052">寵物</label></li>
					<li><input type="checkbox" id="m053" /><label for="m053">音樂</label></li>
					<li><input type="checkbox" id="m054" /><label for="m054">感情</label></li>
					<li><input type="checkbox" id="m055" /><label for="m055">價值觀</label></li>
					<li><input type="checkbox" id="m056" /><label for="m056">美食</label></li>
					<li><input type="checkbox" id="m057" /><label for="m057">運動健身</label></li>
					<li><input type="checkbox" id="m058" /><label for="m058">寵物</label></li>
					<li class="selectOther">其他 <input type="text" placeholder="請自行輸入城市名" /></li>
				</ul>
			</div>
		</div>
   		<div class="meetSettingArea">
			<h3>人數與費用<span>(單選)</span></h3>
   			<div class="meetSettingSelectPad selectMeet3">
   				<ul>
					<li>
						<span>參加人數</span>
						<input type="radio" id="m0511" name="a01" /><label for="m0511">我們單獨聊</label>
						<input type="radio" id="m0512" name="a01" /><label for="m0512">各帶1位朋友</label>
					</li>
					<li>
						<span>預計人數</span>
						<input type="radio" id="m0513" checked value="4" /><label for="m0513">4人</label>
					</li>
					<li>
						<span>人均花費</span>
						<input type="radio" id="m0521" name="a02" /><label for="m0521">$100-200</label>
						<input type="radio" id="m0522" name="a02"  checked/><label for="m0522">$200-400</label>
						<input type="radio" id="m0523" name="a02" /><label for="m0523">$400-600</label>
						<input type="radio" id="m0524" name="a02" /><label for="m0524">$600-1000</label>
					</li>
					<li>
						<span>付費方式</span>
						<input type="radio" id="m0531" name="a03" /><label for="m0531">各付各的</label>
						<input type="radio" id="m0532" name="a03" /><label for="m0532">平均分攤</label>
						<input type="radio" id="m0533" name="a03"  checked/><label for="m0533">我請客</label>
						<input type="radio" id="m0534" name="a03" /><label for="m0534">你買單</label>
					</li>
				</ul>
			</div>		
		</div>			
		<div class="meetCtrlPad">
			<input type="submit" value="儲存設定" />
		</div> 	
   		
    </div><!-- meetListCount END -->
	</form>
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
			$('.pageMenu').find('li').eq(1).addClass('active');
			$('.subHeader').find('li').eq(4).addClass('active');
			
		});
	</script>
</body>
</html>
