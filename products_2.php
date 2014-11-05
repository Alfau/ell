<!--<div id="filter_brands"><p>Filter :</p>
	<select name="filter_brands">
		<option value="All">All Brands</option>
	<?php
	$query="SELECT Brand FROM products WHERE Type='$product_type' ORDER BY Brand";
	$result=mysqli_query($con,$query);
	$last_brand=NULL;
	while($row=mysqli_fetch_array($result)){
		if($last_brand!=$row['Brand']){
			?>
			<option value="<?php //echo $row['Brand'] ?>"><?php echo $row['Brand']; ?></option>
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
</div>-->
<?php

/*
if(isset($_GET['page'])){
	$next_page=$_GET['page'];
	$rows_per_page=7;
	$offset=($next_page-1)*$rows_per_page;
	$limit="LIMIT $offset,$rows_per_page";
}else{
	//$query_brand="SELECT ID,Name,Price,Thumbnail FROM products WHERE Type='$product_type' AND Brand='$brand' LIMIT 0,7";
	$limit="LIMIT 0,7";
}*/


/*
if(isset($_GET['filter_brands']) && isset($_GET['sort_products'])){
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
	
	$result_brand=mysqli_query($con,$query);
	//echo "<a href='by_brand.php?product_type=$product_type&brand=$filter_brands' class='brand_title'>$brand</a>";
	echo "<div class='products_carousel'>";
	echo "<div class='products_wrapper'>";
	while($row_brand=mysqli_fetch_array($result_brand)){
		?>
		<div class="carousel_product">
			<div class="carousel_image">
				<a href="see_more.php?product_type=<?php echo $product_type ?>&product_ID=<?php echo $row_brand['ID'] ?>"><img src='<?php echo $row_brand['Thumbnail'] ?>'/></a>
			</div>
			<div class="carousel_info">
				<a href="see_more.php?product_type=<?php echo $product_type ?>&product_ID=<?php echo $row_brand['ID'] ?>" class="product_name_small"><?php echo $row_brand['Name'] ?></a><br />
				<a href="see_more.php?product_type=<?php echo $product_type ?>&product_ID=<?php echo $row_brand['ID'] ?>" class="price">Rf. <?php echo $row_brand['Price'] ?></a>
				<a href="see_more.php?product_type=<?php echo $product_type ?>&product_ID=<?php echo $row_brand['ID'] ?>" class="details">Details</a>
			</div>
		</div>
		<?php
	}
	echo "</div>";
	echo "</div>";
	
}else{*/
if(isset($_GET['carousel_page']) && isset($_GET['carousel_brand'])){
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
}elseif(isset($_GET['ell_rec'])){
	$next_page=$_GET['carousel_page'];
	$rows_per_page=7;
	$offset=($next_page-1)*$rows_per_page;
	$limit="LIMIT $offset,$rows_per_page";
	
	$query="SELECT ID,Name,Brand,Price,Thumbnail FROM products WHERE Ell_Rec='True' $limit";
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
	
}else{	
	if(isset($_GET['filter_brands'])){
		$filter_brands=$_GET['filter_brands'];
		if($filter_brands=="All"){
			$query="SELECT Brand FROM products WHERE Type='$product_type' ORDER BY Brand";
		}else{
			$query="SELECT Brand FROM products WHERE Type='$product_type' AND Brand='$filter_brands' ORDER BY Brand";
		}
	}else{
		$query="SELECT Brand FROM products WHERE Type='$product_type' ORDER BY Brand";
	}
	$result=mysqli_query($con,$query);
	$last_brand=NULL;
	$unique_id=1;
	while($row=mysqli_fetch_array($result)){
		$limit="LIMIT 0,7";
		if($last_brand!=$row['Brand']){
			if(isset($_GET['carousel_brand'])){
				$brand=$_GET['carousel_brand'];
			}else{
				$brand=$row['Brand'];
			}
			if(isset($_GET['filter_brands']) && isset($_GET['sort_products'])){
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
					$query="SELECT ID,Name,Brand,Price,Thumbnail FROM products WHERE Type='$product_type' AND Brand='$brand' ORDER BY $sort_products $limit";
				}else{
					$query="SELECT ID,Name,Brand,Price,Thumbnail FROM products WHERE Type='$product_type' AND Brand='$brand' ORDER BY $sort_products $limit";
				}
				echo "<a href='by_brand.php?product_type=$product_type&brand=$brand' class='brand_title'>$brand</a>";
			}else{
				$query="SELECT ID,Name,Brand,Price,Thumbnail FROM products WHERE Type='$product_type' AND Brand='$brand' ORDER BY BRAND $limit";
				echo "<a href='by_brand.php?product_type=$product_type&brand=$brand' class='brand_title'>$brand</a>";
			}
			$result_brand=mysqli_query($con,$query);			
			echo "<div class='products_carousel' id='$brand'>";
			echo "<div class='products_wrapper' id='$unique_id'>";
			$unique_id++;
			while($row_brand=mysqli_fetch_array($result_brand)){
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
			echo "</div>";
			echo "</div>";
			$last_brand=$row['Brand'];
		}
	}

}

?>