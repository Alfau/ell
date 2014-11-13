<header>
	<div id="loading_bar"></div>
	<a href="index.php"><img src="icons/logo3.png" alt="logo" id="logo"/></a>
	<nav id="mobile_header">
		<ul>
			<li><a href=# id="menu"><?php include('icons/menu.svg') ?></a></li><li><a href=# id="search"><?php include('icons/search.svg') ?></a></li><li><a href="index.php"><img src="icons/logo3.png" alt="logo" id="logo"/></a></li>
		</ul>
	</nav>
	<nav id="mobile_search">
		<li><input type="text" name="search" placeholder="Search"/></li>
	</nav>
	<nav id="side">
		<ul>
			<li><a href="about.php">ABOUT US</a></li>
			<li><a href="contact.php">CONTACT US</a></li>
			<li><a href="locations.php">LOCATIONS</a></li>
			<li class=search><input type="text" name="search"/><span href="search"><label><img src="icons/search.svg" alt="Search"/> <input type="button" value="search"/></label></span></li>
		</ul>
	</nav>
	<nav id="main">
		<ul>
		<?php
		include("connection.php");
		
		$last_category="";
		$main_category_query="SELECT Main_Category FROM product_categories ORDER BY Order_Main ASC";
		$main_category_result=mysqli_query($con,$main_category_query);
		while($main_row=mysqli_fetch_array($main_category_result)){
			if($last_category!==$main_row['Main_Category']){
				$main_category=$main_row['Main_Category'];
				?>
				<li>
					<a href="mobile.php?product_category=<?php echo $main_category ?>" class="main"><?php echo $main_category ?></a>
					<ul>
					<?php
					$sub_category_query="SELECT Sub_Category FROM product_categories WHERE Main_Category='$main_category' ORDER BY Order_Sub ASC";
					$sub_category_result=mysqli_query($con,$sub_category_query);
					while($sub_row=mysqli_fetch_array($sub_category_result)){
						$sub_category=$sub_row['Sub_Category'];
						?>
						<li><a href="mobile.php?product_type=<?php echo $sub_category ?>" class="main_sub"><?php echo $sub_category ?></a></li>
						<?php
					}
					?>
					</ul>
				</li>
				<?php
				$last_category=$main_category;
			}
		}
		?>
			<li><a href="dhi_bill.php" class="bill main">BILL PAY</a></li>
		</ul>
		<!-- <ul>
			<li>
				<a href="mobile.php?product_category=Mobile" class="main">MOBILE</a>
				<ul>
					<li><a href="mobile.php?product_type=Mobile Phones" class="active main_sub">Mobile Phones</a></li>
					<li><a href="mobile.php?product_type=Tablets" class="main_sub">Tablets</a></li>
					<li><a href="mobile.php?product_type=Mobile Accessories" class="main_sub">Mobile Accessories</a></li>
				</ul>
			</li>
			<li>
				<a href="mobile.php?product_category=Multimedia" class="main">MULTIMEDIA</a>
				<ul>
					<li><a href="mobile.php?product_type=TV" id="TV" class="active main_sub">TV</a></li>
					<li><a href="mobile.php?product_type=Audio" id="Audio" class="main_sub">Audio</a></li>
					<li><a href="mobile.php?product_type=Video" id="Video" class="main_sub">Video</a></li>
				</ul>
			</li>
			<li><a href="home_appliance.php" class="main">HOME APPLIANCE</a></li>
			<li><a href="dhi_bill.php" class="bill main">BILL PAY</a></li>
		</ul> -->
	</nav>
</header>
