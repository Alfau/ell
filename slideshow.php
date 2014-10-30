
	<div id="slideshow_controls">
		<span class="outside active"><span class="active">&nbsp;</span></span>
		<span class="outside"><span>&nbsp;</span></span>
		<span class="outside"><span>&nbsp;</span></span>
	</div>
	<div id="slides">
		<?php
		include("connection.php");
		$query="SELECT * FROM slideshow";
		$result=mysqli_query($con,$query);
		while($row=mysqli_fetch_array($result)){
			?>
			
			<div>
				<img src="<?php echo $row['Slide'] ?>" alt="slide"/>
				<div>
					<h1><?php echo "<a href='".$row['Link_HREF']."'>".$row['Link_Title']."</a>" ?></h1>
					<p><?php echo $row['Description'] ?></p>
				</div>
			</div>
			<?php
		}
		
		?>
	</div>
