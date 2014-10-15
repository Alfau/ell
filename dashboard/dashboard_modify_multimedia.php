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
			<div id="content">
				<div id="dashboard_modify_sub_nav">
					<ul>
						<li><a href="dashboard_modify_multimedia.php?modify_multimedia_category=TV">TV</a></li>
						<li><a href="dashboard_modify_multimedia.php?modify_multimedia_category=Audio">Audio</a></li>
						<li><a href="dashboard_modify_multimedia.php?modify_multimedia_category=Video">Video</a></li>
					</ul>
				</div>
				<?php
					if(isset($_GET['modify_multimedia_category'])){
						$modify_multimedia_category=$_GET['modify_multimedia_category'];
					}else{
						$modify_multimedia_category="TV";
					}
				?>
				<form method="POST" action="" enctype="multipart/form-data">
					<h3>Add <?php echo $modify_multimedia_category; ?> to Database</h3>
					<?php include("dashboard_modify_handler.php");?>
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
					<input type="hidden" name="add_what" value="<?php echo $modify_multimedia_category ?>"/>
					<input type="submit" value="Submit"/>
				</form>
			</div>	
		</main>
	</body>
</html>