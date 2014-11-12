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
					<div id="mobile_brands">
						<?php
						include("connection.php");
						
						if(isset($_GET['product_type'])){
							$product_type=$_GET['product_type'];
						}else{
							$product_type="Mobile Phones";
						}
						include("products_2.php");
						?>
				</div>
			</div>
		</main>
		
		<?php include("footer.php"); ?>
	</body>
</html>