<?php
include "includes/header.php";
if(isset($_GET['id_slide']))
{
$id_slide=$_GET['id_slide'];
$sql="delete from slider_image where id=$id_slide";
$res=mysqli_query($conn,$sql);
if ($res) {
	header("Location:dashboard.php");
}


}
?>