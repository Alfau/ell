$(document).ready(function(){
	$(document).on("click","nav#side a",function(e){
		$("navz a").removeClass("active");
		$(this).addClass("active");
		
		var file=$(this).prop("href");
		$.post(file,function(data){
			var content=$(data).filter("main").html();
			$("main").html(content);
		});
		e.preventDefault();
	});
	
	$(document).on("click","nav#main a",function(e){
		$("nav a").removeClass("active");
		$(this).addClass("active");
		
		var file=$(this).prop("href");
		$.post(file,function(data){
			var content=$(data).filter("main").html();
			$("main").html(content);
		});
		e.preventDefault();
	});
	
	$("nav#main a.white").hover(function(){
		$("nav#main a.orange").stop().slideToggle();
	});
	
	function triggerSlide(){
		if($("div#slides div.active").length===0){
			$("div#slides div:first-child").addClass("active");
		}
		var slide_width=$("div#slideshow,div#slideshow_see_more").width();
		var current_active=$("div#slides div.active");
		var which_slide=$(current_active).index();
		if($(current_active).is(":last-child")){
			$(current_active).removeClass("active");
			$("div#slides div").first().addClass("active");
			$("div#slides>div>div").css("bottom","-60%");
			$("div#slides").animate({"margin-left":"0"},500,function(){
				$("div#slides p").hide();
				$("div#slides>div:eq(0) div").animate({bottom:"50%"},"slow",function(){
					$("div#slides p").fadeIn("slow");
				});
			});
		}else{			
			$("div#slides").animate({"margin-left":"-"+slide_width*(which_slide+1)},500,function(){
				$("div#slides>div>div").css("bottom","-60%");
				$("div#slides p").hide();
				$(current_active).removeClass("active");
				$(current_active).next().addClass("active");
				(current_active).next().children("div").animate({bottom:"50%"},"slow",function(){
					$("div#slides p").fadeIn("slow");
				});
			});
		}
	}
	setInterval(function(){
		triggerSlide();
	},5000);
	
	$("div#slideshow_controls a").click(function(){
		var slide_width=$("div#slideshow").width();
		var which_slide=$(this).index();
		var slide=$("div#slides div:eq("+which_slide+")");
		
		$("div#slides div").removeClass("active");
		$(slide).addClass("active");
		
		if($(slide).is(":first-child")){
			$("div#slides").animate({"margin-left":"0"},500);
		}else{
			$("div#slides").animate({"margin-left":"-"+slide_width*which_slide},500);
		}
	});
	
	
	
	$(document).on("mouseenter","div.products_carousel div",function(){
		$(this).children("div").stop().slideDown("fast");
	});
	$(document).on("mouseleave","div.products_carousel div",function(){
		$(this).children("div").stop().slideUp("fast");
	});
	
	$(document).on("click","div.products_carousel div a",function(e){
		e.preventDefault();
		var type=$(this).prop("class");
		var product_ID=$(this).prop("id");
		
		$.post("see_more.php",{type:type,product_ID:product_ID},function(data){
			var content=$(data).filter("main").html();
			$("main").html(content);
		});
	});
	
	$(document).on("click","div.products_carousel>a",function(e){
		e.preventDefault();
		var which=$(this).prop("class");
		var brand=$(this).prop("id");
		
		$.post("by_brand.php",{which:which,brand:brand},function(data){
			var content=$(data).filter("main").html();
			$("main").html(content);
		});
	});
});
