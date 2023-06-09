<!DOCTYPE HTML>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- custom css-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top px-5 ">
  <div class="text-center"> 
  <a class="navbar-brand " href="index.php">LAUREATE</a>
  </div>
  <button class="btn btn-dark ml-auto " type="button" onclick="openNav()">
    <span class="navbar-toggler-icon "></span>
  </button>
</nav>
<div class="sidenav bg-dark" id="mysidenav">
<div class="list-group "  >

  <a href="" onclick="closeNav()" class="close_btn  "><i class="fas fa-times"></i>close</a>
  <img src="../images/img8.jpg" class="img-fluid mt-3  rounded-circle w-75 ">
  <span class="text-light pl-3"><?php 
  if (isset($_SESSION['username'])) {
    echo $_SESSION['username'];
  }
  ?></span>
  <span class="text-light pl-3">
    <?php
      $usr = $_SESSION['username'];
      $sql="select email from user where username = '$usr' ";
      $res=mysqli_query($conn,$sql);
      if (mysqli_num_rows($res)>0) {
        $row=mysqli_fetch_assoc($res);
        echo $row['email'];
      }
    ?>
  </span>
  <a href="dashboard.php" class="list-group-item sidenavmenustyle active "><i class="fas fa-home"></i>Dashboard</a>
  <a href="addnotification.php" class="list-group-item sidenavmenustyle "><i class="fas fa-bell"></i>Add Notifications</a>
  <a href="addcontent.php" class="list-group-item sidenavmenustyle "><i class="fas fa-users"></i>Add Content</a>
  <a href="image.php" class="list-group-item sidenavmenustyle "><i class="fas fa-images"></i>Gellary</a>
  <a href="#" class="list-group-item sidenavmenustyle "><i class="fas fa-user-cog"></i>Account Setting</a>
  <a href="logout.php" class="list-group-item sidenavmenustyle "><i class="fas fa-sign-out-alt"></i>logout</a>
</div>
</div>