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
		<?php include("dashboard_nav.php"); ?>
		<main>
			<?php
				if(!isset($_GET['how_manage'])){
				?>
				
					<div class="manage_options">
						<h4>Choose an option :</h4>
						<p><a href="dashboard_modify_mobile.php?how_manage=add" class="add"><span>&nbsp;</span>Add Mobile Products</a></p>
						<p><a href="dashboard_modify_mobile.php?how_manage=remove" class="remove"><span>&nbsp;</span>Remove Mobile Products</a></p>
					</div>
					
				<?php
					
				}else{
					
					?>
						<div class="manage_options">	
							<h4>Choose an option :</h4>
							<p><a href="dashboard_modify_mobile.php?how_manage=add" class="add"><span>&nbsp;</span>Add Mobile Products</a></p>
							<p><a href="dashboard_modify_mobile.php?how_manage=remove" class="remove"><span>&nbsp;</span>Remove Mobile Products</a></p>
						</div>
						
					<?php
					
					if(!isset($_GET['modify_category'])){
					?>
					
						<div class="manage_category">
							<h4>Choose a product category :</h4>
							<p><a href="dashboard_modify_mobile.php?how_manage=add&modify_category=Mobile Phones" class="mobile_phones"><span>&nbsp;</span>Mobile Phones</a></p>
							<p><a href="dashboard_modify_mobile.php?how_manage=add&modify_category=Tablets" class="tablets"><span>&nbsp;</span>Tablets</a></p>
							<p><a href="dashboard_modify_mobile.php?how_manage=add&modify_category=Mobile Accessories" class="mobile_accessories"><span>&nbsp;</span>Mobile Accessories</a></p>			
						</div>
					
				<?php
				
					}else{
						?>
						
						<div class="manage_category">
							<h4>Choose a product category :</h4>
							<p><a href="dashboard_modify_mobile.php?how_manage=add&modify_category=Mobile Phones" class="mobile_phones"><span>&nbsp;</span>Mobile Phones</a></p>
							<p><a href="dashboard_modify_mobile.php?how_manage=add&modify_category=Tablets" class="tablets"><span>&nbsp;</span>Tablets</a></p>
							<p><a href="dashboard_modify_mobile.php?how_manage=add&modify_category=Mobile Accessories" class="mobile_accessories"><span>&nbsp;</span>Mobile Accessories</a></p>
						</div>
						
						<?php
								
						$how_manage=$_GET['how_manage'];
						$modify_category=$_GET['modify_category'];
						
						if($how_manage=="add" && ($modify_category=="Mobile Phones" || $modify_category=="Tablets")){
						?>
							<div id="content">
							
								<h4>Add <?php echo $modify_category; ?> to Database</h4>
								<?php include("dashboard_manage_products_handler.php");?>
								<form method="POST" action="dashboard_modify_mobile?how_manage=add&modify_category=<?php echo $modify_category; ?>" enctype="multipart/form-data">
									<table>
										<tr>
											<td>Choose Brand :</td>
											<td>
												<select name="brand">
													<option value="Samsung">Samsung</option>
													<option value="Apple">Apple</option>
													<option value="HTC">HTC</option>
													<option value="LG">LG</option>
													<option value="Other">Other</option>
												</select>
											</td>
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
											<td>Image Thumbnail :</td>
											<td>
												<input type="file" name="product_thumbnail"/>
											</td>
										</tr>
										<tr>
											<td>Images for Product Slideshow :</td>
											<td>
												<input type="file" name="product_slide[]" multiple/>
												<p class='asterix'>* Choose upto 5 images</p>
											</td>
										</tr>
										<tr>
											<td>Specifications :</td>
											<td>Note : Use the + sign to denote bullet points of a list</td>
										</tr>
										<?php
										include("../connection.php");
										$query="SELECT * FROM mobile_specs LIMIT 0,1";
										$result=mysqli_query($con,$query);
										while($row=mysqli_fetch_array($result)){
											foreach($row as $col_name => $spec){
												if($col_name!="ID" && $col_name!="Product_ID" && !is_numeric($col_name)){
												?>
												<tr>
													<td class="specs"><?php echo $col_name ?></td>
													<td><textarea name="<?php echo $col_name ?>"></textarea></td>
												</tr>
												<?php
												}
											}
										}
										?>
										<tr>
											<td><input type="submit" value="Submit"/></td>
										</tr>
									</table>
									<input type="hidden" name="add_what" value="<?php echo $modify_category ?>"/>
								</form>
							
							</div>
						<?php	
						}elseif($how_manage=="add" && $modify_category=="Mobile Accessories"){
						?>		
							<div id="content">
								<h4>Add Mobile Accessories from Website</h4>
								<?php include("dashboard_manage_products_handler.php");?>
								<form method="POST" action="dashboard_modify_mobile?how_manage=add&modify_category=Mobile Accessories" enctype="multipart/form-data">
									<table>
										<tr>
											<td>Choose Brand :</td>
											<td>
												<select name="brand">
													<option value="Samsung">Samsung</option>
													<option value="Apple">Apple</option>
													<option value="HTC">HTC</option>
													<option value="LG">LG</option>
													<option value="Other">Other</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>Type :</td>
											<td>
												<select name="category">
													<option value="Battery">Battery</option>
													<option value="Charger">Charger</option>
													<option value="Headset">Headset</option>
													<option value="Screen Protection">Screen Protection</option>
													<option value="Protective Cases">Protective Cases</option>
													<option value="Other">Other</option>
												</select>
											</td>
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
											<td>Image Thumbnail :</td>
											<td>
												<input type="file" name="product_thumbnail"/>
											</td>
										</tr>
										<tr>
											<td><input type="submit" value="Submit"/></td>
										</tr>
									</table>
									<input type="hidden" name="add_what" value="Mobile Accessories"/>
								</form>
							</div>
						<?php		
						}
					}	
				}
				?>
		</main>
	</body>
</html>