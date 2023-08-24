<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<!-- <script src="js/script.js"></script> -->
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
  <section>
          <br />
          <h1><center>
            InPATIENT RECORD
          </center></h1><br />
          <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                  <div class="col-md-4">
                  <form name="" action = "in_records.php" onsubmit = "" method = "POST">


                          <label class="form-label"> Mrdno: </label>
                          <input type = "number" id ="Mrdno" name  = "Mrdno" class="form-control" /><br />

                          <br />
                          <input type =  "submit" id = "btn" value = "Search" / class="btn btn-primary">
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input type =  "submit" id = "btn" value = "Cancel" / class="btn btn-danger">
                  </form>
              </div>
              <div class="col-md-4"></div>
            </div>
          </div>
  </section>
</body>
</html>
