<?php
$con=mysqli_connect("localhost","root","","ell");
//$con=mysqli_connect("localhost","vulcan8_llama","thellama","vulcan8_ell");
if(mysqli_connect_errno()){
	echo mysqli_connect_error(); // developer error
	echo "Failed to connect to Server. Check your internet connection and please try again.";
}
?>