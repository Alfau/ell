<!DOCTYPE HTML>
<html>
	<head>
		<title>Administrator Dashboard</title>
		<link rel="stylesheet" type="text/css" href="dashboard_style.css"/>
		<script src="../jquery-1.11.1.min.js"></script>
		<script src="dashboard_script.js"></script>
	</head>
	<body>
		
		<?php include("dashboard_nav.php"); ?>
		
		<main>
			<div>
				<h4>Modify Text in About Us Page</h4>
				
				<?php
				include("../connection.php");
				if(isset($_POST['about'])){
					$about=$_POST['about'];
					$query="UPDATE about SET Text='$about'";
					
					if(!mysqli_query($con,$query)){
						echo "<p class='failed'>An error occured while updating the database. Please try again.</p>";
					}else{
						echo "<p class='success'>Database successfully updated!</p>";
					}
				}
				
				$about_query=mysqli_query($con,"SELECT Text FROM about");
				while($row=mysqli_fetch_array($about_query)){
				?>	
					<form method="POST" action="">
						<table>
							<tr>
								<td><textarea name="about" rows="10" cols="100"><?php echo $row['Text'] ?></textarea></td>
							</tr>
							<tr>
								<td><input type="submit" value="Update"/></td>
							</tr>
						</table>
					</form>
				<?php	
				}
				?>
			</div>
			
			<div id="modify_about">
				<h4>Manage Images in About Us Page</h4>
				
				<?php
				if(isset($_POST['replace_img'])){
					
					if(isset($_POST['remove_img'])){
						$remove_img_success=false;
						foreach($_POST['remove_img'] as $remove_id){
							$query="DELETE FROM about_img WHERE ID='$remove_id'";
							if(mysqli_query($con,$query)){
								$remove_img_success=true;
							}
						}
					}
					
					foreach($_FILES['about_img']['name'] as $index => $value){
						if($_FILES['about_img']['size'][$index]!==0){
							$temp_filename=$_FILES['about_img']['tmp_name'][$index];
							$original_filename=$_FILES['about_img']['name'][$index];
							$new_filename=md5($original_filename).mt_rand().".jpg";//change to allow more image types
							$destination="../page_images/".$new_filename;
							$image_path="page_images/".$new_filename;
							$image_id=$_POST['replace_img'][$index];
							
							if(move_uploaded_file($temp_filename, $destination)){
								$result=mysqli_query($con,"SELECT Images FROM about_img WHERE ID='$image_id'");
								$old_image=mysqli_fetch_array($result);
								unlink("../".trim($old_image['Images']));
								
								$query="UPDATE about_img SET Images='$image_path' WHERE ID='$image_id'";
								$replace_img_success=false;
								if(mysqli_query($con,$query)){
									$replace_img_success=true;
								}
							}
						}
					}
					if(isset($remove_img_success) && isset($replace_img_success)){
						if($remove_img_success==true && $replace_img_success==true){
							echo "<p class='success'>Database has been successfully updated!</p>";
						}elseif($remove_img_success==false){
							echo "<p class='failed'>Failed to remove image from database. Please try again.</p>";
						}elseif($replace_img_success==false){
							echo "<p class='failed'>Failed to replace image. Please try again.</p>";
						}
					}
				}
				?>
				
				<form method="POST" action="" enctype="multipart/form-data">
					<table>
						<tr>
							<td>Images :</td>
							<?php
							$query="SELECT * FROM about_img";
							$result=mysqli_query($con,$query);
							while($row=mysqli_fetch_array($result)){
								?>
								<td>
									<label>
										<img src='../<?php echo $row['Images'] ?>' height='100'/>
										<input type='file' name='about_img[]'/>
										<input type='hidden' name='replace_img[]' value='<?php echo $row['ID'] ?>'/>
									</label>
								</td>
								<?php	
							}
							?>
						</tr>
						<tr>
							<td>Remove Image:</td>
							<?php
							$query="SELECT ID FROM about_img";
							$result=mysqli_query($con,$query);
							while($row=mysqli_fetch_array($result)){
								?>
								<td>
									<input type='checkbox' name='remove_img[]' value="<?php echo $row['ID'] ?>"/>
								</td>
								<?php
							}
							?>
						</tr>
						<tr>
							<td><input type="submit" value="Update"/></td>
						</tr>
					</table>
				</form>
			</div>
			
			<div>
				<h4>Add Image to About Us Page</h4>
				<?php
				if(isset($_POST['add_img'])){
					$query="SELECT ID FROM about_img";
					$result=mysqli_query($con,$query);
					$count=mysqli_num_rows($result);
					$add_image_success=false;
					$image_limit=false;
					foreach($_FILES['about_img']['name'] as $index => $value){
						if($count<5){
							$temp_filename=$_FILES['about_img']['tmp_name'][$index];
							$original_filename=$_FILES['about_img']['name'][$index];
							$new_filename=md5($original_filename).mt_rand().".jpg";//change to allow more image types
							$destination="../page_images/".$new_filename;
							$image_path="page_images/".$new_filename;
							
							if(move_uploaded_file($temp_filename, $destination)){
								if(mysqli_query($con,"INSERT INTO about_img(Images) VALUES('$image_path')")){
									$add_image_success=true;
								}
							}
							$count++;
						}else{
							$image_limit=true;
						}
					}
					$error_msg=false;
					if($add_image_success==true && $error_msg==false){
						echo "<p class='success'>Image(s) uploaded successfully to the database.</p>";
					}else{
						echo "<p class='failed'>Image upload failed. Please try again.</p>";
						$error_msg=true;
					}
					if($image_limit==true && $error_msg==false){
						echo "<p class='failed'>You have reached the 5 image limit set for the about page.</p>";
						$error_msg=true;
					}
				}
				?>
				<form method="POST" action="" enctype="multipart/form-data">
					<table>
						<tr>
							<td>Add Image :</td>
							<td>
								<input type="file" name="about_img[]" multiple/>
								<input type="hidden" name="add_img"/>
								<p class="asterix">* Choose upto 5 images</p>
							</td>
						</tr>
						<tr>
							<td><input type="submit" value="Submit"/></td>
						</tr>
					</table>
				</form>
			</div>
		</main>
	</body>
</html>