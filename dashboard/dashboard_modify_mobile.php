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
				<?php
					if(isset($_GET['modify_mobile_category'])){
						$modify_mobile_category=$_GET['modify_mobile_category'];
					}else{
						$modify_mobile_category="mobile_phones";
					}
					include("dashboard_modify_".$modify_mobile_category.".php");
				?>
			</div>	
		</main>
	</body>
</html>