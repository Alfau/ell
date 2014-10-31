<!DOCTYPE HTML>
<html>
	<head>
		<title>Ell Mobile</title>
		<?php include("head.php"); ?>
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
						//$query="SELECT ID,Name,Price,Thumbnail FROM products WHERE Type='$type' AND Brand='$brand'";
						$query="SELECT ID,Name,Price,Thumbnail FROM products";
						$result=mysqli_query($con,$query);
						echo "<a href='by_brand.php?brand=$brand' class='brand_title'>$brand</a>";
						while($row=mysqli_fetch_array($result)){
							?>
							<div>
								<a href="see_more.php?type=<?php echo $type ?>&product_ID=<?php echo $row['ID'] ?>"><img src="<?php echo $row['Thumbnail'] ?>" height="120"/></a><br />
								<div>
									<a href="see_more.php?type=<?php echo $type ?>&product_ID=<?php echo $row['ID'] ?>" class="product_name_small"><?php echo $row['Name'] ?></a><br />
									<a href="see_more.php?type=<?php echo $type ?>&product_ID=<?php echo $row['ID'] ?>"><span class="light">Price : </span><span class="price">Rf. <?php echo $row['Price'] ?></span></a>
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