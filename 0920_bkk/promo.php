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
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
	<?php include_once("at_include/inc_facebook.php"); ?>
</head>
<body class="index">
<div id="download">
    <div class="close"></div>
    <img class="logo" src="images/logo_findtheone_official.svg" alt="">
    <p>心理學1:1見面交友<span>找認真關係，以見面為前提</span></p>
    <a href="">下載<br>APP</a>
</div>
<div id="fb-root"></div>
<?php include_once("at_include/header1.php"); ?>
<div id="main">
    <div class="intro promo">
        <div class="breakpoint">
            <div class="count">
                <div class="label">累計見面次數</div>
                <div class="num">9</div>
                <div class="num">9</div>
                <div class="num">9</div>
                <div class="num">9</div>
                <div class="num">9</div>
            </div>
            <div class="vs">
                <div class="percent men"><div class="num">43.28%</div></div>
                <div class="percent"><div class="num">56.72%</div></div>
                <div class="bar" style="width: 43.28%;"></div>
            </div>
            <ul class="words">
                <li class="title">首次體驗1:1見面約會<br />再享$100優惠</li>
                <li class="sub">請註冊以領取 <span class="name">Dennis</span> <br />給你的禮物</li>
                <li class="sub2">meettheone 心理學見面交友</li>
                <li class="slogan">找出適合你/妳的另一半</li>
                <li>
                    <a class="promoCTA" href="#">註冊，開始心理學測驗</a>
                </li>
                <li class="desc">有效排除95%不適人選<br />72H「約到」彼此想見的人</li>
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
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script>
		$(window).load(function() {
            $('.slideBtn').click(function(){
                $('.slide').slideToggle(1000);
                $(this).toggleClass('active');
            });

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

            //slider
            if($(window).width() <= 1024) {
                $(".content-wrap .case72 .person").slick({
                    infinite: false,
                    slidesToShow: 1,
                    arrows: false,
                    dots: true
                })
            } else {
                $(".content-wrap .case72 .person").slick("unslick");
            }
            $(window).resize(function(){
                if($(window).width() <= 1024) {
                    $(".content-wrap .case72 .person").slick({
                        infinite: false,
                        slidesToShow: 1,
                        arrows: false,
                        dots: true
                    })
                } else {
                    $(".content-wrap .case72 .person").slick("unslick");
                }
            });
		})
	</script>
</body>
</html>
