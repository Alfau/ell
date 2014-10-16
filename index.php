<!DOCTYPE HTML>
<html>
	<head>
		<title>Ell Mobile</title>
		<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>--><!-- change to lintel font -->
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="jquery-1.11.1.min.js"></script>
		<script src="script.js"></script>
	</head>
	<body>
		<?php include("header.php"); ?>
		
		<main>
			<?php include("slideshow.php"); ?>
			<div id="content">
				<div class="index_products_carousel">
					<h3>LATEST RELEASES</h3>
					<?php
						include("connection.php");
						
						$query="SELECT * FROM products WHERE Ell_Rec='True'";
						$result=mysqli_query($con,$query);
						while($row=mysqli_fetch_array($result)){
							?>
							<div>
								<div>
									<a href="see_more.php?type=<?php echo $row['Type']?>&product_ID=<?php echo $row['ID']?>"><img src="<?php echo $row['Thumbnail'] ?>" height="120"/></a>
									<a href="see_more.php?type=<?php echo $row['Type']?>&product_ID=<?php echo $row['ID']?>">See More</a>
								</div>
								<div>
									<h3><?php echo $row['Name'] ?></h3>
									<p>Some specs</p>
									<p>Some specs</p>
									<p>Some specs</p>
									<p>Some specs</p>
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