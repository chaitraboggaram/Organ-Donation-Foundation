<!DOCTYPE html>
<html>
<head>
	<title>Account Details</title>
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
					$sql= "INSERT INTO  `account`(`AccName`, `AccNo`, `BankName`, `BankBranch`, `BankAddress`) VALUES ('".$_POST['name']."','".$_POST['number']."','".$_POST['bankname']."','".$_POST['branch']."','".$_POST['address']."')";
					if(mysql_query($sql)){
						
					}
				}
			}
			header("Location: http://localhost/organdonar/registration.php");	
		}		
	?>

</head>
<body background="images/background.jpg">
<form method="POST">
<div class="col-sm-8 col-sm-offset-3" style="margin-top: 20; class="align" ">
	<div class="panel panel-primary">
	<h1>Account Details</h1>
		<div class="panel-heading">
			<b>Enter valid account details</b>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label>Account Holder Name: <small>*</small></label>
				<input type="text" name="name" id="name" required><small><small> max 15 characters</small></small><br><br>
			</div>
			<div class="form-group">
				<label>Account Number: <small>*</small> </label>
				<input type="text" name="number" id="number" required/><br><br>
			</div>
			<div class="form-group">
				<label>Bank Name: <small>*</small></label>
				<input type="text" name="bankname" id="bankname" required><br><br>
			</div>
			<div class="form-group">
				<label>Bank Branch: <small>*</small></label>
				<input type="text" name="branch" id="branch" required><br><br>
			</div>
			<div class="form-group">
				<label>Bank Address: <small>*</small> </label>
				<textarea name="address" rows="5" cols="30" id="address">
						
				</textarea><br>
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
</body>
</html>