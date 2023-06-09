<?php
include"includes/header.php";
if (isset($_POST['updateslide'])) {

	$id=$_GET['id'];
	$img_heading = $_POST['slideimgtitle'];
	$img_text = $_POST['slideimgcontent'];

	$img_name=$_FILES['slideimg']['name'];
	$tmp_dir=$_FILES['slideimg']['tmp_name'];
    $type=$_FILES['slideimg']['type'];

	if ($type=="image/jpeg" || $type=="image/png" ||$type=="image/jpg")
     {
    move_uploaded_file($tmp_dir,"../images/".$img_name);
	 }

	$sql="update slider_image set img_heading='$img_heading',img_text='$img_text',img='$img_name' where id=$id";
	$res= mysqli_query($conn,$sql);
	if ($res) {
		header("Location: edit.php?id_slide=".$id);
	}

}
?>