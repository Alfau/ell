
	<div id="slideshow_controls">
		<?php
		include("connection.php");
		$count_query="SELECT ID FROM slideshow";
		$count_result=mysqli_query($con,$count_query);
		$count=mysqli_num_rows($count_result);
		
		for($x=1;$x<=$count;$x++){
			if($x==1){
				echo "<span class='outside active'><span class='active'>&nbsp</span></span>";
			}else{
				echo "<span class='outside'><span>&nbsp</span></span>";
			}
		}
		?>
		<!-- <span class="outside active"><span class="active">&nbsp;</span></span>
		<span class="outside"><span>&nbsp;</span></span>
		<span class="outside"><span>&nbsp;</span></span> -->
	</div>
	<div id="slides">
		<?php
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
