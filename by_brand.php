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
						<li><a href="mobile.php?product_type=Mobile Phones" class="active">Mobile Phones</a></li>
						<li><a href="mobile.php?product_type=Tablets">Tablets</a></li>
						<li><a href="mobile.php?product_type=Mobile Accessories">Mobile Accessories</a></li>
					</ul>
					<?php include("filter.php"); ?>
				</nav>
				<div id="products_by_brand">
				<?php
					include("connection.php");
					//include("filter.php");
					
					if(isset($_GET['brand'])){
						$brand=$_GET['brand'];
						$product_type=$_GET['product_type'];
						if(isset($_GET['page'])){
							$next_page=$_GET['page'];
							$rows_per_page=16;
							$offset=($next_page-1)*$rows_per_page;
							$limit="LIMIT $offset,$rows_per_page";
						}else{
							//$query="SELECT ID,Name,Price,Thumbnail FROM products WHERE Type='$product_type' AND Brand='$brand' LIMIT 0,16";
							$limit="LIMIT 0,16";
						}
						
						
						if(isset($_GET['filter_brands']) && $_GET['sort_products']){
							$filter_brands=$_GET['filter_brands'];
							$sort_products=$_GET['sort_products'];
							
							if($sort_products=="newest"){
								$sort_products="ID ASC";
							}elseif($sort_products=="lowest"){
								$sort_products="Price ASC";
							}elseif($sort_products=="highest"){
								$sort_products="Price DESC";
							}
									
							if($filter_brands=="All"){
								$query="SELECT ID,Name,Brand,Price,Thumbnail FROM products WHERE Type='$product_type' ORDER BY $sort_products $limit";
							}else{
								$query="SELECT ID,Name,Brand,Price,Thumbnail FROM products WHERE Type='$product_type' AND Brand='$filter_brands' ORDER BY $sort_products $limit";
							}
						}else{
							$query="SELECT ID,Name,Brand,Price,Thumbnail FROM products WHERE Type='$product_type' AND Brand='$brand' $limit";
							// $query="SELECT ID,Name,Brand,Price,Thumbnail FROM products $limit";
						}
						
						
						//$query="SELECT ID,Name,Price,Thumbnail FROM products WHERE Type='$product_type' AND Brand='$brand'";
						$result=mysqli_query($con,$query);
						//echo "<a href='by_brand.php?brand=$brand' class='brand_title'>$brand</a>";
						while($row=mysqli_fetch_array($result)){
							?>
							<div>
								<div id="similar_products_image">
									<a href="see_more.php?type=<?php echo $product_type ?>&product_ID=<?php echo $row['ID'] ?>"><img src="<?php echo $row['Thumbnail'] ?>"/></a>
								</div>
								<div id="similar_products_info">
									<div>
										<a href="see_more.php?type=<?php echo $product_type ?>&product_ID=<?php echo $row['ID'] ?>" class="product_name_small"><?php echo $row['Name'] ?></a><br />
										<a href="see_more.php?type=<?php echo $product_type ?>&product_ID=<?php echo $row['ID'] ?>"><span class="price">Rf. <?php echo $row['Price'] ?></span></a><br /><br />
										<a href="see_more.php?product_type=<?php echo $product_type ?>&product_ID=<?php echo $row['ID'] ?>" class="details">Details</a>
									</div>
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