<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$u_name = $_POST['u_name'];
		$password = $_POST['password'];

		if(!empty($u_name) && !empty($password) && !is_numeric($u_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (u_id,u_name,password) values ('$u_id','$u_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: blue;
		border: none;
	}

	#box{

		background-color: lightblue;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Register here!</div>

			User name:
			<input id="text" type="text" name="u_name"><br><br>
			Password:
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Register"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>