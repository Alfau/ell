<?php
if(isset($_POST['add_what'])){
	include("../connection.php");
	
	$add_what=$_POST['add_what'];
	$name=$_POST['name'];
	$price=$_POST['price'];
	
	$temp_filename=$_FILES['image_thumbnail']['tmp_name'];
	$original_filename=$_FILES['image_thumbnail']['name'];
	$new_filename=md5($original_filename).mt_rand().".jpg";//change to allow more image types
	$destination="../image_thumbnails/".$new_filename;
	$image_path="image_thumbnails/".$new_filename;
	move_uploaded_file($temp_filename, $destination);
	
	if($add_what=="add_mobile_phones"){
		$brand=$_POST['brand'];
		$desc=$_POST['desc'];
		$specs=$_POST['specs'];
		$query_product="INSERT INTO products(type,brand,name,price,description,specifications,thumbnail) VALUES('Mobile Phones','$brand','$name','$price','$desc','$specs','$image_path')";
	}elseif($add_what=="add_tablets"){
		$brand=$_POST['brand'];
		$desc=$_POST['desc'];
		$specs=$_POST['specs'];	
		$query_product="INSERT INTO products(type,brand,name,price,description,specifications,thumbnail) VALUES('Tablets','$brand','$name','$price','$desc','$specs','$image_path')";
	}elseif($add_what=="add_mobile_accessories"){
		$brand=$_POST['brand'];
		$category=$_POST['category'];
		$query_product="INSERT INTO products(type,category,brand,name,price,thumbnail) VALUES('Mobile Accessories','$category','$brand','$name','$price','$image_path')";
	}
	
	if(!mysqli_query($con,$query_product)){
		echo "<p class='failed'>Submission Failed. Please try again.</p>"; //replace with more accurate status later
	}else{
		echo "<p class='success'>Successfully added to database!</p>";
		$query_get_product_id="SELECT ID FROM products ORDER BY ID DESC LIMIT 1";
		$result=mysqli_query($con,$query_get_product_id);
		
		while($row=mysqli_fetch_array($result)){
			$product_ID=$row['ID'];
			
			for($x=1;$x<=3;$x++){ // rewrite so that even less than 3 slides are possible
				$temp_filename=$_FILES['product_slide_'.$x]['tmp_name'];
				$original_filename=$_FILES['product_slide_'.$x]['name'];
				$new_filename=md5($original_filename).mt_rand().".jpg";//change to allow more image types
				$destination="../product_slides/".$new_filename;
				move_uploaded_file($temp_filename, $destination);
				
				$query_insert_slide="INSERT INTO product_slides(Product_ID,Slide) VALUES('$product_ID','$destination')";
				if(!mysqli_query($con,$query_insert_slide)){
					echo "<p class='failed'>Submission slideshow Failed. Please try again.</p>";//replace with more accurate status later
				}
			}
		}
	}
	
	mysqli_close($con);
}
?>