<?php
include"includes/header.php";
?>

<!--navbar area-->    
<?php
include"includes/side-navbar.php";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql="select * from notifications where id = $id";
  $res = mysqli_query($conn,$sql);
  if (mysqli_num_rows($res)) {
    $row = mysqli_fetch_assoc($res);
?>

	<section>
		<div class="container-fluid main heading">
			<form action="editnotificationcheck.php?id=<?php echo $id;?>" method="POST">
				<div class="form-group">
      			<h3>Date</h3>
            <?php  echo $row['date']; ?>
      			<input type="date" class="form-control"  placeholder="Enter Date" name="date">
    			</div>

    			<div class="form-group">
      			<h3>Add Notification</h3>
      			<textarea name="notification" id="Notifications">
              <?php  echo $row['notification']; ?>
   				</textarea>
    			</div>
				<div class="text-center">
    			<button type="submit" class="btn btn-lg btn-dark" name="publish">Update</button>
				</div>
			</form>
		</div>
	</section>

 <?php
 }
}
 ?> 

	<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
     CKEDITOR.replace( 'Notifications' );
     </script>


<?php
include"includes/footer.php";
?>