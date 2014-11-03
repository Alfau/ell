<?php include("session_verification.php"); ?>
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
			<div class="content">
				<h4> Website</h4>
				<br /><p class="asterix"> * A list of the recent products uploaded to the website. If the product you want to remove is not here, use the search function below to find it.</p>	
					<table>
					<?php 
					include("dashboard_manage_products_handler.php");
					include("../connection.php");
					$query="SELECT * FROM products WHERE Type='$modify_category' ORDER BY ID DESC LIMIT 5";
					$result=mysqli_query($con,$query);
					while($row=mysqli_fetch_array($result)){
						?>
						<tr>
							<td><img src="<?php echo "../".$row['Thumbnail'] ?>" height="120"/></td>
							<td>
								<form method="POST" action="dashboard_modify_mobile?how_manage=remove&modify_category=<?php echo $modify_category ?>">
									<span class="product_name_small"><?php echo $row['Name'] ?></span><br />
									<span class="light">Price : </span><span class="price">Rf. <?php echo $row['Price'] ?></span><br /><?php echo $row['ID']; ?>
									<br /><input type="submit" name="remove" value="Remove	"/>
									<input type="hidden" name="product_ID" value="<?php echo $row['ID'] ?>"/>
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
				<form method="POST" action="dashboard_modify_mobile?how_manage=remove&modify_category=<?php echo $modify_category ?>">
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
		</main>
	</body>
</html>