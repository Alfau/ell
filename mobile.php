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
					<?php
						include("connection.php");
					
						if(isset($_GET['product_category'])){
							$product_category=$_GET['product_category'];
							
							$query="SELECT * FROM product_categories WHERE Main_Category='$product_category' ORDER BY Order_Sub ASC";
							$result=mysqli_query($con,$query);
							while($row=mysqli_fetch_array($result)){
								?>
								<li><a href="mobile.php?product_type=<?php echo $row['Sub_Category'] ?>"><?php echo $row['Sub_Category'] ?></a></li>
								<?php
							}
						}
					?>
					</ul>
					<?php include("filter.php"); ?>
				</nav>
				<div id="mobile_brands">
					<?php
					include("connection.php");
					
					if(isset($_GET['product_type'])){
						$product_type=$_GET['product_type'];
					}else{
						if(isset($_GET['product_category'])){
							$query="SELECT Sub_Category FROM product_categories WHERE Main_Category='$product_category'";
							$result=mysqli_query($con,$query);
							$row=mysqli_fetch_array($result);
							$product_type=$row['Sub_Category'];
						}
					}
					include("products_2.php");
					?>
				</div>
			</div>
		</main>
		
		<?php include("footer.php"); ?>
	</body>
</html>