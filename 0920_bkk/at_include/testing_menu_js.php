			var Gww = $(window).width(),
				$testingPad = $('.testingMenu'),
				$testingMenu = $('.testingMenu > ul'),
				$testingMenuList = $testingMenu.find('li'),
				$testingMenuLi_w = $testingMenuList.width(),
				$testingMenu_w = 0,
				$limit = 0;
			for (var i=0; i < $testingMenuList.length; i++){
				$testingMenu_w += $testingMenuList.eq(i).width();
				$limit = $testingMenu_w - Gww;
			}
			if ($limit > 0) {
				$testingPad.addClass('Left');
				$testingMenu.css({'width':$testingMenu_w+50});
				$('.testingMenu nav').click(function(){testing('Left');});
				$testingMenu.touchwipe({
					wipeLeft: function() {testing('Left')},
					wipeRight: function() {testing('')},
					preventDefaultEvents: true							
				});	
			}
			function testing(distan) {
				var $now = parseInt($testingMenu.css('margin-left'));
				if (distan === 'Left' && $now >= ( 0 - $limit)) {
					$testingMenu.stop().animate({marginLeft: $now - $testingMenuLi_w});
				} else if ($now < 0){
					$testingMenu.stop().animate({marginLeft: 0});
				}
				
			}