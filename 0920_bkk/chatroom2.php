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
    <link href="css/update.css" rel="stylesheet" type="text/css" />
	<?php include_once("at_include/inc_facebook.php"); ?>
</head>
<body class="chatroom">
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main">
    <div class="chatroomCount pairReport">
        <div id="chatroom" class="chatroomPad">

        	<div class="chatroomHeader">
        		<div>
					<a class="arrow back"></a>
					<a href="mypairreport.php">
	        			<img alt="" src="images/user_photo_default_s.jpg">
	        			<p>許瑋甯<i class="online"></i></p>
					</a>
        		</div>
			</div>
			<div class="checkDatePad">
				<ul class="message-pad">
                    <li class="li-date">
                        <span class="date">12/13</span><span>14:00</span>
                    </li>
                    <li class="li-ta-L">
                        <span class="ta-L">莫凡彼咖啡(台北市Att信義店)</span>
                    </li>
				</ul>
                <ul class="status-pad">
                    <li class="meet-ticket"><img data-v-586a939e="" src="images/noun_tickets_1028361_EECE83.svg" alt="" style="width: 25px;"></li>
                </ul>
                <ul class="control-pad active">
                    <li class="pdbtn"><input type="button" value="檢舉" class="btn-grey" /></li>
                    <li class="pdbtn"><input type="button" value="約會設定" class="openPop setAll" /></li>
                </ul>
			</div>
			<!--<h4>好想去海邊，聽聽海浪的聲音，讓自己放空一下</h4>-->
      		<div id='chat_pad' class="chattingPad CG_scorll height_Chat">
     			<div class="chattingScrollPad">
					<div class="chattingArea clear">					
						<ul class="system">
							<li><a><img alt="" src="images/user_photo_default_s.jpg" /></a></li>
							<li>
								<strong>交友安全注意事項</strong>
								請確實詳讀，以確保人身及財務安全。
								<b>四要</b>
								要告知親友見面行程<br>
								要維持安全距離<br>
								要時時保持警覺 <br>
								要確認對方身分 (證件勿離視線)
								<b>四不</b>
								不約在深夜或隱密場所 <br>
								不隨便告知隱私資料<br>
								不答應借貸金錢<br>
								不輕易相信網友
							</li>
							<li><p>下午4:30</p></li>
						</ul>				
						<ul class="system">
							<li><a><img alt="" src="images/user_photo_default_s.jpg" /></a></li>
							<li>
								<strong>設定約會時間與地點</strong>
								請協調你們第一次見面的時間和地點，輸入到螢幕上方的約會時間及地點欄位並且儲存，見面聊的約會設定就完成了。<br>
								<br>
								請務必準時出席約會，如有重要事由不克前往，請於24小時前，告知對方並刪除本次約會設定，多次不良紀錄者將被停權。<br>
							</li>
							<li><p>下午4:30</p></li>
						</ul>
						<ul class="you">
							<li><a><img alt="" src="images/user_photo_default_s.jpg" /></a></li>
							<li>明天放假，想去海邊走走走走走走走走走走</li>
							<li><p>下午4:30</p></li>
						</ul>
						<ul class="me">
							<li><p>已讀</p><p>下午4:30</p></li>
							<li>今天工作量超多，不過我卻超有效率，還是讓自己準時下班</li>
						</ul>
						<ul class="you">
							<li><a><img alt="" src="images/user_photo_default_s.jpg" /></a></li>
							<li>所以明天應該是有空囉！</li>
							<li><p>下午4:30</p></li>
						</ul>
						<ul class="you">
							<li><a><img alt="" src="images/user_photo_default_s.jpg" /></a></li>
							<li>所以明天應該是有空囉！</li>
							<li><p>下午4:30</p></li>
						</ul>
						<ul class="you">
							<li><a><img alt="" src="images/user_photo_default_s.jpg" /></a></li>
							<li>所以明天應該是有空囉！</li>
							<li><p>下午4:30</p></li>
						</ul>
						<ul class="you">
							<li><a><img alt="" src="images/user_photo_default_s.jpg" /></a></li>
							<li>所以明天應該是有空囉！</li>
							<li><p>下午4:30</p></li>
						</ul>
						<ul class="you">
							<li><a><img alt="" src="images/user_photo_default_s.jpg" /></a></li>
							<li>所以明天應該是有空囉！</li>
							<li><p>下午4:30</p></li>
						</ul>
						<ul class="dateshow">4月20日週一</ul>
						<ul class="you">
							<li><a><img alt="" src="images/user_photo_default_s.jpg" /></a></li>
							<li>明天放假，想去海邊走走</li>
							<li><p>下午4:30</p></li>
						</ul>
						<ul class="me">
							<li><p>已讀</p><p>下午4:30</p></li>
							<li>今天工作量超多，不過我卻超有效率，還是讓自己準時下班</li>
						</ul>
						<ul class="dateshow">今天</ul>
						<ul class="you">
							<li><a><img alt="" src="images/user_photo_default_s.jpg" /></a></li>
							<li>所以明天應該是有空囉！</li>
							<li><p>下午4:30</p></li>
						</ul>
						<ul class="me">						
							<li><p>已讀</p><p>下午4:30</p></li>
							<li>沒問題，我也好久沒去海邊了</li>
						</ul>
						<ul class="me">						
							<li><p>&nbsp;</p><p>下午4:30</p></li>
							<li>沒問題，我也好久沒去海邊了</li>
						</ul>
						<ul class="me">						
							<li><p><i class="fa fa-mouse-pointer" aria-hidden="true"></i></p><p>下午4:30</p></li>
							<li>沒問題，我也好久沒去海邊了</li>
						</ul>
						<ul class="you">
							<li><a><img alt="" src="images/user_photo_default_s.jpg" /></a></li>
							<li>他留了一則訊息<a class="btn_openPop">開啟</a></li>
							<li><p>下午4:30</p></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="chatInputPad cssTable">
				<div class="textBar"></div>
				<input type="text" class="chatInput" value="" placeholder="輸入訊息....." readonly>
				<input type="reset" class="chatReset" value="">
				<input type="submit" class="chatSubmit" value="">
				<div class="cannedText CG_scorll">
					<div class="block">
						<h5>問候類</h5>
						<div class="btn"><span>嗨嗨</span></div>
						<div class="btn"><span>很高興認識你</span></div>
					</div>
					<div class="block">
						<h5>共識類</h5>
						<div class="btn openPop setTime"><span>方便約在xx時間嗎?</span>(點擊後，可選時間)</div>
						<div class="btn openPop setTime"><span>約xx時間，我可以</span>(點擊後，可選時間)</div>
						<div class="btn openPop setLocal"><span>方便約在xx地點嗎?</span>(點擊後，可選地點)</div>
						<div class="btn openPop setLocal"><span>約xx地點，我可以</span>(點擊後，可選地點)</div>
						<div class="btn openPop setCity"><span>方便約在xx城市嗎?</span>(點擊後，可選城市)</div>
						<div class="btn openPop setCity"><span>約xx城市，我可以</span>(點擊後，可選城市)</div>
					</div>
					<div class="block">
						<h5>答覆類</h5>
						<div class="btn"><span>好的</span></div>
						<div class="btn"><span>抱歉，我不方便</span></div>
						<div class="btn"><span>怎麼約，你方便?</span></div>
						<div class="btn"><span>約在中間，好嗎?</span></div>
						<div class="btn"><span>最近比較忙</span></div>
						<div class="btn"><span>更正</span></div>
						<div class="btn"><span>謝啦^.^</span></div>
						<div class="btn"><span>到時候見!</span></div>
						<div class="btn"><span>抱歉，我得改期</span></div>
						<div class="btn"><span>我會帶一位朋友喔</span></div>
					</div>
					<div class="block">
						<h5>設定類</h5>
						<div class="btn"><span>我來設定吧!</span></div>
						<div class="btn"><span>你能幫忙設定嗎?</span></div>
						<div class="btn"><span>需要重新設定</span></div>
					</div>
				</div>
			</div>
        </div>
        <div class="chatPlusInfo">
		</div>
        <!-- POPUP STEP1 -->
        <div id="popup" class="step1 CG_scorll onebyone" style="display: block;">
            <div class="close"><span>X</span></div>
            <div class="content">
                <ul class="user">
                    <li><a href=""><img width="350" height="350" alt="" src="images/user_photo_default_l.png" /></a></li>
                    <li><a href=""><img width="350" height="350" alt="" src="images/user_photo_default_l2.jpg" /></a></li>
                </ul>
                <p>1:1聯誼是由專業引導員帶領的深度體驗活動，活動以團體方式進行，過程不輪桌，透過互動遊戲、分享討論、主題課程，兩人可以在安全、輕鬆的環境下，專注的認識彼此，學習愛情與婚姻。</p>
                <div class="share"><input type="checkbox"><i></i>分享到對話框 (報名)</div>
                <!-- Pair list -->
                <span>
	                    <div class="mypairWrapper onebyonePair">
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
                <!-- Pair list -->
                <span>
	                    <div class="mypairWrapper onebyonePair">
	                        <div class="mypairMain mypairItem">
	                            <ul class="picture">
	                                <li>
	                                    <a href="javascript:void(0)" onclick="group_setpop()">
	                                        <img width="350" height="350" alt="" src="images/user_photo_default_l.png" />
	                                    </a>
	                                </li>
	                            </ul>
	                            <div class="checkbox"><input type="checkbox"><label for=""></label></div>
	                            <ul class="basicData">
	                                <li>科技新貴 X 銀行醫護 探索愛之語</li>
	                                <li class="price">800元<span>(VIP 600元)</span></li>
	                            </ul>
	                            <ul class="info">
	                                <li class="time"><span class="city">台北市</span><span class="date">08/12 (三) 19:00</span></li>
	                                <li><span>活動人數 : </span>12 人 ，最低成團人數 8 人</li>
	                            </ul>
	                            <ul class="end">
	                                <li>報名截止  08/11 12:00</li>
	                            </ul>
                                <!-- <ul class="statusTag">
                                    <li><a class="btn_meet"><p>已額滿</p><span>不接受報名</span></a></li>
                                </ul> -->
	                        </div>
	                    </div>
	                </span>
                <!-- Pair list -->
                <span>
	                    <div class="mypairWrapper onebyonePair">
	                        <div class="mypairMain mypairItem">
	                            <ul class="picture">
	                                <li>
	                                    <a href="javascript:void(0)" onclick="group_setpop()">
	                                        <img width="350" height="350" alt="" src="images/user_photo_default_l.png" />
	                                    </a>
	                                </li>
	                            </ul>
	                            <div class="checkbox"><input type="checkbox"><label for=""></label></div>
	                            <ul class="basicData">
	                                <li>科技新貴 X 銀行醫護 探索愛之語</li>
	                                <li class="price">800元<span>(VIP 600元)</span></li>
	                            </ul>
	                            <ul class="info">
	                                <li class="time"><span class="city">台北市</span><span class="date">08/12 (三) 19:00</span></li>
	                                <li><span>活動人數 : </span>12 人 ，最低成團人數 8 人</li>
	                            </ul>
	                            <ul class="end">
	                                <li>報名截止  08/11 12:00</li>
	                            </ul>
                                <!-- <ul class="statusTag">
                                    <li><a class="btn_meet"><p>已額滿</p><span>不接受報名</span></a></li>
                                </ul> -->
	                        </div>
	                    </div>
	                </span>
                <!-- Pair list -->
                <span>
	                    <div class="mypairWrapper onebyonePair">
	                        <div class="mypairMain mypairItem">
	                            <ul class="picture">
	                                <li>
	                                    <a href="javascript:void(0)" onclick="group_setpop()">
	                                        <img width="350" height="350" alt="" src="images/user_photo_default_l.png" />
	                                    </a>
	                                </li>
	                            </ul>
	                            <div class="checkbox"><input type="checkbox"><label for=""></label></div>
	                            <ul class="basicData">
	                                <li>科技新貴 X 銀行醫護 探索愛之語</li>
	                                <li class="price">800元<span>(VIP 600元)</span></li>
	                            </ul>
	                            <ul class="info">
	                                <li class="time"><span class="city">台北市</span><span class="date">08/12 (三) 19:00</span></li>
	                                <li><span>活動人數 : </span>12 人 ，最低成團人數 8 人</li>
	                            </ul>
	                            <ul class="end">
	                                <li>報名截止  08/11 12:00</li>
	                            </ul>
                                <!-- <ul class="statusTag">
                                    <li><a class="btn_meet"><p>已額滿</p><span>不接受報名</span></a></li>
                                </ul> -->
	                        </div>
	                    </div>
	                </span>
            </div>
        </div>
        <!-- POPUP STEP1 END -->
        <!-- POPUP STEP2 -->
        <div id="popup" class="step2 CG_scorll onebyone" style="display:none;">
            <div class="close"><span>X</span></div>
            <div class="content">
                <ul class="user">
                    <li><a href=""><img width="350" height="350" alt="" src="images/user_photo_default_l.png" /></a></li>
                    <li><a href=""><img width="350" height="350" alt="" src="images/user_photo_default_l2.jpg" /></a></li>
                </ul>
                <!-- Pair list -->
                <span>
	                    <div class="mypairWrapper onebyonePair">
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
                <div class="share"><input type="checkbox"><i></i>分享到對話框 (報名)</div>
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
        <!-- POPUP STEP2 END -->
        <!-- POPUP setTime -->
        <div id="popup" class="set setTime CG_scorll" style="display:none;">
            <div class="close"><span>X</span></div>
            <div class="content">
                <div class="title">
                    <h3>方便約在xx時間嗎? (可複選)</h3>
                    <p>(請提出幾個你方便的時間，給對方挑選)</p>
                </div>
                <div class="timeTable">
                    <ul class="th">
                        <li>日</li>
                        <li>一</li>
                        <li>二</li>
                        <li>三</li>
                        <li>四</li>
                        <li>五</li>
                        <li>六</li>
                    </ul>
                    <ul class="tr">
                        <li class="disable">
                            <div class="date">12/16</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                        <li>
                            <div class="date">12/17</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                        <li>
                            <div class="date">12/18</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                        <li>
                            <div class="date">12/19</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                        <li>
                            <div class="date">12/20</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                        <li>
                            <div class="date">12/21</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                        <li>
                            <div class="date">12/22</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                        <li>
                            <div class="date">12/23</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                        <li>
                            <div class="date">12/24</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                        <li>
                            <div class="date">12/25</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                        <li>
                            <div class="date">12/26</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                        <li>
                            <div class="date">12/27</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                        <li>
                            <div class="date">12/28</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                        <li>
                            <div class="date">12/29</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                    </ul>
                    <div class="more">其他時段+</div>
                </div>
                <div class="result">
                    <p class="cap">方便約在以下的時間嗎?</p>
                    <ul>
                        <li>12/17(一), 15:00</li>
                    </ul>
                    <input type="submit" value="送出">
                    <input type="button" value="取消">
                    <p class="description">(<span class="red">許瑋甯</span>傾向約在 : <br>周間(下午茶、晚餐)、周末(午餐、下午茶)</p>
                </div>
            </div>
        </div>
        <!-- POPUP setTime END -->
        <!-- POPUP setLocal -->
        <div id="popup" class="set setLocal CG_scorll" style="display:none;">
            <div class="close"><span>X</span></div>
            <div class="content">
                <div class="title">
                    <h3>方便約在xx地點嗎? (可複選)</h3>
                    <p>(請提出幾個你方便的地點，給對方挑選)</p>
                </div>
                <div class="localTable">
                    <ul>
                        <li>
                            <div class="content">
                                <img class="pic" src="images/location1.png" alt="">
                                <div class="words">
                                    <p class="name">古典玫瑰園</p>
                                    <p class="branch">台中市大遠百店</p>
                                    <p class="add">台灣大道三段251號5樓</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="" class="map"></a>
                            <div class="content">
                                <img class="pic" src="images/location1.png" alt="">
                                <div class="words">
                                    <p class="name">古典玫瑰園</p>
                                    <p class="branch">台中市大遠百店</p>
                                    <p class="add">台灣大道三段251號5樓</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="" class="map"></a>
                            <div class="content">
                                <img class="pic" src="images/location1.png" alt="">
                                <div class="words">
                                    <p class="name">古典玫瑰園</p>
                                    <p class="branch">台中市大遠百店</p>
                                    <p class="add">台灣大道三段251號5樓</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="" class="map"></a>
                            <div class="content">
                                <img class="pic" src="images/location1.png" alt="">
                                <div class="words">
                                    <p class="name">古典玫瑰園</p>
                                    <p class="branch">台中市大遠百店</p>
                                    <p class="add">台灣大道三段251號5樓</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="" class="map"></a>
                            <div class="content">
                                <img class="pic" src="images/location1.png" alt="">
                                <div class="words">
                                    <p class="name">古典玫瑰園</p>
                                    <p class="branch">台中市大遠百店</p>
                                    <p class="add">台灣大道三段251號5樓</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="" class="map"></a>
                            <div class="content">
                                <img class="pic" src="images/location1.png" alt="">
                                <div class="words">
                                    <p class="name">古典玫瑰園</p>
                                    <p class="branch">台中市大遠百店</p>
                                    <p class="add">台灣大道三段251號5樓</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <p>(人均消費: 餐點 $200~$400、飲料 $100~$200)</p>
                    <div class="more">其他城市的餐廳 +</div>
                </div>
                <div class="result">
                    <p class="cap">方便約在以下的地點嗎?</p>
                    <ul>
                        <li>古典玫瑰園(台中市大遠百店)<span>台灣大道三段251號5樓</span></li>
                    </ul>
                    <input type="submit" value="送出">
                    <input type="button" value="取消">
                    <p class="description">(<span class="red">許瑋甯</span>住在: 台北市；<span class="blue">海苔熊</span>住在: 台中市)</p>
                </div>
            </div>
        </div>
        <!-- POPUP setLocal END -->
        <!-- POPUP setCity -->
        <div id="popup" class="set setCity CG_scorll" style="display:none;">
            <div class="close"><span>X</span></div>
            <div class="content">
                <div class="title">
                    <h3>方便約在xx城市嗎? (單選)</h3>
                    <p>(詢問對方，能否約在某城市)</p>
                </div>
                <div class="cityTable">
                    <div class="row">
                        <input type="button" value="台北市">
                        <input type="button" value="桃園市(桃園)">
                        <input type="button" value="桃園市(中壢)">
                    </div>
                    <div class="row">
                        <input type="button" value="新竹市">
                        <input type="button" value="苗栗市">
                        <input type="button" value="台中市">
                    </div>
                    <div class="row">
                        <input type="button" value="嘉義市">
                        <input type="button" value="台南市">
                        <input type="button" value="高雄市">
                    </div>
                    <div class="row">
                        <input type="button" value="宜蘭市">
                        <input type="button" value="花蓮市">
                        <input type="button" value="台東市">
                    </div>
                </div>
                <div class="result">
                    <p class="cap">方便約在<span></span>嗎?</p>
                    <input type="submit" value="送出">
                    <input type="button" value="取消">
                    <p class="description">(<span class="red">許瑋甯</span>住在: 台北市；<span class="blue">海苔熊</span>住在: 台中市)</p>
                </div>
            </div>
        </div>
        <!-- POPUP setCity END -->
        <!-- POPUP setAll -->
        <div id="popup" class="set setAll CG_scorll" style="display:none;">
            <div class="close"><span>X</span></div>
            <div class="content">
                <div class="title">
                    <h3>請設定時段</h3>
                </div>
                <div class="timeTable">
                    <ul class="th">
                        <li>日</li>
                        <li>一</li>
                        <li>二</li>
                        <li>三</li>
                        <li>四</li>
                        <li>五</li>
                        <li>六</li>
                    </ul>
                    <ul class="tr">
                        <li class="disable">
                            <div class="date">12/16</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                        <li>
                            <div class="date">12/17</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                        <li>
                            <div class="date">12/18</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                        <li>
                            <div class="date">12/19</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                        <li>
                            <div class="date">12/20</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                        <li>
                            <div class="date">12/21</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                        <li>
                            <div class="date">12/22</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                        <li>
                            <div class="date">12/23</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                        <li>
                            <div class="date">12/24</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                        <li>
                            <div class="date">12/25</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                        <li>
                            <div class="date">12/26</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                        <li>
                            <div class="date">12/27</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                        <li>
                            <div class="date">12/28</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                        <li>
                            <div class="date">12/29</div>
                            <div class="td">12:00</div>
                            <div class="td">15:00</div>
                            <div class="td">18:00</div>
                        </li>
                    </ul>
                    <div class="more">其他時段+</div>
                </div>
                <div class="title">
                    <h3>請設定地點</h3>
                </div>
                <div class="localTable">
                    <ul>
                        <li>
                            <a href="" class="map"></a>
                            <div class="content">
                                <img class="pic" src="images/location1.png" alt="">
                                <div class="words">
                                    <p class="name">古典玫瑰園</p>
                                    <p class="branch">台中市大遠百店</p>
                                    <p class="add">台灣大道三段251號5樓</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="" class="map"></a>
                            <div class="content">
                                <img class="pic" src="images/location1.png" alt="">
                                <div class="words">
                                    <p class="name">古典玫瑰園</p>
                                    <p class="branch">台中市大遠百店</p>
                                    <p class="add">台灣大道三段251號5樓</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="" class="map"></a>
                            <div class="content">
                                <img class="pic" src="images/location1.png" alt="">
                                <div class="words">
                                    <p class="name">古典玫瑰園</p>
                                    <p class="branch">台中市大遠百店</p>
                                    <p class="add">台灣大道三段251號5樓</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="" class="map"></a>
                            <div class="content">
                                <img class="pic" src="images/location1.png" alt="">
                                <div class="words">
                                    <p class="name">古典玫瑰園</p>
                                    <p class="branch">台中市大遠百店</p>
                                    <p class="add">台灣大道三段251號5樓</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="" class="map"></a>
                            <div class="content">
                                <img class="pic" src="images/location1.png" alt="">
                                <div class="words">
                                    <p class="name">古典玫瑰園</p>
                                    <p class="branch">台中市大遠百店</p>
                                    <p class="add">台灣大道三段251號5樓</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="" class="map"></a>
                            <div class="content">
                                <img class="pic" src="images/location1.png" alt="">
                                <div class="words">
                                    <p class="name">古典玫瑰園</p>
                                    <p class="branch">台中市大遠百店</p>
                                    <p class="add">台灣大道三段251號5樓</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="more">其他城市的餐廳 +</div>
                </div>
                <div class="title">
                    <h3>請設定人數</h3>
                </div>
                <div class="personTable">
                    <input type="button" value="2人，單獨聊">
                    <input type="button" value="4人，各帶一位朋友">
                </div>
                <div class="result">
                    <ul>
                        <li>11/4(三), 12:00</li>
                        <li>古典玫瑰園 (台北市南京店)</li>
                        <li>2人，單獨聊</li>
                    </ul>
                    <input type="submit" value="送出">
                    <input type="button" value="取消">
                </div>
            </div>
        </div>
        <!-- POPUP setAll END -->


    </div><!-- chatroomCount END -->
   
</div><!-- main END -->
<div id="popContainer" class="height_G">
	<!-- 見面聊評分 -->
	<div class="popContent">
	</div>
</div>
<!-- jQuery -->    
    <script type="text/javascript" src="js/jquery.min-2.2.4.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.touchwipe.min.js"></script>    
    <script type="text/javascript" src="js/at_cage.js"></script>
    <script type="text/javascript" src="js/update.js"></script>
    <script>
		$(window).load(function() {
			var $scroll_H = $('.chattingArea').height();
			$('.chattingScrollPad').css({'height':$scroll_H});
			
		})
		$(document).ready(function() {
			$('.subHeader').find('li').eq(2).addClass('active');
			
			$('.dateTime').click(function(){
				$(this).attr('type','datetime-local');
				$(this).removeAttr('placeholder');
			});
//			$('.dateTime').blur(function(){
//				$(this).attr('type','text');
//				$(this).attr('placeholder','輸入約會時間');
//			});
			
			// DEMO Change date pad
			$('.demoClick').click(function(){
				var $this = $(this),
					$ul = $this.parents('ul');
				if($ul.hasClass('active')){
					$ul.removeClass('active');
					$ul.siblings().addClass('active');
				}
			});
			
		});
//        var adjustChatroomHeight = function(){
//            var Gw = $(window), Gww = Gw.width(), Gwh = Gw.height();
//            if (Gww > 980) {
//                var $chatHeight = Gwh -
//                    $('#header').outerHeight() -
//                    $('.chatroomHeader').outerHeight() -
//                    $('.chatInputPad').outerHeight() - 2; // minus 2 is workaround
//                $('.height_Chat').css({'height': $chatHeight});
//            } else {
//                var $chatHeight = Gwh -
//                    $('#header').outerHeight() -
//                    $('.chatroomHeader').outerHeight() -
//                    $('.chatInputPad').outerHeight() - 2; // minus 2 is workaround
//                $('.height_Chat').css({'height': $chatHeight});
//            }
//        };
//
//        setTimeout( adjustChatroomHeight, 0);
//        window.addEventListener('resize', adjustChatroomHeight);
	</script>
    <script>
        $('#popup .close').click(function(){
            $(this).parent().fadeOut(300);
        })
        function group_setpop() {
            $('#popup.step2').fadeIn(300);
        }
    </script>
</body>
</html>
