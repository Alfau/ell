$(document).ready(function(){
	
	$(document).on("click","div.manage_options a",function(e){
		$("div.manage_options a").removeClass("active");
		$(this).addClass("active");
		var url=$(this).prop("href");
		var how_manage=url.split("=")[1];
		
		$.get("dashboard_modify_mobile.php",{how_manage:how_manage},function(data){
			var content=$(data).find("div.manage_category").html();
			$("div.manage_options").after("<div class='manage_category'>"+content+"</div>"); // ugly code so change asap
			//$("div.manage_category").after("<div id='content'></div>");
		});
		e.preventDefault();
	});
	$(document).on("click","div.manage_category a",function(e){
		$("div.manage_category a").removeClass("active");
		$(this).addClass("active");
		var url=$(this).prop("href");
		
		var how_manage=(url.split("=")[1]).split("&")[0];
		var modify_mobile_category=(url.split("=")[2]).replace("%20"," ");
		
		$.get("dashboard_modify_mobile.php",{how_manage:how_manage,modify_mobile_category:modify_mobile_category},function(data){
			var content=$(data).find("div#content").html();
			$("div.manage_category").after("<div id='content'>"+content+"</div>");
		});
		e.preventDefault();
	});
});
