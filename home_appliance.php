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
					
					<nav id="main_sub">
						<ul>
							<li><a href="mobile.php?product_type=Kitchen Appliance" class="active">Kitchen Appliances</a></li>
							<li><a href="mobile.php?product_type=Laundry Appliance">Laundry Appliances</a></li>
							<li><a href="mobile.php?product_type=Cooling Appliance">Cooling Appliances</a></li>
						</ul>
					</nav>
					<div id="mobile_brands">
						<?php
						include("connection.php");
						
						if(isset($_GET['product_type'])){
							$product_type=$_GET['product_type'];
						}else{
							$product_type="Kitchen Appliance";
						}
						
						$query="SELECT Brand FROM products WHERE Type='$product_type' ORDER BY Brand";
						$result=mysqli_query($con,$query);
						$last_brand=NULL;
						?>
						<div id="filter_brands">
							<p>Filter :</p>
							<select>
								<option>All Brands</option>
							<?php
							while($row=mysqli_fetch_array($result)){
								if($last_brand!=$row['Brand']){
									?>
									<option><?php echo $row['Brand']; ?></option>
									<?php
								}
								$last_brand=$row['Brand'];
							}
							?>
							</select>
						</div>
						<div id="sort_products">
							<p>Sort by :</p>
							<select>
								<option>Newest</option>
								<option>Popularity</option>
								<option>Lowest Price</option>
								<option>Highest Price</option>
							</select>
						</div>
						<?php
						$query="SELECT Brand FROM products WHERE Type='$product_type' ORDER BY Brand";
						$result=mysqli_query($con,$query);
						$last_brand=NULL;
						while($row=mysqli_fetch_array($result)){
							if($last_brand!=$row['Brand']){
								$brand=$row['Brand'];
								//$query_brand="SELECT ID,Name,Price,Thumbnail FROM products WHERE Type='$product_type' AND Brand='$brand'";
								$query_brand="SELECT ID,Name,Price,Thumbnail FROM products";
								$result_brand=mysqli_query($con,$query_brand);
								echo "<a href='by_brand.php?type=$product_type&brand=$brand' class='brand_title'>$brand</a>";
								echo "<div class='products_carousel'>";
								while($row_brand=mysqli_fetch_array($result_brand)){
									?>
									<div class="carousel_product">
										<div class="carousel_image">
											<a href="see_more.php?type=<?php echo $product_type ?>&product_ID=<?php echo $row_brand['ID'] ?>"><img src='<?php echo $row_brand['Thumbnail'] ?>'/></a>
										</div>
										<div class="carousel_info">
											<a href="see_more.php?type=<?php echo $product_type ?>&product_ID=<?php echo $row_brand['ID'] ?>" class="product_name"><?php echo $row_brand['Name'] ?></a><br />
											<a href="see_more.php?type=<?php echo $product_type ?>&product_ID=<?php echo $row_brand['ID'] ?>" class="price">Rf. <?php echo $row_brand['Price'] ?></a>
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
		
		<?php include("footer.php"); ?>
	</body>
</html>