$(document).ready(function(){
$("aside li li a").click(function(){
	$(this).parent("li").children("ul").slideToggle();
});
});
