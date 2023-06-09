<?php
include"includes/header.php";
if (isset($_POST['update_post'])) {

	$id=$_GET['id'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	$img_name=$_FILES['postimg']['name'];
	$tmp_dir=$_FILES['postimg']['tmp_name'];
    $type=$_FILES['postimg']['type'];

	if ($type=="image/jpeg" || $type=="image/png" ||$type=="image/jpg")
     {
    move_uploaded_file($tmp_dir,"../images/".$img_name);
	 }

	$sql="update post set title='$title',content='$content',post_img='$img_name' where id=$id";
	$res= mysqli_query($conn,$sql);
	if ($res) {
		header("Location: edit.php?id_post=".$id);
	}

}
?>