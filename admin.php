<?php
@include 'config.php';
session_start();
 if(!isset($_SESSION['admin_name'])){
  header('location:login.php');
 }


?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page in HTML with CSS Code Example</title>
<link rel="stylesheet" href="./style1.css">
</head>
<body>
	<div class="container">
    <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>
        welcome<span>
        </span>
      </h1>
      <p>
        this is an admin page
      </p>
      <a href="login.php" class="btn">Login</a>
      <a href="register.php" class="btn">Register</a>
      <a href="logout.php" class="btn">Logout</a>
    </div></div></body>
	</form>
</body>
