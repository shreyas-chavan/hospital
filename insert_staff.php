<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Form</title>
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
          Staff
        </center></h1><br />
        <div class="container">
          <div class="row">
              <div class="col-md-4"></div>
                <div class="col-md-4">
                <form name="" action = "insertstaff.php" onsubmit = "" method = "POST">

                        <label class="form-label"> Idno </label>
                        <input type = "number" id ="Idno" name  = "Idno" class="form-control" /><br />
                        <label class="form-label"> Name </label>
                        <input type = "text" id ="Name" name  = "Name" class="form-control"/><br />
                        <label class="form-label"> Department </label>
                        <input type = "text" id ="Department" name  = "Department" class="form-control"/><br />
                        <label class="form-label"> DOJ</label>
                        <input type = "date" id ="DOJ" name  = "DOJ" class="form-control"/><br />
                        <label class="form-label"> Gender </label>
                        <input type = "text" id ="Gender" name  = "Gender" class="form-control"/><br />
                        <label class="form-label"> Addr </label>
                        <input type = "text" id ="Addr" name  = "Addr" class="form-control"/><br />
                        <label class="form-label"> Salary </label>
                        <input type = "number" id ="Salary" name  = "Salary" class="form-control"/><br />
                        <label class="form-label"> Dtc </label>
                        <input type = "date" id ="Dtc" name  = "Dtc" class="form-control"/><br />
                        <label class="form-label"> Reason </label>
                        <input type = "text" id ="Reason" name  = "Reason" class="form-control"/><br />
                        <label class="form-label"> Age </label>
                        <input type = "number" id ="Age" name  = "Age" class="form-control"/><br />
                        <label class="form-label"> Email </label>
                        <input type = "text" id ="Email" name  = "Email" class="form-control"/><br />
                        <label class="form-label"> Phone  </label>
                        <input type = "text" id ="Phone " name  = "Phone " class="form-control"/><br />
                        <label class="form-label"> cell </label>
                        <input type = "text" id ="cell" name  = "cell" class="form-control"/><br />
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
            <h1 class="text-center mb-4">
                Staff
            </h1>
            <form name="" action="insertstaff.php" onsubmit="" method="POST">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="Idno" class="form-label">Idno:</label>
                            <input type="number" id="Idno" name="Idno" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="Name" class="form-label">Name:</label>
                            <input type="text" id="Name" name="Name" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="Department" class="form-label">Department:</label>
                            <input type="text" id="Department" name="Department" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="DOJ" class="form-label">DOJ:</label>
                            <input type="date" id="DOJ" name="DOJ" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="Gender" class="form-label">Gender:</label>
                            <input type="text" id="Gender" name="Gender" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="Addr" class="form-label">Addr:</label>
                            <input type="text" id="Addr" name="Addr" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="Salary" class="form-label">Salary:</label>
                            <input type="number" id="Salary" name="Salary" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="Dtc" class="form-label">Dtc:</label>
                            <input type="date" id="Dtc" name="Dtc" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="Reason" class="form-label">Reason:</label>
                            <input type="text" id="Reason" name="Reason" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="Age" class="form-label">Age:</label>
                            <input type="number" id="Age" name="Age" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="Email" class="form-label">Email:</label>
                            <input type="text" id="Email" name="Email" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="Phone" class="form-label">Phone:</label>
                            <input type="text" id="Phone" name="Phone" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="cell" class="form-label">Cell:</label>
                            <input type="text" id="cell" name="cell" class="form-control" />
                        </div>
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

