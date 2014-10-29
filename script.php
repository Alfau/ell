$(document).ready(function(){
	
	$("div#slideshow").load("slideshow.php",function(){
		$(this).children().hide().fadeIn("slow");
		$("div#slides div:eq(0) div").animate({bottom:"50%"},"slow",function(){
			$("div#slides p").animate({"opacity":"1"});
		});
	});
	
	$("div#slideshow_controls>span").click(function(){
		var slide_width=$("div#slideshow").width();
		var which_slide=$(this).index();
		var slide=$("div#slides>div:eq("+which_slide+")");
		
		$("div#slides>div").removeClass("active");
		$(slide).addClass("active");
		
		$(slide).children("div").css("bottom","-60%").children("p").css("opacity","0");
		
		$("div#slideshow_controls").find("span").removeClass("active").end().children("span:eq("+which_slide+")").addClass("active").children().addClass("active");
		$("div#slides>div>div").css("bottom","-60%").children("p").css("opacity","0");
		
		if($(slide).is(":first-child")){
			$("div#slides").animate({"margin-left":"0"},500,function(){
				
				$("div#slides>div:eq(0) div").animate({bottom:"50%"},800,function(){
					$("div#slides p").animate({"opacity":"1"});
				});
			});
		}else{
			$("div#slides").animate({"margin-left":"-"+(slide_width*which_slide)},500,function(){
				
				$(slide).children("div").animate({bottom:"50%"},800,function(){
					$("div#slides p").animate({"opacity":"1"});
				});
			});
		}
		clearInterval(slideshowTimer);
		startSlideshow();
	});
	
	$(document).on("mouseenter","div.carousel_product",function(){
		$(this).stop().animate({"margin-right":"1em"}).children("div.carousel_info").stop().animate({width:"150px",opacity:"1"});
	}).on("mouseleave","div.carousel_product",function(){
		$(this).stop().animate({"margin-right":"6em"}).children("div.carousel_info").stop().animate({width:"0",opacity:"0"});
	});
	
	
	$(document).on("click","nav a",function(e){
		anchor=$(this);
		nav();
		url_change();
		e.preventDefault();
	});
	
	$(document).on("click","div.products_carousel a, div#products_by_brand a",function(e){
		anchor=$(this);
		goToURL();
		url_change();
		e.preventDefault();
	});
	startSlideshow();
	scrollbar();
});
history_buttons();

var slideshowTimer;
function startSlideshow(){
	slideshowTimer=setInterval(triggerSlide,5000);
}

function triggerSlide(){
	if($("div#slides div.active").length===0){
		$("div#slides div:first-child").addClass("active");
	}
	
	var slide_width=$("div#slideshow").width();
	var current_active=$("div#slides div.active");
	var which_slide=$(current_active).index();
	
	
	if($(current_active).is(":last-child")){
		$("div#slides>div").removeClass("active").first().addClass("active");
		
		$("div#slideshow_controls").find("span").removeClass("active").end().children("span:first-child").addClass("active").children().addClass("active");
		
		$("div#slides>div").first().children("div").css("bottom","-60%").children("p").css("opacity","0");
		
		$("div#slides").animate({"margin-left":"0"},500,function(){
			$("div#slides>div:eq(0) div").animate({bottom:"50%"},800,function(){
				$("div#slides p").animate({"opacity":"1"});
			});
		});
	}else{			
		$(current_active).removeClass("active").next().addClass("active");
		
		$("div#slideshow_controls").find("span").removeClass("active").end().children("span:eq("+which_slide+")").next().addClass("active").children().addClass("active");
		
		$(current_active).next().children("div").css("bottom","-60%").children("p").css("opacity","0");
		
		$("div#slides").animate({"margin-left":"-"+slide_width*(which_slide+1)},500,function(){
			$(current_active).next().children("div").animate({bottom:"50%"},800,function(){
				$("div#slides p").animate({"opacity":"1"});
			});
		});
	}
}

function scrollbar(){
	$("div.products_carousel").perfectScrollbar({
		suppressScrollY:true
	});
}

function nav(){
	$("nav a").removeClass("active");
	$(anchor).addClass("active");
	
	$("div#loading_bar").animate({width:"60%"});
	
	var url=$(anchor).prop("href");
	$.post(url,function(data){
		$("div#loading_bar").animate({width:"100%"},function(){
			$("div#loading_bar").css("width","0");
			
			if($(anchor).parents("nav#main_sub").length){
				var content=$(data).find("div#mobile_brands").html();
				$("div#mobile_brands").html(content);
			}else{
				var content=$(data).filter("main").html();
				$("main").html(content);
			}
			scrollbar();
			
			var if_location=url.split("/");
			if(if_location.slice(-1)[0]=="locations.php"){
				initialize();
			}
		});
	});
}

function goToURL(){
	$("div#loading_bar").animate({width:"60%"});
		
	var url=$(anchor).prop("href");
	$.get(url,function(data){
		$("div#loading_bar").animate({width:"100%"},function(){
			$("div#loading_bar").css("width","0");
			var content=$(data).filter("main").html();
			$("main").html(content);
		});
	});
};

function url_change(){
	var url_bar=(anchor.prop("href")).replace(".php","");
	if(url_bar!=window.location){
		window.history.pushState({path:url_bar},'',url_bar);
	}
	return false;
}

function history_buttons(){
	$(window).on("popstate",function(){
		$("div#loading_bar").animate({width:"60%"});
		$.post(window.location,function(data){
			$("div#loading_bar").animate({width:"100%"},function(){
				$("div#loading_bar").css("width","0");
				var content=$(data).filter("main");
				$("main").html(content);
				
				active_link();
			});
		});
	});
}

function active_link(){
	var url=document.URL;
	
	$("nav a").each(function(){
		if(url+".php"==$(this).prop("href")){
			$("nav a").removeClass("active");
			$(this).addClass("active");
		}
	});
}

function scrollbar(){
	$("div.products_carousel").perfectScrollbar({
		suppressScrollY:true
	});
}

function initialize(){
	var mapCanvas = document.getElementById('map_canvas');
    var mapOptions = {
      center: new google.maps.LatLng(4.175134, 73.510372),
      zoom: 15,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);
      <?php
      	include("connection.php");
      	
      	$query="SELECT * FROM locations";
      	$result=mysqli_query($con,$query);
      	
      	while($row=mysqli_fetch_array($result)){
      		?>
      		
		      var marker = new google.maps.Marker({
			      position: new google.maps.LatLng(<?php echo $row['Latitude'].",".$row['Longitude'] ?>),
			      map: map,
			      title: "<?php echo $row['Name'] ?>"
			  });
			  var marker = new google.maps.Marker({
			      position: new google.maps.LatLng(<?php echo $row['Latitude'].",".$row['Longitude'] ?>),
			      map: map,
			      title: "<?php echo $row['Name'] ?>"
			  });
			  var marker = new google.maps.Marker({
			      position: new google.maps.LatLng(<?php echo $row['Latitude'].",".$row['Longitude'] ?>),
			      map: map,
			      title: "<?php echo $row['Name'] ?>"
			  });
			  var marker = new google.maps.Marker({
			      position: new google.maps.LatLng(<?php echo $row['Latitude'].",".$row['Longitude'] ?>),
			      map: map,
			      title: "<?php echo $row['Name'] ?>"
			  });
      		
      		<?php
      	}
      ?>
}
