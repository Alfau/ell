<!DOCTYPE HTML>
<html>
	<head>
		<title>Ell Mobile</title>
		<?php include("head.php"); ?>
	</head>
	<body>
		<?php include("header_2.php"); ?>
		
		<main>
			<?php //include("slideshow.php"); ?>
			
			<div id="slideshow">
				<span class="loading">Loading slideshow...</span>
			</div>
			
			<div id="content">
				<a href=# class='brand_title'>LATEST RELEASES</a>
				<div class="products_carousel">
					<div class='products_wrapper'>
					<?php
						include("connection.php");
						$query="SELECT ID,Type,Name,Price,Thumbnail FROM products WHERE Ell_Rec='True'";
						//$query="SELECT ID,Type,Name,Price,Thumbnail FROM products";
						$result=mysqli_query($con,$query);
						while($row=mysqli_fetch_array($result)){
							?>
							<div class="carousel_product">
								<div class="carousel_image">
									<a href="see_more.php?product_type=<?php echo $row['Type']?>&product_ID=<?php echo $row['ID']?>"><img src="<?php echo $row['Thumbnail'] ?>"/></a>
									<!--<a href="see_more.php?product_type=<?php echo $row['Type']?>&product_ID=<?php echo $row['ID']?>" class="see_more">See More</a>-->
								</div>
								<div class="carousel_info">
									<a href="see_more.php?product_type=<?php echo $row['Type']?>&product_ID=<?php echo $row['ID']?>" class="product_name_small"><?php echo $row['Name'] ?></a><br />
									<a href="see_more.php?product_type=<?php echo $row['Type']?>&product_ID=<?php echo $row['ID']?>" class="price">Rf. <?php echo $row['Price'] ?></a><br /><br />
									<a href="see_more.php?product_type=<?php echo $row['Type']?>&product_ID=<?php echo $row['ID']?>" class="details">Details</a>
								</div>
							</div>
							<?php
						}
					?>
					</div>
				</div>
			</div>
		</main>
		
		<?php include("footer.php"); ?>
	</body>
</html>