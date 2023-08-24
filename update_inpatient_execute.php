<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Update Inpatient Information</title>
</head>
<body>
<section id="header">
    <a href="index.php"><img src="img/logoo.png" class="logo" alt="logo-img"> </a>   
    <div>
        <ul id="navbar">
            <li><a class="active" href="index.php">HOME</a></li>
            <!-- <li><a href="auth.php">LOGIN</a></li> -->
            <li><a href="profile.php">PROFILE</a></li>
            <!-- <li><a href="signup.php">SIGN-UP</a></li> -->
            <li><a href="about.php">ABOUT</a></li>    
        </ul>
    </div>
</section>
<br>
    <center>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "hospital");
        if ($conn === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        $Mrdno = isset($_POST["Mrdno"]) ? $_POST["Mrdno"] : '';
        $Hno = $_POST['Hno'];
        $Name = $_POST['Name'];
        $Age = $_POST['Age'];
        $Addr = $_POST['Addr'];
        $Dob = isset($_POST["Dob"]) ? $_POST["Dob"] : '';
        $Gender = $_POST['Gender'];

        // Add other fields here for updating relevant information

        $sql = "UPDATE INPATIENT SET Hno='$Hno', Name='$Name', Age='$Age', Addr='$Addr', Dob='$Dob', Gender='$Gender' WHERE Mrdno='$Mrdno'";

        if (mysqli_query($conn, $sql)) {
            echo "<h3>Data updated successfully for Mrdno: $Mrdno</h3>";
            echo "<p><a href='profile.php'>Profile</a></p>";
        } else {
            echo "ERROR! $sql. " . mysqli_error($conn);
        }

        mysqli_close($conn);
        ?>
    </center>
</body>
</html>
