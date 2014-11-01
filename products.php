<?php
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
$unique_id=1;
while($row=mysqli_fetch_array($result)){
	if($last_brand!=$row['Brand']){
		$brand=$row['Brand'];
		
		if(isset($_GET['page'])){
			$next_page=$_GET['page'];
			$rows_per_page=7;
			$offset=($next_page-2)*$rows_per_page;
			$query_brand="SELECT ID,Name,Price,Thumbnail FROM products WHERE Type='$product_type' AND Brand='$brand' LIMIT $offset,$rows_per_page";
		}else{
			$query_brand="SELECT ID,Name,Price,Thumbnail FROM products WHERE Type='$product_type' AND Brand='$brand' LIMIT 0,7";
		}
		
		$result_brand=mysqli_query($con,$query_brand);
		echo "<a href='by_brand.php?type=$product_type&brand=$brand' class='brand_title'>$brand</a>";
		echo "<div class='products_carousel'>";
		echo "<div class='products_wrapper' id='$unique_id'>";
		$unique_id++;
		while($row_brand=mysqli_fetch_array($result_brand)){
			?>
			<div class="carousel_product">
				<div class="carousel_image">
					<a href="see_more.php?type=<?php echo $product_type ?>&product_ID=<?php echo $row_brand['ID'] ?>"><img src='<?php echo $row_brand['Thumbnail'] ?>'/></a>
				</div>
				<div class="carousel_info">
					<a href="see_more.php?type=<?php echo $product_type ?>&product_ID=<?php echo $row_brand['ID'] ?>" class="product_name_small"><?php echo $row_brand['Name'] ?></a><br />
					<a href="see_more.php?type=<?php echo $product_type ?>&product_ID=<?php echo $row_brand['ID'] ?>" class="price">Rf. <?php echo $row_brand['Price'] ?></a>
				</div>
			</div>
			<?php
		}
		echo "</div>";
		echo "</div>";
		$last_brand=$row['Brand'];
	}
}



?>