<!--
<form action="" method="post">
    Mrdno: <input type="number" name="Mrdno">
    <br>
    <br>


    <input type="submit">

</form>

-->

<?php

$Hno = isset($_REQUEST["Hno"] ) ? $_REQUEST["Hno"]: '';

$db = mysqli_connect('localhost','root','','hospital') or
    die('Error connecting to MySQL server.');


  $sql = "Delete FROM OUTPATIENT WHERE Hno= '$Hno'";
  mysqli_query($db,$sql);




if ($db->query($sql) === TRUE) {
  echo "Record Deleted Successfully";
} else {
  echo "Error deleting record: " . $db->error;
}




?>
