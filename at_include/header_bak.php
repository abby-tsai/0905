<div id="header">
	<div class="headerConts clear unselectable">
    	<ul class="headerBasic">
        	<li class="logo"><a href="index.php"></a></li>
            <li class="subSlogan">見面聊，最真實</li>
            <!-- 以下已登入 -->
			<li class="btn_on userName"><p>USERNAME</p></li>
            <li class="btn_on menu_pres"><a href="mission_try.php">免費試用</a></li>
            <!-- 以下未登入 -->
            <li class="btn off_psyc"><a href="psycho_testlist.php">心理測驗</a></li>
            <li class="btn off_read"><a href="articlelist.php">閱讀愛情</a></li>
            <li class="btn fbLogin_btn"><a onClick="FB.login()"><i class="fa fa-facebook"></i>登入</a></li>
            <li class="btn fbLogout_btn"><a><i class="fa fa-facebook"></i>登出</a></li>
            <li class="btn_on">
				<i id="icon_nav" class="icon_nav"></i>
            	<div class="nav">
            		<ol>
						<li class=""><a href="music_foru.php">點歌紀錄</a></li>
						<li class=""><a href="present_foru.php">禮物紀錄</a></li>
                        <li class=""><a href="meetchat.php">見面紀錄</a></li>
        				<li class=""><a href="member.php">我的檔案</a></li>
						<li class=""><a href="setting_pair.php">我的設定</a></li>      
                        <li class=""><a class="">登出</a></li>        			
					</ol>
				</div>
            </li>
            <!--<li class="btn_on menu_logout"><a href="">登出</a></li>-->
    	</ul>
        <ul class="navMenu height_NAV clear CGc"><!-- 手機 Menu -->
			<li><a href="member.php"><i class="icon_mn_myfile"></i>我的檔案</a></li>
			<li><a href="deposit.php"><i class="icon_mn_deposit"></i>會員加值</a></li>
			<li><a href="setting_pair.php"><i class="icon_mn_setting"></i>我的設定</a></li>
			<!--
			<li><a href="music_foru.php"><i class="icon_mn_music"></i>點歌紀錄</a></li>
			<li><a href="present_foru.php"><i class="icon_mn_coffee"></i>禮物紀錄</a></li>
			<li><a href="meetchat.php"><i class="icon_mn_meetchat"></i>見面紀錄</a></li>
			-->
			<li><a href="mission_try.php"><i class="icon_mn_present"></i>免費試用</a></li>
			<li><a href="static_qa.php"><i class="icon_mn_queation"></i>常見問題</a></li>
			<li><a href="static_skill.php"><i class="icon_mn_meetchat"></i>聊天技巧</a></li>
			<li><a><i class="icon_logout"></i>登出</a></li>
			<!--
			<li class="footOnHeader">
				<div class="footerCont">
					<ul class="footerMore CGt">
						<li><a href="about.php"><i class="icon_ft_about"></i>關於我們</a></li>
						<li><a href="contact.php"><i class="icon_ft_contact"></i>聯絡我們</a></li>
						<li><a href="uselaw.php"><i class="icon_ft_uselaw"></i>使用條款</a></li>
						<li><a href="private.php"><i class="icon_ft_private"></i>隱私權政策</a></li>        
					</ul>
					<ul><li><p>版權所有 © 2016 闌珊處網路股份有限公司 <span>台北市中正區新生南路一段50號12樓B室</span></p></li></ul>
				</div>				
			</li>
		   -->
        </ul>
		<ul class="navBar CGt"><li><i></i><i></i><i></i></li></ul>
	</div>
    <div class="subHeader unselectable">
    	<ul class="on">
        	<li class="menu_pair"><a href="mypairlist.php"><p>我的配對</p><i>19</i></a></li>
        	<li class="menu_test"><a href="testing_main_1report.php"><p>我的測驗</p></a></li>
        	<li id="menu_chat" class="menu_chat">
        		<a><i>1</i></a>
        		<div id="chatlistPad" class="chatlistPad headerListPop CG_scorll height_R2">
					<?php include_once("at_include/data_chatlist.php"); ?>
				</div>
        	</li>
        	<li class="menu_read"><a href="articlelist.php"><p>閱讀愛情</p><i>11</i></a></li>
        	<li class="menu_paid"><a href="deposit.php"><p>會員加值</p><i>97</i></a></li>
        	<li id="menu_mesg" class="menu_mesg">
        		<a><i>99</i></a>
				<div id="noticelistPad" class="noticelistPad headerListPop CG_scorll height_R2">
					<?php include_once("at_include/data_noticelist.php"); ?>
				</div>
        	</li>
        </ul>
    </div>
    <div class="popBodyHeader"></div>
</div>