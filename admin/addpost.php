<?php
include"includes/header.php";

if (isset($_POST['publish'])) {
	
	$title = $_POST['title'];
	$content = $_POST['content'];

	$image=$_FILES['postimg'];
    $img_name=$_FILES['postimg']['name'];
    $img_size=$_FILES['postimg']['size'];
    $tmp_dir=$_FILES['postimg']['tmp_name'];
    $type=$_FILES['postimg']['type'];

    if ($type=="image/jpeg" || $type=="image/png" ||$type=="image/jpg")
     {
    move_uploaded_file($tmp_dir,"../images/".$img_name);
	 }

	$sql= "insert into post (title,content,post_img) value ('$title','$content','$img_name')";

	$res = mysqli_query($conn,$sql);
	if ($res) {
		
		header("Location:addcontent.php");
	}


}

?>