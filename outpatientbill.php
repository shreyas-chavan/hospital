<!DOCTYPE html>
<html>

<head>
	<title>Insert Page </title>
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
		//$Mrdno = isset($_REQUEST["Mrdno"] ) ? $_REQUEST["Mrdno"]: '';
		$PName = $_REQUEST['PName'];
		$Docname= $_REQUEST['Docname'];
		$Date = isset($_REQUEST["Date"] ) ? $_REQUEST["Date"]: '';
		$Amount = $_REQUEST['Amount'];



		$sql = "INSERT INTO OUTPATIENTBILL VALUES ('$Bno',
			'$Hno','$PName','$Docname','$Date','$Amount')";

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
