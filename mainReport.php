<!DOCTYPE html>
<html>
<head>
	<title>Crystal Report</title>
	<?php 
	//include_once 'html_commons/main-header.php';
	//include_once 'html_commons/new-side.php';
	?>
	<h1><big><big><b>Organ Donation Report</b></big></big></h1>
	<?php $conn = new mysqli('localhost', 'root', '', 'organ_transplant');
	if ($conn->connect_error) {
	     die("Connection failed: " . $conn->connect_error);
	} 
	echo "<br><br><big><table align='center' border='3'><tr bgcolor='AntiqueWhite'><th width='200'>Organs</th><th width='100'>Number of donars</th>";
	$sql= "SELECT * FROM `registration` WHERE OrgansDonate='heart'";
	$result = $conn->query($sql);
	$count1=0;
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	     	if ($row["Age"]<50){
		     	if ($row["Donated"]=='no') {
		     		$count1=$count1+1;
	     		}	
	     	}
	    }
	}
	echo "<tr bgcolor='GhostWhite' ><td>&nbsp&nbsp&nbsp&nbspHeart Donars</td><td>&nbsp&nbsp&nbsp&nbsp".$count1."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
	echo "<a href='organHeart.php'><input type='button' value='View' name='view' id='view' align='right'></a></td><tr>";
	$sql= "SELECT * FROM `registration` WHERE OrgansDonate='kidney'";
	$result = $conn->query($sql);
	$count2=0;
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	     	if ($row["Age"]<50){
		     	if ($row["Donated"]=='no') {
		     		$count2=$count2+1;
	     		}	
	     	}
	    }
	}
	echo "<tr  bgcolor='GhostWhite'><td>&nbsp&nbsp&nbsp&nbspKidney Donars</td><td>&nbsp&nbsp&nbsp&nbsp".$count2."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
	echo "<a href='organKidney.php'><input type='button' value='View' name='view' id='view' align='right'></a></td><tr>";
	$sql= "SELECT * FROM `registration` WHERE OrgansDonate='lung'";
	$result = $conn->query($sql);
	$count3=0;
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	     	if ($row["Age"]<50){
		     	if ($row["Donated"]=='no') {
		     		$count3=$count3+1;
	     		}	
	     	}
	    }
	}
	echo "<tr  bgcolor='GhostWhite'><td>&nbsp&nbsp&nbsp&nbspLung Donars</td><td>&nbsp&nbsp&nbsp&nbsp".$count3."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
	echo "<a href='organLung.php'><input type='button' value='View' name='view' id='view' align='right'></a></td><tr>";
	$sql= "SELECT * FROM `registration` WHERE OrgansDonate='liver'";
	$result = $conn->query($sql);
	$count4=0;
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	     	if ($row["Age"]<50){
		     	if ($row["Donated"]=='no') {
		     		$count4=$count4+1;
	     		}	
	     	}
	    }
	}
	echo "<tr bgcolor='GhostWhite'><td>&nbsp&nbsp&nbsp&nbspLiver Donars</td><td>&nbsp&nbsp&nbsp&nbsp".$count4."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
	echo "<a href='organLiver.php'><input type='button' value='View' name='view' id='view' align='right'></a></td><tr>";
	$sql= "SELECT * FROM `registration` WHERE OrgansDonate='pancreas'";
	$result = $conn->query($sql);
	$count5=0;
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	     	if ($row["Age"]<50){
		     	if ($row["Donated"]=='no') {
		     		$count5=$count5+1;
	     		}	
	     	}
	    }
	}
	echo "<tr bgcolor='GhostWhite'><td>&nbsp&nbsp&nbsp&nbspPancreas Donars</td><td>&nbsp&nbsp&nbsp&nbsp".$count5."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
	echo "<a href='organPancreas.php'><input type='button' value='View' name='view' id='view' align='right'></a></td><tr>";
	$sql= "SELECT * FROM `registration` WHERE OrgansDonate='eye'";
	$result = $conn->query($sql);
	$count6=0;
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	     	if ($row["Age"]<50){
		     	if ($row["Donated"]=='no') {
		     		$count6=$count6+1;
	     		}	
	     	}
	    }
	}
	echo "<tr bgcolor='GhostWhite'><td>&nbsp&nbsp&nbsp&nbspCornea Donars</td><td>&nbsp&nbsp&nbsp&nbsp".$count6."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
	echo "<a href='organEye.php'><input type='button' value='View' name='view' id='view' align='right'></a></td><tr>";
	$sql= "SELECT * FROM `registration` WHERE OrgansDonate='all'";
	$result = $conn->query($sql);
	$count7=0;
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	     	if ($row["Age"]<50){
		     	if ($row["Donated"]=='no') {
		     		$count7=$count7+1;
	     		}	
	     	}
	    }
	}
	echo "<tr bgcolor='GhostWhite'><td>&nbsp&nbsp&nbsp&nbspAll Organs Donars</td><td>&nbsp&nbsp&nbsp&nbsp".$count7."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
	echo "<a href='organs.php'><input type='button' value='View' name='view' id='view' align='right'></a></td><tr>";
	$sql= "SELECT * FROM `registration` WHERE Donated='yes'";
	$result = $conn->query($sql);
	$count8=0;
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	     	if ($row["Donated"]=='yes') {
	     		$count8=$count8+1;
     		}
	    }
	}
	echo "<tr bgcolor='GhostWhite'><td>&nbsp&nbsp&nbsp&nbspOrgans Donated</td><td>&nbsp&nbsp&nbsp&nbsp".$count8."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";	
	echo "<a href='donated.php'><input type='button' value='View' name='view' id='view' align='right'></a></td><tr>";
	$count=$count7+$count6+$count5+$count4+$count3+$count2+$count1;
	echo "<tr bgcolor='Beige'><th>&nbsp&nbsp&nbsp&nbspTotal</th><th>&nbsp&nbsp&nbsp&nbsp".$count."</th></tr></table>";
	$conn->close(); 
	?>
</head>
<body>
	
</body>
</html>
