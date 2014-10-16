div.products_carousel{
	padding:1em 0 2em 0;
	/*border-top:solid 1px #bbbdbf;*/
	width:100%;
	overflow-x:scroll;
	white-space: nowrap;
}
div.products_carousel>div{
	display:inline-block;
	vertical-align:top;
	width:150px;
	margin:2em 6em 0 0;
	position:relative;
}
div.products_carousel img{
	display:block;
	margin:auto;
}
div.products_carousel>div>div{
	width:100%;
	/*height:100%;
	background-color:rgba(0,0,0,0.5);*/
	position:absolute;
	top:0;
	display:none;
}
div.products_carousel>a:first-child{
	display:block;
	text-transform:uppercase;
	text-decoration:none;
	color:#6d6e71;
	font-size:1.2em;
	transition:color 0.3s;
}
div.products_carousel div div a{
	white-space:normal;
	box-sizing:border-box;
	width:100%;
	text-decoration:none;
	color:#fff;
	padding:0.5em;
	text-align:center;
	background-color:#FF6602;
	position:absolute;
}
/*div.products_carousel div a:last-child{
	bottom:0;
}*/
div.products_carousel>a:hover{
	color:#FF6602;
}