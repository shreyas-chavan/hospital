<!DOCTYPE html>
<html>
<head>
	<!-- <title>Insert Page </title> -->
</head>
<body>
	<center>
		<?php


		$conn = mysqli_connect("localhost", "root", "", "hospital");

		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		$Bno = isset($_REQUEST["Bno"] ) ? $_REQUEST["Bno"]: '';
		$Hno = $_REQUEST['Hno'];
		$Mrdno = isset($_REQUEST["Mrdno"] ) ? $_REQUEST["Mrdno"]: '';
		$PName = $_REQUEST['PName'];
		$Department= $_REQUEST['Department'];
		$Date = isset($_REQUEST["Date"] ) ? $_REQUEST["Date"]: '';
		$Rrent = $_REQUEST['Rrent'];
		$Lab = $_REQUEST['Lab'];

		$Ad = $_REQUEST['Ad'];
		$Dd = $_REQUEST['Dd'];
		$Amount = $_REQUEST['Amount'];



		$sql = "INSERT INTO INPATIENTBILL VALUES ('$Bno',
			'$Hno','$Mrdno','$PName','$Department','$Date','$Rrent','$Lab','$Ad','$Dd','$Amount')";

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
