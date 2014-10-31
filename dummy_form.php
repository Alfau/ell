<?php
if(isset($_POST['add_what'])){
	include("../connection.php");
	
	if($_FILES['product_thumbnail']['size']!==0){
		$temp_filename=$_FILES['product_thumbnail']['tmp_name'];
		$original_filename=$_FILES['product_thumbnail']['name'];
		$new_filename=md5($original_filename).mt_rand().".jpg";//change to allow more image types
		$destination="../product_thumbnails/".$new_filename;
		$product_thumbnail_path="product_thumbnails/".$new_filename;
		
		if(move_uploaded_file($temp_filename, $destination)){
			$add_what=$_POST['add_what'];
			$name=$_POST['name'];
			$price=$_POST['price'];
						
			if($add_what=="Mobile Phones" || $add_what=="Tablets"){
				$brand=$_POST['brand'];
				$desc=$_POST['desc'];
				$specs=$_POST['specs'];
				if(!empty($name) || !empty($brand) || !empty($desc) || !empty($specs)){
					$query_product="INSERT INTO products(type,brand,name,price,description,specifications,thumbnail) VALUES('$add_what','$brand','$name','$price','$desc','$specs','$product_thumbnail_path')";
				}else{
					echo "<p class='failed'>You seem to have left some fields empty.</p>";	
				}
			}elseif($add_what=="TV" || $add_what=="Audio" || $add_what=="Video"){
				$brand=$_POST['brand'];
				$desc=$_POST['desc'];
				$specs=$_POST['specs'];
				if(!empty($name) || !empty($brand) || !empty($desc) || !empty($specs)){
					$query_product="INSERT INTO products(type,brand,name,price,description,specifications,thumbnail) VALUES('$add_what','$brand','$name','$price','$desc','$specs','$product_thumbnail_path')";
				}else{
					echo "<p class='failed'>You seem to have left some fields empty.</p>";	
				}
			}elseif($add_what=="Mobile Accessories"){
				$brand=$_POST['brand'];
				$category=$_POST['category'];
				if(!empty($name) || !empty($brand) || !empty($category)){
					$query_product="INSERT INTO products(type,category,brand,name,price,thumbnail) VALUES('Mobile Accessories','$category','$brand','$name','$price','$product_thumbnail_path')";
				}else{
					echo "<p class='failed'>You seem to have left some fields empty.</p>";	
				}
			}elseif($add_what=="Kitchen Appliance" || $add_what=="Laundry Appliance" || $add_what=="Cooling Appliance" || $add_what=="Other"){
				$brand=$_POST['brand'];
				$desc=$_POST['desc'];
				if(!empty($name) || !empty($brand) || !empty($desc)){
					$query_product="INSERT INTO products(type,brand,name,price,description,thumbnail) VALUES('$add_what','$brand','$name','$price','$desc','$product_thumbnail_path')";
				}else{
					echo "<p class='failed'>You seem to have left some fields empty.</p>";	
				}
			}
			
			if(mysqli_query($con,$query_product)){
				if($add_what!=="Mobile Accessories" && $add_what!=="Kitchen Appliance" && $add_what!=="Laundry Appliance" && $add_what!=="Cooling Appliance"){
					$query_success=false;
					foreach($_FILES['product_slide']['name'] as $index => $value){
						if($_FILES['product_slide']['size']!==0){
							$temp_filename=$_FILES['product_slide']['tmp_name'][$index];
							$original_filename=$_FILES['product_slide']['name'][$index];
							$new_filename=md5($original_filename).mt_rand().".jpg";//change to allow more image types
							$destination="../product_slides/".$new_filename;
							$product_slide_path="product_slides/".$new_filename;
							
							if(move_uploaded_file($temp_filename, $destination)){
								$query_product_slide="INSERT INTO product_slide(Product_ID,Slide) VALUES(LAST_INSERT_ID(),'$product_slide_path')";
								if(mysqli_query($con,$query_product_slide)){
									$query_success=true;
								}
							}
						}
					}
					if($query_success==true){
						echo "<p class='success'>Product was successfully added to the database.</p>";
					}else{
						echo "<p class='failed'>An error occured while uploading slideshow to the database. Please try againdfasdffds.</p>".$temp_filename."<br />".$destination."<br />".$temp_filename."<br />";
					}
				}else{
					echo "<p class='success'>Product was successfully added to the database.</p>";
				}
			}
			
		}else{
			echo "<p class='failed'>An error occured while trying to upload product thumbnail to database. Please try again.</p>";
		}
	}else{
		echo "<p class='failed'>Please choose an image to use as the product thumbnail.</p>";
	}
	mysqli_close($con);
}
?>