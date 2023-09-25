<!DOCTYPE html>
<html>
<head>
	<title></title>
	<h1><big><big><b>Lung Donors Details</b></big></big></h1>
	<?php $conn = new mysqli('localhost', 'root', '', 'organ_transplant');
	if ($conn->connect_error) {
	     die("Connection failed: " . $conn->connect_error);
	} 
	$sql= "SELECT * FROM `registration` WHERE OrgansDonate='lung'";
	$result = $conn->query($sql);
	$count=0;
	if ($result->num_rows > 0) {
		echo "<br><br><table align='center' border='3'><big><tr bgcolor='AntiqueWhite '><th>ID</th><th>Name</th><th>Age</th><th>Sex</th><th>Email</th><th width='50'>Blood Group</th><th>Address</th><th width='50'>House No</th><th>City</th><th>State</th><th>Country</th><th>Mobile</th><th>Phone</th></tr></big>";
	    while($row = $result->fetch_assoc()) {
     		if ($row["Age"]<50){
     			if($row["Donated"]=='no') {
     				if($row["BloodGroup"]=='A+'){
	     				$count=$count+1;
	     				echo "<tr bgcolor='GhostWhite'><td width='25'>".$row["ID"]."</td><td width='100'>".$row["FirstName"]." ".$row["LastName"]."</td><td>".$row["Age"]."</td><td>".$row["Sex"]."</td><td>".$row["E-mail"]."</td><td>".$row["BloodGroup"]."</td><td width='200'>".$row["Address"]."</td><td>".$row["HouseNo"]."</td><td>".$row["City"]."</td><td>".$row["State"]."</td><td>".$row["Country"]."</td><td>".$row["Mobile"]."</td><td>".$row["Phone"]."</td><td><a href='update.php'><input type='button' value='Update' name='udpate' id='update' align='right'></a></td></tr></big>";
	   				}
	   			}
	   		}
	    }
	}
	else {
	     echo "0 results";
	}
	echo "<tr bgcolor='Beige'><th colspan='15'><big><big>Total:&nbsp&nbsp ".$count."</big></big></th></tr></table>";
	?>
</head>
<body>

</body>
</html>