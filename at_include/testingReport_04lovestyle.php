<div class="reportTitle">
	<h1>愛情風格報告</h1>
	<p>愛情風格泛指對愛情的態度、情緒、感覺與行為表現，心理學家將愛情風格分為八種類型，每個人都會同時存在不同的愛情風格，但是會有主要次要之分，下面的八角雷達圖中，分數最高的二個，就是妳愛情風格：</p>
</div>
<div class="reportItem noBG">
	<div class="reportDetial">
		<div class="reportChart canvas8">
			<canvas id="CG_star" width="240" height="240" style="background:none; margin:0px auto;"></canvas>
			<ul><li>犧牲奉獻型</li><li>執著佔有型</li><li>悲觀保留型</li><li>真情投入型</li><li>猶疑手段型</li><li>肉體感官型</li><li>婚姻目的型</li><li>浪漫表達型</li></ul>
		</div>
		<script>
			/* Canvas */
			var canvas = document.getElementById("CG_star");
			var ctx = canvas.getContext("2d");
			var reportValue = [80,21,98,67,100,37,72,50]; // 測驗報告參數 0 ~ 100
			var i,bg,
				c_w = canvas.width,
				c_h = canvas.height,
				center = c_w*0.5,
				ang = Math.PI/180,
				M_cos = Math.cos(45*ang),
				radius = c_w*0.4,
				math_X = [0,M_cos,1,M_cos,0,-M_cos,-1,-M_cos],
				math_Y = [-1,-M_cos,0,M_cos,1,M_cos,0,-M_cos],
				reVal = radius*0.01,
				bx = [], by = [], px = [], py = [];

			for (i=0; i <8; i++){
				px[i] = reportValue[i]*reVal*math_X[i], 
				py[i] = reportValue[i]*reVal*math_Y[i];
			}
			ctx.translate(center, center*1.02);
			for (i=0; i <8; i++){
				var level = 1 - i * 0.2,
					newRadius = radius * level;
				for (bg=0; bg <8; bg++){
					bx[bg] = newRadius*math_X[bg], 
					by[bg] = newRadius*math_Y[bg];
				}	
				ctx.beginPath();
				ctx.moveTo(bx[0],by[0]);
				ctx.lineTo(bx[1],by[1]);
				ctx.lineTo(bx[2],by[2]);
				ctx.lineTo(bx[3],by[3]);
				ctx.lineTo(bx[4],by[4]);
				ctx.lineTo(bx[5],by[5]);
				ctx.lineTo(bx[6],by[6]);
				ctx.lineTo(bx[7],by[7]);
				ctx.strokeStyle='#cecece';
				ctx.closePath();
				ctx.stroke();
			}
			for (i=0; i <8; i++){						
				ctx.beginPath();
				ctx.moveTo(0,0);
				ctx.lineTo(radius*math_X[i],radius*math_Y[i]);
				ctx.strokeStyle='#cecece';
				ctx.stroke();
			}

			ctx.beginPath();
			ctx.moveTo(px[0],py[0]);
			ctx.lineTo(px[1],py[1]);
			ctx.lineTo(px[2],py[2]);
			ctx.lineTo(px[3],py[3]);
			ctx.lineTo(px[4],py[4]);
			ctx.lineTo(px[5],py[5]);
			ctx.lineTo(px[6],py[6]);
			ctx.lineTo(px[7],py[7]);
			ctx.strokeStyle='#85d7d1';
			ctx.lineWidth=3;
			ctx.closePath();
			ctx.stroke();

			for (i=0; i <8; i++){
				ctx.beginPath();
				ctx.arc(px[i],py[i], 5, 0, 2*Math.PI);
				ctx.fillStyle = 'black';
				ctx.fill();

			}
		</script>
	</div>
</div>
<div class="reportItem">
	<h3>主要的愛情風格：真情投入型</h3>
	<div class="reportDetial">
		<div class="script">
			對妳而言，愛情是一座堅固的堡壘，可以帶著你們克服萬難，度過每一次的風風雨雨，你們相信愛情是可以持久而不退色的，即使在激情過後，你們依舊能夠將這段情感維持下去。妳很重視一段感情當中的平等關係，能夠彼此相互分享與包容，對妳而言，一段關係要走得夠久，能夠互信互諒是這段感情中不可或缺的元素。妳也總是在感情當中真誠的投入一切，通常不會有所保留，因為妳相信唯有真誠的投入，才能換回真實的情感，即便妳在愛情裡受過傷，妳通常還是會選擇相信愛情，因為妳所付出的一切，也將影響這段感情發展的歷程。整體而言，妳能夠安心自在的談戀愛，也能夠在愛情當中付出妳的真心，而妳的付出也讓愛情變得更加堅強而穩固，因此真誠投入型的人，往往能夠獲得一段幸福美滿的關係。
		</div>
		<div class="title">給妳的建議</div>
		<div class="script">
			許多人的愛情模式都屬於真誠投入型，這其實是一個很好的愛情互動模式，在這樣的模式之下，只要妳肯多多為對方著想，那麼妳就能夠獲得一段美好的愛情。對屬於這種類型的人來說，一段愛情能否成功，其實關鍵因素在於雙方能否有良好的溝通，「妳付出的方式，真的是對方想要的嗎？」，找到適合彼此的付出方式，將讓你們付出的心力如實的傳達到彼此的心中。除此之外，對於感情的認真付出，有時候也該適可而止，畢竟對方並不一定如妳一般看重這段感情，有可能只是玩玩而已，如果不懂得適度保護自己，一味的付出將讓妳在感情結束時更加萬念俱灰。
		</div>
	</div>
</div>
<div class="reportItem">
	<h3>次要的愛情風格：婚姻目的型</h3>
	<div class="reportDetial">
		<div class="script">
			對於妳而言，結婚是妳談戀愛的最終目的，因此在愛情關係當中，妳會謹慎考量妳和妳的對象之間，是否適合長久的生活在一起，而不是關係中是否充滿了激情。對妳而言，與其選擇一段轟轟烈烈的愛情，妳更在乎這段感情能否細水長流，妳的交往目的會以未來的需要及現實的條件做為主要考量，在選擇伴侶上，妳比較會謹慎考慮，會以這段關係是否適合走向婚姻作為考量；若是這段感情出現了裂痕，妳也較容易選擇努力修補裂縫，而不是輕易放棄。總結而言，妳在感情上較為理性，與其選擇有激情但較不適合的愛情，妳更傾向於選擇合適但平淡的感情，伴侶關係能否夠穩定長久是妳擇偶上最重要的考量因素。
		</div>
		<div class="title">給妳的建議</div>
		<div class="script">
			妳通常會有較長的交往時間，也比較不會輕易地放棄一段感情，但是，一段婚姻能否順利的條件，大多奠定在親密、承諾和彼此的了解之上。因此，在還沒有到達這個階段之前，多多觀察妳身邊可能的對象，以及擴大生活圈，會是投資自己較好的方式。換一個角度來說，妳選擇了某一段感情，通常都是以結婚為最終目的，彷彿只要走進了婚姻，愛情就會完美，若是沒能到達這個目標，那麼這段感情就是失敗的；但若帶著這樣的想法來尋找愛情對向，往往沒辦法讓妳專注於此時此刻愛情的進展，也許會過於害怕彼此尚未磨合的地方，使得完滿婚姻這個目標變得遙遙無期，建議先以平常心為出發點，多和身邊的人互動，專注在每個當下能夠努力的事情，會讓這段愛情更容易成功。
		</div>
	</div>
</div>