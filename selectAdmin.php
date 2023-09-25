<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php 
	//include_once 'html_commons/main-header.php';
	//include_once 'html_commons/new-side.php'; 		
	
	?>
	<h1><big><big><b>Admin Details</b></big></big></h1>
	<?php $conn = new mysqli('localhost', 'root', '', 'organ_transplant');
	if ($conn->connect_error) {
	     die("Connection failed: " . $conn->connect_error);
	} 
	$sql= "SELECT * FROM `login`";
	$result = $conn->query($sql);
	$count=0;
	if ($result->num_rows > 0) {
		echo "<br><br><table align='center' border='3'><big><tr bgcolor='GhostWhite '><th>ID</th><th width='200'>Name</th><th width='100' >Email</th></tr></big>";
	     while($row = $result->fetch_assoc()) {
	         $count=$count+1;
     			echo "<tr bgcolor='FloralWhite'><td width='25'>".$row["ID"]."</td><td width='100'>".$row["FirstName"]." ".$row["LastName"]."</td><td>".$row["Email"]."</td></tr></big>";  
	     }
	} else {
	     echo "0 results";
	}
	echo "<tr bgcolor='Beige'><th colspan='5'><big><big>Total:&nbsp&nbsp ".$count."</big></big></th></tr></table>";
	$conn->close();
	?>  
</head>
<body>
	
</body>
</html>