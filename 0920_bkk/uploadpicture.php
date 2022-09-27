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

<body class="popBody">
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main">
	<h2><a class="arrow back"></a>照片裁切</h2>
    <div class="popBodyCount">
        <div class="cropperPad height_R2">
        	<form action="javascript:window.history.go(-1);">
				<div class="img-container">
					<img alt="" id="image" src="images/user_photo_default_l.png" alt="Picture" style="opacity:0;" />
				</div>
				<!-- Data -->
				<div class="docs-data" style="display:none;">
					<input type="text" id="dataX">
					<input type="text" id="dataY">
					<input type="text" id="dataWidth">
					<input type="text" id="dataHeight">
					<input type="text" id="dataRotate">
					<input type="text" id="dataScaleX">
					<input type="text" id="dataScaleY">
				</div>
				<!-- Ctrl Button -->
				<div class="ctrlCropper docs-buttons">	
					<!--			
					<button type="button" class="btn btn-primary" data-method="setDragMode" data-option="crop" title="Crop">
						<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)">
							<span class="fa fa-crop"></span>
						</span>
					</button>
					-->
					<div class="btn btn-primary" data-method="rotate" data-option="90" title="Rotate Right">右轉90度
						<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, 90)">
							<!--<span class="fa fa-rotate-right"></span>-->
						</span>
					</div>
					
					<label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
						<input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">選擇檔案
						<span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
						  <!--<span class="fa fa-upload"></span>-->
						</span>
					</label>
					
				</div>
				<div class="ctrlPad"><input type="submit" class="btn_blue CGc" value="完成" /></div>
				
				<p>
					把basic_findtheone.css 最後一行拿掉就是方形了! <br> 
					.cropper-face {background-image:url(../images/mask_alpha.png); background-size:cover; background-color:rgba(255,255,255,0.1) !important;  opacity:0.8 !important;}
					
				</p>
			</form>
        </div>
    </div><!-- testingCount END -->
</div><!-- main END -->
<?php include_once("at_include/footer.php"); ?>
<!-- jQuery -->    
    <script type="text/javascript" src="js/jquery.min1.12.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.touchwipe.min.js"></script>
    <script type="text/javascript" src="js/at_cage.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link href="css/cropper.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/cropper.js"></script>
    <script type="text/javascript" src="js/cropper_main.js"></script>
    <script>
		$(window).load(function() {
			$('#image').css({'opacity','1'});
		})
		$(document).ready(function() {
		});

	</script>
</body>
</html>
