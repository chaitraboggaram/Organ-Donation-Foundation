<!DOCTYPE html>
<html>
<head>
	<title>Donation</title>
	<style type="text/css">
	h1 {text-align: center;}
	</style>
	<?php 
	include_once 'html_commons/main-header.php';
	include_once 'html_commons/new-side.php';
	if (!empty($_POST)) {
			if(mysql_connect('localhost','root','')){
				if(mysql_select_db('organ_transplant'))	{
					$sql= "INSERT INTO `donation`(`Name`, `Email`, `Amount`, `Suggestions`) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['amount']."','".$_POST['suggestions']."')";
					if(mysql_query($sql)){
						
					}
				}
			}
			header("Location: http://localhost/organdonar/account.php");	
		}
	?>
</head>
<body>
<form method="POST">
<h1 style="color: #191970;"><big><big><b>Welcome to the Organ Donor Foundation</b></big></big></h1>
<big><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspThe main objective of the Organ Donor Foundation is to create awareness around the subject of organ donation and to register as many as possible individuals as organ donors. 
<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspThe number of organs donors registering indicates the success of specific awareness campaigns. Registering organ donors is important and should be considered as the basis and motivation for the majority of awareness projects undertaken. The Organ Donor Foundation is not a medical organisation and therefore not involved in the allocation or procurement of organs or any medical processes involved in transplantation. 
<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspWe are a non-profit organisation and we generate all our funding from the goodwill of individual and businesses. The Organ Donor Foundation requires funding to support its awareness projects and we welcome any events with the objective to raise funds for the Organ Donor Foundation.</big>
<br>
<div class="col-sm-8 col-sm-offset-3" style="margin-top: 50px; class="align" ">
			<div class="panel panel-primary">
			<h1><b>Donation</b></h1>
				<div class="panel-heading">
					<b>Donate your help</b>
				</div>
				<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspIf you donate Rs. 500 per month you can save many lives and you can help many people and save their lives. The gift of life is a biggest boon which you can give, many people can live just because of your help. Register today donate today and make others life colorful</p>
				<div class="panel-body">
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" id="name" required/><br><br>
					</div>
					<div class="form-group">
						<label>E-mail</label>
						<input type="text" name="email" id="email" required/><br><br>
					</div>
					<div class="form-group">
						<label>Amount</label>
						<input type="text" name="amount" id="amount" required/><br><br>
					</div>
					<label>Suggestions</label>
						<textarea name="comments" rows="5" cols="30">
							
						</textarea><br>
					<br><br>
			<a href="account.php"><input type="submit" class="btn btn-primary pull-right" id="submit" value="Submit"></a>
			<input type="reset" class="btn btn-primary pull-right" id="reset" value="Clear">
</body>
</html>