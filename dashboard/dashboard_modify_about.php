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
						echo "<p class='failed'>Database Update Failed. Try Again.</p>";// change to a better message later
					}else{
						echo "<p class='success'>Database successfuly updated!</p>";
					}
				}
					$about_query=mysqli_query($con,"SELECT Text FROM about");
					while($row=mysqli_fetch_array($about_query)){
						?>
						<form action="" method="POST">
							<table>
								<tr>
									<td>Text :</td>
									<td><textarea name="about" rows="10" cols="100"><?php echo $row['Text'] ?></textarea></td>
								</tr>
							</table>
							<input type="submit" value="Update"/>
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
						foreach($_POST['remove_img'] as $remove_id){
							$query="DELETE FROM about_img WHERE ID='$remove_id'";
							if(!mysqli_query($con,$query)){ //check if array is set OR check if variable query is set AND try and merge all queries. possibly using arrays
								echo "<p class='failed'>Attempt to remove image failed! Please try again.</p>";
							}
						}
					}
					
					foreach($_FILES['about_img']['name'] as $index => $value){ // google for the proper ways to go through nested arrays
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
								if(!mysqli_query($con,$query)){ //check if array is set OR check if variable query is set AND try and merge all queries. possibly using arrays
									echo "<p class='failed'>Database Update Failed. Try Again.</p>";
								}
							}
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
					</table>
					<input type="submit" value="Update"/>
				</form>
			</div>
			<div>
				<h4>Add Image to About Us Page</h4>
				<?php
				if(isset($_POST['add_img'])){
					if($_FILES['about_img']['size']!==0){
						$temp_filename=$_FILES['about_img']['tmp_name'];
						$original_filename=$_FILES['about_img']['name'];
						$new_filename=md5($original_filename).mt_rand().".jpg";//change to allow more image types
						$destination="../page_images/".$new_filename;
						$image_path="page_images/".$new_filename;
						
						$query="SELECT ID FROM about_img";
						$result=mysqli_query($con,$query);
						$count=mysqli_num_rows($result);
						
						if($count>=5){
							echo "<p class='failed'>You have reached the limit of 5 images allowed for the page.</p>";
						}else{
							if(move_uploaded_file($temp_filename, $destination)){
								if(!mysqli_query($con,"INSERT INTO about_img(Images) VALUES('$image_path')")){
									echo "<p class='failed'>Submission Failed. Try Again.</p>";// change to a better message later
								}else{
									echo "<p class='success'>Image upload successfull!</p>";
								}
							}
						}
					}
				}
				?>
				<form method="POST" action="" enctype="multipart/form-data">
					<table>
						<tr>
							<td>Add Image :</td>
							<td>
								<input type="file" name="about_img"/>
								<input type="hidden" name="add_img"/>
							</td>
						</tr>
					</table>
					<input type="submit" value="Submit"/>
				</form>
			</div>
		</main>
	</body>
</html>