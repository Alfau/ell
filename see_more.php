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
				<?php
				include("connection.php");
				
				if(isset($_GET['type'])){
					$type=$_GET['type'];
					if($type=="Mobile Phones" || $type=="Tablets" || $type="TV" || $type="Audio" || $type="Video"){
						$product_ID=$_GET['product_ID'];
						$query="SELECT Name,Price,Description,Specifications FROM products WHERE ID='$product_ID'";
						$result=mysqli_query($con,$query);
						
						while($row=mysqli_fetch_array($result)){
							?>
							<div id="slideshow_see_more">
								<div id="slides">
								<?php
									$slide_query="SELECT Slide FROM product_slides WHERE Product_ID='$product_ID'";
									$slide_result=mysqli_query($con,$slide_query);
									while($slide_row=mysqli_fetch_array($slide_result)){
									?>
										<div>
											<img src="<?php echo $slide_row['Slide'] ?>" alt="slide"/>
										</div>
									<?php
									}
								?>
								</div>
							</div>
							<div id="product_summary">
								<h2 class="product_name"><?php echo $row['Name']?></h2>
								<p><span class='light'>Price : </span><span class="price">Rf. <?php echo $row['Price']?></span></p><br />
								<p><?php echo $row['Description']?></p>
							</div>
							<div id="product_share">
								<img src="icons/facebook.png"/>
								<img src="icons/twitter.png"/>
								<img src="icons/pinterest.png"/>
							</div>
							<div id="product_specs">
								<h2 class="title">Specifications</h2>
								<table>
								<?php
								$specs_query="SELECT * FROM mobile_specs WHERE product_ID='$product_ID'";
								$specs_result=mysqli_query($con,$specs_query);
								while($specs_array=mysqli_fetch_array($specs_result)){
									foreach($specs_array as $col_name => $specs){
										if($col_name!="ID" && $col_name!="Product_ID" && !is_numeric($col_name)){
											if(empty($specs)){
												$specs="+N/A";
											}
											$displayed_specs=explode("+",$specs)
									?>
									<tr>
										<td><?php echo $col_name ?></td>
										<td>
										<?php
											$counter=0;
											foreach($displayed_specs as $value){
												if($counter>0){
													echo $value."<br />";
												}
												$counter++;
											}
										?>
										</td>
									</tr>
									<?php
										}
									}
								}
								?>
								</table>
							</div>
							<div id="similar_products">
								<h2 class="title">Similar Products you might be interested in</h2>
								<?php
								$query="SELECT Name,Price,Thumbnail FROM products ORDER BY RAND() LIMIT 2";
								$result=mysqli_query($con,$query);
								while($row=mysqli_fetch_array($result)){
									?>
									<div>
										<img src="<?php echo $row['Thumbnail'] ?>" height="120"/>
										<p class="price"><?php echo $row['Name'] ?></p>
									</div>
									<?php
								}
								?>
							</div>
							<?php
						}
					}elseif($type=="Mobile Accessories"){
						$product_ID=$_GET['product_ID'];
						$query="SELECT Name,Description,Thumbnail FROM products WHERE ID='$product_ID'";
						$result=mysqli_query($con,$query);
						
						while($row=mysqli_fetch_array($result)){
							?>
								<img src="<?php echo $row['Thumbnail']?>" height="250"/>
								<h2><?php echo $row['Name']?></h2><br />
								<p><?php echo $row['Description']?></p><br /><br />
							<?php
						}
					}
				}
				?>
			</div>
		</main>
		
		<?php include("footer.php"); ?>
	</body>
</html>