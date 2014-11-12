$(document).ready(function(){
	
	search();
	
	$("div#slideshow").load("slideshow.php",function(){
		$(this).children().hide().fadeIn("slow");
		$("div#slides div:eq(0) div").animate({bottom:"50%"},"slow",function(){
			$("div#slides p").animate({"opacity":"1"});
		});
	});
	
	$(document).on("click","div#slideshow_controls>span",function(){
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
	
	// if(window.innerWidth > 500){
		// $(document).on("mouseenter","div.carousel_product",function(){
			// $(this).stop().animate({"margin-right":"1em"}).children("div.carousel_info").stop().animate({width:"150px",opacity:"1"},function(){
				// $(this).css("white-space","normal");
			// });
		// }).on("mouseleave","div.carousel_product",function(){
			// $(this).stop().animate({"margin-right":"6em"}).children("div.carousel_info").stop().animate({width:"0",opacity:"0"}).css("white-space","nowrap");
		// });
	// }
	
	$(document).on("click","nav a",function(e){
		anchor=$(this);
		nav();
		url_change();
		//ajax_pagination("horizontal",document.URL);   
		e.preventDefault();
	});
	
	$(document).on("click","div.products_carousel a, div#products_by_brand a,div#mobile_brands>a",function(e){
		anchor=$(this);
		get_from_page();
		url_change();
		///ajax_pagination("vertical",document.URL);
		e.preventDefault();
	});
	
	/*mobile*/
	$(document).on("click","nav#mobile_header a#menu,nav#mobile_header a#search",function(){
		function switch_svg_class(active_img,passive_img){
			if($("<b></b>").addClass($(active_img).attr("class")).hasClass("active")){ //workaround because jquery cant detect svg classes
				$(active_img).attr("class",active_img.split(".")[1]);
			}else{
				$(active_img).attr("class",active_img.split(".")[1]+" active");
			}
			$(passive_img).attr("class",passive_img.split(".")[1]);
		}
		
		if($(this).is("#menu")){
			$("nav#mobile_search").slideUp();
			$("nav#main").slideToggle();
			switch_svg_class(".menu_svg",".search_svg");
		}else{
			$("nav#main").slideUp();
			$("nav#mobile_search").slideToggle();
			switch_svg_class(".search_svg",".menu_svg");
		}
	});
	
	$(document).on("change","div#filter_brands select, div#sort_products select",function(){
		var filter_brands=$("div#filter_brands select option").filter(":selected").val();
		var sort_products=$("div#sort_products select option").filter(":selected").val();
		//var product_type=$("div#filter_brands select").attr("class");
		url_change(document.URL+"&filter_brands="+filter_brands+"&sort_products="+sort_products);
		$.get(document.URL,{filter_brands:filter_brands, sort_products:sort_products},function(data){
			var content=$(data).find("div.products_wrapper").children();
			$("div#mobile_brands div.products_carousel").slice(1).remove();
			$("div.products_wrapper").html(content);
			ajax_pagination("mobile",document.URL);
		});
	});
	
	ajax_pagination("horizontal",document.URL);
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
	
	var slide_width=$("div#slideshow,div#slideshow_see_more").width();
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

function ajax_pagination(type,url){
	page_count=2;
	if(type=="horizontal"){
		$('div.products_carousel').scroll( function() {
			screen_width=$(this).width();
			wrapper_width=$(this).children("div.products_wrapper").width();
			var carousel_which=$(this).children("div.products_wrapper").attr("id");
	        if($(this).scrollLeft() == (wrapper_width-screen_width)){
	        	$(window).unbind("scroll");
	        	$.get(url,{page:page_count},function(data){
	        		var content=$(data).find("div.products_wrapper").children();
	        		$("div#"+carousel_which).append(content);
	        		page_count++;
	        		wrapper_width=$("div.products_wrapper").width();
	        		ajax_pagination("horizontal",document.URL);
	        	});
	        }
	    });
	}else if(type=="vertical"){
		$(window).scroll( function() {
			document_height=$(document).height();
			window_height=$(window).height();
		    if($(this).scrollTop() + window_height == document_height){
		    	$(window).unbind("scroll");
		    	$.get(url,{page:page_count},function(data){
		    		var content=$(data).find("div#products_by_brand").children();
		    		$("div#products_by_brand").append(content);
		    		page_count++;
		    		ajax_pagination("vertical",document.URL);
		    	});
		    }
		});
	}else if(type=="mobile"){
		$(window).scroll( function() {
			document_height=$(document).height();
			window_height=$(window).height();
		    if($(this).scrollTop() + window_height == document_height){
		    	$(window).unbind("scroll");
		    	$.get(url,{page:page_count},function(data){
		    		var content=$(data).find("div.products_wrapper").children();
		    		$("div.products_wrapper").append(content);
		    		page_count++;
		    		ajax_pagination("mobile",document.URL);
		    	});
		    }
		});
	}
}
		
function nav(){
	$("nav a").removeClass("active");
	anchor.addClass("active");
	
	if(!anchor.is("#menu") && !anchor.is("#search")){
		if(anchor.hasClass("main")){
			if(anchor.siblings("ul").length && window.innerWidth < 500){
				anchor.siblings("ul").slideToggle();
			}else{
				get_page();
				mobile_nav_neutral();
			}
		}else if(anchor.hasClass("main_sub")){
			get_page();
			mobile_nav_neutral();
		}else{
			get_page();
		}
	}
	function mobile_nav_neutral(){
		if(window.innerWidth < 500){
			$("nav#main,nav#main li ul,nav#mobile_search").slideUp();
			$(".menu_svg").attr("class","menu_svg");
		}
	}
}

function get_page(){
	var url=$(anchor).prop("href");
	$("div#loading_bar").animate({width:"60%"});
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
			
			window.innerHeight < 500 ? ajax_pagination("mobile",document.URL) : ajax_pagination("horizontal",document.URL);
			
			var if_location=url.split("/");
			if(if_location.slice(-1)[0]=="locations.php"){
				initialize();
			}
		});
	});
}

function get_from_page(){
	$("div#loading_bar").animate({width:"60%"});
		
	var url=$(anchor).prop("href");
	$.get(url,function(data){
		$("div#loading_bar").animate({width:"100%"},function(){
			$("div#loading_bar").css("width","0");
			var content=$(data).filter("main").html();
			$("main").html(content);
			
			window.inneHeight < 500 ? ajax_pagination("mobile",document.URL) : ajax_pagination("vertical",document.URL);
		});
	});
};

function url_change(url_bar){
	if(url_bar === undefined){
		var url_bar=(anchor.prop("href")).replace(".php","");
	}
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
      	$x=1;
      	while($row=mysqli_fetch_array($result)){
      		?>
      		  var geocoder=new google.maps.Geocoder();
      		  var point = new google.maps.LatLng(<?php echo $row['Latitude'].",".$row['Longitude'] ?>);
			  geocoder.geocode({ 'latLng': point }, function (results, status) {
			    // This is checking to see if the Geoeode Status is OK before proceeding
			  if (status == google.maps.GeocoderStatus.OK) {
			      console.log(results);
			      var address = (results[0].formatted_address);
			      
			      var address=address.split(",");
			      
			  var marker_<?php echo $x ?> = new google.maps.Marker({
			      position: new google.maps.LatLng(<?php echo $row['Latitude'].",".$row['Longitude'] ?>),
			      map: map,
			      title: "<?php echo $row['Name'] ?>"
			  });
			  var infowindow_<?php echo $x ?> = new google.maps.InfoWindow({
				  content:"<div id='info_window'><b><?php echo $row['Name'] ?></b><br />"+address[0]+"<br />"+address[1]+","+address[2]+"</div>"
			  });
			  
       		  google.maps.event.addListener(marker_<?php echo $x ?>, 'click', function() {
			      infowindow_<?php echo $x ?>.open(map,marker_<?php echo $x ?>);
			  });
			      
			  }
			  });

      		<?php
      		$x++;
      	}
      ?>
      
      
}
