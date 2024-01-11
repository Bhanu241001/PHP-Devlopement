<?php 
session_start();
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
    <?php
    $email=$_SESSION['email'];
    $pass=$_SESSION['pass'];
    $query="SELECT * FROM `user` WHERE `email`='$email' AND `password`='$pass'";
    $result=mysqli_query($conn,$query);
    $fetch=mysqli_fetch_assoc($result);
    ?>

<h2 style="text-align:center">User Profile Card</h2>

<div class="card">
  <img src="./images/man.png" alt="John" style="width:100%">
  <h4>Name: <?php echo $fetch['username'] ?></h4>
  <h5>Email: <?php echo $fetch['email'] ?></h5>
  <h4>Phone: <?php echo $fetch['phone'] ?></h4>
  <h5>Address: <?php echo $fetch['address'] ?></h5>
  <p class="title">Created : Bhanu Pratap Yadav </p>
  <p></p>
  
  <p><button>Contact</button></p>
</div>

</body>
</html>
