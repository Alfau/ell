<?php include("session_verification.php"); ?>
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
			<h4>Modify Slideshow</h4>
			<?php
			include("../connection.php");
			include("../process_image.php");
			if(isset($_POST['id'])){
				if(isset($_POST['slide_remove'])){
					$remove_id=$_POST['slide_remove'];
					$query="DELETE FROM slideshow WHERE ID='$remove_id'";
				}else{
					if(!empty($_POST['link_title']) && !empty($_POST['description'])){
						$id=$_POST['id'];
						$link_title=$_POST['link_title'];
						$description=$_POST['description'];
						$link_href=$_POST['link_href'];
						if($_FILES['slide']['size']!==0){
							process_image($_FILES['slide']['tmp_name'],"slide","../home_slides/");
							if($image_processed!=false){
								$result=mysqli_query($con,"SELECT Slide FROM slideshow WHERE ID='$id'");
								$old_slide=mysqli_fetch_array($result);
								unlink("../".$old_slide['Slide']);
								
								$query="UPDATE slideshow SET Link_Title='$link_title', Link_HREF='$link_href', Description='$description', Slide='$image_path' WHERE ID='$id'";
							}else{
								echo "<p class='failed'>An error occured while uploading the file to the database. Please try again!</p>";
							}
						}else{
							$query="UPDATE slideshow SET Link_Title='$link_title', Link_HREF='$link_href', Description='$description' WHERE ID='$id'";
						}
					}else{
						echo "<p class='failed'>You seem to have left some empty fields.</p>";
					}
				}
				if(!mysqli_query($con,$query)){
					echo "<p class='failed'>Submission failed. Please try again.</p>";
				}else{
					echo "<p class='success'>Database updated successfully!</p>";
				}
			}
			
			$query="SELECT * FROM slideshow";
			$result=mysqli_query($con,$query);
			while($row=mysqli_fetch_array($result)){
				?>
				<div class="modify_slide">
					<form method="POST" action="" enctype="multipart/form-data" id="modify_slide">
						<table>
							<tr>
								<td>Image :</td>
								<td>
									<label>
										<img src="../<?php echo $row['Slide'] ?>" alt="slide" height='100'/>
										<input type="file" name="slide"/>
									</label>
								</td>
							</tr>
							<tr>
								<td>Title:</td>
								<td><input type="text" name="link_title" value="<?php echo $row['Link_Title'] ?>"/></td>
							</tr>
							<tr>
								<td>Link :</td>
								<td><input type="text" name="link_href" value="<?php echo $row['Link_HREF'] ?>"/></td>
							</tr>
							<tr>
								<td>Description :</td>
								<td><input type="text" name="description" value="<?php echo $row['Description'] ?>"/></td>
							</tr>
							<tr>
								<td>Remove Slide :</td>
								<td><input type="checkbox" name="slide_remove" value='<?php echo $row['ID'] ?>'/></td>
							</tr>
							<tr>
								<td><input type="submit" value="Update"/></td>
							</tr>
						</table>
						<input type="hidden" name="id" value="<?php echo $row['ID'];?>"/>
					</form>
				</div>
				<?php
			}
			?>
			</div>
			<div>
				<h4>Add new Slide</h4>
				<?php
					if(isset($_POST['add_slide'])){
						if(!empty($_POST['link_title']) && !empty($_POST['description'])){
							$link_title=$_POST['link_title'];
							$description=$_POST['description'];
							$link_href=$_POST['link_href'];
							
							if($_FILES['slide']['size']!==0){
								process_image($_FILES['slide']['tmp_name'],"slide","../home_slides/");
								if($image_processed!=false){
									$query="INSERT INTO slideshow(Link_Title,Link_HREF,Description,Slide) VALUES('$link_title','$link_href','$description','$image_path')";
									if(!mysqli_query($con,$query)){
										echo "<p class='failed'>Submission failed. Please try again.</p>";
									}else{
										echo "<p class='success'>Database updated successfully!</p>";
									}
								}else{
									echo "<p class='failed'>An error occured while uploading the image. Please try again.</p>";
								}
							}else{
								echo "<p class='failed'>It seems you have not chosen an image for the slideshow.</p>";
							}
						}else{
							echo "<p class='failed'>It seems you have left some fields empty.</p>";
						}
					}
				?>
				<form method="POST" action="" enctype="multipart/form-data">
					<table>
						<tr>
							<td>Image :</td>
							<td>
								<label>
									<input type="file" name="slide"/>
								</label>
							</td>
						</tr>
						<tr>
							<td>Title :</td>
							<td><input type="text" name="link_title"/></td>
						</tr>
						<tr>
							<td>Link :</td>
							<td><input type="text" name="link_href"/></td>
						</tr>
						<tr>
							<td>Description :</td>
							<td><input type="text" name="description"/></td>
						</tr>
						<tr>
							<td><input type="submit"/></td>
						</tr>
					</table>
					<input type="hidden" name="add_slide"/> 
				</form>
			</div>
		</main>
	</body>
</html>