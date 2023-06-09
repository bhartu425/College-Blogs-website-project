<?php
include"includes/header.php";
if (isset($_SESSION['username'])) {
	
	unset($_SESSION['username']);
  	
  	header("Location:login.php");
  	$_SESSION['signup']="<h5 class='alert-success text-center'>You Have Been successfully Logout</h5>";
}


?>