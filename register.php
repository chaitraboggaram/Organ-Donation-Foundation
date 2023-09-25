<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		h1 {color:blue; text-align:center;}
		small {color:red;}
	</style>
	<?php 
	include_once 'html_commons/main-header.php';
	include_once 'html_commons/new-side.php'; 
	if (!empty($_POST)) {
			if(mysql_connect('localhost','root','')){
				if(mysql_select_db('organ_transplant'))	{
					$sql= "INSERT INTO `login`(`FirstName`, `LastName`, `Email`, `Password`) VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".$_POST['password']."')";
					if(mysql_query($sql)){
						echo '<script type="text/javascript">';
						echo 'alert("You have registered successfully. Login with your FirstName and Password")';
						echo '</script>';
						header("Location: http://localhost/organdonar/login.php");	
					}
				}
			}
		}		
	?>

</head>
<body background="images/background.jpg">
<form method="POST">
<div class="col-sm-8 col-sm-offset-3" style="margin-top: 20; class="align" ">
	<div class="panel panel-primary">
	<h1> Register Admin</h1>
		<div class="panel-heading">
			<b>Create user name and password</b>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label>First Name: <small>*</small></label>
				<input type="text" name="firstname" id="firstname" required><small><small> max 15 characters</small></small><br><br>
			</div>
			<div class="form-group">
				<label>Last Name: <small>*</small> </label>
				<input type="text" name="lastname" id="lastname" required/><small><small> max 15 characters</small></small><br><br>
			</div>
			<div class="form-group">
				<label>E-Mail: <small>*</small></label>
				<input type="text" name="email" id="email" required><br><br>
			</div>
			<div class="form-group">
				<label>Password: <small>*</small> </label>
				<a href="javascript:alert('Username must minimum 4 characters')"><small><small>Help</small></small></a>
				<input type="password" name="password" id="password" required/><br><br>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary pull-right" name="btnsubmit" value="Submit" id="submit" onclick="register()" align="center"/>
				<input type="reset" class="btn btn-primary pull-right" name="btnreset" value="Reset" id="reset"/><br>
			</div>		
		</div>
	</div>
</div>
</form>
</body>
</html>