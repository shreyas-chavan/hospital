
<?php
    $host = "localhost";
    $user = "root";
    $pass = '';
    $db_name = "hospital";

    $con = mysqli_connect($host, $user, $pass, $db_name);
    if(mysqli_connect_errno()) {
        die("Failed to connect with MySQL: ". mysqli_connect_error());
    }
    $username = $_POST['username'];
    $password = $_POST['password']; 
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);
    //$username = isset($_POST["username"] ) ? $_POST["username"]: '';
    //$password = isset($_POST["password"] ) ? $_POST["password"]: '';
    $sql = "select * from user where username = '$username' and password = '$password'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == 1){
        header('Location: ./profile.php');
      }
    else{
        echo "<h1> Login failed. Invalid username or password.</h1>";
      }

?>
