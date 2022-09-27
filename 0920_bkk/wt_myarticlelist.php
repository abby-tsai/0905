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
    <link href="css/basic_findtheone_writer.css" rel="stylesheet" type="text/css" />
	<?php include_once("at_include/inc_facebook.php"); ?>
</head>
<body>
<div id="fb-root"></div>
<?php include_once("at_include/wt_header.php"); ?>
<div id="main">
	<?php include_once("at_include/article_menu.php"); ?> <!-- 文章分類 -->
	<div class="myArticleListPad">
		<div class="ctrlPad clear"><a href="wt_addarticle.php" class="btn_addArticle">+ 新增文章</a></div>
		<div class="cssTable">
			<ul>
				<li>文章排序<i class="fa fa-angle-double-down"></i></li>
				<li>發佈日期<i class="fa fa-angle-double-down"></i></li>
				<li>預計發佈時間<i class="fa fa-angle-double-up"></i></li>
				<li>瀏覽次數<i class="fa fa-angle-double-up"></i></li>
				<li>文章封面<i class="fa fa-angle-double-down"></i></li>
				<li>文章標題<i class="fa fa-angle-double-down"></i></li>
				<li>文章分類<i class="fa fa-angle-double-down"></i></li>
				<li>心理學分類<i class="fa fa-angle-double-down"></i></li>
				<li>作者<i class="fa fa-angle-double-down"></i></li>
				<li>文章狀態<i class="fa fa-angle-double-down"></i></li>
				<li>編輯<i class="fa fa-angle-double-down"></i></li>
			</ul>
			<ul>
				<li>9</li>
				<li>2016-11-08</li>
				<li>2016-11-08</li>
				<li>2</li>
				<li><img src="images/default_article.jpg" /></li>
				<li><a>為什麼我們會選擇結婚或不婚</a></li>
				<li><p>兩性相處</p><p>伴侶選擇</p><p>失戀分手</p><p>自我探索</p></li>
				<li><p>依附風格 / 客體關係</p><p>衝突與溝通</p><p>性格與特質</p><p>子女教育</p></li>
				<li>海苔雄</li>
				<li>草稿</li>
				<li><a href=""><i class="fa fa-pencil-square"></i> 編輯</a></li>
			</ul>
			<ul>
				<li>9</li>
				<li>2016-11-08</li>
				<li>2016-11-08</li>
				<li>2</li>
				<li><img src="images/default_article.jpg" /></li>
				<li>為什麼我們會選擇結婚或不婚</li>
				<li><p>兩性相處</p><p>伴侶選擇</p><p>失戀分手</p><p>自我探索</p></li>
				<li><p>依附風格 / 客體關係</p><p>衝突與溝通</p><p>性格與特質</p><p>子女教育</p></li>
				<li>海苔雄</li>
				<li>草稿</li>
				<li><i class="fa fa-pencil-square"></i> 編輯</li>
			</ul>
			<ul>
				<li>9</li>
				<li>2016-11-08</li>
				<li>2016-11-08</li>
				<li>2</li>
				<li><img src="images/default_article.jpg" /></li>
				<li>為什麼我們會選擇結婚或不婚</li>
				<li><p>兩性相處</p><p>伴侶選擇</p><p>失戀分手</p><p>自我探索</p></li>
				<li><p>依附風格 / 客體關係</p><p>衝突與溝通</p><p>性格與特質</p><p>子女教育</p></li>
				<li>海苔雄</li>
				<li>草稿</li>
				<li><i class="fa fa-pencil-square"></i> 編輯</li>
			</ul>
			<ul>
				<li>9</li>
				<li>2016-11-08</li>
				<li>2016-11-08</li>
				<li>2</li>
				<li><img src="images/default_article.jpg" /></li>
				<li>為什麼我們會選擇結婚或不婚</li>
				<li><p>兩性相處</p><p>伴侶選擇</p><p>失戀分手</p><p>自我探索</p></li>
				<li><p>依附風格 / 客體關係</p><p>衝突與溝通</p><p>性格與特質</p><p>子女教育</p></li>
				<li>海苔雄</li>
				<li>草稿</li>
				<li><i class="fa fa-pencil-square"></i> 編輯</li>
			</ul>
	
		</div>
	</div>
</div><!-- main END -->
<?php include_once("at_include/footer.php"); ?>
<!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min-2.2.4.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/at_cage_writer.js"></script>
    <script>
		$(window).load(function() {
			$('.subHeader').find('li').eq(3).addClass('active');
			$('.pageMenu').find('li').eq(0).addClass('active');
		})
	</script>
</body>
</html>
