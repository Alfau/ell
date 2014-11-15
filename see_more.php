<!DOCTYPE HTML>
<html>
	<head>
		<title>Ell Mobile</title>
		<?php include("head.php"); ?>
	</head>
	<body>
		<?php //include("header_2.php"); ?>
		<?php include("header.php"); ?>
		
		<main>
			<div id="content">
				<div id="see_more">
				<?php
				include("connection.php");
				// include("social_javascript_SDK.php");
				
				if(isset($_GET['product_type'])){
					$type=$_GET['product_type'];
					if($type=="Mobile Phones" || $type=="Tablets" || $type="TV" || $type="Audio" || $type="Video"){
						$product_ID=$_GET['product_ID'];
						$query="SELECT Name,Price,Description,Specifications FROM products WHERE ID='$product_ID'";
						$result=mysqli_query($con,$query);
						
						while($row=mysqli_fetch_array($result)){
							?>
							<div id="see_more_top">
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
									<div class="fb-share-button" data-href="<?php $_SERVER['REQUEST_URI'] ?>"></div>
									<a href="https://twitter.com/share" class="twitter-share-button" data-text="Amazing deal from Ell Mobile!! " data-count="none">Tweet</a>
									<!-- <img src="icons/facebook.png" /> -->
									<!-- <img src="icons/twitter.png"/> -->
									<!-- <img src="icons/pinterest.png"/> -->
								</div>
								
								
								
								
							</div>
							<div id="product_specs">
								<h2 class="title">Specifications</h2>
								<table>
								<?php
								$specs_query="SELECT * FROM mobile_specs WHERE product_ID='$product_ID' LIMIT 1";
								$specs_result=mysqli_query($con,$specs_query);
								$specs_array=mysqli_fetch_fields($specs_result);
									foreach($specs_array as $col_name){
										if(($col_name->name)!="ID" && ($col_name->name)!="Product_ID" && !is_numeric($col_name->name)){
											if(empty($specs)){
												$specs="+N/A";
											}
											$displayed_specs=explode("+",$specs);
									?>
									<tr>
										<td><?php echo $col_name->name ?></td>
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
								
								?>
								</table>
							</div>
							<div id="similar_products">
								<h2 class="title">Other Products you might be interested in</h2>
								<?php
								$query="SELECT ID,Type,Name,Price,Thumbnail FROM products ORDER BY RAND() LIMIT 2";
								$result=mysqli_query($con,$query);
								while($row=mysqli_fetch_array($result)){
									?>
									<div class="similar_products_container">
										<div id="similar_products_image">
											<img src="<?php echo $row['Thumbnail'] ?>" height="120"/>
										</div>	
										<div id="similar_products_info">
											<div>
												<a href="see_more.php?product_type=<?php echo $row['Type'] ?>&product_ID=<?php echo $row['ID'] ?>" class="product_name_small"><?php echo $row['Name'] ?></a><br />
												<a href="see_more.php?product_type=<?php echo $row['Type'] ?>&product_ID=<?php echo $row['ID'] ?>" class="price">Rf. <?php echo $row['Price'] ?></a><br /><br />
												<a href="see_more.php?product_type=<?php echo $row['Type'] ?>&product_ID=<?php echo $row['ID'] ?>" class="details">Details</a>
											</div>
										</div>
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
			</div>
		</main>
		
		<?php include("footer.php"); ?>
	</body>
</html>