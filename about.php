<!DOCTYPE HTML>
<html>
	<head>
		<title>Ell Mobile</title>
		<?php include("head.php"); ?>
	</head>
	<body>
		<?php include("header.php"); ?>
		
		<main>
			<div id="content_small">
				<h1>ABOUT ELL</h1><br />
				<?php
					include("connection.php");
					
					$query="SELECT Text FROM about";
					$result=mysqli_query($con,$query);
					
					while($row=mysqli_fetch_array($result)){
						echo $row['Text'];
					}
				?>
			</div>
		</main>
		
		<?php include("footer.php"); ?>
	</body>
</html>