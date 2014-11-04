<!DOCTYPE HTML>
<html>
	<head>
		<title>Ell Mobile</title>
		<?php include("head.php"); ?>
	</head>
	<body>
		<?php include("header_2.php"); ?>
		
		<main>
			<div id="content_small">
				<div id="contact">
					<h1>CONTACT US</h1>
					<h4>WE ARE HERE TO HELP</h4>
					<div id="contact_left">
						<img src="icons/mail_icon_2.png" width="80"/>
						<div>
							<h4>BY EMAIL</h4>
							<p>Send a message to ELL Customer Service</p>
						</div><br />
						<img src="icons/phone_icon.png" width="80"/>
						<div>
							<h4>BY PHONE</h4>							
							<p>Call an ELL Support Representative on</p>
							<p>MLE: +960 333 6534</p><br />
							<p>Monday to Friday: 8am to 7:30pm</p>
							<p>Saturday: 9am to 6pm</p>
							<p>Sunday: 10am to 4pm</p>
							<p>Bank Holidays: Close</p>
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
		
		<?php include("footer.php"); ?>
	</body>
</html>