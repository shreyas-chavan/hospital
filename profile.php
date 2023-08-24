<!-- <h3>Logged in</h3> -->
<!--
<a href="insert_inpatient.php">IN-PATIENT ADMISSION</a>
<br><br>
<a href="insert_outpatient.php">OUT-PATIENT</a>
<br><br>
<a href="insert_staff.php">STAFF</a>
<br><br>
<a href="bill_inpatient.php">InPatient-Bill</a>
<br><br>
<a href="bill_outpatient.php">OutPatient-Bill</a>
<br><br>

<br><br>
-->
<!-- <form action="./logout.php"> -->
<!-- <input type="submit" value="Log Out" /> -->
<!-- </form> -->
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
            <li><a  href="index.php">HOME</a></li>
            <!-- <li><a href="auth.php">LOGIN</a></li> -->
            <li><a class="active" href="profile.php">PROFILE</a></li>
            <!-- <li><a href="signup.php">SIGN-UP</a></li> -->
            <li><a href="about.php">ABOUT</a></li>    
        </ul>
    </div>
</section>

<section> 
      <br />
      <h1><center>
        Logged In
      </center></h1><br />
      <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
              <div class="col-md-4">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link active" href="insert_inpatient.php">IN-PATIENT ADMISSION</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="insert_outpatient.php">OUT-PATIENT ADMISSION</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="insert_staff.php">STAFF ADMISSION</a>
                  </li>
                  <!-- <li class="nav-item"> -->
                  <!-- </li> -->
                  <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
                  <li class="nav-item">
                    <a class="nav-link" href="bill_inpatient.php">InPatient-Bill</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="bill_outpatient.php">OutPatient-Bill</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="view_records.php">View  All Records From InPatient</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="up_inp.php">Update Inpatient Records</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="inrec.php">Search Inpatient Records</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="outrec.php">Search Outpatient Records</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="delete_inpatient.php">Delete Inpatient Records</a>
                  </li>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="delete_outpatient.php">Delete Outpatient Records</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="passwordform.php">Change Password</a>
                </li>
                </ul>

          </div>
          <div class="col-md-4"></div>
        </div>
</section>
      
  

</body>
</html>
