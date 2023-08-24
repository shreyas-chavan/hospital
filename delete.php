<!--
<form action="" method="post">
    Mrdno: <input type="number" name="Mrdno">
    <br>
    <br>


    <input type="submit">

</form>

-->

<?php

$Mrdno = isset($_REQUEST["Mrdno"] ) ? $_REQUEST["Mrdno"]: '';

$db = mysqli_connect('localhost','root','','hospital') or
    die('Error connecting to MySQL server.');


  $sql = "Delete FROM INPATIENT WHERE Mrdno= '$Mrdno'";
  mysqli_query($db,$sql);




if ($db->query($sql) === TRUE) {
  echo "Record Deleted Successfully";
} else {
  echo "Error deleting record: " . $db->error;
}




?>
