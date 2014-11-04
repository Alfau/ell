<!DOCTYPE HTML>
<html>
	<head>
		<title>Ell Mobile</title>
		<?php include("head.php"); ?>
	</head>
	<body>
		<?php include("header_2.php"); ?>
		
		<main>
			<div id="content">
				<div id="filter_brands">
					<?php
					include("connection.php");
					
					if(isset($_GET['product_type'])){
						$product_type=$_GET['product_type'];
					}else{
						//$product_type="Mobile Phones";
					}
					$query="SELECT Brand FROM products WHERE Type='$product_type' ORDER BY Brand";
					$result=mysqli_query($con,$query);
					$last_brand=NULL;
					?>
					<p>Filter :</p>
					<select name="filter_brands" class="">
						<option value="All">All Brands</option>
						<?php
						while($row=mysqli_fetch_array($result)){
							if($last_brand!=$row['Brand']){
								?>
								<option value="<?php echo $row['Brand'] ?>"><?php echo $row['Brand']; ?></option>
								<?php
							}
							$last_brand=$row['Brand'];
						}
						?>
					</select>
				</div>
				<div id="sort_products">
					<p>Sort by :</p>
					<select name="sort_products">
						<option value="newest">Newest</option>
						<option value="lowest">Lowest Price</option>
						<option value="highest">Highest Price</option>
					</select>
				</div>
				<div id="products_by_brand">
				<?php
					include("connection.php");
					
					if(isset($_GET['brand'])){
						$brand=$_GET['brand'];
						$product_type=$_GET['type'];
						if(isset($_GET['page'])){
							$next_page=$_GET['page'];
							$rows_per_page=16;
							$offset=($next_page-2)*$rows_per_page;
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
						}
						
						
						//$query="SELECT ID,Name,Price,Thumbnail FROM products WHERE Type='$product_type' AND Brand='$brand'";
						$result=mysqli_query($con,$query);
						//echo "<a href='by_brand.php?brand=$brand' class='brand_title'>$brand</a>";
						while($row=mysqli_fetch_array($result)){
							?>
							<div>
								<a href="see_more.php?type=<?php echo $product_type ?>&product_ID=<?php echo $row['ID'] ?>"><img src="<?php echo $row['Thumbnail'] ?>"/></a>
								<div>
									<a href="see_more.php?type=<?php echo $product_type ?>&product_ID=<?php echo $row['ID'] ?>" class="product_name_small"><?php echo $row['Name'] ?></a><br />
									<a href="see_more.php?type=<?php echo $product_type ?>&product_ID=<?php echo $row['ID'] ?>"><span class="light">Price : </span><span class="price">Rf. <?php echo $row['Price'] ?></span></a>
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