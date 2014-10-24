<?php					
if(isset($_POST['modify_slide'])){
	$id=$_POST['id'];
	$link=$_POST['link'];
	$description=$_POST['description'];
	
	$temp_filename=$_FILES['slide']['tmp_name'];
	$original_filename=$_FILES['slide']['name'];
	$new_filename=md5($original_filename).mt_rand().".jpg";//change to allow more image types
	$destination="../home_slides/".$new_filename;
	$image_path="home_slides/".$new_filename;
	move_uploaded_file($temp_filename, $destination);
	$query="INSERT INTO slideshow(Slide) VALUES('$image_path') WHERE ID='$id'";
	if(!mysqli_query($con,$query)){
		echo "<p class='failed'>Submission Failed. Please try again.</p>";//replace with more accurate status later
	}
	
	$query="INSERT INTO slideshow(Link,Description) VALUES('$link','$description') WHERE ID='$id'";
	mysqli_query($con,$query);
	if(!mysqli_query($con,$query)){
		echo "<p class='failed'>Submission failed. Please try again.</p>";
	}else{
		echo "<p class='failed'>Database updated successfully!</p>";
	}
}
?>