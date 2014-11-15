<?php 
include("../connection.php");
include("../process_image.php");
if(isset($_POST['add'])){
	$prev_id_query="SELECT ID FROM products ORDER BY ID DESC LIMIT 1";
	$prev_id=mysqli_fetch_array(mysqli_query($con,$prev_id_query))['ID'];
	$current_id=$prev_id+1;
	
	if($_FILES['product_thumbnail']['size']!==0 && getimagesize($_FILES['product_thumbnail']['tmp_name'])!==false){//thumbnail validation done!
		process_image($_FILES['product_thumbnail']['tmp_name'],"thumbnail","../product_thumbnails/");
	
		if($image_processed!=false){
			
			$add=mysqli_real_escape_string($con,$_POST['add']); //SANITATION DONE!
			$name=mysqli_real_escape_string($con,$_POST['name']);
			$brand=mysqli_real_escape_string($con,$_POST['brand']);
			$price=mysqli_real_escape_string($con,filter_var($_POST['price'],FILTER_SANITIZE_NUMBER_INT));
			$desc=mysqli_real_escape_string($con,$_POST['desc']);
			
			$validate_add_query="SELECT Sub_Category FROM product_categories";
			$validate_add_result=mysqli_query($con,$validate_add_query);
			$add_valid=false;
			while($validate_add_row=mysqli_fetch_array($validate_add_result)){ //VALIDATION DONE
				if($add==$validate_add_row['Sub_Category']){
					$add_valid=true;
					break;
				}
			}
			
			if($add_valid==true){
				if(!empty($name) && !empty($brand) && !empty($desc)){
					$query_success=false;
					$insert_products_query="INSERT INTO products(Type,Brand,Name,Price,Description,Thumbnail) VALUES('$add','$brand','$name','$price','$desc','$image_path')";
					if(mysqli_query($con,$insert_products_query)){
						$query_success=true;
					}else{
						$query_success=false;
					}
					$spec_table="specifications_".str_replace(" ", "_", $add);
					$spec_cols_query="SELECT * FROM $spec_table";
					$spec_cols_result=mysqli_query($con,$spec_cols_query);
					$spec_cols_rows=mysqli_fetch_fields($spec_cols_result);
					
					$insert_product_id="INSERT INTO $spec_table(Product_ID) VALUES('$current_id')";
					if(mysqli_query($con,$insert_product_id)){
						foreach($spec_cols_rows as $col_name){
							if(($col_name->name)!="ID" && ($col_name->name)!="Product_ID"){
								$column_name=$col_name->name;
								$column_val=mysqli_real_escape_string($con,$_POST[$column_name]);
								
								$insert_specs_query="UPDATE $spec_table SET $column_name='$column_val' WHERE Product_ID='$current_id'";
								if(mysqli_query($con,$insert_specs_query)){
									$query_success=true;
								}else{
									$query_success=false;
								}
							}
						}
					}
					if($query_success==true){
						echo "<p class='success'>Database updated successfully!</p>";
					}else{
						echo "<p class='failed'>An error occured. Please try again!</p>";
					}
				}else{
					echo "<p class='failed'>You seem to have left some required fields empty.</p>";
				}
			}
		}
	}
}
?>