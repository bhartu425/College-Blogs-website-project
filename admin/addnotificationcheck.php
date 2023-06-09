<?php
include"includes/header.php";
if (isset($_POST['publish'])) {

	$date = $_POST['date'];
	$notification = $_POST['notification'];

	$sql="insert into notifications (date,notification) value ('$date','$notification')";
	$res= mysqli_query($conn,$sql);
	if ($res) {
		header("Location:addnotification.php");
	}

}
?>