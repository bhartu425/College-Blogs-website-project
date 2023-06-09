<?php
include"header.php";
?>

<!--navbar area-->    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand pl-3" href="index.php">LAUREATE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto pr-3">
      <li class="nav-item ">
        <a class="nav-link" href="../index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../notifications.php">Notificatoins</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#footer">About</a>
      </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" >
          Select Course
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">BCA</a>
          <a class="dropdown-item" href="#">BBA</a>
          
        </div>
      </li>
    </ul>
  </div>
</nav>

<hr class="my-5">

<div class="container-fluid ">
  <div class="row">
    
      <?php
  $dir="../images/";
  $files=scandir($dir);
  if ($files) 
  {

    ?>
    
    <div class="row">
      
    
    <?php
    foreach ($files as $files)  
    {
      if (strlen($files)>2) {
        
      
    ?>
    <div class="col-lg-4 col-sm-6 col-12">
      <div class="card-body">
        <div class="card-img-bottom">
          <img src="../images/<?php echo $files;?>" style="height: 300px; width: 450px;">
          
        </div>
      </div>
      </div>  

  <?php 
   }
   }
  }
?>
</div>  

    </div>
  </div>


<hr class="my-5">
<?php
include"footer.php";
?>