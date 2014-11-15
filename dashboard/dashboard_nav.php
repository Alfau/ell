<span id="loader"></span>
<header>
	<h3><a href="dashboard.php">Admin<span class='bold'>Dashboard</span></a></h3>
	<span class="logout">Logged in as Admin - <a href="logout.php">[ Log Out ]</a></span>
</header>
<aside>
	<ul>
		<li><a href=#>Manage<span class='bold'>Products</span></a>
			<ul>
				<?php
				include '../connection.php';
				
				$products_nav_query="SELECT Main_Category FROM product_categories ORDER BY Order_Main ASC";
				$products_nav_result=mysqli_query($con,$products_nav_query);
				$last_products_nav="";
				while($products_nav_row=mysqli_fetch_array($products_nav_result)){
					if($last_products_nav!==$products_nav_row['Main_Category']){
						?>
						<li><a href="dashboard_manage_products.php?main_category=<?php echo $products_nav_row['Main_Category'] ?>"><?php echo $products_nav_row['Main_Category'] ?></a></li>
						<?php
						$last_products_nav=$products_nav_row['Main_Category'];
					}
				}
				?>
			</ul>
		</li>
		<li><a href=#>Manage<span class='bold'>Page</span></a>
			<ul>
				<li><a href="dashboard_modify_about.php">About</a></li>
				<li><a href="dashboard_modify_locations.php">Locations</a></li>
				<li><a href="dashboard_modify_slideshow.php">Slideshow</a></li>
				<li><a href="dashboard_modify_products.php">Products</a></li>
			</ul>
		</li>
	</ul>
</aside>