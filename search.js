function search(){
$('.search input').click(function(){
this.select();
});
$('.search span').click(function(){
searchapi();
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
$("main").html('<div id=content><h3 style="margin:1em 0 0 2em">Search Results</h3><ul class=searchresults></ul></div>');
var count = json.length;
if(count>0){
$.each(json,function(){
var result = '<li>';
result += '<a href="see_more.php?product_type='+this.Type+'&product_ID='+this.ID+'">';
result += '<div class="similar_product_container" style="width:300px;height:150px;">';
result += '<div id="similar_products_image">';
result += '<img src="'+this.Thumbnail+'">';
result += '</div>';
result += '<div id="similar_products_info">';
result += '<div>';
result += '<span class=product_name_small>'+this.Name+'</span><br />';
result += '<span class=price>Rf. '+this.Price+'</span><br /><br />';
result += '<span class="details">Details</span>';
result += '</div>';
result += '</div>';
result += '</div>';
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