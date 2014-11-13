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
				<h4>Manage Product Categories</h4>
				
				<?php
				include("../connection.php");
				
				if(isset($_POST['id'])){
					
					$category_ID=$_POST['id'];
					$category_name=$_POST['main_category'];
					$order_main=$_POST['order_main'];
					
					$prev_category_query="SELECT Main_Category FROM product_categories WHERE ID='$category_ID'";
					$prev_category_result=mysqli_query($con,$prev_category_query);
					$prev_category_row=mysqli_fetch_array($prev_category_result);
					$prev_category_name=$prev_category_row['Main_Category'];
					
					$count_query="SELECT ID FROM product_categories WHERE Main_Category='$prev_category_name'";
					$count_result=mysqli_query($con,$count_query);
					$num_rows=mysqli_num_rows($count_result);
					
					$query_success=false;
					if(isset($_POST['new_sub_category']) && !empty($_POST['new_sub_category'])){
						$new_sub_category=$_POST['new_sub_category'];
						if(array_push($_POST['sub_category'],$_POST['new_sub_category'])){
							$query_success=true;
						}else{
							$query_success=false;
						}
					}
					foreach($_POST['sub_category'] as $sub_category){
						$sub_replace_category=str_replace(" ", "_", $sub_category);
						$order_sub=$_POST['order_sub_'.$sub_replace_category];
						$update_query="INSERT INTO product_categories(Main_Category,Sub_Category,Order_Main,Order_Sub) VALUES('$category_name','$sub_category','$order_main','$order_sub')";
						if(mysqli_query($con,$update_query)){
							$query_success=true;
						}else{
							$query_success=false;
						}
					}
					$delete_query="DELETE FROM product_categories WHERE Main_Category='$prev_category_name' ORDER BY ID ASC LIMIT $num_rows";
					mysqli_query($con,$delete_query);
					
					if(isset($_POST['remove_sub_category'])){
						foreach($_POST['remove_sub_category'] as $sub_category){
							$delete_sub_query="DELETE FROM product_categories WHERE Sub_Category='$sub_category'";
							if(mysqli_query($con,$delete_sub_query)){
								$query_success=true;
							}else{
								$query_success=false;
							}
						}
					}
					if(isset($_POST['remove_category'])){
						$remove_category=$_POST['remove_category'];
						$delete_main_query="DELETE FROM product_categories WHERE Main_Category='$remove_category'";
						if(mysqli_query($con,$delete_main_query)){
							$query_success=true;
						}else{
							$query_success=false;
						}
					}
					
					if($query_success==true){
						echo "<p class='success'>Database updated successfully!</p>";
					}else{
						echo "<p class='failed'>An error occured. Please try again.</p>";
					}
				}
				
				$last_main_category="";
				$main_query="SELECT ID,Main_Category,Order_Main FROM product_categories ORDER BY ID DESC";
				$main_result=mysqli_query($con,$main_query);
				while($main_row=mysqli_fetch_array($main_result)){
					$main_category=$main_row['Main_Category'];
					if($last_main_category!==$main_category){
						?>
						
						<form method="POST" action="">
							<table>
								<tr>
									<td>Main Category</td>
									<td>Order</td>
									<td>Remove</td>
								</tr>
								<tr>
									<td><input type="text" name="main_category" value="<?php echo $main_category ?>"/></td>
									<td><input type="text" name="order_main" value="<?php echo $main_row['Order_Main'] ?>" placeholder="Arrangement Order for menu"/></td>
									<td><input type="checkbox" name="remove_category" value="<?php echo $main_row['Main_Category'] ?>"/></td>
								</tr>
								<tr>
									<td>Sub Categories</td>
									<!-- <td>Note : Atleast one subcategory has to included.</td> -->
								</tr>
								<?php
								
								$sub_query="SELECT Sub_Category,Order_Sub FROM product_categories WHERE Main_Category='$main_category'";
								$sub_result=mysqli_query($con,$sub_query);
								while($sub_row=mysqli_fetch_array($sub_result)){
									$sub_category=$sub_row['Sub_Category'];
									?>
									
									<tr>
										<td><input type="text" name="sub_category[]" value="<?php echo $sub_category ?>"/></td>
										<td><input type="text" name="order_sub_<?php echo $sub_category ?>" value="<?php echo $sub_row['Order_Sub'] ?>" placeholder="Arrangement Order for submenu"/></td>
										<td><input type="checkbox" name="remove_sub_category[]" value="<?php echo $sub_category ?>"/></td>
									</tr>
									<?php
								}
								?>
								<tr>
									<td><input type="text" name="new_sub_category" placeholder="Add New subcategory"/></td>
								</tr>
								<!-- <tr>
									<td>Delete this category :	</td>
									<td><input type="checkbox" name="remove_category" value="<?php echo $main_row['Main_Category'] ?>"/></td>
								</tr> -->
								<tr>
									<td><input type="submit" value="Update"/></td>
								</tr>
							</table>
							<input type="hidden" name="id" value="<?php echo $main_row['ID'] ?>"/>
						</form>
						
						<?php
						$last_main_category=$main_category;
					}
				}
				?>
			</div>
			<!-- <div>
				<h4>Manage the order of the Menus</h4>
				<form method="POST" action="">
					<table>
						<tr>
							<td>Categories</td>
						</tr>
					</table>
				</form>
			</div> -->
			<div>
				<h4>Add New Categories to Products Menu</h4>
				<?php
				if(isset($_POST['new'])){
					$main_category=$_POST['new_main'];
					
					foreach($_POST['new_sub'] as $sub_category){
						$add_query="INSERT INTO product_categories(Main_Category,Sub_Category) VALUES('$main_category','$sub_category')";
						if(mysqli_query($con,$add_query)){
							$query_success=true;
						}else{
							$query_success=false;
						}
					}
					
					if($query_success==true){
						echo "<p class='success'>Database updated successfully!</p>";
					}else{
						echo "<p class='failed'>An error occured. Please try again.</p>";
					}
				}
				?>
				<form method="POST" action="">
					<table>
						<tr>
							<td>Main Category :</td>
							<td><input type="text" name="new_main" placeholder="New Category"/></td>
						</tr>
						<tr>
							<td>Subcategory :</td>
							<td><input type="text" name="new_sub[]" placeholder="New Subcategory"/></td>
						</tr>
						<tr>
							<td><input type="submit" value="Submit"/></td>
						</tr>
					</table>
					<input type="hidden" name="new"/>
				</form>
			</div>
		</main>
	</body>
</html>