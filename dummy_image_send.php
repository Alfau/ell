<?php
include("connection.php");
$query="SELECT * FROM mobile_specs LIMIT 1";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_fields($result);
foreach($row as $field){
	echo $field->name;
}
