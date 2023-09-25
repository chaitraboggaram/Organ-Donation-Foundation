<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php 
	include_once 'html_commons/main-header.php';
	include_once 'html_commons/new-side.php';
	?>
	<h1><big><big><b>Organ Details</b></big></big></h1>
	<?php $conn = new mysqli('localhost', 'root', '', 'organ_transplant');
	if ($conn->connect_error) {
	     die("Connection failed: " . $conn->connect_error);
	} 
	echo "<big><br><table align='center' border='3' width='500' cellspacing='50'><tr><th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspOrgans</th><th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNumber of donars</th>";
	$sql= "SELECT * FROM `registration` WHERE City='Bangalore'";
	$result = $conn->query($sql);
	$count1=0;
	if ($result->num_rows > 0) {
	     while($row = $result->fetch_assoc()) {
	     	if ($row["Age"]<50) {
	     		$count1=$count1+1;
	     	}
	     }
	}
	echo "<tr><td>&nbsp&nbsp&nbsp&nbspHeart Donars</td><td>&nbsp&nbsp&nbsp&nbsp".$count1."</td></tr>";
	$conn->close(); 
	?>
</head>
<body>
	<a href="/organdonar/searchCity.php" class="btn btn-primary col-sm-1">City<br></a><br><br>
	<a href="/organdonar/searchState.php" class="btn btn-primary col-sm-1">State<br></a><br><br>
	<a href="/organdonar/searchCountry.php" class="btn btn-primary col-sm-1">Country<br></a><br><br>

</body>
</html>