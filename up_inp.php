<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Inpatient Information</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <section id="header">
        <a href="index.php"><img src="img/logoo.png" class="logo" alt="logo-img"> </a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">HOME</a></li>
                <li><a href="profile.php">PROFILE</a></li>
                <!-- <li><a href="signup.php">SIGN-UP</a></li> -->
                <li><a href="about.php">ABOUT</a></li>
            </ul>
        </div>
    </section>
<br>
    <section>
    <center>
        <h2>Update Inpatient Information</h2>
        <form action="update_inpatient_process.php" method="post">
            <label>Mrdno:</label>
            <input type="text" name="Mrdno" required>
            <br><br>
            <input type="submit" value="Check">
        </form>
    </center>
    </section>
</body>

</html>
