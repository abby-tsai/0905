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
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main">
	<div class="indexheader height_F2">
		<?php include_once("at_include/plus_applink.php"); ?>
		<!--
		<p><span>以見面為前提的婚戀交友</span><span>整合全球兩性心理學研究</span></p>
		<h1><b>配對1%最適合的結婚對象</b><span>花時間在對的人身上</span></h1>
		-->
        <h1>見面聊，最真實</h1>
		<p>
		    <span>心理學配對1%最適人選</span>
		    <span>深度分析告別摸黑探索</span>
		    <span>24小時內決定是否見面</span>
		</p>
        <a href="signup.php" class="btn_blue CGc">心理學配對測驗</a>
<!--		<a href="" class="btn_toDemo">前往體驗區參觀</a>-->
    </div>
    <div class="indexContent">
    	<div class="indexSpecInfo tableAccross">
        	<ul>
            	<li><img alt="" src="images/index_spec01.jpg" /></li>
                <li>
                	<h2>1.填寫心理測驗</h2>
                    <p>透過心理測驗，針對影響婚姻滿意度的重要因子，進行深度的自我探索。</p>
                </li>
            </ul>
        	<ul>
            	<li><img alt="" src="images/index_spec02.jpg" /></li>
                <li>
                	<h2>2.配對1%最適名單</h2>
                    <p>把對你的心理分析，透過演算法和所有的異性會員進行計算，找出1% 的最適名單。</p>
                </li>
            </ul>
        	<ul>
            	<li><img alt="" src="images/index_spec03.jpg" /></li>
                <li>
                	<h2>3.深度解析相處模式</h2>
                    <p>提供深度心理學報告，分析11個面向的契合程度，告別相愛容易相處難。</p>
                </li>
            </ul>
        	<ul>
            	<li><img alt="" src="images/index_spec04.jpg" /></li>
                <li>
                	<h2>4.24H內邀請見面聊天</h2>
                    <p>在24小時之內彼此同意見面，就可以成為朋友，聊天室會開啟，讓你們敲定見面細節，否則對方就會永遠消失。</p>
                </li>
            </ul>
        </div><!-- indexSpecInfo END -->
        <div class="indexWriter tableAccross">
        	<ul>
            	<li>
                	<img alt="" src="images/portrait-img02.jpg" />
                </li>
            	<li>
                	<h2>幸福的婚姻有跡可循</h2>
                    <p>真愛在哪裡？從事婚姻諮商研究多年，幸福的婚姻確實有跡可循，findtheone 經由調查研究的科學方式，成功找到影響婚姻滿意度的重要因子，茫茫人海中，找到對的愛，現在有了更科學的方法。</p>
					<h3>修慧蘭 <span>政大心理系副教授 / 婚姻心理學家</span></h3>
                </li>
            </ul>
        	<ul>
            	<li>
                	<img alt="" src="images/portrait-img01.jpg" />
                </li>
            	<li>
                	<h2>把時間給更適合的人</h2>
                    <p>許多交友網站雖然標榜能夠幫你找到命中注定的另一半，但最後成功配對的機率比丟銅板還低。findtheone 是國內第一個用心理學量化研究方式，所建構的配對系統。青春有限，你值得將寶貴的時間，花在相對適合的人身上！</p>
					<h3>海苔熊 <span>台大心理學碩士 / 愛情心理學家</span></h3>
                </li>
            </ul>        
        </div><!-- indexWriter END -->
        <div class="index_specSimple">
        	<h2>安全效率的網路交友</h2>
            <p><img alt="" src="images/icon_indpec_fblogo.png" />fb註冊，會員真實性高</p>
            <p><img alt="" src="images/icon_indpec_singlegus.png" />僅限單身fb用戶註冊</p>
            <p><img alt="" src="images/icon_indpec_commu.png" />雙向配對，確保同步關注</p>
            <p><img alt="" src="images/icon_indpec_keeppower.png" />排除不活躍會員</p>
        </div><!-- index_specSimple END-->
    </div><!-- indexContent END -->     
    
    <div class="index_footer height_F">
		<!--
		<p><span>以見面為前提的婚戀交友</span><span>整合全球兩性心理學研究</span></p>
		<h1><b>配對1%最適合的結婚對象</b><span>花時間在對的人身上</span></h1>
		-->
        <h1>見面聊，最真實</h1>
        <p>
            <span>心理學配對1%最適人選</span>
            <span>深度分析告別摸黑探索</span>
            <span>24小時內決定是否見面</span>
        </p>
<!--		<p>-->
<!--		   <span>以見面為前提的婚戀交友</span>-->
<!--		   <span>心理學配對1%最適合你的人</span>-->
<!--		   <span>24小時內決定是否同意見面</span>-->
<!--		   <span>透過見面聊真實的認識彼此</span>-->
<!--		</p>-->
        <a href="signup.php" class="btn_blue CGc">心理學配對測驗</a>
<!--		<a href="" class="btn_toDemo">前往體驗區參觀</a>-->
    </div><!-- index_footer END -->       
    
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
