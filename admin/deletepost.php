<?php
include "includes/header.php";
if(isset($_GET['id_post']))
{
$id_post=$_GET['id_post'];
$sql="delete from post where id=$id_post";
$res=mysqli_query($conn,$sql);
if ($res) {
	header("Location:dashboard.php");
}


}
?>