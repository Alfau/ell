<!DOCTYPE HTML>
<html>
	<head>
		<title>Ell Mobile</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="jquery-1.11.1.min.js"></script>
		<script src="script.js"></script>
	</head>
	<body>
		<?php include("header.php"); ?>
		
		<main>
			<div id="content_small">
				<h1>CONTACT US</h1>
				<h4>WE ARE HERE TO HELP</h4>
				<div id="contact">
					<div id="contact_left">
						<img src="icons/mail_icon.png" width="80"/>
						<div>
							<h4>BY EMAIL</h4>
							<p>Send a message to ELL Customer Service</p>
						</div><br />
						<img src="icons/phone_icon.png" width="80"/>
						<div>
							<h4>BY PHONE</h4>
							<p>Call ELL Customer Representative on +960 99999999</p>
						</div>
					</div>
					<div id="contact_right">
						<form method="POST" action="contact_handler.php">
							<table>
								<tr>
									<td>NAME :</td>
									<td><input type="text" name="name"/></td>
								</tr>
								<tr>
									<td>CONTACT :</td>
									<td><input type="text" name="contact"/></td>
								</tr>
								<tr>
									<td>EMAIL :</td>
									<td><input type="text" name="email"/></td>
								</tr>
								<tr>
									<td>SUBJECT :</td>
									<td><input type="text" name="subject"/></td>
								</tr>
								<tr>
									<td>DESCRIPTION :</td>
									<td><textarea name="description" rows="5"></textarea></td>
								</tr>
							</table>
							<input type="submit" name="submit" value="Send"/>
						</form>
					</div>
				</div>
			</div>
		</main>
		
		<?php //include("footer.php"); ?>
	</body>
</html>