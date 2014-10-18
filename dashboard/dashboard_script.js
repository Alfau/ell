$(document).ready(function(){
	$(document).on("click","div.manage_options a",function(e){
		$("div.manage_options a").removeClass("active");
		$(this).addClass("active");
		var url=$(this).prop("href");
		how_manage=url.split("=")[1]; //global variable is ugly
		
		$.get("dashboard_modify_mobile.php",{how_manage:how_manage},function(data){
			var content=$(data).find("div.manage_category").parent().html();
			$("div.manage_options").after(content);
		});
		e.preventDefault();
	});
	$(document).on("click","div.manage_category a",function(e){
		$("div.manage_category a").removeClass("active");
		$(this).addClass("active");
		var url=$(this).prop("href");
		var modify_mobile_category=url.split("=")[2];
		
		alert(modify_mobile_category);
		
		$.get("dashboard_modify_mobile.php",{how_manage:how_manage,modify_mobile_category:modify_mobile_category},function(data){
			var content=$(data).find("div#content").html();
			$("div#content").html(content);
		});
		e.preventDefault();
	});
});
