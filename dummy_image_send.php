<?php
if(isset($_GET['carousel_page']) && isset($_GET['carousel_brand'])){
	include("connection.php");
	
	$next_page=$_GET['carousel_page'];
	$rows_per_page=7;
	$offset=($next_page-1)*$rows_per_page;
	$limit="LIMIT $offset,$rows_per_page";
		
	$brand=$_GET['carousel_brand'];

	if(isset($_GET['product_type'])){
		$product_type=$_GET['product_type'];
	}else{
		$product_type="Mobile Phones";
	}
	
	$query="SELECT ID,Name,Brand,Price,Thumbnail FROM products WHERE Type='$product_type' and Brand='$brand' $limit";
	$result=mysqli_query($con,$query);
	while($row_brand=mysqli_fetch_array($result)){
		?>
		<div class="carousel_product">
			<div class="carousel_image">
				<a href="see_more.php?product_type=<?php echo $product_type ?>&product_ID=<?php echo $row_brand['ID'] ?>"><img src='<?php echo $row_brand['Thumbnail'] ?>'/></a>
			</div>
			<div class="carousel_info">
				<p><?php echo $row_brand['ID']." / ". $row_brand['Brand'] ?></p>
				<a href="see_more.php?product_type=<?php echo $product_type ?>&product_ID=<?php echo $row_brand['ID'] ?>" class="product_name_small"><?php echo $row_brand['Name'] ?></a><br />
				<a href="see_more.php?product_type=<?php echo $product_type ?>&product_ID=<?php echo $row_brand['ID'] ?>" class="price">Rf. <?php echo $row_brand['Price'] ?></a><br /><br />
				<a href="see_more.php?product_type=<?php echo $product_type ?>&product_ID=<?php echo $row_brand['ID'] ?>" class="details">Details</a>
			</div>
		</div>
		<?php
	}
}
?>