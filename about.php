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
					
					$query="SELECT * FROM about";
					$result=mysqli_query($con,$query);
					
					while($row=mysqli_fetch_array($result)){
						echo nl2br($row['Text'])."<br />";
						
						$img_links=trim($row['Image']);
						$img_links=explode(" ",$img_links);
						?>
						<div id="about_img">
						<?php
						foreach($img_links as $link){
							echo "<img src='$link' height='100'/>";
						}
						?>
						</div>
						<?php
					}
				?>
			</div>
		</main>
		
		<?php include("footer.php"); ?>
	</body>
</html>