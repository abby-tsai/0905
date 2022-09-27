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
    <link href="/css/at_cage.css" rel="stylesheet" type="text/css" />
    <link href="/css/basic_findtheone.css" rel="stylesheet" type="text/css" />
	<?php include_once("at_include/inc_facebook.php"); ?>
</head>
<body class="index">
<div id="download">
    <div class="close"></div>
    <img class="logo" src="/images/logo_findtheone_official.svg" alt="">
    <p>心理學1:1見面交友<span>找認真關係，以見面為前提</span></p>
    <a href="">下載<br>APP</a>
</div>
<div id="fb-root"></div>
<div id="header">
    <div class="headerConts clear unselectable">
        <ul class="headerBasic">
            <li class="logo"><a href="index.php"></a></li>
            <li class="subSlogan">找到對的另一半</li>
        </ul>
        <ul class="navMenu height_NAV clear CGc"><!-- 手機 Menu -->
        </ul>
        <ul class="navBar CGt"><li><i></i><i></i><i></i></li></ul>
    </div>
    <div class="popBodyHeader"></div>
</div>
<div id="main">
    <div class="intro">
        <div class="breakpoint">
<!--            <div class="count">-->
<!--                <div class="label">累計見面次數</div>-->
<!--                <div class="num">9</div>-->
<!--                <div class="num">9</div>-->
<!--                <div class="num">9</div>-->
<!--                <div class="num">9</div>-->
<!--                <div class="num">9</div>-->
<!--            </div>-->
<!--            <div class="vs">-->
<!--                <div class="percent men"><div class="num">43.28%</div></div>-->
<!--                <div class="percent"><div class="num">56.72%</div></div>-->
<!--                <div class="bar" style="width: 43.28%;"></div>-->
<!--            </div>-->
            <div class="hideSlogan">找認真關係，以見面為前提</div>
            <ul class="words">
                <li class="slogan">找認真關係，以見面為前提</li>
                <li class="title">本站於5/6 (一), 10:00~19:00</li>
                <li class="title">進行重大改版更新</li>
                <li><a href="javascript: void(0);" class="pairBtn">網站升級中</span></a></li>
                <li>網站將暫時關閉</li>
                <li>5/6的每日配對也會暫停一次</li>
                <li>造成您的不便，我們深感抱歉</li>
            </ul>
        </div>
    </div>
</div>
<!--Consider makes dummy_footer to be visible as jQuery does not guarantee offset() of hidden elements-->
<div id="dummy_footer" style="/*visibility:hidden;*/ position:relative; height:1px; width:100%"></div>
<div id="footer">
    <div class="footerCont">
        <ul class="copy"><li><p>版權所有 © 2018 闌珊處網路股份有限公司</p></li></ul>
    </div>
</div>
<div class="backTop"></div>
<!-- Loader
<div class="loadPad"><div class="loader_f"></div></div>  -->
<!-- jQuery -->    
    <script type="text/javascript" src="/js/jquery.min-2.2.4.js"></script>
    <script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/js/jquery.touchwipe.min.js"></script>
    <script type="text/javascript" src="/js/at_Rev.min.js"></script>
    <script type="text/javascript" src="/js/at_cage.js"></script>
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
		})
	</script>
</body>
</html>
