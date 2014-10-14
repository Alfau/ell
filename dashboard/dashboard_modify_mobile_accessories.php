<div id="dashboard_modify_mobile_nav">
	<ul>
		<li><a href="dashboard_modify_mobile.php?modify_mobile_category=mobile_phones">Mobile Phones</a></li>
		<li><a href="dashboard_modify_mobile.php?modify_mobile_category=tablets">Tablets</a></li>
		<li><a href="dashboard_modify_mobile.php?modify_mobile_category=mobile_accessories" class="active">Mobile Accessories</a></li>
	</ul>
</div>

<form method="POST" action="" enctype="multipart/form-data">
	<h3>Add Mobile Accessories from Website</h3>
	<?php include("dashboard_modify_handler.php");?>
	<table>
		<tr>
			<td>Choose Brand :</td>
			<td>
				<select name="brand">
					<option value="Samsung">Samsung</option>
					<option value="Apple">Apple</option>
					<option value="HTC">HTC</option>
					<option value="LG">LG</option>
					<option value="Other">Other</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Type :</td>
			<td>
				<select name="category">
					<option value="Battery">Battery</option>
					<option value="Charger">Charger</option>
					<option value="Headset">Headset</option>
					<option value="Screen Protection">Screen Protection</option>
					<option value="Protective Cases">Protective Cases</option>
					<option value="Other">Other</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Name :</td>
			<td><input type="text" name="name"/></td>
		</tr>
		<tr>
			<td>Price(Rf) :</td>
			<td><input type="text" name="price"/></td>
		</tr>
		<tr>
			<td>Image Thumbnail :</td>
			<td>
				<input type="file" name="image_thumbnail"/>
			</td>
		</tr>
	</table>
	<input type="hidden" name="add_what" value="add_mobile_accessories"/>
	<input type="submit" value="Submit"/>
</form>