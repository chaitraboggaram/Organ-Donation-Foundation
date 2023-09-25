<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php 
	//include_once 'html_commons/main-header.php';
	//include_once 'html_commons/new-side.php'; 		
	
	?>
	<h1><big><big><b>Donation Details</b></big></big></h1>
	<?php $conn = new mysqli('localhost', 'root', '', 'organ_transplant');
	if ($conn->connect_error) {
	     die("Connection failed: " . $conn->connect_error);
	} 
	$sql= "SELECT * FROM `donation`";
	$result = $conn->query($sql);
	$count=0;
	$amount=0;
	if ($result->num_rows > 0) {
		 echo "<br><br><table align='center' border='3'><big><tr bgcolor='GhostWhite '><th>ID</th><th>Name</th><th width='100'>Email</th><th>Amount</th><th width='200' >Suggestions</th></tr></big>";
	     while($row = $result->fetch_assoc()) {
	        $count=$count+1;
	        $amount=$amount+$row["Amount"];
     			echo "<tr bgcolor='FloralWhite'><td width='25'>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Amount"]."</td><td>".$row["Suggestions"]."</td></tr></big>";  
	     }
	} else {
	     echo "0 results";
	}
	echo "<tr bgcolor='Beige'><th colspan='13'><big><big>Total Amount:&nbsp&nbsp ".$amount."</big></big></th></tr></table>";
	$conn->close();
	
?>  
</head>
<body>
	
</body>
</html>