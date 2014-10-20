<!DOCTYPE HTML>
<html>
	<head>
		<title>Administrator Dashboard</title>
		<link rel="stylesheet" type="text/css" href="dashboard_style.css"/>
		<script src="/ell/jquery-1.11.1.min.js"></script>
		<script src="dashboard_script.js"></script>
	</head>
	<body>
		
		<?php include("dashboard_nav.php"); ?>
		
		<main>
			<?php
				if(!isset($_GET['how_manage'])){
				?>
				
					<div class="manage_options">
						<h4>Would you like to :</h4>
						<p><a href="dashboard_modify_mobile.php?how_manage=add"><span>&nbsp;</span>Add Mobile Products</a></p>
						<p><a href="dashboard_modify_mobile.php?how_manage=remove"><span>&nbsp;</span>Remove Mobile Products</a></p>
					</div>
					
				<?php
					
				}else{
					
					?>
						<div class="manage_options">
							<h4>Would you like to :</h4>
							<p><a href="dashboard_modify_mobile.php?how_manage=add"><span>&nbsp;</span>Add Mobile Products</a></p>
							<p><a href="dashboard_modify_mobile.php?how_manage=remove"><span>&nbsp;</span>Remove Mobile Products</a></p>
						</div>
					<?php
					
					if(!isset($_GET['modify_mobile_category'])){
					?>
					
						<div class="manage_category">
							<h4>Choose a product category :</h4>
							<p><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&modify_mobile_category=Mobile Phones"><span>&nbsp;</span>Mobile Phones</a></p>
							<p><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&modify_mobile_category=Tablets"><span>&nbsp;</span>Tablets</a></p>
							<p><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&modify_mobile_category=Mobile Accessories"><span>&nbsp;</span>Mobile Accessories</a></p>
						</div>
					
				<?php	
					}else{
						
						?>
						
						<div class="manage_category">
							<h4>Choose a product category :</h4>
							<p><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&modify_mobile_category=Mobile Phones"><span>&nbsp;</span>Mobile Phones</a></p>
							<p><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&modify_mobile_category=Tablets"><span>&nbsp;</span>Tablets</a></p>
							<p><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&modify_mobile_category=Mobile Accessories"><span>&nbsp;</span>Mobile Accessories</a></p>
						</div>
						
						<?php
								
						$how_manage=$_GET['how_manage'];
						$modify_mobile_category=$_GET['modify_mobile_category'];
						
						if($how_manage=="add" && ($modify_mobile_category=="Mobile Phones" || $modify_mobile_category=="Tablets")){
						?>
							<div id="content">
							<h4>Add <?php echo $modify_mobile_category; ?> to Database</h4>
							<form method="POST" action="dashboard_modify_mobile.php?how_manage=add&modify_mobile_category=<?php echo $modify_mobile_category; ?>" enctype="multipart/form-data">
								<?php include("dashboard_modify_handler.php");?>
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
										<td>Specifications :</td>
										<td><textarea name="specs"></textarea></td>
									</tr>
									<tr>
										<td>Image Thumbnail :</td>
										<td>
											<input type="file" name="image_thumbnail"/>
										</td>
									</tr>
									<tr>
										<td>Images for Product Slideshow :</td>
										<td>
											<input type="file" name="product_slide_1"/><br />
											<input type="file" name="product_slide_2"/><br />
											<input type="file" name="product_slide_3"/>
										</td>
									</tr>
								</table>
								<input type="hidden" name="add_what" value="<?php echo $modify_mobile_category ?>"/>
								<input type="submit" value="Submit"/>
							</form>
							</div>
						<?php	
						}elseif($modify_mobile_category=="Mobile Accessories"){
				?>		<div id="content">
						<form method="POST" action="" enctype="multipart/form-data">
							<h4>Add Mobile Accessories from Website</h4>
							<?php include("dashboard_modify_handler.php");?>
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
										<input type="file" name="image_thumbnail"/>
									</td>
								</tr>
							</table>
							<input type="hidden" name="add_what" value="Mobile Accessories"/>
							<input type="submit" value="Submit"/>
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