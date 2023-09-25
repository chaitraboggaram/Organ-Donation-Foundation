<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php 
	//include_once 'html_commons/main-header.php';
	//include_once 'html_commons/new-side.php';
	?>
	<h1><big><big><b>Account Details</b></big></big></h1>
	<?php $conn = new mysqli('localhost', 'root', '', 'organ_transplant');
	if ($conn->connect_error) {
	     die("Connection failed: " . $conn->connect_error);
	} 
	$sql= "SELECT * FROM `account`";
	$result = $conn->query($sql);
	$count=0;
	if ($result->num_rows > 0) {
		 echo "<br><br><table align='center' border='3'><big><tr bgcolor='GhostWhite '><th>ID</th><th>Account Holder Name</th><th>Account Number</th><th>Bank Name</th><th>Bank's Branch</th><th width='50'>Bank Address</th></tr></big>";
	     while($row = $result->fetch_assoc()) {
     			$count=$count+1;
     			echo "<tr bgcolor='FloralWhite'><td width='25'>".$row["ID"]."</td><td width='100'>".$row["AccName"]."</td><td>".$row["AccNo"]."</td><td>".$row["BankName"]."</td><td>".$row["BankBranch"]."</td><td>".$row["BankAddress"]."</td></tr></big>";  
	     }
	} else {
	     echo "0 results";
	}
	echo "<tr bgcolor='Beige'><th colspan='13'><big><big>Total:&nbsp&nbsp ".$count."</big></big></th></tr></table>";
	$conn->close();
	?>  
</head>
<body>
	
</body>
</html>