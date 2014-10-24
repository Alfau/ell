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
				<h4>Modify Locations</h4>
				
				<?php
				include("../connection.php");
				
				if(isset($_POST['location_name'])){
					
					$num_of_locations=count($_POST['location_name']);
					
					for($x=0;$x<$num_of_locations;$x++){
						$id=$_POST['location_id'][$x];
						$name=$_POST['location_name'][$x];
						$lat=$_POST['location_lat'][$x];
						$lng=$_POST['location_lng'][$x];
						
						$query="UPDATE locations SET Name='$name', Latitude='$lat', Longitude='$lng' WHERE ID='$id'";
						mysqli_query($con,$query); //no error message is generated here. change to show error msg
					}
				}
				?>
				
				<form method="POST" action="">
					<table>
						<tr>
							<td>Location Name</td>
							<td>Latitude</td>
							<td>Longitude</td>
						</tr>
						<?php
						$query="SELECT * FROM locations";
						$result=mysqli_query($con,$query);
						while($row=mysqli_fetch_array($result)){
							?>
							
							<tr>
								<td><input type='text' name='location_name[]' placeholder='Name of tde location' value='<?php echo $row['Name'] ?>'/></td>
								<td><input type='text' name='location_lat[]' placeholder='Latitiude' value='<?php echo $row['Latitude'] ?> '/></td>
								<td><input type='text' name='location_lng[]' placeholder='Longitude' value='<?php echo $row['Longitude'] ?> '/></td>
								<input type='hidden' name='location_id[]' value='<?php echo $row['ID']?>'/>
							</tr>
							
							<?php
						}
						?>
						<tr>
							<td><a href=# id="add_location">Add another location...</a></td>
						</tr>
					</table>
					<input type="submit"/>
				</form>
			</div>	
		</main>
	</body>
</html>