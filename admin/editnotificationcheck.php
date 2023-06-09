<?php
include"includes/header.php";
if (isset($_POST['publish'])) {

	$id=$_GET['id'];
	$date = $_POST['date'];
	$notification = $_POST['notification'];

	$sql="update notifications set date='$date',notification='$notification' where id=$id";
	$res= mysqli_query($conn,$sql);
	if ($res) {
		header("Location: editnotification.php?id=".$id);
	}

}
?>