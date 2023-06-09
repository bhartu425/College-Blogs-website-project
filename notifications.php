<?php 
  include"includes/header.php";
 ?>

<!--navbar area-->    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand pl-3" href="index.php">LAUREATE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto pr-3">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="notifications.php">Notificatoins</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#footer">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="includes/gallery.php">Gallery</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

<div class="container">
  <div class=" text-center  bg-light my-5 ">
  <ul class="list-group bg-dark text-light pt-3 li_style"><h3>Notifications</h3>
    <?php
    $sql="select * from notifications ORDER BY id DESC  ";
    $res=mysqli_query($conn,$sql);
    if (mysqli_num_rows($res)) {
      while ($row=mysqli_fetch_assoc($res)) {

    ?>
      <li class="list-group-item "><?php echo $row['notification'];?><span class="text-primary "> -Date <?php echo $row['date'];?></span></li>
      
      
    <?php 
    } }
    ?> 
      
     
    </ul>
	</div>
</div>



 <?php 
  include"includes/footer.php";
?>
