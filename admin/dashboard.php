<?php
include"includes/header.php";

if (isset($_SESSION['username']))
 {

?>

<!--navbar area-->    
<?php
include"includes/side-navbar.php";
?>
 <!--navbar area finish here-->
<div class="main container-fluid">

<div class="row" >
	<!--Update Slides Here-->
		<div class="col-12">

		<ul class="list-group bg-dark pt-3 "><h3 class="text-light ml-3">Update Slides</h3>
			<?php
		$sql="select * from slider_image";
		$res=mysqli_query($conn,$sql);
		if (mysqli_num_rows($res)) {
		while ($row=mysqli_fetch_assoc($res)) {
	?>
	
	  <li class="list-group-item "><img src="../images/<?php echo $row['img']?>" style="height: 100px; width: 200px;"></li>
      <li class="list-group-item "><?php echo $row['img_heading']; ?>
  	  <span><i class="fas fa-edit "></i><a href="edit.php?id_slide=<?php echo $row['id']; ?>">Edit</a></span><span><i class="fas fa-trash-alt"></i><a href="deleteslide.php?id_slide=<?php echo $row['id']; ?>">Delete</a></span></li>
    
	
	<?php
		}
		}
	?>
		</ul>			

		</div>	
	<!--Update Slides Here finish-->		
</div>
<hr class="my-5">

<div class="row">
	<!--RECENT POST PANNEL-->
	<div class="col-md-6 col-12">
		<ul class="list-group bg-dark pt-3 "><h3 class="text-light ml-3">RECENT POSTS</h3>
			<?php
		$sql="select * from post";
		$res=mysqli_query($conn,$sql);
		if (mysqli_num_rows($res)) {
		while ($row=mysqli_fetch_assoc($res)) {
	?>
      <li class="list-group-item "><img src="../images/<?php echo $row['post_img']; ?>" style="height: 100px; width: 200px;"><?php echo $row['title']; ?>
  	  <span><i class="fas fa-edit "></i><a href="edit.php?id_post=<?php echo $row['id']; ?>">Edit</a></span><span><i class="fas fa-trash-alt"></i><a href="deletepost.php?id_post=<?php echo $row['id']; ?>">Delete</a></span></li>
    
	
	<?php
		}
		}
	?>
		</ul>
	</div>

 <!--RECENT POST PANNEL-->

	<!--Notification area-->
	<div class="col-sm-6 col-12">
		<ul class="list-group bg-dark pt-3 "><h3 class="text-light ml-3">Notifications Pannel</h3>
	<?php
		$sql="select * from notifications order by id DESC";
		$res=mysqli_query($conn,$sql);
		if (mysqli_num_rows($res)) {
		while ($row=mysqli_fetch_assoc($res)) {
	?>
	
	
      <li class="list-group-item "><?php echo $row['notification']; ?><span class="text-primary "> -Date <?php echo $row['date']; ?></span><span><i class="fas fa-edit "></i><a href="editnotification.php?id=<?php echo $row['id']; ?>">Edit</a></span><span><i class="fas fa-trash-alt"></i><a href="deletenotification.php?id=<?php echo $row['id']; ?>">Delete</a></span></li>
  
    
	
	<?php
		}
		}
	?>
	</ul>
	</div>
	<!--Notification area finish-->

</div>
</div>
<hr class="my-5">
<?php
include"includes/footer.php";
?>

<?php
}
else{
  header("Location:login.php");
  $_SESSION['signup'] = "<h5 class='alert-success text-center'>login to continue</h5>";
}
?>