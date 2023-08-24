<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPATIENT-BILL</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
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
    <!-- <section>
      <br />
      <h1><center>
      INPATIENT BILL
      </center></h1><br />
  
          <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                  <div class="col-md-4">
                  <form name="" action = "inpatientbill.php" onsubmit = "" method = "POST">

                          <label class="form-label"> Bno: </label>
                          <input type = "number" id ="Bno" name  = "Bno" class="form-control" /><br />
                          <label class="form-label"> Hno: </label>
                          <input type = "number" id ="Hno" name  = "Hno" class="form-control"/><br />
                          <label class="form-label"> Mrdno: </label>
                          <input type = "number" id ="Mrdno" name  = "Mrdno" class="form-control" /><br />
                          <label class="form-label"> PName </label>
                          <input type = "text" id ="PName" name  = "PName" class="form-control"/><br />
                          <label class="form-label"> Department </label>
                          <input type = "text" id ="Department" name  = "Department" class="form-control"/><br />
                          <label class="form-label"> Date </label>
                          <input type = "date" id ="Date" name  = "Date" class="form-control"/><br />
                          <label class="form-label"> Rrent </label>
                          <input type = "number" id ="Rrent" name  = "Rrent" class="form-control"/><br />

                          <label class="form-label"> Lab </label>
                          <input type = "number" id ="Lab" name  = "Lab" class="form-control"/><br />
                          <label class="form-label"> Ad </label>
                          <input type = "date" id ="Ad" name  = "Ad" class="form-control"/><br />
                          <label class="form-label"> Dd </label>
                          <input type = "date" id ="Dd" name  = "Dd" class="form-control"/><br />
                          <label class="form-label"> Amount </label>
                          <input type = "number" id ="Amount" name  = "Amount" class="form-control"/><br />

                          <br />
                          <input type =  "submit" id = "btn" value = "Submit" / class="btn btn-primary">
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input type =  "submit" id = "btn" value = "Cancel" / class="btn btn-danger">
                  </form>
              </div>
              <div class="col-md-4"></div>
            </div>

          </div>
  </section> -->
  <br>
    <section>
        <div class="container">
            <h1 class="text-center mb-4">
                INPATIENT BILL
            </h1>
            <form name="" action="inpatientbill.php" onsubmit="" method="POST">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="Bno" class="form-label">Bno:</label>
                            <input type="number" id="Bno" name="Bno" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="Hno" class="form-label">Hno:</label>
                            <input type="number" id="Hno" name="Hno" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="Mrdno" class="form-label">Mrdno:</label>
                            <input type="number" id="Mrdno" name="Mrdno" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="PName" class="form-label">PName:</label>
                            <input type="text" id="PName" name="PName" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="Department" class="form-label">Department:</label>
                            <input type="text" id="Department" name="Department" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="Date" class="form-label">Date:</label>
                            <input type="date" id="Date" name="Date" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="Rrent" class="form-label">Rrent:</label>
                            <input type="number" id="Rrent" name="Rrent" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="Lab" class="form-label">Lab:</label>
                            <input type="number" id="Lab" name="Lab" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="Ad" class="form-label">Ad:</label>
                            <input type="date" id="Ad" name="Ad" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="Dd" class="form-label">Dd:</label>
                            <input type="date" id="Dd" name="Dd" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="Amount" class="form-label">Amount:</label>
                            <input type="number" id="Amount" name="Amount" class="form-control" />
                        </div>
                        <!-- Add more form elements for the third column here -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center mt-3">
                        <input type="submit" id="btnSubmit" value="Submit" class="btn btn-primary" />
                        <input type="submit" id="btnCancel" value="Cancel" class="btn btn-danger" />
                    </div>
                </div>
            </form>
        </div>
    </section>

    
</body>

</html>

