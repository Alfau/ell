<!DOCTYPE HTML>
<html>
	<head>
		<title>Ell Mobile</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="jquery-1.11.1.min.js"></script>
		<script src="script.js"></script>
	</head>
	<body>
		<?php include("header.php"); ?>
		
		<main>
			<div id="content">
					
					<nav id="main_sub">
						<ul>
							<li><a href="mobile.php?product_type=TV" id="TV" class="active">TV</a></li>
							<li><a href="mobile.php?product_type=Audio" id="Audio">Audio</a></li>
							<li><a href="mobile.php?product_type=Video" id="Video">Video</a></li>
						</ul>
					</nav>
					<div id="mobile_brands">
					
						<?php
						include("connection.php");
						
						if(isset($_GET['product_type'])){
							$product_type=$_GET['product_type'];
						}else{
							$product_type="TV";
						}
						
						$query="SELECT Brand FROM products WHERE Type='$product_type' ORDER BY Brand";
						$result=mysqli_query($con,$query);
						$last_brand=NULL;
						while($row=mysqli_fetch_array($result)){
							if($last_brand!=$row['Brand']){
								$brand=$row['Brand'];
								$query_brand="SELECT ID,Name,Price,Thumbnail FROM products WHERE Type='$product_type' AND Brand='$brand'";
								$result_brand=mysqli_query($con,$query_brand);
								echo "<div class='products_carousel'>";
								echo "<a href='by_brand.php?type=$product_type&brand=$brand'>$brand</a>";
								while($row_brand=mysqli_fetch_array($result_brand)){
									?>
									<div>
										<a href="see_more.php?type=<?php echo $product_type ?>&product_ID=<?php echo $row_brand['ID'] ?>"><img src='<?php echo $row_brand['Thumbnail'] ?>' height='120'/></a>
										<div>
											<a href="see_more.php?type=<?php echo $product_type ?>&product_ID=<?php echo $row_brand['ID'] ?>"><?php echo $row_brand['Name'] ?></a>
											<!--<a href="see_more.php?type=<?php echo $product_type ?>&product_ID=<?php echo $row_brand['ID'] ?>">Rf. <?php echo $row_brand['Price'] ?></a>-->
										</div>
									</div>
									<?php
								}
								echo "</div>";
								$last_brand=$row['Brand'];
							}
						}
						?>
				</div>
			</div>
		</main>
		
		<?php include("footer.php"); ?>
	</body>
</html>