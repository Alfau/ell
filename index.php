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
			<?php include("slideshow.php"); ?>
			<div id="content">
				<div class="products_carousel">
					<h4>ELL RECOMMENDED RELEASES</h4>
					<?php
						include("connection.php");
						
						$query="SELECT * FROM products WHERE Ell_Rec='True'";
						$result=mysqli_query($con,$query);
						while($row=mysqli_fetch_array($result)){
							?>
							<div>
								<a href="see_more.php?type=<?php echo $row['Type']?>&product_ID=<?php echo $row['ID']?>"><img src="<?php echo $row['Thumbnail'] ?>" height="120"/></a>
								<div>
									<a href="see_more.php?type=<?php echo $row['Type'] ?>&product_ID=<?php echo $row['ID'] ?>"><?php echo $row['Name'] ?></a>
									<a href="see_more.php?type=<?php echo $row['Type'] ?>&product_ID=<?php echo $row['ID'] ?>">Rf. <?php echo $row['Price'] ?></a>
								</div>
							</div>
							<?php
						}
					?>
				</div>
			</div>
		</main>
		
		<?php include("footer.php"); ?>
	</body>
</html>