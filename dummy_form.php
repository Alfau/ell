<?php 
	include 'connection.php';
	$query="SELECT DISTINCT Main_Category FROM product_categories";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result)){
		echo $row['Main_Category'];
	}
?>