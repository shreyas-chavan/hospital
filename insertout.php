<!DOCTYPE html>
<html>

<head>
	<title>Insert Page</title>
</head>

<body>
	<center>
		<?php


		$conn = mysqli_connect("localhost", "root", "", "hospital");

		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		//$Mrdno = isset($_REQUEST["Mrdno"] ) ? $_REQUEST["Mrdno"]: '';
		$Hno = $_REQUEST['Hno'];
		$Name = $_REQUEST['Name'];
		$Age = $_REQUEST['Age'];
		$Addr = $_REQUEST['Addr'];
		$Dob = isset($_REQUEST["Dob"] ) ? $_REQUEST["Dob"]: '';
		$Gender = $_REQUEST['Gender'];
		$State = $_REQUEST['State'];
		$District = $_REQUEST['District'];
		$Concession = $_REQUEST['Concession'];
		$Referal = $_REQUEST['Referal'];
		$Date = $_REQUEST['Date'];


		$sql = "INSERT INTO OUTPATIENT VALUES (
			'$Hno','$Name','$Age','$Addr','$Dob','$Gender','$State','$District','$Concession','$Referal','$Date')";

		if(mysqli_query($conn, $sql)){
			echo "<h3>Data stored in Database";

		} else{
			echo "ERROR! $sql. "
				. mysqli_error($conn);
		}


		mysqli_close($conn);
		?>
	</center>
</body>

</html>
