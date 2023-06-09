<?php
include "includes/header.php";
if (isset($_POST['signin'])) {
	$uname = $_POST['uname'];
	$pswd = $_POST['pswd'];

	$uname=mysqli_real_escape_string($conn,$uname);
	$uname=htmlentities($uname);

	$pswd=mysqli_real_escape_string($conn,$pswd);
	$pswd=htmlentities($pswd);

	$sql="select password from user where username ='$uname'";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($res);
	$passhash=$row['password'];
		if (password_verify($pswd,$passhash)) {
			$_SESSION['username']="$uname";
			header("Location: dashboard.php");
		}
		else{
			header("Location: login.php");
			$_SESSION['signup'] ="<div class = 'alert-danger'>Combination Does Not match</div>";
		}
		
	
}
?>