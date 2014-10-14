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
			
			$(current_active).next().children("div").css("bottom","-60%");
			$(current_active).next().find("p").hide();
			
			$("div#slides").animate({"margin-left":"-"+slide_width*(which_slide+1)},500,function(){
				$(current_active).next().children("div").animate({bottom:"50%"},"slow",function(){
					$("div#slides p").fadeIn("slow");
				});
			});
		}
	}
	
	var slideshowTimer;
	function startSlideshow(){
		slideshowTimer=setInterval(triggerSlide,5000);
	}
	startSlideshow();
	
	$("div#slideshow_controls a").click(function(){
		var slide_width=$("div#slideshow").width();
		var which_slide=$(this).index();
		var slide=$("div#slides>div:eq("+which_slide+")");
		
		$("div#slides>div").removeClass("active");
		$(slide).addClass("active");
		
		$(slide).children("div").css("bottom","-60%");
		$(slide).children("p").hide();
		
		if($(slide).is(":first-child")){
			$("div#slides").animate({"margin-left":"0"},500,function(){
				$("div#slides>div>div").css("bottom","-60%");
				$("div#slides p").hide();
				
				$("div#slides>div:eq(0) div").animate({bottom:"50%"},"slow",function(){
					$("div#slides p").fadeIn("slow");
				});
			});
		}else{
			$("div#slides").animate({"margin-left":"-"+slide_width*which_slide},500,function(){
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
	
	
	
	$(document).on("click","nav#side a",function(e){
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
		
		var product_type=$(this).prop("id");
		$.get("mobile.php",{product_type:product_type},function(data){
			$("div#loading_bar").animate({width:"100%"},function(){
				$("div#loading_bar").css("width","0");
				var content=$(data).find("div#mobile_brands").html();
				$("div#mobile_brands").html(content);
			});
		});
	});
	
	
	$(document).on("mouseenter","div.products_carousel div",function(){
		$(this).children("div").stop().slideDown("fast");
	});
	$(document).on("mouseleave","div.products_carousel div",function(){
		$(this).children("div").stop().slideUp("fast");
	});
	
	
	$(document).on("click","div.products_carousel div a,div#products_by_brand a",function(e){
		e.preventDefault();
		var type=$(this).prop("class");
		var product_ID=$(this).prop("id");

		$("div#loading_bar").animate({width:"60%"});
		
		$.post("see_more.php",{type:type,product_ID:product_ID},function(data){
			$("div#loading_bar").animate({width:"100%"},function(){
				$("div#loading_bar").css("width","0");
				var content=$(data).filter("main").html();
				$("main").html(content);
			});
		});
	});
	
	$(document).on("click","div.products_carousel>a",function(e){
		e.preventDefault();
		var which=$(this).prop("class");
		var brand=$(this).prop("id");
		
		$("div#loading_bar").animate({width:"60%"});
		
		$.get("by_brand.php",{which:which,brand:brand},function(data){
			$("div#loading_bar").animate({width:"100%"},function(){
				$("div#loading_bar").css("width","0");
				var content=$(data).filter("main").html();
				$("main").html(content);
			});
		});
	});
});
