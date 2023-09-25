<!DOCTYPE html>
<html>
<head>
	<title>Report- Heart</title>
	<?php 
	//include_once 'html_commons/main-header.php';
	//include_once 'html_commons/new-side.php';
	?>
	<h1><big><big><b>Heart Donors Details</b></big></big></h1>
	<?php $conn = new mysqli('localhost', 'root', '', 'organ_transplant');
	if ($conn->connect_error) {
	     die("Connection failed: " . $conn->connect_error);
	} 
	$sql= "SELECT * FROM `registration` WHERE OrgansDonate='heart'";
	$result = $conn->query($sql);
	$count=0;
	if ($result->num_rows > 0) {
		echo "<br><br><table align='center' border='3'><big><tr bgcolor='AntiqueWhite '><th>ID</th><th>Name</th><th>Age</th><th>Sex</th><th>Email</th><th width='50'>Blood Group</th><th>Address</th><th width='50'>House No</th><th>City</th><th>State</th><th>Country</th><th>Mobile</th><th>Phone</th></tr></big>";
	    while($row = $result->fetch_assoc()) {
     		if ($row["Age"]<50){
     			if($row["Donated"]=='no') {
     				$count=$count+1;
     				echo "<tr bgcolor='GhostWhite'><td width='25'>".$row["ID"]."</td><td width='100'>".$row["FirstName"]." ".$row["LastName"]."</td><td>".$row["Age"]."</td><td>".$row["Sex"]."</td><td>".$row["E-mail"]."</td><td>".$row["BloodGroup"]."</td><td width='200'>".$row["Address"]."</td><td>".$row["HouseNo"]."</td><td>".$row["City"]."</td><td>".$row["State"]."</td><td>".$row["Country"]."</td><td>".$row["Mobile"]."</td><td>".$row["Phone"]."</td></tr></big>";
	   			}
	   		}
	    }
	}
	else {
	     echo "0 results";
	}
	echo "<tr bgcolor='Beige'><th colspan='15'><big><big>Total:&nbsp&nbsp ".$count."</big></big></th></tr></table>";
	echo "<br><br><big><table align='center' cellspacing='20'><tr><td><a href='A+Heart.php'><input type='button' value='A+' name='A+'></a></td>
	<td><a href='A-Heart.php'><input type='button' value='A-' name='A-'></a></td>
	<td><a href='B+Heart.php'><input type='button' value='B+' name='B+'></a></td>
	<td><a href='B-Heart.php'><input type='button' value='B-' name='B-'></a></td>
	<td><a href='AB+Heart.php'><input type='button' value='AB+' name='AB+'></a></td>
	<td><a href='AB-Heart.php'><input type='button' value='AB-' name='AB-'></a></td>
	<td><a href='O+Heart.php'><input type='button' value='O+' name='O+'></a></td>
	<td><a href='O-Heart.php'><input type='button' value='O-' name='O-'></a></td>
	<td><a href='OthersHeart.php'><input type='button' value='Others' name='Others'></a></td>
	</tr></table></big>";
	$conn->close();
	?>
</head>
<body>



</body>
</html>