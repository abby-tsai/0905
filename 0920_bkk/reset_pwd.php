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
<body class="index">
<div class="modal captcha active">
    <a class="close" href="#"></a>
    <div class="title">請到信箱領取驗證碼</div>
    <input type="text" placeholder="請輸入驗證碼">
    <div class="error">驗證碼錯誤，請重新輸入</div>
    <a class="submit" href="#">送出</a>
</div>
<div id="loginBox">
    <div class="fbBtn">fb 登入</div>
    <div class="divider">或</div>
    <div class="inputBox">
        <input type="email" placeholder="你的email">
        <input type="password" placeholder="你的密碼">
    </div>
    <div class="forgot">忘記密碼？</div>
    <div class="loginBtn">登入</div>
</div>
<div id="download">
    <div class="close"></div>
    <img class="logo" src="images/logo_findtheone_official.svg" alt="">
    <p>心理學1:1見面交友<span>找認真關係，以見面為前提</span></p>
    <a href="">下載<br>APP</a>
</div>
<div id="fb-root"></div>
<?php include_once("at_include/header3.php"); ?>
<div id="main">
    <div class="intro reset_pwd">
        <div class="breakpoint">
            <div class="count">
                <div class="label">累計見面次數</div>
                <div class="num">9</div>
                <div class="num">9</div>
                <div class="num">9</div>
                <div class="num">9</div>
                <div class="num">9</div>
            </div>
            <ul class="words">
                <li class="title">重設密碼</li>
                <li class="inputBox">
                    <input type="password" placeholder="新密碼 (8-20英數字)">
                    <input type="password" placeholder="密碼確認 (8-20英數字)">
                </li>
                <li class="btnBox"><a class="confirm" href="#">確認</a><a class="cancel" href="#">取消</a></li>
            </ul>
        </div>
    </div>
</div>
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

            //download
            if($(window).width() <= 769) {
                $('#download').addClass('active');
            } else {
                $('#download').removeClass('active');
            }
            $('#download .close').click(function(){
                $('#download').toggleClass('active');
            });
            $(window).resize(function(){
                if($(window).width() <= 769) {
                    $('#download').addClass('active');
                } else {
                    $('#download').removeClass('active');
                }
            });

            //modal
            $('.modal .close').click(function() {
                $('.modal.active').removeClass('active');
            });

            //header mobile toggle login
            $('#header .toggle').click(function() {
                $('#header .toggle, #loginBox').toggleClass('active');
            });
		})
	</script>
</body>
</html>
