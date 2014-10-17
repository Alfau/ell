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
				<div id="home_appliance_brands">
				<?php
				include("connection.php");
				
				if(isset($_GET['multimedia_which'])){
					$product_type=$_GET['product_type'];
				}else{
					$product_type="Home Appliance Products";
				}
				
				$query="SELECT Brand,ID FROM products WHERE Type='$product_type' ORDER BY Brand";
				$result=mysqli_query($con,$query);
				$last_brand=NULL;
				while($row=mysqli_fetch_array($result)){
					if($last_brand!=$row['Brand']){
						$brand=$row['Brand'];
						$query_brand="SELECT * FROM products WHERE Type='$product_type' AND Brand='$brand'";
						$result_brand=mysqli_query($con,$query_brand);
						echo "<div class='products_carousel'>";
						echo "<a href='by_brand.php' class='$product_type' id='$brand'>$brand</a>";
						while($row_brand=mysqli_fetch_array($result_brand)){
							?>
							<div>
								<img src='<?php echo $row_brand['Thumbnail'] ?>' height='150'/>
								<div>
									<a href="see_more.php" class="Mobile Phones" id="<?php echo $row_brand['ID'] ?>"><?php echo $row_brand['Name'] ?></a>
									<a href="see_more.php" class="Mobile Phones" id="<?php echo $row_brand['ID'] ?>">Rf. <?php echo $row_brand['Price'] ?></a>
								</div>
							</div>
							<?php
						}
						echo "</div>";
						$last_brand=$row['Brand'];
					}
				}
				?>
				</div>
			</div>
		</main>
		
		<?php //include("footer.php"); ?>
	</body>
</html>