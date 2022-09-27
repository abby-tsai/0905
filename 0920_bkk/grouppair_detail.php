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
<body class="mypair">
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main">
	<div class="headerBack">
		<a class="back"><i class="fa fa-angle-left" aria-hidden="true"></i>我的配對</a>
    </div>
    <?php include_once("at_include/grouppair_menu.php"); ?> <!-- 分類 -->

    <div class="mypairCount pairList pairDetail">
        <div class="mypairPad clear">
            <div class="content">
                <!-- Pair list -->
                <span>
                    <div class="mypairWrapper groupPair">
                        <div class="mypairMain mypairItem">
                            <ul class="picture">
                                <li>
                                    <a href="javascript:void(0)" onclick="group_setpop()">
                                        <img width="350" height="350" alt="" src="images/user_photo_default_l.png" />
                                    </a>
                                </li>
                            </ul>
                            <ul class="basicData">
                                <li>科技新貴 X 銀行醫護 探索愛之語</li>
                                <li class="price">800元<span>(VIP 600元)</span></li>
                            </ul>
                            <ul class="info">
                                <li class="time"><span class="city">台北市</span><span class="date">08/12 (三) 19:00</span></li>
                                <li><span>活動人數 : </span>12 人 ，最低成團人數 8 人</li>
                                <li><span>資格限定 : </span>喜愛旅遊的您一同來分享各國旅遊</li>
                            </ul>
                            <ul class="end">
                                <li>報名截止  08/11 12:00</li>
                            </ul>
                            <ul class="statusTag">
                                <li><a class="btn_meet"><p>已額滿</p><span>不接受報名</span></a></li>
                            </ul>
                        </div>
                    </div>
                </span>
                <a href="" class="signup">繳費報名</a>
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/UERscmQxtnI?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
                <ul class="block">
                    <li>
                        <p class="title">軍公教國營咖啡一日遊</p>
                        <p>活動類別 : 一對一聯誼</p>
                        <p>活動時間 : 2018/08/12, 19:00</p>
                        <p>主辦單位 : 中華匯思領袖協會</p>
                        <p>活動地點 : 台北市新生南路三段88號</p>
                        <p>活動人數 : 30人 (15男、15女)</p>
                    </li>
                    <li>
                        <p class="title">提醒事項</p>
                        <p>您嚐試過團體聯誼，但現場其他參與者外形、談吐非常搶眼，常獨坐在旁當配角？限定版-7分鐘Speed Dating 1對1聯誼，完全屬於您的約會，不讓別人專美於前！不管你害羞、不善表達，可獨自與對方交談的好機會，是你最讚的選擇！</p>
                        <p>√ 擁有絕對的聊天空間，展現個人特色</p>
                        <p>√ 不需擔心話題被打斷或直接與他人比較</p>
                        <p>√ 容易記得對方，進而提高成功配對機率</p>
                    </li>
                    <li>
                        <p class="title">活動特色</p>
                        <p>您嚐試過團體聯誼，但現場其他參與者外形、談吐非常搶眼，常獨坐在旁當配角？限定版-7分鐘Speed Dating 1對1聯誼，完全屬於您的約會，不讓別人專美於前！不管你害羞、不善表達，可獨自與對方交談的好機會，是你最讚的選擇！</p>
                        <p>√ 擁有絕對的聊天空間，展現個人特色</p>
                        <p>√ 不需擔心話題被打斷或直接與他人比較</p>
                        <p>√ 容易記得對方，進而提高成功配對機率</p>
                    </li>
                    <li>
                        <p class="title">活動特色</p>
                        <p>您嚐試過團體聯誼，但現場其他參與者外形、談吐非常搶眼，常獨坐在旁當配角？限定版-7分鐘Speed Dating 1對1聯誼，完全屬於您的約會，不讓別人專美於前！不管你害羞、不善表達，可獨自與對方交談的好機會，是你最讚的選擇！</p>
                        <p>√ 擁有絕對的聊天空間，展現個人特色</p>
                        <p>√ 不需擔心話題被打斷或直接與他人比較</p>
                        <p>√ 容易記得對方，進而提高成功配對機率</p>
                    </li>
                </ul>
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
