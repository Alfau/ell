<div id="filters">
	<div id="filter_brands">
		<p>Filter :</p>
		<select name="filter_brands">
			<option value="All">All Brands</option>
		<?php
		include("connection.php");
		
		if(isset($_GET['product_type'])){
			$product_type=$_GET['product_type'];
		}else{
			$product_type="Mobile Phones";
		}
		
		$query="SELECT Brand FROM products WHERE Type='$product_type' ORDER BY Brand";
		$result=mysqli_query($con,$query);
		$last_brand=NULL;
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
</div>