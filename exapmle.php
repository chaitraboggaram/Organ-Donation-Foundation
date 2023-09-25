<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php 
	include_once 'html_commons/main-header.php';
	include_once 'html_commons/new-side.php';
	if (!empty($_POST)) {
			if(mysql_connect('localhost','root','')){
				if(mysql_select_db('organ_transplant'))	{
					$sql="INSERT INTO `example`(`AllOrgans`, `EyeOrgan`, `KidneyOrgan`, `HeartOrgan`, `LungOrgan`, `LiverOrgan`, `PancreasOrgan`) VALUES ('".$_POST['AllOrgans']."','".$_POST['EyeOrgan']."','".$_POST['KidneyOrgan']."','".$_POST['HeartOrgan']."','".$_POST['LungOrgan']."','".$_POST['LiverOrgan']."','".$_POST['PancreasOrgan']."')";
					if(mysql_query($sql)){
						
					}
				}
			}
			header("Location: http://localhost/organdonar/thank.php");	
		}
	
	?>
</head>
<body>
<label>
Organs that I wish to donate upon my death:<small>*</small> </label><br>
						<input type="checkbox" name="all" value="all" id="all" />All organs<br>
						<input type="checkbox" name="eye" value="eye" id="eye"/>Cornea( Eyes)<br>
						<input type="checkbox" name="kidney" value="kidney" id="kidney"/>Kidney<br>
						<input type="checkbox" name="heart" value="heart" id="heart"/>Heart<br>
						<input type="checkbox" name="lungs" value="lungs" id="lungs"/>Lungs<br>
						<input type="checkbox" name="liver" value="liver" id="liver"/>Liver<br>
						
</body>
</html>