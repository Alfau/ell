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
						
						include("products.php");
						?>
				</div>
			</div>
		</main>
		
		<?php include("footer.php"); ?>
	</body>
</html>