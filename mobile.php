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
				<div id="mobile_brands">
				<?php
				include("connection.php");
				
				if(isset($_GET['mobile_which'])){
					$mobile_which=$_GET['mobile_which'];
				}else{
					$mobile_which="Mobile Phones";
				}
				
				$query="SELECT Brand,ID FROM products WHERE Type='$mobile_which' ORDER BY Brand";
				$result=mysqli_query($con,$query);
				$last_brand=NULL;
				while($row=mysqli_fetch_array($result)){
					if($last_brand!=$row['Brand']){
						$brand=$row['Brand'];
						$query_brand="SELECT * FROM products WHERE Type='$mobile_which' AND Brand='$brand'";
						$result_brand=mysqli_query($con,$query_brand);
						echo "<div class='products_carousel'>";
						echo "<a href='by_brand.php' class='$mobile_which' id='$brand'>$brand</a>";
						while($row_brand=mysqli_fetch_array($result_brand)){
							?>
							<div>
								<img src='<?php echo $row_brand['Thumbnail'] ?>' height='150'/>
								<div>
									<a href="see_more.php" class="Mobile Phones" id="<?php echo $row_brand['ID'] ?>"><?php echo $row_brand['Name'] ?></a>
									<a href="see_more.php" class="Mobile Phones" id="<?php echo $row_brand['ID'] ?>">Rf. <?php echo $row_brand['Price'] ?></a>
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
		
		<?php //include("footer.php"); ?>
	</body>
</html>