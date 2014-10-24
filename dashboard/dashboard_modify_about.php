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
			<div id="content">
				<div id="modify_about">
				<h4>Modify About Us page</h4>
				<?php
				include("../connection.php");
				if(isset($_POST['about'])){
					foreach($_FILES['about_img']['name'] as $index => $value){
						if($_FILES['about_img']['name'][$index]!=""){
							$temp_filename=$_FILES['about_img']['tmp_name'][$index];
							$original_filename=$_FILES['about_img']['name'][$index];
							$new_filename=md5($original_filename).mt_rand().".jpg";//change to allow more image types
							$destination="../page_images/".$new_filename;
							$image_path="page_images/".$new_filename;
							$image_id=$index+1;
							
							if(move_uploaded_file($temp_filename, $destination)){
								$result=mysqli_query($con,"SELECT Images FROM about_img WHERE ID='$image_id'");
								$old_image=mysqli_fetch_array($result);
								unlink("../".trim($old_image['Images']));
								
								if(!mysqli_query($con,"UPDATE about_img SET Images='$image_path' WHERE ID='$image_id'")){ // merge both queries
									echo "<p class='failed'>Database Update Failed. Try Again. query</p>";// change to a better message later
								}
							}else{
								echo "<p class='failed'>Database Update Failed. Try Again. move file</p>";// change to a better message later
							}
						}
					}
					$about=$_POST['about'];
					$query="UPDATE about SET Text='$about'";
					
					if(!mysqli_query($con,$query)){
						echo "<p class='failed'>Database Update Failed. Try Again.</p>";// change to a better message later
					}else{
						echo "<p class='success'>Database successfuly updated!</p>";
					}
				}
				
					$query=mysqli_query($con,"SELECT * FROM about");
					while($row=mysqli_fetch_array($query)){
						?>
						<form action="" method="POST" enctype="multipart/form-data">
							<table>
								<tr>
									<td>Text :</td>
									<td><textarea name="about" rows="10" cols="100"><?php echo $row['Text'] ?></textarea></td>
								</tr>
								<tr>
									<td>Images* :</td>
									<td>
									<?php
									$query="SELECT * FROM about_img";
									$result=mysqli_query($con,$query);
									while($row=mysqli_fetch_array($result)){
										?>
										<label><img src='../<?php echo $row['Images'] ?>' height='100'/><input type='file' name='about_img[]'/></label>
										<?php	
									}
									?>
									<p style='font-size:0.8em;color:#888'>* Upto 5 images allowed!</p>
									</td>
								</tr>
							</table>
							<input type="submit"/>
						</form>
						<?php	
					}
				?>
				</div>
			</div>	
		</main>
	</body>
</html>