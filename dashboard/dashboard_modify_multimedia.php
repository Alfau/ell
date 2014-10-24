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
					<p><a href="dashboard_modify_multimedia.php?how_manage=add"><span>&nbsp;</span>Add Multimedia Products</a></p>
					<p><a href="dashboard_modify_multimedia.php?how_manage=remove"><span>&nbsp;</span>Remove Multimedia Products</a></p>
				</div>
				
			<?php
				
			}else{
				
				?>
					<div class="manage_options">
						<h4>Would you like to :</h4>
						<p><a href="dashboard_modify_multimedia.php?how_manage=add"><span>&nbsp;</span>Add Multimedia Products</a></p>
						<p><a href="dashboard_modify_multimedia.php?how_manage=remove"><span>&nbsp;</span>Remove Multimedia Products</a></p>
					</div>
				<?php
				
				if(!isset($_GET['modify_category'])){
				?>
				
					<div class="manage_category">
						<h4>Choose a product category :</h4>
						<p><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&modify_category=TV"><span>&nbsp;</span>TV</a></p>
						<p><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&modify_category=Audio"><span>&nbsp;</span>Audio</a></p>
						<p><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&modify_category=Video"><span>&nbsp;</span>Video</a></p>
					</div>
			<?php
				}else{
					
					?>	
					<div class="manage_category">
						<h4>Choose a product category :</h4>
						<p><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&modify_category=TV"><span>&nbsp;</span>TV</a></p>
						<p><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&modify_category=Audio"><span>&nbsp;</span>Audio</a></p>
						<p><a href="<?php echo $_SERVER['REQUEST_URI'] ?>&modify_category=Video"><span>&nbsp;</span>Video</a></p>
					</div>
			
			<div id="content">
				<?php
					if(isset($_GET['modify_category'])){
						$modify_category=$_GET['modify_category'];
					}else{
						$modify_category="TV";
					}
				?>
				<form method="POST" action="dashboard_modify_multimedia.php?how_manage=add&modify_category=<?php echo $modify_category; ?>" enctype="multipart/form-data">
					<h4>Add <?php echo $modify_category; ?> to Database</h4>
					<?php include("dashboard_manage_products_handler.php");?>
					<table>
						<tr>
							<td>Choose Brand :</td>
							<td>
								<select name="brand">
									<option value="Sony">Sony</option>
									<option value="Samsung">Samsung</option>
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
					<input type="hidden" name="add_what" value="<?php echo $modify_category ?>"/>
					<input type="submit" value="Submit"/>
				</form>
			</div>	
			<?php
				}
			}
			?>
		</main>
	</body>
</html>