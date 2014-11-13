<?php
include("connection.php");
		
$query="SELECT Sub_Category FROM product_categories WHERE Main_Category='Mobile'";
$result=mysqli_query($con,$query);
print_r(mysqli_fetch_assoc($result));
?>