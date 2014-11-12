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
			<div>
				<h4>Manage subcategories of the products menu</h4>
				<form method="POST" action="">
					<table>
						<tr>
							<td>Mobile Phones</td>
							<td>
								<?php
									$query="SELECT * FROM product_categories WHERE Main_Category=";
								?>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</main>
	</body>
</html>