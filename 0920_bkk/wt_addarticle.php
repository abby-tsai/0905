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
	<form>
	<div class="wt_addArticlePad">
		<div class="cssTable">
			<ul>
				<li>發佈時間:</li>
				<li>將由系統管理員審核後綁定</li>
			</ul>
			<ul>
				<li>文章作者:</li>
				<li>海苔雄 <a class="btn_preview">文章預覽</a></li>
			</ul>
			<ul>
				<li>文章標題:</li>
				<li><input type="text" placeholder="請填入文章標題" /></li>
			</ul>
			<ul>
				<li>主題分類:</li>
				<li>
					<label><input type="checkbox" value="" />伴侶選擇</label>
					<label><input type="checkbox" value="" />兩性相處</label>
					<label><input type="checkbox" value="" />失戀分手</label>
					<label><input type="checkbox" value="" />自我探索</label>
					<label><input type="checkbox" value="" />互動技巧</label>
					<label><input type="checkbox" value="" />其他</label>
					<p>可複選</p>
				</li>
			</ul>
			<ul>
				<li>心理學分類:</li>
				<li>					
					<label><input type="checkbox" value="" />依附風格 / 客體關係</label>
					<label><input type="checkbox" value="" />衝突與溝通</label>
					<label><input type="checkbox" value="" />性格與特質</label>
					<label><input type="checkbox" value="" />成長觀</label>
					<label><input type="checkbox" value="" />生活習慣</label><br>
					<label><input type="checkbox" value="" />子女教育</label>
					<label><input type="checkbox" value="" />金錢觀</label>
					<label><input type="checkbox" value="" />家務分工</label>
					<label><input type="checkbox" value="" />性期待 / 表達</label>
					<label><input type="checkbox" value="" />愛情風格</label><br>
					<label><input type="checkbox" value="" />婚姻價值(傳統/現代)</label>
					<label><input type="checkbox" value="" />愛之語</label>
					<label><input type="checkbox" value="" />興趣</label>
					<label><input type="checkbox" value="" />旅行</label>
					<label><input type="checkbox" value="" />其他</label>
					<p>可複選</p>
				</li>
			</ul>
			<ul>
				<li>文章主圖:</li>
				<li>
					<input type="file" />
					<p>請選擇 .jpg 或 .png 檔案，尺寸建議: 高2048 * 高1536</p>
				</li>
			</ul>
			<ul>
				<li>文章摘要:</li>
				<li>
					<input type="text" placeholder="請填入約 60 ~ 100字的文章摘要" />
					<p>簡單的文章描述約 60 ~ 100 字</p>
				</li>
			</ul>
			<ul>
				<li>試閱內容:</li>
				<li>
					<div class="wt_editorBar">
						<ul>
							<li class="addTag_b"><a onclick="">B</a></li>
							<li class="addTag_i"><a onclick="">I</a></li>
							<li class="addTag_u"><a onclick="">U</a></li>
							<li class=""><a onclick="">#</a></li>
							<li class="addTag_h2"><a onclick="">H2</a></li>
							<li class="addTag_h3"><a onclick="">H3</a></li>
							<li class="addTag_h4"><a onclick="">H4</a></li>
							<li class=""><a onclick="">&quot;</a></li>
							<li class="addTag_ol"><a onclick="">1.</a></li>
							<li class="addTag_ul"><a onclick="">&#8226;</a></li>
							<li class=""><a onclick="">X</a></li>
						</ul>
						<ul class="shap_3"></ul>
					</div>
					<textarea placeholder="在這裡編輯試閱內容"></textarea>
				</li>
			</ul>
			<ul>
				<li>完整內文:</li>
				<li>
					<textarea placeholder="在這裡編輯完整內文"></textarea></li>
			</ul>
			<ul>
				<li></li>
				<li>
					<div class="ctrlPad">
						<input type="button" class="saveDraft" value="儲存草稿" />
						<input type="button" class="submitArticle" value="儲存並等待審核" />
						<input type="button" class="cancleAdd" value="取消新增" />
					</div>
				</li>
			</ul>
			<ul>
				<li></li>
				<li><p>文章儲存後在編輯模式才能預覽</p></li>
			</ul>
		</div>
	</div>
	</form>
</div><!-- main END -->
<?php include_once("at_include/footer.php"); ?>
<!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min-2.2.4.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/at_cage_writer.js"></script>
    <script>
		$(window).load(function() {
			$('.subHeader').find('li').eq(2).addClass('active');
		})
	</script>
</body>
</html>
