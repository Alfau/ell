<?php
include('connection.php');
$request=substr($_SERVER['REQUEST_URI'],strlen($front),-1);
if($request=="")
include('index.php');
else{
$query="SELECT ID,Type FROM products WHERE perm='$request'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
if(count($row)==0)
	include('404.php');
else{
	$id = $row["ID"];
	$type = $row["Type"];
	$link = "see_more.php?type=$type&product_ID=$id";
	header('Location: ../'.$link);
}
}
?>