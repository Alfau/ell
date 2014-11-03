function search(){
$('.search input').click(function(){
this.select();
});
$('.search span').click(function(){
	if($(this).hasClass("active")){
		searchapi();
		$(this).removeClass("active");
		$("nav#side input[type=text]").animate({"width":"0"}).css("padding-left","0");
	}else{
		$("nav#side input[type=text]").animate({"width":"200px"}).css("padding-left","0.5em");
		$(this).addClass("active");
	}
});
$('.search input').keyup(function(event){
if(event.keyCode == 13){
searchapi();
}
});
}
function searchapi(value){
if(!value){
var value = $('.search input').val();
}
else{
$('.search input').val(value);
}
$('.search input').blur();
$("div#loading_bar").animate({width:"100%"});
$("main").html('<div id=content><h2>Search Results</h2><ul class=searchresults>Searching</ul></div>');
$.getJSON("api.php",{term:value})
.done(function(json){
$("main").html('<div id=content><h2>Search Results</h2><ul class=searchresults></ul></div>');
var count = json.length;
if(count>0){
$.each(json,function(){
var result = '<li>';
result += '<a href="see_more.php?type='+this.Type+'&product_ID='+this.ID+'">';
result += '<img src="'+this.Thumbnail+'">';
result += '<span class=name>'+this.Name+'</span>';
result += '<span class=price>'+this.Price+'</span>';
result += '</a>';
result += '</li>';
$('main>div>ul').append(result);
});
}
else{
$('main>div>ul').html('No search results.');
}
}).always(function(){

$("main>div>ul>li>a").on("click",function(e){
anchor=$(this);
goToURL();
url_change();
e.preventDefault();
});
url_bar = "search?term="+value;
window.history.pushState({path:url_bar},'',url_bar);
var i = 1;
$("main>div>ul>li").each(function(){
var time = i*200;
$(this).show(time);
i++;
});
setTimeout(function(){
$("div#loading_bar").css("width","0");
},500);
});
}