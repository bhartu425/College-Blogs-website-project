<?php
include"includes/header.php";
?>

<!--navbar area-->    
<?php
include"includes/side-navbar.php";
?>

	<section>
		<div class="container-fluid main heading">
			<form action="addnotificationcheck.php" method="POST">
				<div class="form-group">
      			<h3>Date</h3>
      			<input type="date" class="form-control"  placeholder="Enter Date" name="date">
    			</div>

    			<div class="form-group">
      			<h3>Add Notification</h3>
      			<textarea name="notification" id="Notifications">
   				</textarea>
    			</div>
				<div class="text-center">
    			<button type="submit" class="btn btn-lg btn-dark" name="publish">Publish</button>
				</div>
			</form>
		</div>
	</section>

	<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
     CKEDITOR.replace( 'Notifications' );
     </script>


<?php
include"includes/footer.php";
?>