$(document).ready(function(){
	$(document).on("click","div#manage_options a",function(e){
		$("div#manage_options a").removeClass("active");
		$(this).addClass("active");
		var url=$(this).prop("href");
		var how_manage=url.split("=")[1];
		
		$.get("dashboard_modify_mobile.php",{how_manage:how_manage},function(data){
			var content=$(data).find("div#content").html();
			$("main").children("div#content").html(content);
		});
		e.preventDefault();
	});
});
