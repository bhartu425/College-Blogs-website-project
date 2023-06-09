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
      <li class="nav-item">
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

  <div class="container-fluid">
  	<div class="row" id="registration">
  		
	<div class="col-sm-8 col-8 d-lg-block d-none"> 
  		<img src="images/slider2.jpg" class="imgfrm img-fluid">
  	</div>
  	<div class="col-sm-4 col-4 frm">
  		<h5> Registration form for Admission</h5>
  		<?php
  		if (isset($_SESSION['register'])) {
  			echo $_SESSION['register'];
  			unset($_SESSION['register']);
  		}
  		?>
  		<form action="registercheck.php" method="GET"> 

  			<div class="form-group">
      		<label for="Name">Full Name:</label>
      		<input type="text" class="form-control"  placeholder="Enter Name" name="name" required>
      		<div class="invalid-feedback">Please fill out this field.</div>
    		</div>

    		<div class="form-group">
      		<label for="phone">Phone:</label>
      		<input type="text" class="form-control"  placeholder="Enter phone" name="phone" required>
      		<div class="invalid-feedback">Please fill out this field.</div>
    		</div>

			<div class="form-group">
      		<label for="Email">Email:</label>
      		<input type="email" class="form-control"  placeholder="Enter email" name="email" required>
      		<div class="invalid-feedback">Please fill out this field.</div>
    		</div>

    		<div class="form-group">
      		<label for="Address">Address:</label>
      		<input type="text" class="form-control"  placeholder="Fill Your Home Address" name="address" required>
      		<div class="invalid-feedback">Please fill out this field.</div>
    		</div>

    		<label>Select Course :</label>
    		<br>
			<div class="form-check form-check-inline">
  			<input class="form-check-input" type="radio" name="exampleRadios"  value="a" checked>
   			<label class="form-check-label" >
   			BCA
   			</label>
			</div>

		   <div class="form-check form-check-inline">
		   <input class="form-check-input" type="radio" name="exampleRadios"  value="b">
		   <label class="form-check-label" >
		   BBA
		   </label>
		   </div>
			<div >
    		<button type="submit" class="btn btn-primary" name="register">REGISTER</button>
			 </div>
  		</form>
  	</div>

  	</div>
  	
  </div>

<?php 
  include"includes/footer.php";
?>
 

