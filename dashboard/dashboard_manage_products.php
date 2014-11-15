<?php include("session_verification.php"); ?>
<!DOCTYPE HTML>
<html>
  <head>
		<title>Administrator Dashboard</title>
		<link rel="stylesheet" type="text/css" href="dashboard_style.css"/>
		<script src="../jquery-1.11.1.min.js"></script>
		<script src="dashboard_script.js"></script>
	</head>
  <body>
	<?php include("dashboard_nav.php") ?>
	
	<main>
		<?php
		if(isset($_GET['main_category'])){
			$main_category=$_GET['main_category'];
			if(!isset($_GET['how_manage'])){
				?>
				<div class="manage_options">
					<h4>Choose an option :</h4>
					<p><a href="dashboard_manage_products.php?main_category=<?php echo $main_category ?>&how_manage=add" class="add"><span>&nbsp;</span>Add <?php echo $main_category ?> Products</a></p>
					<p><a href="dashboard_manage_products.php?main_category=<?php echo $main_category ?>&how_manage=remove" class="remove"><span>&nbsp;</span>Remove <?php echo $main_category ?> Products</a></p>
					<p><a href="dashboard_manage_products.php?main_category=<?php echo $main_category ?>&how_manage=ell_rec" class="ell_rec"><span>&nbsp;</span>Choose Ell Recommended Products</a></p>
				</div>
				<?php
			}else{
				?>
				<div class="manage_options">	
					<h4>Choose an option :</h4>
					<p><a href="dashboard_manage_products.php?main_category=<?php echo $main_category ?>&how_manage=add" class="add"><span>&nbsp;</span>Add <?php echo $main_category ?> Products</a></p>
					<p><a href="dashboard_manage_products.php?main_category=<?php echo $main_category ?>&how_manage=remove" class="remove"><span>&nbsp;</span>Remove <?php echo $main_category ?> Products</a></p>
					<p><a href="dashboard_manage_products.php?main_category=<?php echo $main_category ?>&how_manage=ell_rec" class="ell_rec"><span>&nbsp;</span>Choose Ell Recommended Products</a></p>
				</div>
				<?php
				if(!isset($_GET['modify_category'])){
					?>
					<div class="manage_category">
						<h4>Choose a product category :</h4>
						<?php
						$sub_categories_query="SELECT Sub_Category FROM product_categories WHERE Main_Category='$main_category'";
						$sub_categories_result=mysqli_query($con,$sub_categories_query);
						while($sub_categories_row=mysqli_fetch_array($sub_categories_result)){
							?>
							<p><a href="dashboard_manage_products.php?main_category=<?php echo $main_category ?>&modify_category=<?php echo $sub_categories_row['Sub_Category'] ?>&how_manage=<?php echo $_GET['how_manage'] ?>"><span>&nbsp;</span><?php echo $sub_categories_row['Sub_Category'] ?></a></p>
							<?php
						}
						?>			
					</div>
					<?php
				}else{
					?>
					<div class="manage_category">
						<h4>Choose a product category :</h4>
						<?php
						$sub_categories_query="SELECT Sub_Category FROM product_categories WHERE Main_Category=$main_category";
						$sub_categories_result=mysqli_query($con,$sub_categories_query);
						while($sub_categories_row=mysqli_fetch_array($sub_categories_result)){
							?>
							<p><a href="dashboard_manage_products.php?main_category=<?php echo $main_category ?>&modify_category=<?php echo $sub_categories_row['Sub_Category'] ?>"><span>&nbsp;</span><?php echo $sub_categories_row['Sub_Category'] ?></a></p>
							<?php
						}
						?>
					</div>
					<?php
					
					$how_manage=$_GET['how_manage'];
					$modify_category=$_GET['modify_category'];
					
					if($how_manage=="add"){
						?>
						<div class="content">
							<h4>Add <?php echo $modify_category ?> to Database</h4>
							<?php include("dashboard_manage_products_handler2.php");?>
							<form method="POST" action="dashboard_manage_products?main_category=<?php echo $main_category ?>&how_manage=add&modify_category=<?php echo $modify_category ?>" enctype="multipart/form-data">
								<table>
									<tr>
										<td>Brand :</td>
										<td><input type="text" name="brand"/><!-- there may be a script in the script page that shows a text box on choosing other from the now non existant select input. delete that --></td>
									</tr>
									<tr>
										<td>Name :</td>
										<td><input type="text" name="name"/></td>
									</tr>
									<tr>
										<td>Price(Rf) :</td>
										<td><input type="text" name="price"/></td>
									</tr>
									<tr>
										<td>Description :</td>
										<td><textarea name="desc"></textarea></td>
									</tr>
									<tr>
										<td>Product Thumbnail :</td>
										<td>
											<input type="file" name="product_thumbnail"/>
										</td>
									</tr>
									<tr>
										<td>Specifications :</td>
										<td>Note : Please include a + sign infront of each spec. It represent a bullet point of a list.</td>
									</tr>
									<?php
									$spec_table="specifications_".str_replace(" ", "_", $modify_category);
									$spec_query="SELECT * FROM $spec_table LIMIT 0,1";
									$spec_result=mysqli_query($con,$spec_query);
									$spec_row=mysqli_fetch_fields($spec_result);
									foreach($spec_row as $col_name){
										if(($col_name->name)!="ID" && ($col_name->name)!="Product_ID"){
										?>
										<tr>
											<td class="specs"><?php echo $col_name->name ?></td>
											<td><textarea name="<?php echo $col_name->name ?>"></textarea></td>
										</tr>
										<?php
										}
									}
									?>
									<tr>
										<td><input type="submit" value="Submit"/></td>
									</tr>
								</table>
								<input type="hidden" name="main_category" value="<?php echo $main_category; ?>"/>
								<input type="hidden" name="add" value="<?php echo $modify_category ?>"/>								
							</form>
						</div>
						<?php
					}elseif($how_manage=="remove"){
						?>
						<div class="content">
							<h4>Remove <?php echo $modify_category ?> from Website</h4>
							<br /><p class="asterix"> * A list of the recent uploaded to the website. If the product you want to remove is not here, use the search function below to find it.</p>
							<table>
							<?php 
							include("dashboard_manage_products_handler2.php");
							$recent_products_query="SELECT * FROM products WHERE Type='$modify_category' ORDER BY ID DESC LIMIT 10";
							$recent_products_result=mysqli_query($con,$recent_products_query);
							while($recent_products_row=mysqli_fetch_array($recent_products_result)){
								?>
								<tr>
									<td><img src="<?php echo "../".$recent_products_row['Thumbnail'] ?>" height="120"/></td>
									<td>
										<form method="POST" action="dashboard_manage_products?how_manage=remove&modify_category=<?php echo $modify_category ?>">
											<span class="product_name_small"><?php echo $recent_products_row['Name'] ?></span><br />
											<span class="light">Price : </span><span class="price">Rf. <?php echo $recent_products_row['Price'] ?></span><br />
											<br /><input type="submit" name="remove" value="Remove	"/>
											<input type="hidden" name="product_ID" value="<?php echo $recent_products_row['ID'] ?>"/>
										</form>
									</td>
								</tr>
								<?php
							}
							?>
							</table>
						</div>
						
						<div class="content">
							<h4>Search for the product you want to remove</h4>
							<form method="POST" action="dashboard_manage_products?how_manage=remove&modify_category=<?php echo $modify_category ?>">
								<table>
									<tr>
										<td>Search : </td>
										<td><input type="text" name="search_and_remove"/></td>
									</tr>
									<tr>
										<td><input type="submit" value="Search"/></td>
									</tr>
								</table>
							</form>
						</div>
						<?php
					}elseif($how_manage=="ell_rec"){
						?>	
						<div class="content">
							<h4>Choose product to recommend!</h4>
							<br /><p class="asterix"> * A list of the recent products uploaded to the website. If the product you want to choose is not here, use the search function below to find it.</p>	
							<table>
							<?php 
							include("dashboard_manage_products_handler2.php");
							$ell_rec_query="SELECT * FROM products WHERE Type='$modify_category' AND Ell_Rec='False' ORDER BY ID DESC LIMIT 10";
							$ell_rec_result=mysqli_query($con,$ell_rec_query);
							while($row=mysqli_fetch_array($ell_rec_result)){
								?>
								<tr>
									<td><img src="<?php echo "../".$ell_rec_row['Thumbnail'] ?>" height="120"/></td>
									<td>
										<form method="POST" action="dashboard_modify_multimedia?how_manage=ell_rec&modify_category=<?php echo $modify_category ?>">
											<span class="product_name_small"><?php echo $ell_rec_ow['Name'] ?></span><br />
											<span class="light">Price : </span><span class="price">Rf. <?php echo $ell_rec_row['Price'] ?></span><br /><?php echo $ell_rec_row['ID']; ?>
											<br /><input type="submit" name="ell_rec" value="Recommend"/>
											<input type="hidden" name="product_ID" value="<?php echo $ell_rec_row['ID'] ?>"/>
										</form>
									</td>
								</tr>
							<?php
							}
							?>
							</table>
						</div>
						
						<div class="content">
							<h4>Search for the product you want to recommend</h4>
							<form method="POST" action="dashboard_modify_mobile?how_manage=remove&modify_category=<?php echo $modify_category ?>">
								<table>
									<tr>
										<td>Search : </td>
										<td><input type="text" name="search_and_recommend"/></td>
									</tr>
									<tr>
										<td><input type="submit" value="Search"/></td>
									</tr>
								</table>
							</form>
						</div>
					<?php						
					}
				}
			}
		}
		?>
	</main>
  </body> 
</html>