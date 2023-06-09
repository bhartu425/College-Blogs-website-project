<?php
  include"includes/header.php";
  include"includes/side-navbar.php";
  $dir="../images/";
  $files=scandir($dir);
  if ($files) 
  {

  	?>
  	<div class="main">
  	<div class="row">
  		
  	
  	<?php
  	foreach ($files as $files)  
  	{
  		if (strlen($files)>2) {
  			
  		
    ?>
  	<div class="col-md-4 col-sm-6 col-12">
  		<div class="card-body">
  			<div class="card-img-bottom">
  				<img src="../images/<?php echo $files;?>" class="image_set">
  				<p class="card-title"><?php echo $files;?></p>
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
  <?php
  include"includes/footer.php";
 ?>