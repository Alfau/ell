<!DOCTYPE HTML>
<html>
	<head>
		<title>Ell Mobile</title>
		<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>-->
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="jquery-1.11.1.min.js"></script>
		<script src="script.js"></script>
	</head>
	<body>
		<?php include("header.php"); ?>
		
		<main>
			<div id="content">
				<div id="products_by_brand">
				<?php
					include("connection.php");
					
					if(isset($_POST['brand'])){
						$brand=$_POST['brand'];
						$which=$_POST['which'];
						$query="SELECT * FROM products WHERE Type='$which' AND Brand='$brand'";
						$result=mysqli_query($con,$query);
						echo "<h2>$brand</h2>";
						while($row=mysqli_fetch_array($result)){
							?>
							<div>
								<img src="<?php echo $row['Thumbnail'] ?>" height="150"/>
								<div>
									<a href="see_more.php" class="<?php echo $row['Type'];?>" id="<?php echo $row['ID'] ?>"><?php echo $row['Name'] ?></a>
									<a href="see_more.php" class="<?php echo $row['Type'];?>" id="<?php echo $row['ID'] ?>">Rf. <?php echo $row['Price'] ?></a>
								</div>
							</div>
							<?php
						}	
					}
				?>
				</div>
			</div>
		</main>
		
		<?php include("footer.php"); ?>
	</body>
</html>