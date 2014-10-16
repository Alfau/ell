$(document).ready(function(){
	
	function triggerSlide(){
		if($("div#slides div.active").length===0){
			$("div#slides div:first-child").addClass("active");
		}
		
		var slide_width=$("div#slideshow,div#slideshow_see_more").width();
		var current_active=$("div#slides div.active");
		var which_slide=$(current_active).index();
		
		if($(current_active).is(":last-child")){
			$(current_active).removeClass("active");
			$("div#slides>div").first().addClass("active");
			
			$("div#slideshow_controls span").removeClass("active");
			$("div#slideshow_controls>span").first().addClass("active");
			$("div#slideshow_controls>span").first().children("span").addClass("active");
			
			$("div#slides>div").first().children("div").css("bottom","-60%");
			$("div#slides>div").first().find("p").hide();
			
			$("div#slides").animate({"margin-left":"0"},500,function(){
				$("div#slides>div:eq(0) div").animate({bottom:"50%"},"slow",function(){
					$("div#slides p").fadeIn("slow");
				});
			});
		}else{			
			$(current_active).removeClass("active");
			$(current_active).next().addClass("active");
			
			$("div#slideshow_controls span").removeClass("active");
			$("div#slideshow_controls>span:eq("+which_slide+")").next().addClass("active");
			$("div#slideshow_controls>span:eq("+which_slide+")").next().children("span").addClass("active");
			
			$(current_active).next().children("div").css("bottom","-60%");
			$(current_active).next().find("p").hide();
			
			$("div#slides").animate({"margin-left":"-"+slide_width*(which_slide+1)},500,function(){
				$(current_active).next().children("div").animate({bottom:"50%"},"slow",function(){
					$("div#slides p").fadeIn("slow");
				});
			});
		}
	}
	
	$("div#slideshow_controls>span").click(function(){
		var slide_width=$("div#slideshow").width();
		var which_slide=$(this).index();
		var slide=$("div#slides>div:eq("+which_slide+")");
		
		$("div#slides>div").removeClass("active");
		$(slide).addClass("active");
		
		$(slide).children("div").css("bottom","-60%");
		$(slide).children("p").hide();
		
		$("div#slideshow_controls span").removeClass("active");
		$("div#slideshow_controls>span:eq("+which_slide+")").addClass("active");
		$("div#slideshow_controls>span:eq("+which_slide+")").children("span").addClass("active");
		
		if($(slide).is(":first-child")){
			$("div#slides").animate({"margin-left":"0"},500,function(){
				$("div#slides>div>div").css("bottom","-60%");
				$("div#slides p").hide();
				
				$("div#slides>div:eq(0) div").animate({bottom:"50%"},"slow",function(){
					$("div#slides p").fadeIn("slow");
				});
			});
		}else{
			$("div#slides").animate({"margin-left":"-"+(slide_width*which_slide)},500,function(){
				$("div#slides>div>div").css("bottom","-60%");
				$("div#slides p").hide();
				
				$(slide).children("div").animate({bottom:"50%"},"slow",function(){
					$("div#slides p").fadeIn("slow");
				});
			});
		}
		clearInterval(slideshowTimer);
		startSlideshow();
	});
	
	var slideshowTimer;
	function startSlideshow(){
		slideshowTimer=setInterval(triggerSlide,5000);
	}
	startSlideshow();
	
	$("div#slides div:eq(0) div").animate({bottom:"50%"},"slow",function(){
		$("div#slides p").fadeIn("slow");
	});
	
	
	$(document).on("mouseenter","div.products_carousel div",function(){
		$(this).children("div").stop().fadeIn("fast");
	}).on("mouseleave","div.products_carousel div",function(){
		$(this).children("div").stop().fadeOut("fast");
	});
	
	$(document).on("click","nav#side a",function(e){
		$("nav a").removeClass("active");
		$(this).addClass("active");
		
		$("div#loading_bar").animate({width:"60%"});
		
		var url=$(this).prop("href");
		$.post(url,function(data){
			$("div#loading_bar").animate({width:"100%"},function(){
				$("div#loading_bar").css("width","0");
				var content=$(data).filter("main").html();
				$("main").html(content);
			});
		});
		e.preventDefault();
	});
	
	$(document).on("click","nav#main a",function(e){
		$("nav a").removeClass("active");
		$(this).addClass("active");
		
		$("div#loading_bar").animate({width:"60%"});
		
		var file=$(this).prop("href");
		$.post(file,function(data){
			$("div#loading_bar").animate({width:"100%"},function(){
				$("div#loading_bar").css("width","0");
				var content=$(data).filter("main").html();
				$("main").html(content);
			});
		});
		e.preventDefault();
	});
	
	$(document).on("click","nav#main_sub a",function(e){
		e.preventDefault();
		$("nav#main_sub a").removeClass("active");
		$(this).addClass("active");
		
		$("div#loading_bar").animate({width:"60%"});
		
		var url=$(this).prop("href");
		$.get(url,function(data){
			$("div#loading_bar").animate({width:"100%"},function(){
				$("div#loading_bar").css("width","0");
				var content=$(data).find("div#mobile_brands").html();
				$("div#mobile_brands").html(content);
			});
		});
	});
	
	$(document).on("click","div.products_carousel div a,div#products_by_brand a",function(e){
		e.preventDefault();

		$("div#loading_bar").animate({width:"60%"});
		
		var url=$(this).prop("href");
		$.get(url,function(data){
			$("div#loading_bar").animate({width:"100%"},function(){
				$("div#loading_bar").css("width","0");
				var content=$(data).filter("main").html();
				$("main").html(content);
			});
		});
	});
	
	$(document).on("click","div.products_carousel>a",function(e){
		e.preventDefault();
		
		$("div#loading_bar").animate({width:"60%"});
		
		var url=$(this).prop("href");
		$.get(url,function(data){
			$("div#loading_bar").animate({width:"100%"},function(){
				$("div#loading_bar").css("width","0");
				var content=$(data).filter("main").html();
				$("main").html(content);
			});
		});
	});
});
