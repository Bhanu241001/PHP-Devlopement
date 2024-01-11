<?php
session_start();
include 'connection.php';
if(isset($_POST['submit'])){
	
	$password=$_POST['password'];
	$email=$_POST['email'];

	
		//insert data into table
   $sql="SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'";
	$result = mysqli_query($conn, $sql);
	if(isset($result)){
	echo "<script>alert('Successfully LogedIN!')</script>";
    $_SESSION['email']=$email;
    $_SESSION['pass']=$password;
    header("location:detail.php");
}else{
	echo "<script>alert('NOT successfully registered!');window.location='login.
				html';</script>";

}

		

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
		<form class="registration" method="POST" action="#">
			<h1>Login Form</h1>
		
			<label for="useremail">
				<span>Email</span>

				<input type="email" id="email" name="email" minlength="3" required>

				
			</label>

			<label for="password">
				<span>Password</span>

				<input type="password" id="password" name="password"maxlength="100" minlength="8" required>

			
			</label>

			
			<br>

			<input type="submit" name="submit">	

		</form>
	</div>
</body>
</html>