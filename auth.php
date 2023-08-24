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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <script src="js/script.js"></script>
    <section id="header">
    <a href="index.php"><img src="img/logoo.png" class="logo" alt="logo-img"> </a>   
    <div>
        <ul id="navbar">
            <li><a class="active" href="index.php">HOME</a></li>
            <li><a href="auth.php">LOGIN</a></li>
            <!-- <li><a href="signup.php">SIGN-UP</a></li> -->
            <li><a href="about.php">ABOUT</a></li>    
        </ul>
    </div>
    </section>
    <BR></BR>
    <section id="form">
        <h1><center>
          Login
        </center></h1><br />
        <div class="container">
          <div class="row">
            <div class="col-md-4"></div>
              <div class="col-md-4">
                <form name="f1" action = "login.php" onsubmit = "" method = "POST">

                  <label class="form-label"> Username: </label>
                  <input type = "text" id ="username" name  = "username" class="form-control" /><br />
                  <label class="form-label"> Password: </label>
                  <input type = "password" id ="password" name  = "password" class="form-control"/><br />
                  <br />
                  <input type =  "submit" id = "btn" value = "Login" / class="btn btn-primary">
                </form>
              </div>
            <div class="col-md-4"></div>
          </div>
        </div>

    </section>
</body>
</html>
  
