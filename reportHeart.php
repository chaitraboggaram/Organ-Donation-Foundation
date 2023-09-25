<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php 
	//include_once 'html_commons/main-header.php';
	//include_once 'html_commons/new-side.php';
	?>
	<h1><big><big><b>Heart Donors Report</b></big></big></h1>
	<?php $conn = new mysqli('localhost', 'root', '', 'organ_transplant');
	if ($conn->connect_error) {
	     die("Connection failed: " . $conn->connect_error);
	} 
	$sql= "SELECT * FROM `registration` WHERE OrgansDonate='heart' OR OrgansDonate='all'";
	$result = $conn->query($sql);
	$count=1;
	if ($result->num_rows > 0) {
	     while($row = $result->fetch_assoc()) {
	     	if ($row["Age"]<50) {
	     		$count=$count+1;
	     	}
	     	echo "<big><br><table align='center' border='3' width='800'><tr><td>ID:</td><td>".$row["ID"]."</td></tr><tr><td>Name: </td><td>".$row["FirstName"]." ".$row["LastName"]."</td></tr><tr><td>Date Of Birth:</td><td>".$row["DOB"]."</td></tr><tr><td>Age:</td><td>".$row["Age"]."</td></tr><tr><td>Sex:</td><td>".$row["Sex"]."</td></tr><tr><td>E-mail:</td><td>".$row["E-mail"]."</td></tr><tr><td>Blood Group:</td><td>".$row["BloodGroup"]."</td></tr><tr><td>Address:</td><td>".$row["Address"]."</td></tr><tr><td>House No:</td><td>".$row["HouseNo"]."</td></tr><tr><td>City:</td><td>".$row["City"]."</td></tr><tr><td>State:</td><td>".$row["State"]."</td></tr><tr><td>Country:</td><td>".$row["Country"]."</td></tr><tr><td>Pincode:</td><td>".$row["Pincode"]."</td></tr><tr><td>Mobile:</td><td>".$row["Mobile"]."</td></tr><tr><td>Phone:</td><td>".$row["Phone"]."</td></tr><tr><td>Emergency Contact Person Name:</td><td>".$row["EmergencyPersonName"]."</td></tr><tr><td>Emergency Email:</td><td>".$row["EmergencyEmail"]."</td></tr><tr><td>Emergency Mobile:</td><td>".$row["EmergencyMobile"]."</td></tr><tr><td>Emergency Phone:</td><td>".$row["EmergencyPhone"]."</td></tr><tr><td>Agreement:</td><td>".$row["Agreement"]."</td></tr></table><br><br></big>";  
	     }
	} else {
	     echo "0 results";
	}
	echo "<br><br><table align='center'><tr><td><big><big><b>Total&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$count."</b></big></big><br><br></td></tr></table>";
	$conn->close(); 
	?>
</head>
<body>


</body>
</html>