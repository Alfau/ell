<!DOCTYPE HTML>
<html>
	<head>
		<title>Ell Mobile</title>
		<?php include("head.php"); ?>
	</head>
	<body>
		<?php include("header.php"); ?>
		
		<main>
			<?php //include("slideshow.php"); ?>
			
			<div id="slideshow">
				<span class="loading">Loading slideshow...</span>
			</div>
			
			<div id="content">
				<div class="products_carousel">
					<h3>LATEST RELEASES</h3>
					<?php
						include("connection.php");
						
						//$query="SELECT ID,Type,Name,Price,Thumbnail FROM products WHERE Ell_Rec='True'";
						$query="SELECT ID,Type,Name,Price,Thumbnail FROM products LIMIT 0,2";
						$result=mysqli_query($con,$query);
						while($row=mysqli_fetch_array($result)){
							?>
							<div class="carousel_product">
								<div class="carousel_image">
									<a href="see_more.php?type=<?php echo $row['Type']?>&product_ID=<?php echo $row['ID']?>"><img src="<?php echo $row['Thumbnail'] ?>"/></a>
									<!--<a href="see_more.php?type=<?php echo $row['Type']?>&product_ID=<?php echo $row['ID']?>" class="see_more">See More</a>-->
								</div>
								<div class="carousel_info">
									<a href="see_more.php?type=<?php echo $row['Type']?>&product_ID=<?php echo $row['ID']?>" class="product_name"><?php echo $row['Name'] ?></a><br />
									<a href="see_more.php?type=<?php echo $row['Type']?>&product_ID=<?php echo $row['ID']?>" class="price">Rf. <?php echo $row['Price'] ?></a>
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