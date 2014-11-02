<!DOCTYPE HTML>
<html>
	<head>
		<title>Authentication</title>
		<style>
			html{
				background-color:#424242;
				font-family:sans-serif;
			}
			div{
				position:absolute;
				top:50%;
				left:50%;
				transform:translate(-50%,-50%)
			}
			form,p{
				box-shadow:0 0 5px #000;
			}
			input{
				border:none;
				background-color:#fff;
				padding:1em;
				margin:0;
				width:200px;
			}
			input[type=submit]{
				color:#fff;
				background-color:#7B2626;
				width:100px;
			}
			input[type=password]{
				border-left:solid 1px #aaa;
			}
			placeholder{
				color:#aaa;
			}
			p{
				background-color:#7b2626;
				color:#fff;
				padding:1em;
				font-size:0.8em;
				border-left:solid 5px #fff;
			}
		</style>
	</head>
	<body>
		<div>
		<form method="POST" action="">
			<input type="text" name="username" placeholder="Username"/><input type="password" name="password" placeholder="Password"/><input type="submit" value="Log In"/>
		</form>
		<?php
		include("../connection.php");
		
		$query="SELECT * FROM login";
		$result=mysqli_query($con,$query);
		while($row=mysqli_fetch_array($result)){
			$db_username=$row['Username'];
			$db_password=$row['Password'];
		}
		
		if(isset($_POST['username']) && isset($_POST['password'])){
			$username=$_POST['username'];
			$password=$_POST['password'];
			
			if($username==$db_username && md5($password)==$db_password){
				session_start();
				$_SESSION['username']=$db_username;
				header("Location:dashboard.php");
			}else{
				echo "<p>Incorrect Username or Password. Please try again!</p>";
			}
		}
		?>
		</div>
	</body>
</html>