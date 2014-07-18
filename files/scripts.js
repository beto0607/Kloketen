
	$(document).ready(function(){

	
		$("#contenido").fadeIn(1000);
		
		$(".relato b").click(function(){
			$(this).parents(".relato").fadeOut(1000, function(){
				$(this).removeClass("actual");
				$(this).next().fadeIn(1000).addClass("actual");
				if($(this).next().hasClass("ultimo")){

					timer();
				}
			});
		});
		
		function animarMascara(){
			$("#bg img:eq(1)").animate({opacity : 0.6}, 1500);
			$("#mascara").animate({"top" : -50}, 1500, function(){
				$("#bg img:eq(1)").animate({opacity : 1}, 1500);
				$("#mascara").animate({"top" : 0}, 1500);
				timer();
			});
		}
		
		var timeout;

		function timer() {
			timeout = window.setTimeout(animarMascara, 0);
		}
		
		function clearTimer() {
			window.clearTimeout(timeout);
		}
				
		$("#mascara").click(function(event){
			event.preventDefault();
			$("#audio audio:eq(1)")[0].play();
		});
				
		$("#flecha").click(function(event){
			event.preventDefault();
			clearTimer();
			$("#flecha").animate({opacity: 0}, 1000);
			//$("#bg img:eq(2)").animate({opacity : 0}, 1500);
			$("#logo").fadeOut(1000);
			$(".relato.actual").fadeOut(1000, function(){
				$(this).removeClass("actual");
				$(".relato.primero").fadeIn(1000).addClass("actual");
			});
		});
		
		$("#flecha").hover(function() {
			$(this).animate({opacity : 1}, 200);
		}, function(){
			$(this).animate({opacity : 0.5}, 200);
		});
		
		$("#control-audio").click(function(event){
			event.preventDefault();
			if($(this).hasClass("pausado")){
				$(this).removeClass("pausado");
				$("#audio audio:eq(0)").animate({volume: 1}, 1000);
			} else {
				$(this).addClass("pausado");
				$("#audio audio:eq(0)").animate({volume: 0}, 1000);
			}
		});
			
    });