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
    <div class="intro">
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
            <div class="hideSlogan">找認真關係，以見面為前提</div>
            <ul class="words">
                <li class="title">心理學測驗<span> (免費)</span><br />找出適合你/妳的另一半</li>
                <li class="description">(排除95%不適人選，72H約到想見的人)</li>
                <li><a class="pairBtn fbBtn" href="#">開始測驗 <span>(facebook註冊)</span></a></li>
                <li class="divider">或</li>
                <li class="inputBox">
                    <input type="email" placeholder="請輸入電子郵件">
                    <input type="password" placeholder="請輸入密碼 (8-12英數字)">
                </li>
                <li><a class="pairBtn emailBtn" href="#">開始測驗 <span>(Email註冊)</span></a></li>
            </ul>
        </div>
    </div>
    <div class="content-wrap">
        <div class="sec1">
            <h4>眾多會員來自以下企業</h4>
            <div class="desktop">
                <div class="colum3">
                    <p>Google</p>
                    <p>Intel</p>
                    <p>Microsoft</p>
                    <p>Qualcomm</p>
                    <p>IBM</p>
                    <p>Samsung</p>
                    <p>Line</p>
                    <p>Yahoo</p>
                    <p>AMD</p>
                    <p>HP</p>
                    <p>Dell</p>
                    <p>Philips</p>
                    <p>西門子</p>
                    <p>安捷倫</p>
                    <p>德州儀器</p>
                    <p>國家儀器</p>
                    <p>恩智浦半導體</p>
                    <p>嬌生</p>
                    <p>克麗絲汀迪奧</p>
                    <p>Sony Music</p>
                </div>
                <div class="colum3">
                    <p>美林證券</p>
                    <p>瑞士銀行</p>
                    <p>德意志銀行</p>
                    <p>美國運通</p>
                    <p>花旗銀行</p>
                    <p>巴黎銀行</p>
                    <p>匯豐銀行</p>
                    <p>渣打銀行</p>
                    <p>星展銀行</p>
                    <p>貝恩策略顧問</p>
                    <p>寶僑</p>
                    <p>聯合利華</p>
                    <p>拜耳</p>
                    <p>杜邦</p>
                    <p>香奈兒</p>
                    <p>LVMH集團</p>
                    <p>Adidas</p>
                    <p>Nike</p>
                    <p>IKEA</p>
                    <p>百事可樂</p>
                </div>
                <div class="colum3">
                    <p>總統府</p>
                    <p>外交部</p>
                    <p>最高法院</p>
                    <p>中央銀行</p>
                    <p>中央研究院</p>
                    <p>台積電</p>
                    <p>聯發科</p>
                    <p>大立光</p>
                    <p>鴻海</p>
                    <p>廣達</p>
                    <p>華碩</p>
                    <p>友達</p>
                    <p>和碩</p>
                    <p>仁寶</p>
                    <p>宏基</p>
                    <p>趨勢科技</p>
                    <p>台達電</p>
                    <p>群創</p>
                    <p>長榮航空</p>
                    <p>中華航空</p>
                </div>
            </div>
            <div class="mobile">
                <div class="colum2">
                    <p>Google</p>
                    <p>Intel</p>
                    <p>Microsoft</p>
                    <p>Qualcomm</p>
                    <p>IBM</p>
                    <p>Samsung</p>
                    <p>Line</p>
                    <p>Yahoo</p>
                    <p>AMD</p>
                    <p>HP</p>
                    <p>Dell</p>
                    <p>Philips</p>
                    <p>西門子</p>
                    <p>安捷倫</p>
                    <p>德州儀器</p>
                    <p>國家儀器</p>
                    <p>恩智浦半導體</p>
                    <p>台積電</p>
                    <p>聯發科</p>
                    <p>大立光</p>
                    <p>鴻海</p>
                    <p>廣達</p>
                    <p>華碩</p>
                    <p>友達</p>
                    <p>和碩</p>
                    <p>仁寶</p>
                    <p>宏基</p>
                    <p>趨勢科技</p>
                    <p>台達電</p>
                    <p>群創</p>
                </div>
                <div class="colum2">
                    <p>總統府</p>
                    <p>外交部</p>
                    <p>最高法院</p>
                    <p>中央銀行</p>
                    <p>中央研究院</p>
                    <p>美林證券</p>
                    <p>瑞士銀行</p>
                    <p>德意志銀行</p>
                    <p>美國運通</p>
                    <p>花旗銀行</p>
                    <p>巴黎銀行</p>
                    <p>匯豐銀行</p>
                    <p>渣打銀行</p>
                    <p>星展銀行</p>
                    <p>貝恩策略顧問</p>
                    <p>寶僑</p>
                    <p>聯合利華</p>
                    <p>拜耳</p>
                    <p>杜邦</p>
                    <p>香奈兒</p>
                    <p>LVMH集團</p>
                    <p>Adidas</p>
                    <p>Nike</p>
                    <p>IKEA</p>
                    <p>百事可樂</p>
                    <p>嬌生</p>
                    <p>克麗絲汀迪奧</p>
                    <p>Sony Music</p>
                    <p>長榮航空</p>
                    <p>中華航空</p>
                </div>
            </div>
        </div>
        <div class="sec2">
            <div class="title">
                <h4>政大、輔大心理系教授推薦</h4>
                <p>找到幸福，有更科學的方法</p>
            </div>
            <div class="teacher">
                <div class="box">
                    <div class="pic"><img src="images/index_sec2_pic1.jpg" alt=""></div>
                    <div class="words">
                        <h5>修慧蘭教授  推薦</h5>
                        <p>政大心理系副教授<br>婚姻心理學家</p>
                    </div>
                </div>
                <div class="box">
                    <div class="pic"><img src="images/index_sec2_pic2.jpg" alt=""></div>
                    <div class="words">
                        <h5>海苔熊  推薦</h5>
                        <p>心理學暢銷書作家<br>愛情心理學家</p>
                    </div>
                </div>
                <div class="box">
                    <div class="pic"><img src="images/index_sec2_pic3.jpg" alt=""></div>
                    <div class="words">
                        <h5>王鵬智教授  推薦</h5>
                        <p>輔大臨床心理系副教授<br>臨床心理學家</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="case72">
            <div class="title">
                <h4>「72H約到」彼此想見的人</h4>
                <p>輕鬆開始屬於你的約會</p>
            </div>
            <div class="person">
                <div class="card">
                    <div class="avatar"><img src="images/index_sec5_avatar1.png" alt=""></div>
                    <div class="word">
                        <h5>Cindy<span class="comma">，</span><span class="description">23歲/台灣藝術大學/行銷企劃</span></h5>
                        <p>很喜歡這個平台，避免掉以往網路上熱絡，見了面完全不知道要說什麼的窘境，儘管直接見面也有可能聊不來，但至少沒有浪費很多時間在前置作業（網路聊天）</p>
                    </div>
                </div>
                <div class="card">
                    <div class="avatar"><img src="images/index_sec5_avatar4.png" alt=""></div>
                    <div class="word">
                        <h5>Ben<span class="comma">，</span><span class="description">26歲/台灣大學/專案管理師</span></h5>
                        <p>已與配對者交換聯絡方式，也有實際完成見面約會。彼此的價值觀、想法，透過網站的心理測驗一目瞭然，是非常方便快速（但不速食）用心掌握使用者（族群）需求的交友網站</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="btn" href="#"><p>心理學測驗 <span>(免費配對)</span></p></a>
        <div class="sec3">
            <div class="box b1">
                <h5>排除95%不適人選</h5>
                <p>心理學演算法，幫你找到對的人</p>
                <img class="phone" src="images/index_sec3_phone1.png" alt="">
            </div>
            <div class="box b2">
                <h5>雙向契合度分析</h5>
                <p>14個相處角度，深度了解彼此</p>
                <img class="phone" src="images/index_sec3_phone2.png" alt="">
            </div>
            <div class="box b3">
                <h5>只針對認真關係</h5>
                <p>同意真實見面，才能成為朋友</p>
                <img class="phone" src="images/index_sec3_phone3.png" alt="">
            </div>
            <div class="box b4">
                <h5>7成的見面好感度</h5>
                <p>見面後，69%對另一方有好感</p>
                <img class="phone" src="images/index_sec3_phone4.png" alt="">
            </div>
        </div>
        <div class="sec4">
            <h5>真實、安全、無憂</h5>
            <p>多重保障，約會很安心</p>
            <img class="pic" src="images/index_sec4_pic.png" alt="">
        </div>
        <a class="btn" href="#"><p>心理學測驗 <span>(免費配對)</span></p></a>
        <div class="sec5">
            <h4>用戶的體驗</h4>
            <div class="box">
                <img src="images/index_sec5_avatar1.png" alt="" class="pic">
                <div class="words">
                    <div class="title">
                        <img src="images/index_sec5_avatar1.png" alt="">
                        <h5>女/23歲/台灣藝術大學/行銷企劃</h5>
                    </div>
                    <p>有完善的心理測驗，我認為是meet the one 最大的特點，不再需要瀏覽幾乎千篇一律的自我介紹，可以透過有根據的測驗快速了解對方；另外直接約見面聊，也是我非常喜歡的交友方式，畢竟跟一個人合不合適、能不能聊得愉快，最主要還是要面對面相處過才能知道。</p>
                    <br>
                    <p>總之很喜歡這個平台，避免掉以往網路上熱絡，見了面完全不知道要說什麼的窘境，儘管直接見面也有可能聊不來，但至少沒有浪費很多時間在前置作業（網路聊天），而且心理測驗真的比自己填寫的自我介紹更有參考價值（畢竟自己的測驗結果好準），推薦給想認真交朋友、找伴侶的人~</p>
                </div>
            </div>
            <div class="box">
                <img src="images/index_sec5_avatar2.png" alt="" class="pic">
                <div class="words">
                    <div class="title">
                        <img src="images/index_sec5_avatar2.png" alt="">
                        <h5>男/27歲/交通大學/軟體工程師</h5>
                    </div>
                    <p>使用至今，已經和許多友善的朋友見面互動，也推薦想要開拓些生活圈的人試試看: 1. 這裏每天會推薦數個異性朋友，你可以由你與對方對某些事物的看法，稍微理解對方的個性與觀點。2. 如果沒有在期限內約見面，會有朋友消失的小小壓力，也能讓雙方更積極地約定見面並深入了解彼此，而不是聊著聊著就無疾而終。</p>
                </div>
            </div>
            <div class="box">
                <img src="images/index_sec5_avatar3.png" alt="" class="pic">
                <div class="words">
                    <div class="title">
                        <img src="images/index_sec5_avatar3.png" alt="">
                        <h5>女/33歲/中正大學/中學教師</h5>
                    </div>
                    <p>能夠運用心理測驗的方式，進行配對交友是很有趣的嘗試。雖然在網路世界中，第一眼印象還是非常重要，但meettheone提供了另一種關於對方的訊息，也會讓人重新思考：你究竟想要怎樣的另一半？過怎樣的生活？</p>
                </div>
            </div>
            <div class="box">
                <img src="images/index_sec5_avatar4.png" alt="" class="pic">
                <div class="words">
                    <div class="title">
                        <img src="images/index_sec5_avatar4.png" alt="">
                        <h5>男/26歲/台灣大學/專案管理師</h5>
                    </div>
                    <p>很令人安心的網站，客服回覆很細心且快速，目前已與所有配對者交換聯絡方式，也有實際完成見面約會。不論是上班族找對象或純粹交朋友拓展人脈，都很適合這個網站。彼此的價值觀、想法，透過網站的心理測驗一目瞭然，是非常方便快速（但不速食）用心掌握使用者（族群）需求的交友網站。</p>
                </div>
            </div>
            <div class="slide">
                <div class="box">
                    <img src="images/index_sec5_avatar5.png" alt="" class="pic">
                    <div class="words">
                        <div class="title">
                            <img src="images/index_sec5_avatar5.png" alt="">
                            <h5>女/23歲/政治大學/研究助理</h5>
                        </div>
                        <p>我是交友軟體重度使用者，在meettheone上線大概一個月，使用上很舒服，幾件事情讓我覺得這裡很值得推薦：</p>
                        <br>
                        <p>1. 首先，如果有認真交友的需求，上來這裡的人有程度上的志同道合，加上根據問卷結果進行配對，就自身的經驗而言，相較於其他軟體的隨機配對，的確更容易碰到和自己價值觀相似的人。</p>
                        <br>
                        <p>2. 我不太怕生，時常和網友相約吃飯，還是推崇meettheone鼓勵大家儘快見面，這真的能非常非常有效地降低錯誤期待。</p>
                    </div>
                </div>
                <div class="box">
                    <img src="images/index_sec5_avatar6.png" alt="" class="pic">
                    <div class="words">
                        <div class="title">
                            <img src="images/index_sec5_avatar6.png" alt="">
                            <h5>男/33歲/中央大學/軟體工程師</h5>
                        </div>
                        <p>藉由心理學的測驗，來了解自己跟可能的配對對象，是非常好的原創想法，如果是以前，必須等交往後，才能慢慢理解對方的思考習慣與價值觀，節省了很多時間成本。目前對開發團隊的建議與反饋，也能在一天內得到解答跟回覆，對使用者是友善的。雖然仍有配對數目少跟使用者不多的缺點，但能確定假帳號尚未入侵，節省了很多自己過濾的時間心力。</p>
                    </div>
                </div>
                <div class="box">
                    <img src="images/index_sec5_avatar7.png" alt="" class="pic">
                    <div class="words">
                        <div class="title">
                            <img src="images/index_sec5_avatar7.png" alt="">
                            <h5>女/31歲/淡江大學/行銷企劃</h5>
                        </div>
                        <p>對於Meet the One 使用2-3週的心得是：1.透過數據分析可以快速知道，對方的生活習慣跟自己是不是相似，省去像一般交友軟體一樣，需要一一詢問了解，不過雖有數據分析，細節還是需要與對方談話方可得知，這也是平台鼓勵雙方直接見面聊的原因。2.基本上配對的準確率都很高,都會是與自己有類似想法及觀念的人3. 沒有App提醒,常常需要收信查看訊息,希望能夠開發app</p>
                    </div>
                </div>
                <div class="box">
                    <img src="images/index_sec5_avatar8.png" alt="" class="pic">
                    <div class="words">
                        <div class="title">
                            <img src="images/index_sec5_avatar8.png" alt="">
                            <h5>男/28歲/世新大學/行銷企劃</h5>
                        </div>
                        <p>見面約會更能展現個人魅力，同時透過文字之外的訊息交流，包含肢體語言、語氣等，有更多資訊判斷兩人合適程度，大推~ 交友軟體，並不需侷限在尋找愛情的目的使用，用認識朋友的態度與人相處，能讓你更加怡然自得</p>
                    </div>
                </div>
                <div class="box">
                    <img src="images/index_sec5_avatar2.png" alt="" class="pic">
                    <div class="words">
                        <div class="title">
                            <img src="images/index_sec5_avatar2.png" alt="">
                            <h5>男/25歲/高雄應用科大/網路工程師</h5>
                        </div>
                        <p>meettheone 有詳細的心理測驗，並分析其個性，我覺得這有別於其他的交友平台，是很特別的，並且主打面對面聊，讓雙方更能快速地認識對方，這就是我推薦meettheone的原因。平台還有些地方可以改善，例如自我介紹的部分，很多人完全沒填，這讓人覺得沒有誠意。</p>
                    </div>
                </div>
                <div class="box">
                    <img src="images/index_sec5_avatar10.png" alt="" class="pic">
                    <div class="words">
                        <div class="title">
                            <img src="images/index_sec5_avatar10.png" alt="">
                            <h5>女/30歲/政治大學/人力資源</h5>
                        </div>
                        <p>(1)透過精準的心理測驗題可以找到與自己興趣較相近的人，相較於其他交友網站，更能在茫茫人海中找尋適合的另一半。</p>
                        <p>(2)網站的設計很貼心，每天都發信通知契合的指數，創造新鮮感。</p>
                        <p>(3)在約會的設定，基本資料及人身安全保護都做得很完善，確定見面後，才跟對ˋ方互相交換真實姓名，在設定確認見面後，網站訊息關於詐騙也都盡善盡美的提醒，讓人可以安心的赴約。</p>
                    </div>
                </div>
                <div class="box">
                    <img src="images/index_sec5_avatar4.png" alt="" class="pic">
                    <div class="words">
                        <div class="title">
                            <img src="images/index_sec5_avatar4.png" alt="">
                            <h5>男/29歲/輔仁大學/化學工程師</h5>
                        </div>
                        <p>完整的分析報告讓我更加了解自己，也有較高的機會找到合適的對象，避免掉一些沒有頭緒、沒意義的亂槍打鳥。48H內要敲定約會時間地點的限制，雖然有點趕 (有可能因為忙碌而錯過有意思的對象)，但在些許的壓力下，能夠促使雙方去做篩選，並更有動力去認識對方，有助於彼此的互動！這是很不錯的機制，是個很讚的平台！</p>
                    </div>
                </div>
                <div class="box">
                    <img src="images/index_sec5_avatar6.png" alt="" class="pic">
                    <div class="words">
                        <div class="title">
                            <img src="images/index_sec5_avatar6.png" alt="">
                            <h5>男/31歲/交通大學/博士生</h5>
                        </div>
                        <p>在網路上瀏覽海苔熊討論關於兩性關係文章偶然看到這個平台的介紹，使用一開始要填寫類似性格檢測，檢測結果除了幫助我更了解自己，還會每天收到依據檢測結果篩選出的較合適名單。勇敢地提出邀約，我也見到了相處愉快的約會對象!</p>
                    </div>
                </div>
                <div class="box">
                    <img src="images/index_sec5_avatar8.png" alt="" class="pic">
                    <div class="words">
                        <div class="title">
                            <img src="images/index_sec5_avatar8.png" alt="">
                            <h5>男/30歲/台灣師範大學/軟體工程師</h5>
                        </div>
                        <p>鼓勵用戶直接見面聊，心理學分析可以知道更多雙方的資訊，見面時能夠更有話題，以及預先知道這個人，是不是自己有興趣往下認識的對象。</p>
                    </div>
                </div>
                <div class="box">
                    <img src="images/index_sec5_avatar14.png" alt="" class="pic">
                    <div class="words">
                        <div class="title">
                            <img src="images/index_sec5_avatar14.png" alt="">
                            <h5>女/28歲/台灣師範大學/中學教師</h5>
                        </div>
                        <p>覺得最好的就是連學歷都會篩選，很喜歡這功能。</p>
                    </div>
                </div>
                <div class="box">
                    <img src="images/index_sec5_avatar2.png" alt="" class="pic">
                    <div class="words">
                        <div class="title">
                            <img src="images/index_sec5_avatar2.png" alt="">
                            <h5>男/33歲/台灣大學/通訊工程師</h5>
                        </div>
                        <p>有別於傳統交友依據用戶喜好來進行配對，meettheone使用心理學分析彼此的契合指數，並且加上「關於我」讓用戶可以發揮，幫助在見面前就可以描繪出對方的輪廓，值得推薦。</p>
                    </div>
                </div>
                <div class="box">
                    <img src="images/index_sec5_avatar4.png" alt="" class="pic">
                    <div class="words">
                        <div class="title">
                            <img src="images/index_sec5_avatar4.png" alt="">
                            <h5>男/37歲/紐約州立大學/專案主管</h5>
                        </div>
                        <p>以心理測驗為基礎，結合系統的配對，常常讓我驚訝，可以認識平常都遇不到的理想對象。最棒的是在見面之前，對於約會對象在各方面有一定的了解，直接見面聊的模式，很有效率的讓對方認識我，我也能很快的認識對方。</p>
                    </div>
                </div>
                <div class="box">
                    <img src="images/index_sec5_avatar17.png" alt="" class="pic">
                    <div class="words">
                        <div class="title">
                            <img src="images/index_sec5_avatar17.png" alt="">
                            <h5>女/32歲/高雄師範大學/公務員</h5>
                        </div>
                        <p>可以認識各地、各領域的人，可能是平常不可能遇到的，藉此拓寬自己的生活圈，透過雙向的契合度報告，可以了解對方的興趣、習慣及價值觀等資訊，事先評估彼此是否適合，無論如何，都至少可以認識新朋友！！</p>
                    </div>
                </div>
                <div class="box">
                    <img src="images/index_sec5_avatar6.png" alt="" class="pic">
                    <div class="words">
                        <div class="title">
                            <img src="images/index_sec5_avatar6.png" alt="">
                            <h5>男/29歲/東吳大學/軌道駕駛員</h5>
                        </div>
                        <p>真的很特別，第一次看到使用心理學分析的交友網站，註冊的時候，一項一項帶你完成各種測驗，除了基本的配對測驗之外，還有旅伴測驗，愛之語測驗，除了讓別人快速了解你的性格之外，最重要的是幫助人們了解，真實的自己，到底，我是個什麼個性的人？透過配對個性相合的人，讓約見面的對象可以減少許多個性上的磨合期，蠻推薦這點的，在這個講求速度的年代，替大家創造了更多機會。不知到什麼時候開放海外朋友一起參與呢？</p>
                    </div>
                </div>
                <div class="box">
                    <img src="images/index_sec5_avatar8.png" alt="" class="pic">
                    <div class="words">
                        <div class="title">
                            <img src="images/index_sec5_avatar8.png" alt="">
                            <h5>男/28歲/政治大學/軟體工程師</h5>
                        </div>
                        <p>可以自動推薦比較談得來的人，避免見面時的尷尬。</p>
                    </div>
                </div>
            </div>
            <div class="slideBtn">
                <p class="on">更多用戶體驗 +</p>
                <p class="off">收回用戶體驗 -</p>
            </div>
        </div>
        <div class="sec6">
            <div class="words">
                <h4>關於 meet the one</h4>
                <p>心理學見面交友，集合一群心理學家，用三年整理全世界成熟、有效的心理學研究，找到幸福婚姻的關鍵因子，演算法可以過濾95%的不適人選，讓婚姻、愛情少走很多冤枉路，提供實體一對一的約會、聯誼、相親、婚友服務。。</p>
                <br>
                <p>服務所使用的心理測驗，都是依據心理學理論開發的有效量表，其中《愛之語》為紐約時報暢銷書排行榜冠軍書，全銷量超過1000萬冊；《愛情風格測驗》由高雄師大諮商心理所卓紋君教授研發。</p>
                <br>
                <p>以見面為前提的互動模式，參考美國西北大學、加州大學(UCLA)、羅徹斯特大學心理學家的共同研究：更早從線上聊天走向實體見面，可幫助雙方降低錯誤期待，並提早判斷是否值得繼續發展。</p>
                <br>
                <p>青春有限，幸福無價，讓meet the one透過心理學，陪你更認識愛情，也更靠近彼此。</p>
            </div>
        </div>
        <a class="btn" href="#"><p>心理學測驗 <span>(免費配對)</span></p></a>
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

            //set window height
            let vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);

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
                // $(".content-wrap .case72 .person").slick("unslick");
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

            //intro toggle email Btn
            $('.pairBtn.emailBtn').on('click', function() {
                if($('.intro .words .inputBox').hasClass('active') != true) {
                    $('.intro .words .inputBox').addClass('active');
                };
            });

            //modal
            $('.modal .close').on('click', function() {
                $('.modal.active').removeClass('active');
            });

            //header mobile toggle login
            $('#header .toggle').on('click', function() {
                $('#header .toggle, #loginBox').toggleClass('active');
            });
	</script>
</body>
</html>
