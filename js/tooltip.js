	$(document).ready(function() {				
		$(".tooltip").mouseover(function(){
			$(this).mousemove(function(e){
				$(this).next().css({left : e.pageX , top: e.pageY});
			});
				eleOffset = $(this).offset();
				$(this).next().fadeIn("fast").css({	
				left: eleOffset.left + $(this).outerWidth(),
				top: eleOffset.top
				});
			}).mouseout(function(){
			$(this).next().fadeOut("fast");
		});			
	});		
