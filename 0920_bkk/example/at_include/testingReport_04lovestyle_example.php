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
			var reportValue = [30,40,70,63,30,63,70,65]; // 測驗報告參數 0 ~ 100
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
	<h3>主要的愛情風格：婚姻目的型</h3>
	<div class="reportDetial">
		<div class="script">
		對於你而言，結婚是你談戀愛的最終目的，因此在愛情關係當中，你會謹慎考量你和你的對象之間，是否適合長久的生活在一起，而不是關係中是否充滿了激情。對你而言，與其選擇一段轟轟烈烈的愛情，你更在乎這段感情能否細水長流，你的交往目的會以未來的需要及現實的條件做為主要考量，在選擇伴侶上，你比較會謹慎考慮，會以這段關係是否適合走向婚姻作為考量；若是這段感情出現了裂痕，你也較容易選擇努力修補裂縫，而不是輕易放棄。總結而言，你在感情上較為理性，與其選擇有激情但較不適合的愛情，你更傾向於選擇合適但平淡的感情，伴侶關係能否夠穩定長久是你擇偶上最重要的考量因素。
		</div>
		<div class="title">給你的建議</div>
		<div class="script">
		你通常會有較長的交往時間，也比較不會輕易地放棄一段感情，但是，一段婚姻能否順利的條件，大多奠定在親密、承諾和彼此的了解之上。因此，在還沒有到達這個階段之前，多多觀察你身邊可能的對象，以及擴大生活圈，會是投資自己較好的方式。換一個角度來說，你選擇了某一段感情，通常都是以結婚為最終目的，彷彿只要走進了婚姻，愛情就會完美，若是沒能到達這個目標，那麼這段感情就是失敗的；但若帶著這樣的想法來尋找愛情對向，往往沒辦法讓你專注於此時此刻愛情的進展，也許會過於害怕彼此尚未磨合的地方，使得完滿婚姻這個目標變得遙遙無期，建議先以平常心為出發點，多和身邊的人互動，專注在每個當下能夠努力的事情，會讓這段愛情更容易成功。
		</div>
	</div>
</div>
<div class="reportItem">
	<h3>次要的愛情風格：悲觀保留型</h3>
	<div class="reportDetial">
		<div class="script">
		你的愛情觀是比較悲觀的，不同於許多浪漫喜劇片當中詮釋的天長地久，你比較不相信永恆的愛情，也不把愛情視為生命中的唯一，對你而言，愛情是一個十分脆弱、沒有保證的東西，因此你總對愛情有所保留，不敢也不願意在親密關係當中投注太多的情感。對你而言，和愛情相比，你的事業、學業、金錢等等更為來的重要，因為這些是你能夠努力獲得的部分，但愛情卻往往得遷就於兩個人，因此和愛情相比，你反而更專注在你的事業上。然而，你對愛情悲觀保留的態度，也讓你常常在感情當中害怕付出、裹足不前，反而讓你的愛情之路走得更加不順遂，讓你更加深信愛情是不長久的。總結而言，悲觀保留型的人，比起愛情，他們更相信那些他們能夠主觀控制的事物，對愛情總是充滿不信任感。
		</div>
		<div class="title">給你的建議</div>
		<div class="script">
		確實，在感情世界裡，其實不存在所謂長久的激情，但是契合的兩個人，仍舊可以走得很久。而根據心理學家所說的「自我實現的預言」：我們怎麼思考，將會影響我們怎麼和這個世界互動，進而造就互動的結果；當我們帶著愛情不可靠的念頭來談戀愛時，自然而然的會在感情裡有所保留，而對方也將察覺到我們不願付出那麼多心力的情況，也就跟著不願意付出了，這段愛情也就自然而然地變得不可靠。長久的激情的確不存在，但若兩個人願意付出、誠意溝通，將協助彼此維持更長的感情生活。
		</div>
	</div>
</div>