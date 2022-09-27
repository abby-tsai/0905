<div class="reportTitle">
	<h1>愛之語報告</h1>
	<p>愛之語有五種，每個人都有自己偏好被愛的方式，當別人用正確的方式表達，我們就會感覺到被愛，反之，即使對方付出很多，但我們仍可能沒有被愛的感覺，經歷過不同的人生風景之後，我們的愛之語也會隨之調整。以下是妳的愛之語：</p>
</div>
<div class="reportItem noBG">
	<div class="reportDetial">
		<div class="reportChart canvas5">
			<canvas id="CG_star" width="240" height="240" style="background:none; margin:0px auto;"></canvas>
			<ul>
				<li>肯定的語言</li>
				<li>精心的時刻</li>
				<li>接受禮物</li>
				<li>服務的行動</li>
				<li>身體的接觸</li>
			</ul>
		</div>
		<script>
			/* Canvas */
			var canvas = document.getElementById("CG_star");
			var ctx = canvas.getContext("2d");
			var reportValue = [48, 60, 40, 80, 20]; // 測驗報告參數 0 ~ 100
			var i, bg,
				c_w = canvas.width,
				c_h = canvas.height,
				center = c_w * 0.5,
				ang = Math.PI / 180,
				radius = c_w * 0.4,
				math_X = [0, Math.cos(18 * ang), Math.sin(36 * ang), -Math.sin(36 * ang), -Math.cos(18 * ang)],
				math_Y = [-1, -Math.sin(18 * ang), Math.cos(36 * ang), Math.cos(36 * ang), -Math.sin(18 * ang)],
				reVal = radius * 0.01,
				bx = [],
				by = [],
				px = [],
				py = [];

			for (i = 0; i < 5; i++) {
				px[i] = reportValue[i] * reVal * math_X[i],
					py[i] = reportValue[i] * reVal * math_Y[i];
			}
			ctx.translate(center, center * 1.02);
			for (i = 0; i < 5; i++) {
				var level = 1 - i * 0.2,
					newRadius = radius * level;
				for (bg = 0; bg < 5; bg++) {
					bx[bg] = newRadius * math_X[bg],
						by[bg] = newRadius * math_Y[bg];
				}
				ctx.beginPath();
				ctx.moveTo(bx[0], by[0]);
				ctx.lineTo(bx[1], by[1]);
				ctx.lineTo(bx[2], by[2]);
				ctx.lineTo(bx[3], by[3]);
				ctx.lineTo(bx[4], by[4]);
				ctx.strokeStyle = '#cecece';
				ctx.closePath();
				ctx.stroke();
			}
			for (i = 0; i < 5; i++) {
				ctx.beginPath();
				ctx.moveTo(0, 0);
				ctx.lineTo(radius * math_X[i], radius * math_Y[i]);
				ctx.strokeStyle = '#cecece';
				ctx.stroke();
			}

			ctx.beginPath();
			ctx.moveTo(px[0], py[0]);
			ctx.lineTo(px[1], py[1]);
			ctx.lineTo(px[2], py[2]);
			ctx.lineTo(px[3], py[3]);
			ctx.lineTo(px[4], py[4]);
			ctx.strokeStyle = '#85d7d1';
			ctx.lineWidth = 3;
			ctx.closePath();
			ctx.stroke();

			for (i = 0; i < 5; i++) {
				ctx.beginPath();
				ctx.arc(px[i], py[i], 5, 0, 2 * Math.PI);
				ctx.fillStyle = 'black';
				ctx.fill();
			}
		</script>
	</div>
</div>
<div class="reportItem">
	<h3>主要的愛之語：服務的行動</h3>
	<div class="reportDetial">
		<div class="script">
			你是一個實際的人。相較於鮮花浪漫、禮物溫存，你更重視的是他能不能幫你的忙。例如，一起處理一些瑣事、用一些具體行動協助你完成工作、做家事、準備飯菜、或整理環境等等，會讓你感覺到自己在這段關係裡是被呵護、被了解、被重視的。尤其當他投入的在幫忙，或是犧牲自己的一些時間完成你交付的事情時，你更會深切地感受到對方是重視你的。
		</div>
		<div class="title">關於你的愛之語，另一半可以怎麼做？</div>
		<div class="script">
			正因為我們是如此的不足，所以才能在彼此的生命裡，為對方作一點事情。服務的行動並非要替對方作牛作馬，而是要作一些「真正對你來說重要，又能讓你感覺到愛的事情」，它沒有送禮或讚美這麼多種形式，相對的，它需要一套流程來完成。<br><br>
			a.服務清單：可可以每個月請你寫下你最希望也最需要他幫你完成的十件事，如果一個月考慮的太長，也可以改成一週三件，然後按重要性排序，從重要的先完成。<br><br>
			b.窩心卡：當他做完一件事情（例如擦地板、帶小孩、幫你整理客戶資料等等）之後，可以在一張心型小卡（自己剪）或便利貼上寫上「給xx愛的禮物」，貼在相關的物品上或他會看見的地方（拖把、冰箱、他的筆記型電腦，但千萬別貼小孩頭上）。<br><br>
			c.把小事情，變成小確幸：魔鬼藏在細節裡，有些服務的行動其實相當簡單，但經常因為忽略變成爭執的導火線，例如撿起浴室排水孔的頭髮，上完廁所掀起馬桶蓋，用完東西放回原位等等，一般來說你「經常嘮叨」的是什麼，就是你覺得最重要的事，也把它寫入「服務清單」裡，並先從它做起。
		</div>
	</div>
</div>
<div class="reportItem">
	<h3>次要的愛之語：肯定的言語</h3>
	<div class="reportDetial">
		<div class="script">
			妳很需要被肯定、被看見。當別人稱讚妳，或說妳哪件事情做得特別好的時候，雖然會有些不好意思，但卻相當開心，因為一直以來妳所追求的，就是那種被肯定、被重視、被需要的感覺。所以如果有人能夠接納妳的意見、傾聽妳分享成就或專業、對妳表示感激等等，都會讓妳有一種被在乎、被愛的感受。
		</div>
		<div class="title">關於妳的愛之語，另一半可以怎麼做？</div>
		<div class="script">
			妳需要被看見、被鼓勵、被肯定，如果妳所希望的愛是來自於他的支持和欣賞，他可以用下面幾種方式來表達他對妳的關懷：<br><br>
			a.鼓勵：例如「我知道這對妳來說不太容易，但我相信妳絕對辦得到！」、「雖然可能會花多一點時間，但我一直都會在身旁當妳的啦啦隊！」等等，鼓勵的話之所以有效，是因為它可以給予妳行動的勇氣。<br><br>
			b.讚美：例如「一直以來都是妳在支撐這間公司，妳做得很棒。」、「妳在社會企業上的付出，花時間跟那些孩子見面、爭取經費，老實說超偉大的！」等等，注意讚美必須有「具體事例」，不然容易流於形式與空泛。<br><br>
			c.仁慈：同樣一句話，說的方式不一樣，效果就會不同。盡量在話語中加入「溫度」，讓妳能感覺到他的在乎，例如可以用「我知道妳今天工作很累了，不如今天我來洗碗吧，妳好好休息。」取代「看妳那副死樣子，碗一定又是我要洗了。」<br><br>
			d.感謝：例如「謝謝妳願意把妳最真實的感受告訴我，我相信那需要很大的勇氣。」、「這星期還好有妳幫我帶咖啡，不然我早上一定都會睡死在辦公桌上。」等等，一樣感謝必須具體真誠，不然容易讓人覺得是在敷衍。<br><br>
			e.寬恕：「老實說我很難過，因為妳加班但沒有跟我說，我一直很擔心。不過我想到自己有時候也會忙過頭，所以能夠體諒妳的心情，也希望下次如果要晚回來，妳可以撥通電話。」、「我不確定能不能這麼快原諒妳昨天對我說謊的事，但因為我重視這段關係，也重視妳，所以希望我們好好討論彼此在乎的感受。」等等，寬恕是肯定的言語中最不容易的部份，不過如果能夠多次練習，通常能夠感覺到自己的成長，如果對方也誠心悔改的話，更能從對方身上接收到滿滿的能量。
		</div>
	</div>
</div>

<!-- <p class="ta-C"><a href="https://shop.cssa.org.tw/goods/content?c_id=&g_id=5702" target="_blank">學習更多的愛之語?立即選購「單身愛之語」</a></p> -->