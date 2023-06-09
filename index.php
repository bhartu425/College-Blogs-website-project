 <?php 
  include"includes/header.php";
 ?>

 <?php 
  include"includes/navbar.php";
 ?>

<?php 
  include"includes/carousel.php";
 ?>
 
 <?php 
  include"includes/welcome_notificationpanel.php";
 ?>
<hr class="my-5"> 

<div class="container-fluid pb-5 content">

  <div class="row mt-5">

      <?php
      $sql="select * from post where id =9";
      $res=mysqli_query($conn,$sql);
      if (mysqli_num_rows($res)) {

         $row=mysqli_fetch_assoc($res); 
      ?>
    <div class="col-md-6 bg-light">

      <h3 class="text-center pt-3"><?php echo $row['title']; ?></h3>
      <hr class="w-75 bg-dark"> 
      <div class="lead"><?php echo $row['content']; ?></div>
    </div>
    <div class="col-md-6">
      <img src="images/<?php echo $row['post_img']; ?>" class="img-fluid">
    </div>
    <?php
      }
    ?>
  </div>
</div>

<hr class="my-5" >

<div class="container-fluid pb-5 content">

  <div class="row mt-5">

    <?php
      $sql="select * from post where id =10";
      $res=mysqli_query($conn,$sql);
      if (mysqli_num_rows($res)) {

         $row=mysqli_fetch_assoc($res); 
      ?>

    <div class="col-md-6 order-md-1 order-2">
      <img src="images/<?php echo $row['post_img']; ?>" class="img-fluid">
    </div>
    <div class="col-md-6 bg-light order-1">
      <h3 class="text-center order-md-2 pt-3"><?php echo $row['title']; ?></h3>
      <hr class="w-75 bg-dark"> 
      <div class="lead"><?php echo $row['content']; ?></div>
    </div>
      
      <?php
      }
    ?>
  </div>
</div>


<hr class="my-5" >

<?php 
  include"includes/youtubevideo.php";
?>

<hr class="my-5">
 
<?php
  include"includes/connecticons.php";
?> 

<hr class="my-5">
<?php
  include"includes/registerpannel.php";
?>

<hr class="my-5">

<?php 
  include"includes/footer.php";
?>



