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
				<h4>Modify About Us page</h4>
				<?php
				include("../connection.php");
				if(isset($_POST['about'])){
					mysqli_query($con,"UPDATE about SET Image=''");
					for($x=1;$x<=3;$x++){
						$temp_filename=$_FILES['about_img_'.$x]['tmp_name'];
						$original_filename=$_FILES['about_img_'.$x]['name'];
						$new_filename=md5($original_filename).mt_rand().".jpg";//change to allow more image types
						$destination="../page_images/".$new_filename;
						$image_path="page_images/".$new_filename;
						move_uploaded_file($temp_filename, $destination);
						$query_about_img="UPDATE about SET Image = CONCAT(Image,' ','$image_path') ";
						if(!mysqli_query($con,$query_about_img)){
							echo "<p class='failed'>Submission Failed. Please try again.</p>";//replace with more accurate status later
						}
					}
					
					$about=$_POST['about'];
					$query="UPDATE about SET Text='$about'";
					
					if(!mysqli_query($con,$query)){
						echo "<p class='failed'>Database Update Failed. Try Again.</p>"; // change to a better message later
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
									<td><textarea name="about" rows="10" cols="100"><?php echo $row['Text'] ?></textarea></td>
								</tr>
								<tr>
									<td><input type="file" name="about_img_1"/></td>
								</tr>
								<tr>
									<td><input type="file" name="about_img_2"/></td>
								</tr>
								<tr>
									<td><input type="file" name="about_img_3"/></td>
								</tr>
							</table>	
							<input type="submit"/>
						</form>
						
						<?php	
					}
				?>
			</div>	
		</main>
	</body>
</html>