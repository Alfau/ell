<!DOCTYPE HTML>
<html>
	<head>
		<title>Ell Mobile</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
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
					
					if(isset($_GET['brand'])){
						$brand=$_GET['brand'];
						$type=$_GET['type'];
						$query="SELECT ID,Name,Price,Thumbnail FROM products WHERE Type='$type' AND Brand='$brand'";
						$result=mysqli_query($con,$query);
						echo "<h2>$brand</h2>";
						while($row=mysqli_fetch_array($result)){
							?>
							<div>
								<a href="see_more.php?type=<?php echo $type ?>&product_ID=<?php echo $row['ID'] ?>"><img src="<?php echo $row['Thumbnail'] ?>" height="150"/></a><br />
								<div>
									<a href="see_more.php?type=<?php echo $type ?>&product_ID=<?php echo $row['ID'] ?>"><?php echo $row['Name'] ?></a><br />
									<a href="see_more.php?type=<?php echo $type ?>&product_ID=<?php echo $row['ID'] ?>">Rf. <?php echo $row['Price'] ?></a>
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