$(document).ready(function(){
	$(document).on("click","aside a",function(e){
		anchor=$(this);
		nav();
		e.preventDefault();
	});
	
	$(document).on("click","div.manage_options a,div.manage_category a",function(e){
		anchor=$(this);
		manage_products();
		e.preventDefault();
	});
	
	active_link();
	history_buttons();
});

function load_page(){
	$("span#loader").animate({width:"60%"});
	var url=anchor.prop("href");
	$.post(url,function(data){
		var content=$(data).filter("main").children();
		$("span#loader").animate({width:"100%"},function(){
			$("main").html(content);
			$("span#loader").css("width","0");
			active_link();
		});
	});
}

function nav(){
	$("aside a").removeClass("active");
	$(anchor).addClass("active");
	load_page();
	change_url();
}

function change_url(){
	var url_bar=(anchor.prop("href")).replace(".php","");
	if(url_bar!=window.location){
		window.history.pushState({path:url_bar},'',url_bar);
	}
	return false;
}

function history_buttons(){
	$(window).on("popstate",function(){
		$.post(window.location,function(data){
			var content=$(data).filter("main").children();
			$("main").html(content);
			active_link();
		});
	});
}

function manage_products(){
	$(anchor).closest("div").find("a").removeClass("active");
	$(anchor).addClass("active");
	
	var parent=$(anchor).closest("div");
	var url=$(anchor).prop("href");
	if($(parent).hasClass("manage_options")){
		var how_manage=url.split("=")[1];	
		$.get(url.split("?")[0],{how_manage:how_manage},function(data){
			var content=$(data).find("div.manage_category").html();
			if($("div.manage_category").length){
				$("div.manage_category").html(content);
			}else{
				$("div.manage_options").after("<div class='manage_category'>"+content+"</div>"); // ugly code so change asap
			}
		});
	}else{
		var how_manage=(url.split("=")[1]).split("&")[0];
		var category_value=(url.split("=")[2]).replace("%20"," ");
		$.get(url.split("?")[0],{how_manage:how_manage,modify_category:category_value},function(data){
			var content=$(data).find("div#content").html();
			if($("div#content").length){
				$("div#content").html(content);
			}else{
				$("div.manage_category").after("<div id='content'>"+content+"</div>");  //ugly code so change
			}
		});
	}
}

function active_link(){
	var url=document.URL;
	
	if(url.search("how_manage=add")!=-1){
		$("div.manage_options a").removeClass("active");
		$("div.manage_options a.add").addClass("active");
	}else if(url.search("how_manage=remove")!=-1){
		$("div.manage_options a").removeClass("active");
		$("div.manage_options a.remove").addClass("active");
	}
	
	if(url.search("modify_category")!=-1){
		var category=((url.split("=")[2]).toLowerCase()).replace("%20","_");
		$("div.manage_category a").removeClass("active");
		$("div.manage_category a."+category).addClass("active");
	}
	
	$("aside a").each(function(){
		var count=0;
		if(url+".php"==$(this).prop("href")){
			$("aside a").removeClass("active");
			$(this).addClass("active");
		}
	});
}
