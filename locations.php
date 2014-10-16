<!DOCTYPE HTML>
<html>
	<head>
		<title>Ell Mobile</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="jquery-1.11.1.min.js"></script>
		<script src="script.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		<script>
		      google.maps.event.addDomListener(window, 'load', initialize);
		</script>		
	</head>
	<body>
		<?php include("header.php"); ?>
		
		<main>
			<div id="content_small">
				<h1>LOCATIONS</h1>
				<div id="map_canvas">
					
				</div>
			</div>
		</main>
		
		<?php include("footer.php"); ?>
	</body>
</html>