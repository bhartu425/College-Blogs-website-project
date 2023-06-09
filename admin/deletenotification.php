<?php
include "includes/header.php";
if(isset($_GET['id']))
{
$id=$_GET['id'];
$sql="delete from notifications where id=$id";
$res=mysqli_query($conn,$sql);
if ($res) {
	header("Location:dashboard.php");
}

}
?>