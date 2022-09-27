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
    
    <style>
		
	</style>
</head>
<body class="">
<div id="fb-root"></div>
<?php include_once("at_include/header.php"); ?>
<div id="main" class="">
	<!-- APP 提示 -->
	<div class="appAlert cssTable">
		<ul>
			<li><i class="closeAlert"></i></li>
			<li class=""><p>取得更好的使用體驗</p><p><b>下載 meettheone APP</b></p></li>
			<li><a href="" target="_blank">安裝</a></li>
		</ul>
	</div>	
	
	
	<!-- 手機板 不用回上一頁 (a 不要 back, i 不要 fa-angle-left") -->
	<div class="headerBack">
		<a class=""><i class="fa" aria-hidden="true"></i>不用回上一頁</a>
    </div>
	
	
	
	
	<div style="background:rgba(0,0,0,0.7); padding:50px 0px; width:100%; box-sizing:border-box; position:relative; min-height:800px;">	
		<!-- 30天好感度問卷  -->
		<div class="popContent favorabilityPop" style="display:block;">
			<h3>好感度調查</h3>
			<div class="mypairPad clear">
				<div class="mypairItem">
					<ul class="picture"><li><img alt="" src="images/user_photo_default_l.png" /></li></ul>
					<ul class="status"><li class="new"></li><li class="number">95</li></ul>
					<ul class="basicData">
						<li><p>許瑋甯<span>台北市/35歲</span></p></li>
					</ul>
					<ul class="infoData">
						<li><p>碩士</p>台北科技大學台北科技大學台北科技大學</li><li><p>知名外商</p>行銷企劃主管行銷企劃主管</li>
					</ul>
				</div>
			</div>
		   <div class="topic ansType_choiceLine">
				<div>
					<h3 class="cl_red1">請問你目前對她的好感度如何?</h3>
					<div class="ansPad">
						<ul>
							<li><input type="radio" name="sel02" value="1" id="sel021"><label for="sel021" class="btn_closePop">1<span>非常沒感覺</span></label></li>
							<li><input type="radio" name="sel02" value="2" id="sel022"><label for="sel022" class="btn_closePop">2<span>很沒感覺</span></label></li>  
							<li><input type="radio" name="sel02" value="3" id="sel023"><label for="sel023" class="btn_closePop">3<span>有點沒感覺</span></label></li>
							<li><input type="radio" name="sel02" value="4" id="sel024"><label for="sel024" class="btn_closePop">4<span>有點好感</span></label></li>
							<li><input type="radio" name="sel02" value="5" id="sel025"><label for="sel025" class="btn_closePop">5<span>很有好感</span></label></li>
							<li><input type="radio" name="sel02" value="6" id="sel026"><label for="sel026" class="btn_closePop">6<span>非常有好感</span></label></li>
						</ul>
					</div>
				</div>
				
				<div class="clear ctrlPad">
					<a class="btn_closePop">資訊不足，無法回答</a>
					<p>(填答後，問券將自動關閉)</p>
				</div>
			</div>
       
        </div>	
        	
	</div>

	
	
	
	<div style="background:rgba(0,0,0,0.7); padding:50px 0px; width:100%; box-sizing:border-box; position:relative; min-height:500px;">	
		<!-- 我的配對 刪除名單 -->
		<div class="popContent basic deletePop" style="display:block;">
			<ul>
				<li class="title">刪除名單</li>
				<li class="script ta-C">名單刪除後無法回復，你確定要刪除嗎?</li>
				<li class="ctrlPad">
					<a class="btn_red">確定</a>
					<a class="btn_red btn_closePop">取消</a>
				</li>
			</ul>	
		</div><!-- 我的配對 刪除名單 END -->
		
	</div>

	<div style="background:rgba(0,0,0,0.7); padding:50px 0px; width:100%; box-sizing:border-box; position:relative; min-height:500px;">	
		
		<!-- 我的設定 變更收件信箱 -->
		<div class="popContent basic changeMail" style="display:block;">
			<form action="" name="" method="">
			<ul>
				<li class="title">變更收件信箱地址</li>
				<li class="script ta-C">
					新的郵件地址: &nbsp; <input type="email" name="" value="" placeholder="輸入新的電子郵件">
				</li>
				<li class="ctrlPad">
					<a class="btn_red">變更</a>
					<a class="btn_red btn_closePop">取消</a>
				</li>
			</ul>	
			</form>	
		</div><!-- 我的設定 變更收件信箱 END -->	
		
	</div>
	
	

	<div style="background:rgba(0,0,0,0.7); padding:50px 0px; width:100%; box-sizing:border-box; position:relative; min-height:500px;">	
		
		<!-- 我的設定 基本資料 教育程度 -->
		<div class="popContent editorBasicDataPop" style="display:block;">
			<form>
			<ul>
				<li class="mobileTitle btn_closePop"><!--<i class="fa fa-angle-left" aria-hidden="true"></i>-->基本資料</li>
				<li class="content">
					<div class="topic  ansType_choice_3">
						<div>
							<h2 class="title">教育程度</h2>
							<div class="ansPad aho">
								<ul>
									<li><input type="radio" name="sel4720" value="1" id="sel4721"><label for="sel4721">國小</label></li> 
									<li><input type="radio" name="sel4720" value="2" id="sel4722"><label for="sel4722">國中(初中)</label></li> 
									<li><input type="radio" name="sel4720" value="3" id="sel4723"><label for="sel4723">高中、高職</label></li> 
									<li><input type="radio" name="sel4720" value="4" id="sel4724"><label for="sel4724">專科、二專</label></li>
									<li><input type="radio" name="sel4720" value="5" id="sel4725"><label for="sel4725">學士</label></li>  
									<li><input type="radio" name="sel4720" value="6" id="sel4726"><label for="sel4726">碩士</label></li> 
									<li><input type="radio" name="sel4720" value="7" id="sel4727"><label for="sel4727">博士</label></li>
								</ul>
							</div>
						</div>
					</div>
				</li>
				<li><div class="ctrlPad"><input type="submit" class="btn_red" value="儲存" /></div></li>
			</ul>
			</form>	
		</div>
		
	</div>
	
	

	<div style="background:rgba(0,0,0,0.7); padding:50px 0px; width:100%; box-sizing:border-box; position:relative; min-height:500px;">	
		<h5 style="color:#aaa;">參考 testing_pair_8basic.php</h5>		
		
		<!-- 我的設定 基本資料 教育程度 -->			
		<div class="popContent editorBasicDataPop" style="display:block;">
			<form>
			<ul>
				<li class="mobileTitle btn_closePop"><!--<i class="fa fa-angle-left" aria-hidden="true">--></i>基本資料</li>
				<li class="content">
				
					<div class="topic ansType_text_2" style="min-height: 1px;">
						<div>
							<h2 class="title">您的居住地</h2>
							<div class="ansPad">
								<ul>
									<li><select><option>Taiwan (台灣)</option><option>HungKong (香港)</option><option>Japan (日本)</option></select></li>
									<li><select><option>台北市</option><option>新北市</option><option>基隆市</option></select></li>
								</ul>
							</div>
						</div>
					</div>
				
				</li>
				<li><div class="ctrlPad"><input type="submit" class="btn_red" value="儲存" /></div></li>
			</ul>
			</form>
		</div>
	
	</div>
	
	

	<div style="background:rgba(0,0,0,0.7); padding:50px 0px; width:100%; box-sizing:border-box; position:relative; min-height:500px;">	
		<h5 style="color:#aaa;">參考 testing_pair_8basic.php</h5>
		
		<!-- 我的設定 基本資料 最近一次 -->	
		<div class="popContent editorBasicDataPop" style="display:block;">
			<form>
			<ul>
				<li class="mobileTitle btn_closePop"><!--<i class="fa fa-angle-left" aria-hidden="true">--></i>基本資料</li>
				<li class="content">
				
					<div class="topic ansType_text_2">
						<div>
							<h2 class="title">最近一次服務的企業或機構 <span>(保密)</span></h2>
							<div class="ansPad editBusiness">
								<ul>
									<li><input type="text" value="" class="CG_autoInput" placeholder="請輸入關鍵字，並選擇您的企業"></li>
									<!--<li><input type="text" value="" id="U_business"></li>-->
								</ul>					
								<ol class="CG_autocomplete">
									<li>台灣積體電路股份有限公司</li>
									<li>中國石油</li>
									<li>鴻海</li>
									<li>闌珊處</li>
									<li>台北市政府</li>
									<li>遠雄建設</li>
									<li class="inputSelf">
										<input type="text" value="" class="inputSelfData" placeholder="若無選項，請輸入" />
										<input type="button" value="確定" class="sendSelfData" />
									</li>
								</ol>
							</div>
							<p class="plusInfo">（輸入後，<span>請於提示中挑選企業名稱</span>，除非提示中沒有該企業，才自行輸入）</p>
							<p class="checkBox"><input type="checkbox" id="unwork" /><label for="unwork">無工作經驗，請在此勾選</label></p>
						</div>
					</div>
			
				</li>
				<li><div class="ctrlPad"><input type="submit" class="btn_red" value="儲存" /></div></li>
			</ul>
			</form>	
		</div>
	
	</div>
	
	
	
	<div style="background:rgba(0,0,0,0.7); padding:50px 0px; width:100%; box-sizing:border-box; position:relative; min-height:1460px;">	
		<h5 style="color:#aaa;">參考 testing_pair_1habit.php</h5>
		
		<!-- 我的設定 基本資料 最近一次 -->	
		<div class="popContent editorBasicDataPop" style="display:block;">
			<form>
			<ul>
				<li class="mobileTitle btn_closePop"><!--<i class="fa fa-angle-left" aria-hidden="true">--></i>基本資料</li>
				<li class="content">
	
					<div class="topic ansType_check_n" style="min-height: 1px;">
						<div>
							<h2 class="title">我主要的興趣休閒？ <span>(請勾選剛好6項)</span></h2>
							<div class="ansPad">
								<ul>
									<li><input type="checkbox" name="sel07" data-rel="6" value="1" id="sel071"><label for="sel071">釣魚、釣蝦</label></li>
									<li><input type="checkbox" name="sel07" data-rel="6" value="2" id="sel072"><label for="sel072">烹飪</label></li>  
									<li><input type="checkbox" name="sel07" data-rel="6" value="3" id="sel073"><label for="sel073">寵物</label></li>
									<li><input type="checkbox" name="sel07" data-rel="6" value="4" id="sel074"><label for="sel074">園藝、花藝</label></li>  
									<li><input type="checkbox" name="sel07" data-rel="6" value="5" id="sel075"><label for="sel075">瑜珈、體操、健身運動</label></li>
									<li><input type="checkbox" name="sel07" data-rel="6" value="6" id="sel076"><label for="sel076">慢跑、散步</label></li>  
									<li><input type="checkbox" name="sel07" data-rel="6" value="7" id="sel077"><label for="sel077">自行車</label></li>
									<li><input type="checkbox" name="sel07" data-rel="6" value="8" id="sel078"><label for="sel078">聽音樂</label></li>  
									<li><input type="checkbox" name="sel07" data-rel="6" value="9" id="sel079"><label for="sel079">閱讀</label></li>
									<li><input type="checkbox" name="sel07" data-rel="6" value="10" id="sel080"><label for="sel080">進修課程、聽演講</label></li>  
									<li><input type="checkbox" name="sel07" data-rel="6" value="11" id="sel081"><label for="sel081">個人創作(寫作、詞曲、美術 ...)</label></li>
									<li><input type="checkbox" name="sel07" data-rel="6" value="12" id="sel082"><label for="sel082">打電動</label></li>
									<li><input type="checkbox" name="sel07" data-rel="6" value="13" id="sel083"><label for="sel083">美容保養</label></li>
									<li><input type="checkbox" name="sel07" data-rel="6" value="14" id="sel084"><label for="sel084">攝影、錄製影片</label></li>  
									<li><input type="checkbox" name="sel07" data-rel="6" value="15" id="sel085"><label for="sel085">模型、遙控玩具</label></li>
									<li><input type="checkbox" name="sel07" data-rel="6" value="16" id="sel086"><label for="sel086">藝文活動 (觀賞表演、展覽 ...)</label></li>  
									<li><input type="checkbox" name="sel07" data-rel="6" value="17" id="sel087"><label for="sel087">手工藝品製作(木工、編織 ...)</label></li>
									<li><input type="checkbox" name="sel07" data-rel="6" value="18" id="sel088"><label for="sel088">天文星象</label></li>  
									<li><input type="checkbox" name="sel07" data-rel="6" value="19" id="sel089"><label for="sel089">體育賽事 (職棒、職籃)</label></li>
									<li><input type="checkbox" name="sel07" data-rel="6" value="20" id="sel090"><label for="sel090">特殊蒐藏 (郵票、貨幣 ...)</label></li>  
									<li><input type="checkbox" name="sel07" data-rel="6" value="21" id="sel091"><label for="sel091">電子、電器產品維修、製作</label></li>
									<li><input type="checkbox" name="sel07" data-rel="6" value="22" id="sel092"><label for="sel092">程式、軟體設計撰寫</label></li>
									<li><input type="checkbox" name="sel07" data-rel="6" value="23" id="sel093"><label for="sel093">漫畫、動畫</label></li>
									<li><input type="checkbox" name="sel07" data-rel="6" value="24" id="sel094"><label for="sel094">科學實驗、發明</label></li>  
									<li><input type="checkbox" name="sel07" data-rel="6" value="25" id="sel095"><label for="sel095">玩樂器</label></li>
									<li><input type="checkbox" name="sel07" data-rel="6" value="26" id="sel096"><label for="sel096">看電影</label></li>  
									<li><input type="checkbox" name="sel07" data-rel="6" value="27" id="sel097"><label for="sel097">旅行</label></li>
									<li><input type="checkbox" name="sel07" data-rel="6" value="28" id="sel098"><label for="sel098">逛街購</label></li>  
									<li><input type="checkbox" name="sel07" data-rel="6" value="29" id="sel099"><label for="sel099">郊外踏青</label></li>
									<li><input type="checkbox" name="sel07" data-rel="6" value="30" id="sel100"><label for="sel100">公益、志工</label></li>  
									<li><input type="checkbox" name="sel07" data-rel="6" value="31" id="sel101"><label for="sel101">賞鳥</label></li>
									<li><input type="checkbox" name="sel07" data-rel="6" value="32" id="sel102"><label for="sel102">水上活動 (游泳、潛水 ...)</label></li>  
									<li><input type="checkbox" name="sel07" data-rel="6" value="33" id="sel103"><label for="sel103">球類運動 (籃球、壘球 ...)</label></li>
									<li><input type="checkbox" name="sel07" data-rel="6" value="34" id="sel104"><label for="sel104">舞蹈 (國標舞、芭蕾舞 ...)</label></li>
									<li><input type="checkbox" name="sel07" data-rel="6" value="35" id="sel105"><label for="sel105">爬山、攀岩</label></li>
									<li><input type="checkbox" name="sel07" data-rel="6" value="36" id="sel106"><label for="sel106">改裝車、重機車、賽車</label></li>  
									<li><input type="checkbox" name="sel07" data-rel="6" value="37" id="sel107"><label for="sel107">極限運動</label></li>
									<li><input type="checkbox" name="sel07" data-rel="6" value="38" id="sel108"><label for="sel108">參加舞台表演、戲劇表演</label></li>  
									<li><input type="checkbox" name="sel07" data-rel="6" value="39" id="sel109"><label for="sel109">武術(跆拳道、空手道 ...)</label></li>
									<li><input type="checkbox" name="sel07" data-rel="6" value="40" id="sel110"><label for="sel110">空中活動 (飛行傘、熱氣球 ...)</label></li>  
									<li><input type="checkbox" name="sel07" data-rel="6" value="41" id="sel111"><label for="sel111">露營、溯溪</label></li>
									<li><input type="checkbox" name="sel07" data-rel="6" value="42" id="sel112"><label for="sel112">朋友聚會</label></li>  
									<li><input type="checkbox" name="sel07" data-rel="6" value="43" id="sel113"><label for="sel113">吃喝、美食</label></li>
									<li><input type="checkbox" name="sel07" data-rel="6" value="44" id="sel114"><label for="sel114">唱歌、合唱團</label></li>  
								</ul>
							</div>
						</div>
					</div>
	
	
				</li>
				<li><div class="ctrlPad"><input type="submit" class="btn_red" value="儲存" /></div></li>
			</ul>
			</form>
		</div>
	
	</div>
	
	

	<div style="background:rgba(0,0,0,0.7); padding:50px 0px; width:100%; box-sizing:border-box; position:relative; min-height:500px;">	
		<h5 style="color:#aaa;"></h5>
		
		<!-- 契合報告 -->	
		<div class="popContent infoPad" style="display:block;">
			<h3>心靈能量的來源</h3>
			<h4>外放型 (O)：</h4>
			<p>喜歡跟外在的人事物有頻繁互動，可以從外界行動中得到能量。</p>
			<h4>內斂型 (I)：</h4>
			<p>喜歡跟內在的自我相處，或是有深度的互動，可從心靈探索、沉思來自我充電。</p>
		</div>
	
	</div>
	

	<div style="background:rgba(0,0,0,0.7); padding:50px 0px; width:100%; box-sizing:border-box; position:relative; min-height:500px;">	
		<h5 style="color:#aaa;"></h5>
		
		<!-- 契合報告 -->	
		<div class="popContent infoPad" style="display:block;">
			<h3>做決策的依據</h3>
			<h4>理性型 (L)：</h4>
			<p>依照邏輯分析客觀事實，分析、比較各個選項的優劣和可能影響，理性的做出決策</p>
			<h4>感性型 (P)：</h4>
			<p>聆聽內心的聲音，依照自己的價值觀、喜好和原則作決定。</p>
		</div>
	
	</div>
	

	<div style="background:rgba(0,0,0,0.7); padding:50px 0px; width:100%; box-sizing:border-box; position:relative; min-height:500px;">	
		<h5 style="color:#aaa;"></h5>
		
		<!-- 契合報告 -->	
		<div class="popContent infoPad" style="display:block;">
			<h3>認識世界的角度</h3>
			<h4>具體型 (F)：</h4>
			<p>習慣接受五官直接感受到的事物，相信眼前的事實、證據和具體觀點。</p>
			<h4>洞察型 (S)：</h4>
			<p>觀察可見事物之間的關連性，推測世界潛在的可能和未來前景。</p>
		</div>
	
	</div>
	

	<div style="background:rgba(0,0,0,0.7); padding:50px 0px; width:100%; box-sizing:border-box; position:relative; min-height:500px;">	
		<h5 style="color:#aaa;"></h5>
		
		<!-- 契合報告 -->	
		<div class="popContent infoPad" style="display:block;">
			<h3>生活態度和價值觀</h3>
			<h4>計畫型 (D)：</h4>
			<p>喜歡有規劃的安頓生活，做事時也井井有條的依照計畫達成目標。</p>
			<h4>隨興型 (A)：</h4>
			<p>喜歡順其自然的生活，能接受生命中的意外，注重事情的過程而非結果。</p>
		</div>
	
	</div>


	<div style="background:rgba(0,0,0,0.7); padding:50px 0px; width:100%; box-sizing:border-box; position:relative; min-height:1600px;">	
		<h5 style="color:#aaa;">參考 2021-07-11</h5>	

		<!-- 實體見面約會  -->
		<div class="popContent threeWaysPop showUp" style="display:block;">
			<div class="close">X</div>
			<h3>實體見面約會</h3>
			<div class="banner">
				<div class="hero">
					<div class="name">【實體見面約會】</div>
					<img src="images/threeWaysPop_showUp_hero_pic.png" width="220" height="auto">
				</div>
				<div class="badge">
					<div class="title">適合這樣的你：</div>
					<ul>
						<li>討厭線上聊沒結果</li>
						<li>不太會線上互動</li>
						<li>想直接面對面認識</li>
					</ul>
				</div>
			</div>
			<div class="divider"></div>
			<div class="content">
				<div class="box">
					<div class="cap">約會如何進行？</div>
					<div class="card">
						<div class="number">1</div>
						<div class="cap">敲定<br/>約會</div>
						<ul>
							<li>72小時內敲定見面時程</li>
						</ul>
					</div>
					<div class="card">
						<div class="number">2</div>
						<div class="cap">準時<br/>赴約</div>
						<ul>
							<li>直接輕鬆赴約</li>
						</ul>
					</div>
					<div class="card">
						<div class="number">3</div>
						<div class="cap">面對面<br/>互動</div>
						<ul>
							<li>確認身分</li>
							<li>認識彼此</li>
						</ul>
					</div>
					<div class="card">
						<div class="number">4</div>
						<div class="cap">即時<br/>回饋</div>
						<ul>
							<li>次日回饋，了解彼此心意</li>
						</ul>
					</div>
				</div>
				<div class="box">
					<div class="cap">約會4大特色</div>
					<ul class="star">
						<li>結合線上線下，交友更有效率</li>
						<li>直接面對面，最有溫度</li>
						<li>我們會協助餐廳的訂位</li>
						<li>雙方可以各帶一位朋友</li>
					</ul>
				</div>
			</div>
			
			
       
        </div>	
        	
	</div>

	
	<div style="background:rgba(0,0,0,0.7); padding:50px 0px; width:100%; box-sizing:border-box; position:relative; min-height:1700px;">	
		<h5 style="color:#aaa;">參考 2021-07-11</h5>	

		<!-- 【單獨】一對一視訊約會  -->
		<div class="popContent threeWaysPop single1by1" style="display:block;">
			<div class="close">X</div>
			<h3>【單獨】一對一視訊約會</h3>
			<div class="banner">
				<div class="hero">
					<div class="name">【單獨】<br/>一對一視訊約會</div>
					<img src="images/threeWaysPop_single1by1_hero_pic.png" width="268" height="auto">
					<div class="description">* 若您可視訊的地點「網路不穩」，<br/>建議<span>選擇另外兩種約會模式<span></div>
				</div>
				<div class="badge">
					<div class="title">適合這樣的你：</div>
					<ul>
						<li>對聊天有自信</li>
						<li>只想專注認識彼此</li>
						<li>有自己的約會步調</li>
					</ul>
				</div>
			</div>
			<div class="divider"></div>
			<div class="content">
				<div class="box">
					<div class="cap">約會如何進行？<span>(視訊軟體：<img src="images/threeWaysPop_single1by1_how2date_LNE.png" width="48" height="auto">&nbsp;)</span></div>
					<div class="card">
						<div class="number">1</div>
						<div class="cap">點擊專屬連結，<br/>前往LINE 聊天室</div>
					</div>
					<div class="card">
						<div class="number">2</div>
						<div class="cap">雙方查核證件，<br/>確認身分</div>
					</div>
					<div class="card">
						<div class="number">3</div>
						<div class="cap">一對一視訊約會<span>(60 mins)</span></div>
					</div>
					<div class="card">
						<div class="number">4</div>
						<div class="cap">約會結束，<br/>意猶未盡可繼續聊<span>(上限30 mins)</span></div>
					</div>
				</div>
				<div class="box">
					<div class="cap">為什麼你應該試試？</div>
					<ul class="star">
						<li>在家約會，方便又安全</li>
						<li>視訊先熟悉，見面更安心，省時有效率</li>
						<li>提供三階段話題，不怕沒話聊</li>
						<li>聊天前互查證件，真實有保障</li>
					</ul>
				</div>
			</div>
			
			
       
        </div>	
        	
	</div>


	<div style="background:rgba(0,0,0,0.7); padding:50px 0px; width:100%; box-sizing:border-box; position:relative; min-height:2000px;">	
		<h5 style="color:#aaa;">參考 2021-07-11</h5>	

		<!-- 【團體引導】一對一視訊約會  -->
		<div class="popContent threeWaysPop group1by1" style="display:block;">
			<div class="close">X</div>
			<h3>【團體引導】一對一視訊約會</h3>
			<div class="banner">
				<div class="hero">
					<div class="name">【團體引導】<br/>一對一視訊約會</div>
					<img src="images/threeWaysPop_group1by1_hero_pic.png" width="300" height="auto">
				</div>
				<div class="badge">
					<div class="title">適合這樣的你：</div>
					<ul>
						<li>不會聊天、怕冷場</li>
						<li>比較害羞、慢熟</li>
						<li>想更深入認識對方</li>
					</ul>
				</div>
			</div>
			<div class="content">
				<div class="box">
					<div class="cap">約會如何進行？<span>(視訊軟體：<img src="images/threeWaysPop_group1by1_how2date_ZOOM.png" width="64" height="auto">&nbsp;)</span></div>
					<div class="description">* 「一對一」階段只和已配對<br/>對象，不換桌</div>
					<div class="grid">
						<div class="card">
							<div class="number">1</div>
							<div class="cap">團體<br/>破冰<span>(10 mins)</span></div>
							<div class="info">活動說明、破冰<span>(10 mins)</span></div>
						</div>
						<div class="card">
							<div class="number">2</div>
							<div class="cap">一對一<br/>約會<span>(2輪，30+30 mins)</span></div>
							<div class="info">由淺到深的認識<span>(2輪，30+30 mins)</span></div>
						</div>
						<div class="card">
							<div class="number">3</div>
							<div class="cap">團體<br/>分享<span>(2輪，5+5 mins)</span></div>
							<div class="info">小活動穿插<span>(2輪，5+5 mins)</span></div>
							<div class="arrow top"><img src="images/threeWaysPop_group1by1_how2date_arrow.png" alt=""></div>
							<div class="arrow bottom"><img src="images/threeWaysPop_group1by1_how2date_arrow.png" alt=""></div>
						</div>
						<div class="card">
							<div class="number">4</div>
							<div class="cap">活動<br/>結束<span>(5 mins)</span></div>
							<div class="info">引導員結尾<span>(5 mins)</span></div>
						</div>
						<div class="card">
							<div class="number">5</div>
							<div class="cap">一對一<br/>暢聊<span>(上限60 mins)</span></div>
							<div class="info">有興趣可繼續聊<span>(上限60 mins)</span></div>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="cap">為什麼你應該試試？</div>
					<ul class="star">
						<li>專業引導員帶領，好玩、有深度</li>
						<li>一對一70%、團體30%，穿插進行</li>
						<li>由淺到深，三階段話題，有意義的認識彼此</li>
					</ul>
				</div>
			</div>
			
			
       
        </div>	
        	
	</div>



	
	
		
	<!-- 最新名單 浮水印提示 -->
	<div class="noticeBlock"><p>體驗區範例</p></div>
	
	<!-- 體驗區 Banner -->
	<div class="testBanner clear">
		<p>完成配對測驗<span>，</span><br/>免費使用配對服務及心理分析</p>
		<a href="#" class="btn_red CGc">配對測驗 (免費)</a>
	</div>




</div><!-- main END -->
<?php include_once("at_include/footer.php"); ?>
<!-- jQuery -->    
    <script type="text/javascript" src="js/jquery.min-2.2.4.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/at_cage.js"></script>
    <script>
		$(window).load(function() {
			
		})
		$(document).ready(function() {
			
		});
	</script>
</body>
</html>
