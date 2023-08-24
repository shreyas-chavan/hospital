<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inpatient Admission Form</title>
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
        <h1><center>
          INPATIENT ADMISSION
        </center></h1><br />
        <div class="container">
          <div class="row">
              <div class="col-md-4"></div>
                <div class="col-md-4">
                <form name="" action = "insert.php" onsubmit = "" method = "POST">

                        <label class="form-label"> Mrdno: </label>
                        <input type = "number" id ="Mrdno" name  = "Mrdno" class="form-control" /> <br>
                        <label class="form-label"> Hno: </label>
                        <input type = "number" id ="Hno" name  = "Hno" class="form-control"/> <br>
                        <label class="form-label"> Name </label>
                        <input type = "text" id ="Name" name  = "Name" class="form-control"/><br />
                        <label class="form-label"> Age </label>
                        <input type = "number" id ="Age" name  = "Age" class="form-control"/><br />
                        <label class="form-label"> Addr </label>
                        <input type = "text" id ="Addr" name  = "Addr" class="form-control"/><br />
                        <label class="form-label"> Dob </label>
                        <input type = "date" id ="Dob" name  = "Dob" class="form-control"/><br />
                        <label class="form-label"> Gender </label>
                        <input type = "text" id ="Gender" name  = "Gender" class="form-control"/><br />
                        <label class="form-label"> State </label>
                        <input type = "text" id ="State" name  = "State" class="form-control"/><br />
                        <label class="form-label"> District </label>
                        <input type = "text" id ="District" name  = "District" class="form-control"/><br />
                        <label class="form-label"> Concession </label>
                        <input type = "text" id ="Concession" name  = "Concession" class="form-control"/><br />
                        <label class="form-label"> Referal </label>
                        <input type = "text" id ="Referal" name  = "Referal" class="form-control"/><br />
                        <label class="form-label"> Dateofadmit </label>
                        <input type = "date" id ="Dateofadmit" name  = "Dateofadmit" class="form-control"/><br />
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
    <section>
        <div class="container">
            <h1 class="text-center mb-4"><br>
                INPATIENT ADMISSION
            </h1>
            <form name="" action="insert.php" onsubmit="" method="POST">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="Mrdno" class="form-label">Mrdno:</label>
                            <input type="number" id="Mrdno" name="Mrdno" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="Hno" class="form-label">Hno:</label>
                            <input type="number" id="Hno" name="Hno" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="Name" class="form-label">Name:</label>
                            <input type="text" id="Name" name="Name" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="Age" class="form-label">Age:</label>
                            <input type="number" id="Age" name="Age" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="Addr" class="form-label">Addr:</label>
                            <input type="text" id="Addr" name="Addr" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="Dob" class="form-label">Dob:</label>
                            <input type="date" id="Dob" name="Dob" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="Gender" class="form-label">Gender:</label>
                            <input type="text" id="Gender" name="Gender" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="State" class="form-label">State:</label>
                            <input type="text" id="State" name="State" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="District" class="form-label">District:</label>
                            <input type="text" id="District" name="District" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="Concession" class="form-label">Concession:</label>
                            <input type="text" id="Concession" name="Concession" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="Referal" class="form-label">Referal:</label>
                            <input type="text" id="Referal" name="Referal" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="Dateofadmit" class="form-label">Dateofadmit:</label>
                            <input type="date" id="Dateofadmit" name="Dateofadmit" class="form-control" />
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

