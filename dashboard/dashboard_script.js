$(document).ready(function(){
	$("aside ul li a").click(function(){
		$(this).siblings("ul").slideToggle();
	});
	
	/*$("aside li li a").click(function(){
		var modify=$(this).prop("class");
		$.post("dashboard_modify_forms.php",{modify:modify},function(data){
			$("main").html(data);
		});
	});*/
	
	/*$("main").on("submit","form",function(e){
		e.preventDefault();
		
		var add_what=$("input[name='add_what']").val();
		var brand=$("select[name='brand']").val();
		var name=$("input[name='name']").val();
		var price=$("input[name='price']").val();

		if(add_what=="add_mobile_accessories"){
			var type=$("select[name='type']").val();
			$.post("dashboard_modify_handler.php",{add_what:add_what,brand:brand,type:type,name:name,price:price},function(data){
				$("span.status").html(data);
			});
		}else{
			$.post("dashboard_modify_handler.php",{add_what:add_what,brand:brand,name:name,price:price},function(data){
				$("span.status").html(data);
			});
		}
	});*/
});
