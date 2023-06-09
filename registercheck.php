 <?php
 include"includes/db.php";
ob_start();
session_start();

if (isset($_GET['register'])) {
	
	$name = $_GET['name'];
	$phone = $_GET['phone'];
	$email = $_GET['email'];
	$address = $_GET['address'];

	$name=mysqli_real_escape_string($conn,$name);
	$name=htmlentities($name);

	$phone=mysqli_real_escape_string($conn,$phone);
	$phone=htmlentities($phone);

	$email=mysqli_real_escape_string($conn,$email);
	$email=htmlentities($email);

	$address=mysqli_real_escape_string($conn,$address);
	$address=htmlentities($address);

	$sql="insert into register (name,phone,email,address) value ('$name','$phone','$email','$address')";
	$res=mysqli_query($conn,$sql);
	if ($res) {
		header("Location:register.php");
		$_SESSION['register']="<span class='alert-success'>You Have Been Register</span>";
	}

}

 ?>