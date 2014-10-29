<!DOCTYPE HTML>
<html>
	<head>
		<title>Ell Mobile</title>
		<?php include("head.php"); ?>
	</head>
	<body>
		<?php include("header.php"); ?>
		
		<main>
			<div id="content_small">
				<h1>ABOUT ELL</h1><br />
				<?php
					include("connection.php");
					
					$query="SELECT Text FROM about";
					$result=mysqli_query($con,$query);
					
					while($row=mysqli_fetch_array($result)){
						echo nl2br($row['Text'])."<br />";
					}
					$img_links=trim($row['Image']);
					$img_links=explode(" ",$img_links);
					?>
					<div id="about_img">
					<?php
					$image_query="SELECT Images FROM about_img";
					$result=mysqli_query($con,$image_query);
					while($image_row=mysqli_fetch_array($result)){
						echo "<img src='".$image_row['Images']."' height='100'/>";
					}
					?>
					</div>
			</div>
		</main>
		
		<?php include("footer.php"); ?>
	</body>
</html>