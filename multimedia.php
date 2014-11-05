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
							<li><a href="multimedia.php?product_type=TV" id="TV" class="active">TV</a></li>
							<li><a href="multimedia.php?product_type=Audio" id="Audio">Audio</a></li>
							<li><a href="multimedia.php?product_type=Video" id="Video">Video</a></li>
						</ul>
						<?php include("filter.php"); ?>
					</nav>
					<div id="mobile_brands">
						<?php
						
						if(isset($_GET['product_type'])){
							$product_type=$_GET['product_type'];
						}else{
							$product_type="TV";
						}
						
						include("products_2.php");
						?>
				</div>
			</div>
		</main>
		
		<?php include("footer.php"); ?>
	</body>
</html>