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
</head>
<body>
    <!-- <script src="js/script.js"></script> -->
    <section id="header">
    <a href="#index.php"><img src="img/logoo.png" class="logo" alt="logo-img"> </a>   
    <div>
        <ul id="navbar">
            <li><a  href="index.php">HOME</a></li>
            <li><a href="auth.php">LOGIN</a></li>
            <!-- <li><a href="signup.php">SIGN-UP</a></li> -->
            <li><a class="active" href="about.php">ABOUT</a></li>    
        </ul>
    </div>
    </section>
    <section id="hero">
     <h1>About</h1><BR></BR>
     <h2>This is a Hospital Management Tool</h2><br>
     <h3>Functionality include:</h3>
     <h3>Creation And Maintenance Of Database Of Patients And Staff </h3>
     <h3>Including Personal As Well As Billing Information</h3>
     <h1>To Start Using the Software</h1>
     <a href="auth.php" class="myButton">Login</a>
    </section>
<!-- <script>
  // Get a reference to the button element
  const myButton = document.getElementById('myButton');

  // Add an event listener for the 'click' event
  myButton.addEventListener('click', function() {
    alert("Shop Now button was clicked!");
  });
</script>     -->
</body>
</html>