<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<?php 
	$conn = new mysqli('localhost', 'root', '', 'organ_transplant');
	if ($conn->connect_error) {
	     die("Connection failed: " . $conn->connect_error);
	} 
	$sql= "SELECT * FROM `registration` WHERE OrgansDonate='eye'";
	$result = $conn->query($sql);
	$count=0;
	if ($result->num_rows > 0) {
		echo '<script type="text/javascript">';
		echo $id="var id=prompt('Enter the ID')";
		echo '</script>';
		$sql = "UPDATE `registration` SET `Donated` = 'yes' WHERE `ID` = $id";
		if ($conn->query($sql))
		{
		  die('Could not update data:'.mysql_error());
		}
		else
		{
			echo '<script type="text/javascript">';
			echo 'alert("Updated data successfully")';
			echo '</script>';
		}
	}
	$conn->close(); 
	?>
</head>
<body>

</body>
</html>