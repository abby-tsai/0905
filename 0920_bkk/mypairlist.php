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
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<?php include_once("at_include/inc_facebook.php"); ?>

    <link href="css/mto.compiled.css" rel="stylesheet">

</head>
<body class="mypair">
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main">
	<div class="headerBack">
		<a class="back"><i class="fa fa-angle-left" aria-hidden="true"></i>我的配對</a>
    </div>
	<?php include_once("at_include/mypair_menu.php"); ?> <!-- 分類 -->
    <div class="mypairCount pairList">
		<p>配對為雙向，24小時內沒有同意見面的名單，將永遠消失</p>
		<p>資料庫暫時還沒有適合你的人，你值得等待更好的人</p>
        <div class="mypairPad clear">
        	<!-- Pair list -->
            <div class="mypairWrapper card">
                <div class="mypairMain mypairItem event">
                    <ul class="picBar red">
                        <li class="name"><div class="number">40</div>男女人數</li>
                        <li><div class="user"><img src="images/user_photo_default_l.png" alt=""></div></li>
                        <li><div class="icon group"></div>多對多聯誼</li>
                    </ul>
                    <ul class="content">
                        <li class="title"><a href="">軍公教國營醫護咖啡一日遊</a></li>
                        <li>2018.02.25(六), 14:00</li>
                        <li>台北市新生南路三段88號2樓 (世貿大樓)</li>
                    </ul>
                    <div class="btn">我知道了</div>
                    <ul class="statusBar light"><li>未達人數門檻，活動取消</li></ul>
                </div>
            </div>
            <div class="mypairWrapper card">
                <div class="mypairMain mypairItem event">
                    <ul class="picBar red">
                        <li class="name"><div class="number">40</div>男女人數</li>
                        <li><div class="user"><img src="images/user_photo_default_l.png" alt=""></div></li>
                        <li><div class="icon group"></div>多對多聯誼</li>
                    </ul>
                    <ul class="content">
                        <li class="title"><a href="">軍公教國營醫護咖啡一日遊</a></li>
                        <li>2018.02.25(六), 14:00</li>
                        <li>台北市新生南路三段88號2樓 (世貿大樓)</li>
                    </ul>
                    <div class="btn cancel">取消參加</div>
                    <ul class="statusBar red"><li>活動已確認，請準時出席</li></ul>
                </div>
            </div>
            <div class="mypairWrapper card">
                <div class="mypairMain mypairItem event">
                    <ul class="picBar light">
                        <li class="name"><div class="number">40</div>男女人數</li>
                        <li><div class="user"><img src="images/user_photo_default_l.png" alt=""></div></li>
                        <li><div class="icon group"></div>多對多聯誼</li>
                    </ul>
                    <ul class="content">
                        <li class="title"><a href="">軍公教國營醫護咖啡一日遊</a></li>
                        <li>2018.02.25(六), 14:00</li>
                    </ul>
                    <ul class="list">
                        <li><a href=""><img src="images/user_photo_default_l.png" alt=""></a></li>
                        <li><a href=""><img src="images/user_photo_default_l2.jpg" alt=""></a></li>
                        <li><a href=""><img src="images/user_photo_default_l.png" alt=""></a></li>
                        <li><a href=""><img src="images/user_photo_default_l2.jpg" alt=""></a></li>
                    </ul>
                    <div class="btn checkList">查看活動名單</div>
                </div>
            </div>
            <div class="mypairWrapper">
                <div class="mypairMain mypairItem swiper-slide">
                    <div id="member_id_photo_3169">
                        <ul class="picture unselectable">
                            <li class="active">
                                <a href="mypairreport.php" class="">
                                    <div class="image is-square"><img alt="" src="images/user_photo_default_l.png"></div>
                                </a>
                            </li>
                        </ul>
                        <ul class="status unselectable">
                            <li class="timelimit">快消失</li>
                            <li class="number">82</li>
                        </ul>
                        <ul class="basicData">
                            <li>
                                <p><i class="offline"></i>婕<span>臺東縣/26歲</span></p>
                            </li>
                            <li class="unselectable heart2 heart_strip_no_self_like">尚無好感</li>
                        </ul>
                        <ul class="infoData">
                            <li>
                                <p>學士</p>高雄大學</li><li><p></p>電腦組裝/測試
                            </li>
                        </ul>
                        <ul class="meetTag" style="display: none;">
                            <li>
                                <a class="btn_meet"><span>見面聊</span> <p style="display: none;">邀請中</p> <p style="display: none;">已約成</p> <p style="display: none;">沒約成</p> <p style="display: none;">邀請你</p> <p style="display: none;">已接受</p> <p style="display: none;">已婉拒</p></a>
                            </li>
                        </ul>
                    </div>
                    <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
                    <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
                </div>
            </div>
            <div class="mypairWrapper">
                <div class="mypairMain mypairItem swiper-slide">
                    <div id="member_id_photo_2816">
                        <ul class="picture unselectable">
                            <li class="active">
                                <a href="mypairreport.php" class="">
                                    <div class="image is-square"><img alt="" src="images/user_photo_default_l.png"></div>
                                </a>
                            </li>
                        </ul>
                        <ul class="status unselectable">
                            <li class="timelimit">快消失</li>
                            <li class="number">83</li>
                        </ul>
                        <ul class="basicData">
                            <li>
                                <p><i class="offline"></i>喬蕎<span>新北市/29歲</span></p>
                            </li>
                            <li class="unselectable heart4 heart_strip_self_like">對他好感</li>
                        </ul>
                        <ul class="infoData">
                            <li>
                                <p>學士</p>華梵大學</li>
                            <li>
                                <p></p>高階研發主管</li>
                        </ul>
                        <ul class="meetTag" style="display: none;">
                            <li><a class="btn_meet"><span>見面聊</span> <p style="display: none;">邀請中</p> <p style="display: none;">已約成</p> <p style="display: none;">沒約成</p> <p style="display: none;">邀請你</p> <p style="display: none;">已接受</p> <p style="display: none;">已婉拒</p></a></li>
                        </ul>
                    </div>
                    <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div>
                    <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
                </div>
            </div>
            <div class="mypairWrapper">
                <div class="mypairMain mypairItem swiper-slide">
                    <div id="member_id_photo_2753">
                        <ul class="picture unselectable">
                            <li class="active">
                                <a href="mypairreport.php" class="">
                                    <div class="image is-square"><img alt="" src="images/user_photo_default_l.png"></div>
                                </a>
                            </li>
                        </ul>
                        <ul class="status unselectable">
                            <li class="timelimit">快消失</li>
                            <li class="number">92</li>
                        </ul>
                        <ul class="basicData">
                            <li>
                                <p><i class="offline"></i>Rita<span>彰化縣/32歲</span></p>
                            </li>
                            <li class="unselectable heart2 heart_strip_no_self_like">尚無好感</li>
                        </ul>
                        <ul class="infoData">
                            <li>
                                <p>碩士</p>樹人醫護管理專科學校</li>
                            <li>
                                <p></p>藥學助理</li>
                        </ul>
                        <ul class="meetTag">
                            <li><a class="btn_meet"><span>見面聊</span> <p>邀請中</p> <p style="display: none;">已約成</p> <p style="display: none;">沒約成</p> <p style="display: none;">邀請你</p> <p style="display: none;">已接受</p> <p style="display: none;">已婉拒</p></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mypairWrapper">
                <div class="mypairMain mypairItem swiper-slide">
                    <div id="">
                        <ul class="picture unselectable">
                            <li class="active">
                                <a href="mypairreport.php">
                                    <div class="image is-square"><img width="350" height="350" alt="" src="images/user_photo_default_l.png" /></div>
                                </a>
                            </li>
                        </ul>
                        <ul class="status unselectable">
                            <li class="new">23:15:22</li><li class="number">95</li>
                        </ul>
                        <ul class="basicData">
                            <li><p><i class="offline"></i>末路小花<span>台北市/35歲</span></p></li>
                            <li class="heart1">對你好感</li>
                        </ul>
                        <ul class="infoData">
                            <li><p>碩士</p>聖母醫護管理高階學校</li><li><p>知名外商</p>高階生技研發主管</li>
                        </ul>
                        <ul class="meetTag">
                            <li><a class="btn_meet"><span>見面聊</span><p>邀請中</p></a></li>
                            <!--<li><a class="btn_meetInvite active"><p>前往邀請</p></a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mypairWrapper">
                <div class="mypairMain mypairItem swiper-slide">
                    <ul class="picture unselectable">
                        <li>
                            <a href="mypairreport.php">
                                <div class="image is-square"><img width="350" height="350" alt="" src="images/user_photo_default_l.png" /></div>
                            </a>
                        </li>
                    </ul>
                    <ul class="status unselectable"><li class="new">23:15:22</li><li class="number">95</li></ul>
                    <ul class="basicData">
                        <li><p><i class="offline"></i>許瑋甯<span>台北市/35歲</span></p></li>
                        <li class="heart2">尚無好感</li>
                    </ul>
                    <ul class="infoData">
                        <li><p>碩士</p>台北科技大學</li><li><p>知名外商</p>行銷企劃主管</li>
                    </ul>
                    <ul class="meetTag">
                        <li><a class="btn_meet"><span>見面聊</span><p>已約成</p></a></li>
                        <!--<li><a class="btn_meetInvite"><p>前往邀請</p></a></li>-->
                    </ul>
                </div>
            </div>
            <div class="mypairWrapper">
                <div class="mypairMain mypairItem swiper-slide">
                    <ul class="picture unselectable">
                        <li>
                            <a href="mypairreport.php">
                                <div class="image is-square"><img width="350" height="350" alt="" src="images/user_photo_default_l.png" /></div>
                            </a>
                        </li>
                    </ul>
                    <ul class="status unselectable"><li class="date">12/28</li><li class="number">95</li></ul>
                    <ul class="basicData">
                        <li><p><i class="offline"></i>許瑋甯<span>台北市/35歲</span></p></li>
                        <li class="heart3">互有好感</li>
                    </ul>
                    <ul class="infoData">
                        <li class="ontime"><i class="icon_pin01"></i>台北市新生南路一段88號 麥當勞</li>
                    </ul>
                    <ul class="meetTag">
                        <li><a class="btn_meet ontime"><span>09/12</span><p>14:00</p></a></li>
                        <!--<li><a class="btn_meetInvite"><p>前往邀請</p></a></li>-->
                    </ul>
                </div>
            </div>
            <div class="mypairWrapper">
                <div class="mypairMain mypairItem swiper-slide">
                    <ul class="picture unselectable">
                        <li>
                            <a href="mypairreport.php">
                                <div class="image is-square"><img width="350" height="350" alt="" src="images/user_photo_default_l.png" /></div>
                            </a>
                        </li>
                    </ul>
                    <ul class="status unselectable"><li class="new">12/28</li><li class="number">95</li></ul>
                    <ul class="basicData">
                        <li><p><i class="offline"></i>許瑋甯<span>台北市/35歲</span></p></li>
                        <li class="heart4">對他好感</li>
                    </ul>
                    <ul class="infoData">
                        <li><p>碩士</p>台北科技大學</li><li><p>知名外商</p>行銷企劃主管</li>
                    </ul>
                    <ul class="meetTag">
                        <li><a class="btn_meet active"><span>見面聊</span><p>被邀請</p></a></li>
                        <!--<li><a class="btn_meetInvite active"><p>前往邀請</p></a></li>-->
                    </ul>
                </div>
            </div>
            <div class="mypairWrapper">
                <div class="mypairMain mypairItem swiper-slide">
                    <ul class="picture unselectable">
                        <li>
                            <a href="mypairreport.php">
                                <div class="image is-square"><img width="350" height="350" alt="" src="images/user_photo_default_l.png" /></div>
                            </a>
                        </li>
                    </ul>
                    <ul class="status unselectable"><li class="date">1/31</li><li class="number">95</li></ul>
                    <ul class="basicData">
                        <li><p><i class="offline"></i>許瑋甯<span>台北市/35歲</span></p></li>
                        <li class="heart2">尚無好感</li>
                    </ul>
                    <ul class="infoData">
                        <li><p>碩士</p>台北科技大學</li><li><p>知名外商</p>行銷企劃主管</li>
                    </ul>
                    <ul class="meetTag">
                        <li><a class="btn_meet active"><span>見面聊</span><p>已接受</p></a></li>
                        <!--<li><a class="btn_meetInvite"><p>前往邀請</p></a></li>-->
                    </ul>
                </div>
            </div>
            <div class="mypairWrapper">
                <div class="mypairMain mypairItem swiper-slide">
                    <ul class="picture unselectable">
                        <li>
                            <a href="mypairreport.php">
                                <div class="image is-square"><img width="350" height="350" alt="" src="images/user_photo_default_l.png" /></div>
                            </a>
                        </li>
                    </ul>
                    <ul class="status unselectable"><li class="date">7/19</li><li class="number">95</li></ul>
                    <ul class="basicData">
                        <li><p><i class="offline"></i>許瑋甯<span>台北市/35歲</span></p></li>
                        <li class="heart3">互有好感</li>
                    </ul>
                    <ul class="infoData">
                        <li><p>碩士</p>台北科技大學</li><li><p>知名外商</p>行銷企劃主管</li>
                    </ul>
                    <ul class="meetTag">
                        <li><a class="btn_meet active"><span>見面聊</span><p>已婉拒</p></a></li>
                        <!--<li><a class="btn_meetInvite active"><p>前往邀請</p></a></li>-->
                    </ul>
                </div>
            </div>
            <div class="mypairWrapper">
                <div class="mypairMain mypairItem swiper-slide">
                    <ul class="picture unselectable">
                        <li>
                            <a href="mypairreport.php">
                                <div class="image is-square"><img width="350" height="350" alt="" src="images/user_photo_default_l.png" /></div>
                            </a>
                        </li>
                    </ul>
                    <ul class="status unselectable"><li class="new">標籤</li><li class="number">95</li></ul>
                    <ul class="basicData">
                        <li><p><i class="offline"></i>許瑋甯<span>台北市/35歲</span></p></li>
                        <li class="rate1">給對方回饋</li>
                    </ul>
                    <ul class="rateData">
                        <li><p>對你好感度</p><span class="active"></span><span class="active"></span><span></span><span></span><span></span></li><li><p>與你再見面</p><span class="active"></span><span class="active"></span><span class="active"></span><span class="active"></span><span></span></li>
                    </ul>
                </div>
            </div>
            <div class="mypairWrapper">
                <div class="mypairMain mypairItem swiper-slide">
                    <ul class="picture unselectable">
                        <li>
                            <a href="mypairreport.php">
                                <div class="image is-square"><img width="350" height="350" alt="" src="images/user_photo_default_l.png" /></div>
                            </a>
                        </li>
                    </ul>
                    <ul class="status unselectable"><li class="date"></li><li class="number">95</li></ul>
                    <ul class="basicData">
                        <li><p><i class="offline"></i>許瑋甯<span>台北市/35歲</span></p></li>
                        <li class="rate2">邀請下次見面</li>
                    </ul>
                    <ul class="rateData">
                        <li><p>對你好感度</p><span class="active"></span><span class="active"></span><span class="active"></span><span class="active"></span><span></span></li><li><p>與你再見面</p><span class="active"></span><span class="active"></span><span class="active"></span><span></span><span></span></li>
                    </ul>
                    <ul class="feedTag">
                        <li><div class="icon"></div>已回饋</li>
                        <!--<li><a class="btn_meetInvite active"><p>前往邀請</p></a></li>-->
                    </ul>
                </div>
            </div>
                <div class="mypairWrapper card">
                    <div class="mypairMain mypairItem event">
                        <ul class="picBar green">
                            <li class="name"><div class="number">95</div>許瑋甯</li>
                            <li><div class="user"><img src="images/user_photo_default_l.png" alt=""></div></li>
                            <li><div class="icon self"></div>自助約會</li>
                        </ul>
                        <ul class="content">
                            <li class="title">海苔熊 &amp; 許瑋甯</li>
                            <li>2018.02.25(六), 14:00</li>
                            <li>台北市新生南路三段88號2樓</li>
                        </ul>
                        <ul class="statusBar dark"><li>約會已變更，等候對方確認</li></ul>
                    </div>
                </div>
                <div class="mypairWrapper card">
                    <div class="mypairMain mypairItem event">
                        <ul class="picBar green">
                            <li class="name"><div class="number">95</div>許瑋甯</li>
                            <li><div class="user"><img src="images/user_photo_default_l.png" alt=""></div></li>
                            <li><div class="icon self"></div>自助約會</li>
                        </ul>
                        <ul class="content">
                            <li class="title">海苔熊 &amp; 許瑋甯</li>
                            <li>2018.02.25(六), 14:00</li>
                            <li>台北市新生南路三段88號2樓 (世貿大樓)</li>
                        </ul>
                        <div class="btn">確認赴約</div>
                        <div class="btn">婉拒赴約</div>
                        <ul class="statusBar light"><li>約會已變更，請確認是否赴約</li></ul>
                    </div>
                </div>
                <div class="mypairWrapper card">
                    <div class="mypairMain mypairItem event">
                        <ul class="picBar green">
                            <li class="name"><div class="number">95</div>許瑋甯</li>
                            <li><div class="user"><img src="images/user_photo_default_l.png" alt=""></div></li>
                            <li><div class="icon tel"></div>通話約會</li>
                        </ul>
                        <ul class="content">
                            <li class="title">海苔熊 &amp; 許瑋甯</li>
                            <li>2018.02.25(六), 14:00</li>
                            <li>通話約會</li>
                        </ul>
                        <ul class="statusBar green"><li>約會已確認，請準時出席</li></ul>
                    </div>
                </div>
                <div class="mypairWrapper card">
                    <div class="mypairMain mypairItem event">
                        <ul class="picBar green">
                            <li class="name"><div class="number">95</div>許瑋甯</li>
                            <li><div class="user"><img src="images/user_photo_default_l.png" alt=""></div></li>
                            <li><div class="icon self"></div>自助約會</li>
                        </ul>
                        <ul class="content">
                            <li class="title">海苔熊 &amp; 許瑋甯</li>
                            <li>2018.02.25(六), 14:00</li>
                            <li>台北市新生南路三段88號2樓 (世貿大樓)</li>
                        </ul>
                        <div class="btn">我知道了</div>
                        <ul class="statusBar light"><li>因故無法出席，約會取消</li></ul>
                    </div>
                </div>
                <div class="mypairWrapper card">
                    <div class="mypairMain mypairItem event">
                        <ul class="picBar green">
                            <li class="name"><div class="number">95</div>許瑋甯</li>
                            <li><div class="user"><img src="images/user_photo_default_l.png" alt=""></div></li>
                            <li><div class="icon self"></div>自助約會</li>
                        </ul>
                        <ul class="content">
                            <li class="title">海苔熊 &amp; 許瑋甯</li>
                            <li>2018.02.25(六), 14:00</li>
                            <li>台北市新生南路三段88號2樓 (世貿大樓)</li>
                        </ul>
                        <div class="btn cancel">取消參加</div>
                        <ul class="statusBar green"><li>約會已確認，請準時出席</li></ul>
                    </div>
                </div>
                <div class="mypairWrapper card">
                    <div class="mypairMain mypairItem event">
                        <ul class="picBar light">
                            <li class="name"><div class="number">95</div>許瑋甯</li>
                            <li><div class="user"><img src="images/user_photo_default_l.png" alt=""></div></li>
                            <li><div class="icon self"></div>自助約會</li>
                        </ul>
                        <ul class="content">
                            <li class="title">海苔熊 &amp; 許瑋甯</li>
                            <li>2018.02.25(六), 14:00</li>
                            <li>台北市新生南路三段88號2樓 (世貿大樓)</li>
                        </ul>
                        <ul class="statusBar green"><li>約會已完成</li></ul>
                    </div>
                </div>
                <div class="mypairWrapper card">
                    <div class="mypairMain mypairItem event">
                        <ul class="picBar light">
                            <li class="name"><div class="number">95</div>許瑋甯</li>
                            <li><div class="user"><img src="images/user_photo_default_l.png" alt=""></div></li>
                            <li><div class="icon tel"></div>通話約會</li>
                        </ul>
                        <ul class="content">
                            <li class="title">海苔熊 &amp; 許瑋甯</li>
                            <li>2018.02.25(六), 14:00</li>
                            <li>通話約會</li>
                        </ul>
                        <ul class="statusBar green"><li>約會已完成</li></ul>
                    </div>
                </div>
                <div class="mypairWrapper card">
                    <div class="mypairMain mypairItem event">
                        <ul class="picBar yellow">
                            <li class="name"><div class="number">95</div>許瑋甯</li>
                            <li><div class="user"><img src="images/user_photo_default_l.png" alt=""></div></li>
                            <li><div class="icon obo"></div>1:1聯誼</li>
                        </ul>
                        <ul class="content">
                            <li class="title"><a href=""><a href="">軍公教國營醫護咖啡一日遊</a></a></li>
                            <li>2018.02.25(六), 14:00</li>
                            <li>台北市新生南路三段88號2樓 (世貿大樓)</li>
                        </ul>
                        <div class="btn">前往付款</div>
                        <ul class="statusBar dark"><li>已報名，請於24H內付款</li></ul>
                    </div>
                </div>
                <div class="mypairWrapper card">
                    <div class="mypairMain mypairItem event">
                        <ul class="picBar yellow">
                            <li class="name"><div class="number">95</div>許瑋甯</li>
                            <li><div class="user"><img src="images/user_photo_default_l.png" alt=""></div></li>
                            <li><div class="icon obo"></div>1:1聯誼</li>
                        </ul>
                        <ul class="content">
                            <li class="title"><a href=""><a href="">軍公教國營醫護咖啡一日遊</a></a></li>
                            <li>2018.02.25(六), 14:00</li>
                            <li>台北市新生南路三段88號2樓 (世貿大樓)</li>
                        </ul>
                        <div class="btn">前往付款</div>
                        <ul class="statusBar dark"><li>對方已付款，快行動吧！</li></ul>
                    </div>
                </div>
                <div class="mypairWrapper card">
                    <div class="mypairMain mypairItem event">
                        <ul class="picBar yellow">
                            <li class="name"><div class="number">95</div>許瑋甯</li>
                            <li><div class="user"><img src="images/user_photo_default_l.png" alt=""></div></li>
                            <li><div class="icon obo"></div>1:1聯誼</li>
                        </ul>
                        <ul class="content">
                            <li class="title"><a href=""><a href="">軍公教國營醫護咖啡一日遊</a></a></li>
                            <li>2018.02.25(六), 14:00</li>
                            <li>台北市新生南路三段88號2樓 (世貿大樓)</li>
                        </ul>
                        <ul class="statusBar dark"><li>已付款，等候對方付款</li></ul>
                    </div>
                </div>
                <div class="mypairWrapper card">
                    <div class="mypairMain mypairItem event">
                        <ul class="picBar yellow">
                            <li class="name"><div class="number">95</div>許瑋甯</li>
                            <li><div class="user"><img src="images/user_photo_default_l.png" alt=""></div></li>
                            <li><div class="icon obo"></div>1:1聯誼</li>
                        </ul>
                        <ul class="content">
                            <li class="title"><a href="">軍公教國營醫護咖啡一日遊</a></li>
                            <li>2018.02.25(六), 14:00</li>
                            <li>台北市新生南路三段88號2樓 (世貿大樓)</li>
                        </ul>
                        <div class="btn cancel">取消約會</div>
                        <ul class="statusBar dark"><li>雙方已付款，等候成團通知</li></ul>
                    </div>
                </div>
                <div class="mypairWrapper card">
                    <div class="mypairMain mypairItem event">
                        <ul class="picBar yellow">
                            <li class="name"><div class="number">95</div>許瑋甯</li>
                            <li><div class="user"><img src="images/user_photo_default_l.png" alt=""></div></li>
                            <li><div class="icon obo"></div>1:1聯誼</li>
                        </ul>
                        <ul class="content">
                            <li class="title"><a href="">軍公教國營醫護咖啡一日遊</a></li>
                            <li>2018.02.25(六), 14:00</li>
                            <li>台北市新生南路三段88號2樓 (世貿大樓)</li>
                        </ul>
                        <div class="btn">我知道了</div>
                        <ul class="statusBar light"><li>未及時付款，活動取消</li></ul>
                    </div>
                </div>
                <div class="mypairWrapper card">
                    <div class="mypairMain mypairItem event">
                        <ul class="picBar yellow">
                            <li class="name"><div class="number">95</div>許瑋甯</li>
                            <li><div class="user"><img src="images/user_photo_default_l.png" alt=""></div></li>
                            <li><div class="icon obo"></div>1:1聯誼</li>
                        </ul>
                        <ul class="content">
                            <li class="title"><a href="">軍公教國營醫護咖啡一日遊</a></li>
                            <li>2018.02.25(六), 14:00</li>
                            <li>台北市新生南路三段88號2樓 (世貿大樓)</li>
                        </ul>
                        <div class="btn">我知道了</div>
                        <ul class="statusBar light"><li>未達人數門檻，活動取消</li></ul>
                    </div>
                </div>
                <div class="mypairWrapper card">
                    <div class="mypairMain mypairItem event">
                        <ul class="picBar yellow">
                            <li class="name"><div class="number">95</div>許瑋甯</li>
                            <li><div class="user"><img src="images/user_photo_default_l.png" alt=""></div></li>
                            <li><div class="icon obo"></div>1:1聯誼</li>
                        </ul>
                        <ul class="content">
                            <li class="title"><a href="">軍公教國營醫護咖啡一日遊</a></li>
                            <li>2018.02.25(六), 14:00</li>
                            <li>台北市新生南路三段88號2樓 (世貿大樓)</li>
                        </ul>
                        <div class="btn">我知道了</div>
                        <ul class="statusBar light"><li>因故無法出席，活動取消</li></ul>
                    </div>
                </div>
                <div class="mypairWrapper card">
                    <div class="mypairMain mypairItem event">
                        <ul class="picBar yellow">
                            <li class="name"><div class="number">95</div>許瑋甯</li>
                            <li><div class="user"><img src="images/user_photo_default_l.png" alt=""></div></li>
                            <li><div class="icon obo"></div>1:1聯誼</li>
                        </ul>
                        <ul class="content">
                            <li class="title"><a href="">軍公教國營醫護咖啡一日遊</a></li>
                            <li>2018.02.25(六), 14:00</li>
                            <li>台北市新生南路三段88號2樓 (世貿大樓)</li>
                        </ul>
                        <div class="btn cancel">取消參加</div>
                        <ul class="statusBar yellow"><li>活動已確認，請準時出席</li></ul>
                    </div>
                </div>
                <div class="mypairWrapper card">
                    <div class="mypairMain mypairItem event">
                        <ul class="picBar light">
                            <li class="name"><div class="number">95</div>許瑋甯</li>
                            <li><div class="user"><img src="images/user_photo_default_l.png" alt=""></div></li>
                            <li><div class="icon obo"></div>1:1聯誼</li>
                        </ul>
                        <ul class="content">
                            <li class="title"><a href="">軍公教國營醫護咖啡一日遊</a></li>
                            <li>2018.02.25(六), 14:00</li>
                            <li>台北市新生南路三段88號2樓 (世貿大樓)</li>
                        </ul>
                        <ul class="statusBar yellow"><li>活動已完成</li></ul>
                    </div>
                </div>
                <div class="mypairWrapper card">
                    <div class="mypairMain mypairItem event">
                        <ul class="picBar red">
                            <li class="name"><div class="number">40</div>男女人數</li>
                            <li><div class="user"><img src="images/user_photo_default_l.png" alt=""></div></li>
                            <li><div class="icon group"></div>多對多聯誼</li>
                        </ul>
                        <ul class="content">
                            <li class="title"><a href="">軍公教國營醫護咖啡一日遊</a></li>
                            <li>2018.02.25(六), 14:00</li>
                            <li>台北市新生南路三段88號2樓 (世貿大樓)</li>
                        </ul>
                        <div class="btn cancel">取消約會</div>
                        <ul class="statusBar dark"><li>已付款，等候成團通知</li></ul>
                    </div>
                </div>
            <div class="mypairWrapper card">
                <div class="mypairMain mypairItem event">
                    <ul class="picBar red">
                        <li class="name"><div class="number">40</div>男女人數</li>
                        <li><div class="user"><img src="images/user_photo_default_l.png" alt=""></div></li>
                        <li><div class="icon group"></div>多對多聯誼</li>
                    </ul>
                    <ul class="content">
                        <li class="title"><a href="">軍公教國營醫護咖啡一日遊</a></li>
                        <li>2018.02.25(六), 14:00</li>
                        <li>台北市新生南路三段88號2樓 (世貿大樓)</li>
                    </ul>
                    <div class="btn">我知道了</div>
                    <ul class="statusBar light"><li>未達人數門檻，活動取消</li></ul>
                </div>
            </div>
            <div class="mypairWrapper card">
                <div class="mypairMain mypairItem event">
                    <ul class="picBar red">
                        <li class="name"><div class="number">40</div>男女人數</li>
                        <li><div class="user"><img src="images/user_photo_default_l.png" alt=""></div></li>
                        <li><div class="icon group"></div>多對多聯誼</li>
                    </ul>
                    <ul class="content">
                        <li class="title"><a href="">軍公教國營醫護咖啡一日遊</a></li>
                        <li>2018.02.25(六), 14:00</li>
                        <li>台北市新生南路三段88號2樓 (世貿大樓)</li>
                    </ul>
                    <div class="btn cancel">取消參加</div>
                    <ul class="statusBar red"><li>活動已確認，請準時出席</li></ul>
                </div>
            </div>
            <div class="mypairWrapper card">
                <div class="mypairMain mypairItem event">
                    <ul class="picBar light">
                        <li class="name"><div class="number">40</div>男女人數</li>
                        <li><div class="user"><img src="images/user_photo_default_l.png" alt=""></div></li>
                        <li><div class="icon group"></div>多對多聯誼</li>
                    </ul>
                    <ul class="content">
                        <li class="title"><a href="">軍公教國營醫護咖啡一日遊</a></li>
                        <li>2018.02.25(六), 14:00</li>
                    </ul>
                    <ul class="list">
                        <li><a href=""><img src="images/user_photo_default_l.png" alt=""></a></li>
                        <li><a href=""><img src="images/user_photo_default_l2.jpg" alt=""></a></li>
                        <li><a href=""><img src="images/user_photo_default_l.png" alt=""></a></li>
                        <li><a href=""><img src="images/user_photo_default_l2.jpg" alt=""></a></li>
                    </ul>
                    <div class="btn checkList">查看活動名單</div>
                </div>
            </div>
        </div>
    </div><!-- mypairCount END -->
    
    <!-- 如果沒有資料，顯示下面這個 div -->
	<div class="mypairItem_empty">
		<img src="images/mypairItem_empty.jpg" class="mypairItem_empty" />
		<img src="images/mypairItem_empty_m.jpg" class="mypairItem_empty_m" />
	</div>
	
	<div class="infoPad_delete"><i class="fa fa-check-square" aria-hidden="true"></i>名單已刪除</div>
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
			var $selector = $('.pageMenu').find('a');
			$selector.click(function(){
				var $parent = $(this).parents();
				$parent.toggleClass('active');
			});
			$('.subHeader').find('li').eq(0).addClass('active');
			var $state = $('.basicData').find('li:nth-child(2)');
			$state.click(function(){
				console.log('test');
			});
		});
	</script>
</body>
</html>
