<?php
include 'connection.php';
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
    $phone=$_POST['phone'];
	$address=$_POST['address'];
	
		//insert data into table
   $sql="INSERT INTO user(username,password, email, phone, address) VALUES('$username', '$password','$email','$phone','$address')";
	$result = mysqli_query($conn, $sql);
	if(isset($result)){
	echo "<script>alert('successfully registerd!')</script>";
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
			<h1>Registration Form</h1>

			<label for="username">
				<span>Username</span>

				<input type="text"  name="username" id="username" minlength="3" required>

				
			</label>
			
			<label for="useremail">
				<span>Email</span>

				<input type="email" id="email" name="email" minlength="3" required>

				
			</label>

			<label for="password">
				<span>Password</span>

				<input type="password" id="password" name="password"maxlength="100" minlength="8" required>

			
			</label>

			<label for="phone_number">
				<span>Phone Number</span>
				<input type="text" id="phone_number"  name="phone" maxlength="100" minlength="8" required>
			</label>
			<label for="addresss">
				<span>Address</span>
				<input type="text" id="address" name="address" maxlength="100" minlength="8" required>
			</label>
			<br>

			<input type="submit" name="submit">	

		</form>
	</div>
</body>
</html>