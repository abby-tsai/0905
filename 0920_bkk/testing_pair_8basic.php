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
<body class="testing_pairs">
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main">
    <div class="testingCount">
    	<!-- 以下可以用資料庫 -->
        <div class="testingPad pair8">
            <form action="signin_certifi_mobile.php">
        	<div class="pageGroup">
                <?php include_once("at_include/testingCount_98basic.php"); ?>    
        	</div>
        	</form>
        </div>        
    	<!-- 以上可以用資料庫 END -->
    </div><!-- testingCount END -->
</div><!-- main END -->
<?php include_once("at_include/footer.php"); ?>
<!-- jQuery -->    
    <script type="text/javascript" src="js/jquery.min-2.2.4.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.touchwipe.min.js"></script>
    <script type="text/javascript" src="js/at_Rev.min.js"></script>
    <script type="text/javascript" src="js/at_cage.js"></script>
  	<!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
    <script>
		$(window).load(function() {
		})
		$(document).ready(function() {
			// 呼叫自製 Autocomplete
			var $autoInput = $('.CG_autoInput'),
				$autoOption = $('.CG_autocomplete').find('option');
			$autoInput.mouseover(function(){
				var $autoSelect = $(this).parents('.ansPad').find('.CG_autocomplete');
				$autoSelect.fadeIn();
			}).parents('.ansPad').mouseleave(function(){
				var $autoSelect = $(this).find('.CG_autocomplete');
				$autoSelect.fadeOut();		
			});
			// 選取與寫入 aotucomplete 值
			$autoOption.click(function(){
				var $value = $(this).text(),
					$inputValue = $(this).parents('.ansPad').find('.CG_autoInput');
				$inputValue.val($value);
				$('.CG_autocomplete').fadeOut();		
			});
			// 送出自定義參數
			var $btn = $('.sendSelfData');
			$btn.click(function(){
				var $inputSelfData = $(this).siblings('.inputSelfData').val(),
					$inputValue = $(this).parents('.ansPad').find('.CG_autoInput');
				$inputValue.val($inputSelfData);
				$('.CG_autocomplete').fadeOut();		
			});
		});
		
		// jquery ui autocomplete 市場通用版
		$(function() {
			var schoolData = [
			  "國立台灣大學 National Taiwan", "國立中央大學", "清華大學", "成功大學", "交通大學", "師範大學", "台北大學", "台灣科技大學", "台北科技大學", "台北商業大學", "建國中學", "台北第一女子高級中學", "私立復興高級商工職業學校", "懷生國中", "松山高中", "大安高工", "輔仁大學", "銘傳大學", "私立中國文化大學", "朝陽科技大學", "私立華梵大學", "國立政治大學"
			];
			var businessData = [
			  "Microsoft Taiwan Co., Ltd 微軟台灣", "Yahoo Taiwan 雅虎台灣", "律師事務所", "闌珊處", "3M", "兆豐銀行", "味全食品", "統一企業", "誠品書店", "金石堂", "遠東企業", "台塑集團", "餐廳", "會計師事務所", "飯店", "台積電", "新富發", "潤泰集團", "遠雄建設", "國泰世華銀行", "黑松企業", "郭元益"
			];
			$("#U_school").autocomplete({ source: schoolData});
			$("#U_business").autocomplete({ source: businessData});
		  });
	</script>
</body>
</html>
