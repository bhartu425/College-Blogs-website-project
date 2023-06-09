<?php
include"includes/db.php";
ob_start();
session_start();

?>


<!DOCTYPE HTML>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- custom css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body class="bg-dark">

    <div class="container-fluid row mt-5 mr-5">
      <div class="offset-2 col-8 ">
        <ul class="nav nav-tabs">
          <li class="nav-item w-50 text-center"><a href="#login" class="nav-link text-success" data-toggle="tab"><h5>Login</h5></a></li>
          <li class="nav-item w-50 text-center"><a href="#signup" class="nav-link text-success" data-toggle="tab"><h5>SignUp</h5></a></li>
        </ul>
      </div>
    <div class=" card tab-content offset-2 col-8 mt-3">

<!-- LOGIN PANNEL-->     

    <div id="login" class="tab-pane active">
    <div class="card-header text-center my-3 bg-success text-light "><h5>Login To Continue</h5></div>
    <?php
      if(isset($_SESSION['signup']))
      {
        echo $_SESSION['signup'];
        unset($_SESSION['signup']);
      }
    ?>
     <form action="signin.php" method="POST" >
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control"  placeholder="Enter username" name="uname" required>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control"  placeholder="*********" name="pswd" required>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="text-center">
    <button type="submit" class="btn btn-success my-3" name="signin">LOGIN</button>
    </div>
    </form>
    
    </div>
         
<!-- SIGNUP PANNEL-->

  <div id="signup" class="tab-pane"> 
    <div class="card-header text-center my-3 bg-success text-light "><h5>SignUp To Continue</h5> </div>

    <form action="signup.php" method="POST">

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
      
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="phone" class="form-control" id="phone" placeholder="Enter phone no" name="phone" required>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree with term & conditions.
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
     </div>
    <div class="text-center">
    <button type="submit" class="btn btn-success my-3" name="signup">SignUp</button>
    </div>
   </form>

  </div>
        
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

