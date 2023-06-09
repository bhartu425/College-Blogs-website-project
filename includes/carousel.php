<?php
      $sql="select * from slider_image";
      $res=mysqli_query($conn,$sql);
      $li='';
      $i=0;
      $div='';

        while ($row=mysqli_fetch_assoc($res))
         {
        
        if ($i==0) {
          $li .='<li data-target="#forcarousel" data-slide-to="'.$i.'" class="active"></li>';

          $div .='<div class="carousel-item active ">
      <img src="images/'. $row['img'].'" >
      <div class="carousel-caption ">
        <h1 class="display-4 text-uppercase">'. $row['img_heading'].'</h1>
        <h5 class="text-capitalize">'. $row['img_text'].'</h5>
      </div>
      </div>
      ';

        }
        else{
          $li .='<li data-target="#forcarousel" data-slide-to="'.$i.'"</li>';
          $div .='<div class="carousel-item ">
      <img src="images/'. $row['img'].'" >
      <div class="carousel-caption ">
        <h1 class="display-4 text-uppercase">'. $row['img_heading'].'</h1>
        <h5 class="text-capitalize">'. $row['img_text'].'</h5>
      </div>
       </div>
       ';

        }

        $i++;

      }
      
    ?>


<!--carousel-->
  <div id="forcarousel" class="carousel slide " data-ride="carousel">


  <!-- Indicators -->
  <ul class="carousel-indicators">
    <?php echo $li; ?>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
 
    <?php echo $div; ?>


  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#forcarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#forcarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>