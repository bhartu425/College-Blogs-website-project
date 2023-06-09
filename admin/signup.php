<?php
include "includes/header.php";
if (isset($_POST['signup']))
{
	$email = $_POST['email'];
	$uname = $_POST['uname'];
	$phone = $_POST['phone'];
	$pswd = $_POST['pswd'];

		$email=mysqli_real_escape_string($conn,$email);
		$uname=mysqli_real_escape_string($conn,$uname);
		$phone=mysqli_real_escape_string($conn,$phone);
		$pswd=mysqli_real_escape_string($conn,$pswd);
		
		$email=htmlentities($email);
		$uname=htmlentities($uname);
		$phone=htmlentities($phone);
		$pswd=htmlentities($pswd);

	$pswd=password_hash($pswd, PASSWORD_BCRYPT);




	$sql="select * from user where email = '$email' or username = '$uname'";
	$res=mysqli_query($conn,$sql);
	if (mysqli_num_rows($res)>0) {
		header("Location:login.php");
		$_SESSION['signup']="<h5 class=' alert-danger text-center'>Account Already Exists !</h5>";
	}
	else{

	$sql="insert into user (email,username,phone,password	) value ('$email','$uname','$phone','$pswd')";
	$res=mysqli_query($conn,$sql);

	if ($res) {
		header("Location:login.php");
		$_SESSION['signup']="<h5 class='alert-success text-center'>Sign Up successfully Login to Continue</h5>";
	}
}
	
}

?>