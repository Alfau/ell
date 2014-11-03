<!DOCTYPE HTML>
<html>
	<head>
		<title>Ell Mobile</title>
		<?php include("head.php"); ?>
	</head>
	<body>
		<?php include("header_2.php"); ?>
		<script>
		searchapi("<?=(isset($_GET['term']))?$_GET['term']:""?>");
		</script>
		<main>
		</main>
		
		<?php include("footer.php"); ?>
	</body>
</html>