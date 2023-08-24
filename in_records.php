
<!-- 
// $host ="localhost";
// $username ="root";
// $password ="";
// $dbname ="hospital";

// $connect = mysqli_connect($host, $username, $password, $dbname);

// if(!$connect) {
//     die ("Connection Failed: " . mysqli_connect_error($connect));
// }

// $Mrdno = isset($_REQUEST["Mrdno"] ) ? $_REQUEST["Mrdno"]: '';

// $sqlselect = "SELECT * FROM INPATIENT where Mrdno='$Mrdno'";
// $result = $connect->query($sqlselect);

// if ($result->num_rows > 0)
// {
//     echo "<h3>INPATIENT_DATA:</h3><br><br>";
//     while($row = $result->fetch_assoc())
//     {

//         echo
//         "Mrdno: " . $row["Mrdno"].
//         "&emsp;  &emsp; Hno: " . $row["Hno"] .
//         "&emsp;  &emsp; Name: " . $row["Name"] .
//         "&emsp;  &emsp; Age: " . $row["Age"] .
//         "&emsp;  &emsp; Addr: " . $row["Addr"] .
//         "&emsp;  &emsp; Dob: " . $row["Dob"] .
//         "&emsp;  &emsp; Gender: " . $row["Gender"] .
//         "&emsp;  &emsp; State: " . $row["State"] .
//         "&emsp;  &emsp; District: " . $row["District"] .
//         "&emsp;  &emsp; Concession: " . $row["Concession"] .
//         "&emsp;  &emsp; Referal.: " . $row["Referal"] .
//         "&emsp;  &emsp; Dateofadmit: " . $row["Dateofadmit"] . "<br>";
//     }
// }
// else {
//     echo "No data in table!";
// } -->
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Inpatient Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    
<section id="header">
    <a href="#index.php"><img src="img/logoo.png" class="logo" alt="logo-img"> </a>   
    <div>
        <ul id="navbar">
            <li><a class="active" href="index.php">HOME</a></li>
            <!-- <li><a href="auth.php">LOGIN</a></li> -->
            <li><a href="profile.php">PROFILE</a></li>
            <!-- <li><a href="signup.php">SIGN-UP</a></li> -->
            <li><a href="about.php">ABOUT</a></li>    
        </ul>
    </div>
    </section><br><br>
<?php
$host ="localhost";
$username ="root";
$password ="";
$dbname ="hospital";

$connect = mysqli_connect($host, $username, $password, $dbname);

if (!$connect) {
    die("Connection Failed: " . mysqli_connect_error($connect));
}

$Mrdno = isset($_REQUEST["Mrdno"]) ? $_REQUEST["Mrdno"] : '';

$sqlselect = "SELECT * FROM INPATIENT where Mrdno='$Mrdno'";
$result = $connect->query($sqlselect);

if ($result->num_rows > 0) {
    echo "<h3>INPATIENT_DATA:</h3>";
    echo "<table>";
    echo "<tr>
            <th>Mrdno</th>
            <th>Hno</th>
            <th>Name</th>
            <th>Age</th>
            <th>Addr</th>
            <th>Dob</th>
            <th>Gender</th>
            <th>State</th>
            <th>District</th>
            <th>Concession</th>
            <th>Referal</th>
            <th>Dateofadmit</th>
          </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["Mrdno"]."</td>
                <td>".$row["Hno"]."</td>
                <td>".$row["Name"]."</td>
                <td>".$row["Age"]."</td>
                <td>".$row["Addr"]."</td>
                <td>".$row["Dob"]."</td>
                <td>".$row["Gender"]."</td>
                <td>".$row["State"]."</td>
                <td>".$row["District"]."</td>
                <td>".$row["Concession"]."</td>
                <td>".$row["Referal"]."</td>
                <td>".$row["Dateofadmit"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No data in the table!";
}
?>
</body>
</html>

