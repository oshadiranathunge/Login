<?php 
	/*if(isset($u_id = $_COOKIE['u_name']) and isset($password =$_COOKIE['password'])){
		$u_name= $_COOKIE['u_name'];
		$password =$_COOKIE['password'];
		echo "<script>

			document.getElementById('u_name').value = '$u_name';
			document.getElementById('password').value = '$password';


		</script>";
	}*/



session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
	


 ?>

 </!DOCTYPE html>
 <html>
 <head>
 	<title>Hello</title>
 </head>
 <body>
 	<a href="logout.php">Logout</a>
 	<h1>Index page</h1>

 	<br>

 	Hello! <?php echo $user_data['u_name']; ?>
 
 </body>
 </html>