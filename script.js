$(document).ready(function(){
	
	function initialize() {
	var mapCanvas = document.getElementById('map_canvas');
	    var mapOptions = {
	      center: new google.maps.LatLng(4.175134, 73.510372),
	      zoom: 15,
	      mapTypeId: google.maps.MapTypeId.ROADMAP
	    };
	    var map = new google.maps.Map(mapCanvas, mapOptions);
	    
	      var marker = new google.maps.Marker({
		      position: new google.maps.LatLng(4.174885, 73.513231),
		      map: map,
		      title: 'Ell Mobile'
		  });
		  var marker = new google.maps.Marker({
		      position: new google.maps.LatLng(4.174899, 73.513258),
		      map: map,
		      title: 'Ell Mobile 2'
		  });
		  var marker = new google.maps.Marker({
		      position: new google.maps.LatLng(4.175779, 73.503657),
		      map: map,
		      title: 'Ell Mobile 3'
		  });
		  var marker = new google.maps.Marker({
		      position: new google.maps.LatLng(4.178260, 73.509377),
		      map: map,
		      title: 'Ell Mobile 4'
		  });
	  }
	
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
	
	$(document).on("mouseenter","div.products_carousel div.carousel_product",function(){
		$(this).stop().animate({"margin-right":"1em"});
		$(this).children("div.carousel_info").stop().animate({width:"150px",opacity:"1"});
	}).on("mouseleave","div.products_carousel div.carousel_product",function(){
		$(this).stop().animate({"margin-right":"6em"});
		$(this).children("div.carousel_info").stop().animate({width:"0",opacity:"0"});
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
				
				var if_location=url.split("/");
				if(if_location.slice(-1)[0]=="locations.php"){
					initialize();
				}
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
				scrollbar();
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
				scrollbar();
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
	
	scrollbar();
	
	$(".ps-container .ps-scrollbar-x").on("mousedown",function(){
		$(this).css("opacity","1");
	});
});

function scrollbar(){
	$("div.products_carousel").perfectScrollbar({
		suppressScrollY:true
	});
}
