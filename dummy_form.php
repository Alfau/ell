<div id="slideshow">
	<div id="slideshow_controls">
		<span class="outside active"><span class="active">&nbsp;</span></span>
		<span class="outside"><span>&nbsp;</span></span>
		<span class="outside"><span>&nbsp;</span></span>
	</div>
	<div id="slides">
		<?php
		include("connection.php");
		$query="SELECT * FROM slideshow";
		while($row=mysqli_query($con,$query)){
			?>
			
			<div>
				<img src="home_slides/<?php echo $row['Slide']?>" alt="slide"/>
				<div>
					<h1><?php echo $row['Link'] ?></h1>
					<p><?php echo $row['Description'] ?></p>
				</div>
			</div>
			<?php
		}
		
		?>
	</div>
</div>