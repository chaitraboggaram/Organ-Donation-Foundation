<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
	h1 {text-align: center;}
	</style>
	<?php 
	include_once 'html_commons/main-header.php';
	include_once 'html_commons/new-side.php'; 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
    $username = $_POST["username"];
    $password = $_POST["password"];
	if ($username=="organ"){
		if($password=="admin") {
			echo '<sript type="text/javascript">';
			echo 'alert("Login successful")';
			echo ' </script>';
			header("Location: http://localhost/organdonar/admin.php");	
		}
	}
		else {
	        $msg = "Wrong Username or Password. Please retry";
	        echo "$msg";
	     }
	}
	?>
</head>
<body>
<form method="POST">
<br><br>
<img src="images/loginascustomer_profile.jpg" align="right">
<div class="col-sm-4 col-sm-offset-1" style="margin-top: 20px; class="align" ">
	<div class="panel panel-primary">
	<h1>Admin Login</h1>
		<div class="panel-heading"><b>Create user name and password</b></div>
		<div class="panel-body">
			<div class="form-group">
				<label>User name</label>
				<input type="text" name="username" id="username" required/><br><br>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" id="password" required/><br><br>
			</div>
		<br><br><a style="text-align: center;" href="register.php">New user</a><br><br>
	<input type="submit" class="btn btn-primary pull-right" id="submit" value="Submit" onclick="organdonar/main.php"/>
</body>
</html>