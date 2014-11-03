<?php
include("../process_image.php");
function add_slideshow(){
	global $add_what; global $con; global $current_id; global $image_processed; global $image_path;
	if($add_what!=="Mobile Accessories" && $add_what!=="Kitchen Appliance" && $add_what!=="Laundry Appliance" && $add_what!=="Cooling Appliance"){
		$query_success=false;
		$error_msg=false;
		foreach($_FILES['product_slide']['name'] as $index => $value){
			if($_FILES['product_slide']['size'][$index]!==0){
				
				process_image($_FILES['product_slide']['tmp_name'][$index],"thumbnail","../product_slides/");
				
				if($image_processed!=false){
					$query_product_slide="INSERT INTO product_slides(Product_ID,Slide) VALUES('$current_id','$image_path')";
					if(mysqli_query($con,$query_product_slide)){
						$query_success=true;
					}
				}
			}else{
				$error_msg=true;
				echo "<p class='failed'>You are required to add atleast one image for the product slideshow.</p>";
			}
		}
		if($query_success==true){
			echo "<p class='success'>Product was successfully added to the database.</p>";
		}else{
			if($error_msg==false){
				echo "<p class='failed'>An error occured while uploading slideshow to the database. Please try again.</p>";
			}
		}
	}else{
		echo "<p class='success'>Product was successfully added to the database.</p>";
	}
}

include("../connection.php");
if(isset($_POST['add_what'])){
	$query_prev_id="SELECT ID FROM products ORDER BY ID DESC LIMIT 1";
	$result_prev_id=mysqli_query($con,$query_prev_id);
	while($row=mysqli_fetch_array($result_prev_id)){
		$prev_id=$row['ID'];
	}
	$current_id=$prev_id+1; //clean this code section up if working well.
	
	if($_FILES['product_thumbnail']['size']!==0){
		
		process_image($_FILES['product_thumbnail']['tmp_name'],"thumbnail","../product_thumbnails/");
		
		if($image_processed!=false){
			$add_what=$_POST['add_what'];
			$name=$_POST['name'];
			$price=$_POST['price'];
						
			if($add_what=="Mobile Phones" || $add_what=="Tablets"){
				$brand=$_POST['brand'];
				$desc=$_POST['desc'];
				$general=$_POST['General'];$memory=$_POST['Memory'];$camera=$_POST['Camera'];$battery=$_POST['Battery'];$body=$_POST['Body'];$display=$_POST['Display'];$sound=$_POST['Sound'];$data=$_POST['Data'];$features=$_POST['Features'];
				if(!empty($name) || !empty($brand) || !empty($desc) || !empty($general)){
					$query_product="INSERT INTO products(type,brand,name,price,description,thumbnail) VALUES('$add_what','$brand','$name','$price','$desc','$image_path')";
					$query_specs="INSERT INTO mobile_specs(Product_ID,General,Memory,Camera,Battery,Body,Display,Sound,Data,Features) VALUES('$current_id','$general','$memory','$camera','$battery','$body','$display','$sound','$data','$features')";
				}else{
					echo "<p class='failed'>You seem to have left some fields empty.</p>";	
				}
			}elseif($add_what=="TV" || $add_what=="Audio" || $add_what=="Video"){
				$brand=$_POST['brand'];
				$desc=$_POST['desc'];
				//$specs=$_POST['specs'];
				if(!empty($name) || !empty($brand) || !empty($desc) || !empty($specs)){
					$query_product="INSERT INTO products(type,brand,name,price,description,thumbnail) VALUES('$add_what','$brand','$name','$price','$desc','$product_thumbnail_path')";
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
			
			if(isset($query_product) && isset($query_specs) && mysqli_query($con,$query_product) && mysqli_query($con,$query_specs)){
				add_slideshow();
			}elseif(isset($query_product) && !isset($query_specs) && mysqli_query($con,$query_product)){
				add_slideshow();
			}elseif(!isset($query_product) && isset($query_specs) && mysqli_query($con,$query_specs)){
				add_slideshow();
			}else{
				echo "<p class='failed'>An error occured while adding product to database. Please try again.</p>";
			}
		}else{
			echo "<p class='failed'>An error occured while trying to upload product thumbnail to database. Please try again.</p>";
		}
	}else{
		echo "<p class='failed'>Please choose an image to use as the product thumbnail.</p>";
	}
	
	mysqli_close($con);
}
if(isset($_POST['remove'])){
	$product_ID=$_POST['product_ID'];
	
	$query="DELETE FROM products WHERE ID='$product_ID'";
	
	if(mysqli_query($con,$query)){
		echo "<p class='success'>Product successfully removed from database.</p>";
	}else{
		echo "<p class='failed'>An error occured while attempting to remove image from database. Please try again.</p>";
	}
}
?>