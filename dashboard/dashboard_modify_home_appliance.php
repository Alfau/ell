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
				<h4>Choose an option :</h4>
				<p><a href="dashboard_modify_home_appliance.php?how_manage=add" class="add"><span>&nbsp;</span>Add Home Appliance Products</a></p>
				<p><a href="dashboard_modify_home_appliance.php?how_manage=remove" class="remove"><span>&nbsp;</span>Remove Home Appliance Products</a></p>
			</div>
				
		<?php
				
		}else{
		
		?>
			<div class="manage_options">
				<h4>Choose an option :</h4>		
				<p><a href="dashboard_modify_home_appliance.php?how_manage=add" class="add"><span>&nbsp;</span>Add Home Appliance Products</a></p>
				<p><a href="dashboard_modify_home_appliance.php?how_manage=remove" class="remove"><span>&nbsp;</span>Remove Home Appliance Products</a></p>
			</div>
		<?php
			if(!isset($_GET['modify_category'])){
			?>
			
				<div class="manage_category">
					<h4>Choose a product category :</h4>
					<p><a href="dashboard_modify_home_appliance.php?how_manage=add&modify_category=Kitchen Appliance" class="kitchen_appliance"><span>&nbsp;</span>Kitchen Appliance</a></p>
					<p><a href="dashboard_modify_home_appliance.php?how_manage=add&modify_category=Laundry Appliance" class="laundry_appliance"><span>&nbsp;</span>Laundry Appliance</a></p>
					<p><a href="dashboard_modify_home_appliance.php?how_manage=add&modify_category=Cooling Appliance" class="cooling_appliance"><span>&nbsp;</span>Cooling Appliance</a></p>
				</div>
			<?php
			}else{
				
			?>	
			<div class="manage_category">
				<h4>Choose a product category :</h4>
				<p><a href="dashboard_modify_home_appliance.php?how_manage=add&modify_category=Kitchen Appliance" class="kitchen_appliance"><span>&nbsp;</span>Kitchen Appliance</a></p>
				<p><a href="dashboard_modify_home_appliance.php?how_manage=add&modify_category=Laundry Appliance" class="laundry_appliance"><span>&nbsp;</span>Laundry Appliance</a></p>
				<p><a href="dashboard_modify_home_appliance.php?how_manage=add&modify_category=Cooling Appliance" class="cooling_appliance"><span>&nbsp;</span>Cooling Appliance</a></p>
			</div>
					
			<div id="content">
				<?php
					if(isset($_GET['modify_category'])){
						$modify_category=$_GET['modify_category'];
					}else{
						$modify_category="Kitchen Appliance";
					}
				?>
				<h4>Add <?php echo $modify_category; ?> to Database</h4>
				<?php include("dashboard_manage_products_handler.php");?>
				<form method="POST" action="dashboard_modify_home_appliance?how_manage=add&modify_category=<?php echo $modify_category; ?>" enctype="multipart/form-data">
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
							<td>Image Thumbnail :</td>
							<td>
								<input type="file" name="product_thumbnail"/>
							</td>
						</tr>
						<tr>
							<td><input type="submit" value="Submit"/></td>
						</tr>
					</table>
					<input type="hidden" name="add_what" value="<?php echo $modify_category ?>"/>
				</form>
			</div>	
			<?php
			}
		}
		?>
		</main>
	</body>
</html>