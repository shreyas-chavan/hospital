<?php

$username = $_POST['username'];
$newpassword = $_POST['newpassword'];

$db = mysqli_connect('localhost','root','','hospital') or
    die('Error connecting to MySQL server.');


  $sql = "UPDATE user SET password='$newpassword' WHERE username='$username'";
  mysqli_query($db,$sql);




if ($db->query($sql) === TRUE) {
  echo "Password updated successfully";
} else {
  echo "Error updating record: " . $db->error;
}




?>
