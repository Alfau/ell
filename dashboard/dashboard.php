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
			<div id="tips">
				<h2>Usage Documentation</h2>
				<br />
				<p>Management options are divided into two categories:</p>
				<ul>
					<li>Manage Products</li>
					<li>Manage Pages</li>
				</ul>
				<p>You can see the categories and their options in the sidebar to the left.</p>
				<br />
				<h3>Manage Products</h3>
				<p>This category allows you to add, remove and modify products in the database.</p>
				<p>A specific form will be provided once you choose an option.</p>
				<p>Some form fields are required while others are optional. All the required fields will have an asterix(*) to indicate this.</p>
				<p>In certain cases, when adding text to the about page, or adding specifications for a certain product, you may want to add bullet points. This can be achieved by using a plus sign(+) as the bullet point in the textarea.</p>
				<br />
				<h3>Manage Pages</h3>
				<p>This category allows you to make changes to the informative pages of the website.</p>
				<p>This category is handled in the same way as the previous category.</p>
				<br />
				<h3>Specifics</h3>
				<p>- <i>Locations</i> page will require you to add the latitude and longitude if the store locations.</p>
				<p>All the current store locations have been added but if you need to add a new location, the latitude and longitude can be found on google maps.</p>
				<p>- <i>Slideshow</i> require images of a certain ratio for the best viewing experience. [include ratio here].</p>
				<p>If an image of a different ratio is added, a white background will be added to fill up the empty space.</p>
			</div>
		</main>
	</body>
</html>