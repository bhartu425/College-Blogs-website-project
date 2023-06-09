<?php
$sql="select * from post limit 1";
$res = mysqli_query($conn,$sql);
if ( $row = mysqli_fetch_assoc($res)) {
?>

<div class="container-fluid" id="welcome">
<div class=" row ">
  <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 jumbotron mb-0    ">
    <h1 class="display-4 text-center text-capitalize a"><?php echo $row['title'];?>
     </h1>
    <hr class="bg-dark text-center w-75">
    <div class="lead "><?php echo $row['content'];?></div>
  </div>

<?php
}
?>
  <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center  bg-light mt-3 ">
  <ul class="list-group bg-dark text-light pt-3 li_style"><h3>Notifications</h3>
    <?php
    $sql="select * from notifications ORDER BY id DESC limit 4 ";
    $res=mysqli_query($conn,$sql);
    if (mysqli_num_rows($res)) {
      while ($row=mysqli_fetch_assoc($res)) {

    ?>
      <li class="list-group-item "><?php echo $row['notification'];?><span class="text-primary "> -Date <?php echo $row['date'];?></span></li>
      
      
    <?php 
    } }
    ?>  
      
        <li class="list-group-item bg-dark  "><a href="notifications.php" class="btn btn-outline-light text-light">View All</a></li>
      
     
    </ul>
</div>
</div>
</div>