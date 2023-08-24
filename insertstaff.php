<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />	
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
		$Idno= $_REQUEST['Idno'];
		$Name = $_REQUEST['Name'];
		$Department= $_REQUEST['Department'];
		$DOJ = $_REQUEST['DOJ'];
		$Gender = isset($_REQUEST["Gender"] ) ? $_REQUEST["Gender"]: '';
		$Addr = $_REQUEST['Addr'];
		$Salary = $_REQUEST['Salary'];
		$Dtc = $_REQUEST['Dtc'];
		$Reason = $_REQUEST['Reason'];
		$Age = $_REQUEST['Age'];
		$Email = $_REQUEST['Email'];
			$Phone = isset($_REQUEST["Phone"] ) ? $_REQUEST["Phone"]: '';
				$cell = $_REQUEST['cell'];


		$sql = "INSERT INTO STAFF VALUES (
			'$Idno','$Name','$Department','$DOJ','$Gender','$Addr','$Salary','$Dtc','$Reason','$Age','$Email','$Phone','$cell')";

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
