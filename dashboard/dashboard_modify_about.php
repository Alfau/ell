<!DOCTYPE HTML>
<html>
	<head>
		<title>Administrator Dashboard</title>
		<link rel="stylesheet" type="text/css" href="dashboard_style.css"/>
		<script src="jquery-1.11.1.min.js"></script>
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
					$about=$_POST['about'];
					$query="UPDATE about SET Text='$about'";
					
					if(!mysqli_query($con,$query)){
						echo "failed"; // change to a better message later
					}else{
						echo "success";
					}
				}
					$query=mysqli_query($con,"SELECT * FROM about");
					
					while($row=mysqli_fetch_array($query)){
						?>
						<form action="" method="POST">
							<textarea name="about" rows="20" cols="100"><?php echo $row['Text'] ?></textarea>
							<input type="submit"/>
						</form>
						
						<?php	
					}
				?>
			</div>	
		</main>
	</body>
</html>