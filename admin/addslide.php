<?php
include"includes/header.php";

if (isset($_POST['uploadslide'])) {
	
	$imgtitle = $_POST['slideimgtitle'];
	$imgcontent = $_POST['slideimgcontent'];

	$image=$_FILES['slideimg'];
    $img_name=$_FILES['slideimg']['name'];
    $img_size=$_FILES['slideimg']['size'];
    $tmp_dir=$_FILES['slideimg']['tmp_name'];
    $type=$_FILES['slideimg']['type'];

    if ($type=="image/jpeg" || $type=="image/png" ||$type=="image/jpg")
     {
    move_uploaded_file($tmp_dir,"../images/".$img_name);

	$sql="insert into slider_image (img,img_heading,img_text) value ('$img_name','$imgtitle','$imgcontent')";
	$res=mysqli_query($conn,$sql);
	if ($res) {
		header("Location:addcontent.php");
	}
}

}

?>