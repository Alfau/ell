<header>
	<div id="loading_bar"></div>
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
			<li class=search><input type="text" name="search"/><span href="search"><label><img src="icons/search.svg" alt="Search"/></label> <input type="button" value="search"/></span></li>
			<li><a href="about.php">ABOUT US</a></li>
			<li><a href="contact.php">CONTACT US</a></li>
			<li><a href="locations.php">LOCATIONS</a></li>
		</ul>
	</nav>
	<div id="nav_main_container">
		<a href="index.php"><img src="icons/logo3.png" alt="logo" id="logo"/></a>
		<nav id="main">
			<ul>
				<li>
					<a href="mobile.php" class="main">MOBILE</a>
					<ul>
						<li><a href="mobile.php?product_type=Mobile Phones" class="active main_sub">Mobile Phones</a></li>
						<li><a href="mobile.php?product_type=Tablets" class="main_sub">Tablets</a></li>
						<li><a href="mobile.php?product_type=Mobile Accessories" class="main_sub">Mobile Accessories</a></li>
					</ul>
				</li>
				<li>
					<a href="multimedia.php" class="main">MULTIMEDIA</a>
					<ul>
						<li><a href="mobile.php?product_type=TV" id="TV" class="active main_sub">TV</a></li>
						<li><a href="mobile.php?product_type=Audio" id="Audio" class="main_sub">Audio</a></li>
						<li><a href="mobile.php?product_type=Video" id="Video" class="main_sub">Video</a></li>
					</ul>
				</li>
				<li><a href="home_appliance.php" class="main">HOME APPLIANCE</a></li>
				<li><a href="dhi_bill.php" class="bill main">DHI BILL</a></li>
			</ul>
		</nav>
	</div>
</header>
