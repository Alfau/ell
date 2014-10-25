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
					$num_of_locations=count($_POST['location_id']);
					for($x=0;$x<$num_of_locations;$x++){
						if(!empty($_POST['location_name'][$x]) && !empty($_POST['location_lat'][$x]) && !empty($_POST['location_lng'][$x]) && is_numeric($_POST['location_id'][$x])){
							$id=$_POST['location_id'][$x];
							$name=$_POST['location_name'][$x];
							$lat=$_POST['location_lat'][$x];
							$lng=$_POST['location_lng'][$x];
							
							if(is_numeric($lat) && is_numeric($lng)){
								if(isset($_POST['location_remove'][$x])){
									$remove_id=$_POST['location_remove'][$x];
									$query="DELETE FROM locations WHERE ID='$remove_id'";
								}else{
									$query="UPDATE locations SET Name='$name', Latitude='$lat', Longitude='$lng' WHERE ID='$id'";
								}
								mysqli_query($con,$query); //no error/success message. fix asap. Use array to fix	
							}else{
								echo "<p class='failed'>Both the Latitude and Longitude has to be a numerical value</p>";
							}
						}else{
							echo "<p class='failed'>You seems to have left some empty fields.</p>";
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
							<?php
						}
						?>
					</table>
					<input type="submit" value="Update"/>
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
					</table>
					<input type="submit" value="Add Location">
				</form>
			</div>	
		</main>
	</body>
</html>