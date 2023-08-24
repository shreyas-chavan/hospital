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

        // Check if the Mrdno exists in the database
        $sql_check = "SELECT * FROM INPATIENT WHERE Mrdno='$Mrdno'";
        $result_check = mysqli_query($conn, $sql_check);
        if (mysqli_num_rows($result_check) > 0) {
            // If Mrdno exists, show the update form with the relevant fields
            $row = mysqli_fetch_assoc($result_check);
            ?>
            <h2>Update Inpatient Information</h2>
            <form action="update_inpatient_execute.php" method="post">
                <input type="hidden" name="Mrdno" value="<?php echo $row['Mrdno']; ?>">
                <label>Hno:</label>
                <input type="text" name="Hno" value="<?php echo $row['Hno']; ?>" required>
                <br><br>
                <label>Name:</label>
                <input type="text" name="Name" value="<?php echo $row['Name']; ?>" required>
                <br><br>
                <label>Age:</label>
                <input type="number" name="Age" value="<?php echo $row['Age']; ?>" required>
                <br><br>
                <label>Address:</label>
                <input type="text" name="Addr" value="<?php echo $row['Addr']; ?>" required>
                <br><br>
                <label>Date of Birth:</label>
                <input type="date" name="Dob" value="<?php echo $row['Dob']; ?>">
                <br><br>
                <label>Gender:</label>
                <select name="Gender" required>
                    <option value="Male" <?php if ($row['Gender'] === 'Male') echo 'selected'; ?>>Male</option>
                    <option value="Female" <?php if ($row['Gender'] === 'Female') echo 'selected'; ?>>Female</option>
                    <option value="Other" <?php if ($row['Gender'] === 'Other') echo 'selected'; ?>>Other</option>
                </select>
                <br><br>
                

                <input type="submit" value="Update">
            </form>
        <?php
        } else {
            echo "<h3>No record found for Mrdno: $Mrdno</h3>";
            echo "<p><a href='up_inp.php'>Go Back</a></p>";
        }

        mysqli_close($conn);
        ?>
    </center>
</body>
</html>
