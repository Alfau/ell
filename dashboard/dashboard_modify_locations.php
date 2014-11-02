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
				<h4>Modify Locations</h4>
				<?php
				include("../connection.php");
				
				if(isset($_POST['location_id'])){
					$location_update_success=false;
					$error_msg=false;
					foreach($_POST['location_id'] as $index => $value){
						if(!empty($_POST['location_name'][$index]) && !empty($_POST['location_lat'][$index]) && !empty($_POST['location_lng'][$index]) && is_numeric($_POST['location_id'][$index])){
							$id=$_POST['location_id'][$index];
							$name=$_POST['location_name'][$index];
							$lat=$_POST['location_lat'][$index];
							$lng=$_POST['location_lng'][$index];
							
							if(is_numeric($lat) && is_numeric($lng)){
								if(isset($_POST['location_remove'][$index])){
									$remove_id=$_POST['location_remove'][$index];
									$query="DELETE FROM locations WHERE ID='$remove_id'";
								}else{
									$query="UPDATE locations SET Name='$name', Latitude='$lat', Longitude='$lng' WHERE ID='$id'";
								}
								if(mysqli_query($con,$query)){
									$location_update_success=true;
								}	
							}else{
								echo "<p class='failed'>Both the Latitude and Longitude has to be a numerical value</p>";
								$error_msg=true;
							}
						}else{
							echo "<p class='failed'>You seems to have left some empty fields.</p>";
							$error_msg=true;
						}
					}
					if($location_update_success==true){
						echo "<p class='success'>Location(s) updated successfully.</p>";
					}else{
						if($error_msg==false){
							echo "<p class='failed'>An error occured while updating locations. Please try again.</p>";
						}
					}
				}
				?>
				<form method="POST" action="">
					<table>
						<tr>
							<td>Location Name</td>
							<td>Latitude</td>
							<td>Longitude</td>
							<td>Remove</td>
						</tr>
						<?php
						$query="SELECT * FROM locations";
						$result=mysqli_query($con,$query);
						while($row=mysqli_fetch_array($result)){
							?>
							<tr>
								<td><input type='text' name='location_name[]' placeholder='Name of the location' value='<?php echo $row['Name'] ?>'/></td>
								<td><input type='text' name='location_lat[]' placeholder='Latitiude' value='<?php echo $row['Latitude'] ?>'/></td>
								<td><input type='text' name='location_lng[]' placeholder='Longitude' value='<?php echo $row['Longitude'] ?>'/></td>
								<td><input type='checkbox' name='location_remove[]' value='<?php echo $row['ID']?>'/></td>
								<input type='hidden' name='location_id[]' value='<?php echo $row['ID']?>'/>
							</tr>
							<tr>
								<td><input type="submit" value="Update"/></td>
							</tr>
							<?php
						}
						?>
					</table>
				</form>
			</div>
			<div>
				<h4>Add new location</h4>
				<?php
				if(isset($_POST['location_new'])){
					if(!empty($_POST['location_name']) && !empty($_POST['location_lat']) && !empty($_POST['location_lng'])){
						$name=$_POST['location_name'];
						$lat=$_POST['location_lat'];
						$lng=$_POST['location_lng'];
						
						$query="INSERT INTO locations(Name,Latitude,Longitude) VALUES('$name','$lat','$lng')";
						if(!mysqli_query($con,$query)){
							echo "<p class='failed'>An error occured while adding location to database. Please try again.</p>";
						}else{
							echo "<p class='success'>New Location added successfully!</p>";
						}
					}else{
						echo "<p class='failed'>You seems to have left some empty fields.</p>";	
					}
				}
				?>
				<form method="POST" action="">
					<table>
						<tr>
							<td><input type='text' name='location_name' placeholder='Name of the location'/></td>
							<td><input type='text' name='location_lat' placeholder='Latitiude'/></td>
							<td><input type='text' name='location_lng' placeholder='Longitude'/></td>
							<input type='hidden' name='location_new'/>
						</tr>
						<tr>
							<td><input type="submit" value="Add Location"></td>
						</tr>
					</table>
				</form>
			</div>	
		</main>
	</body>
</html>