<?php
include"includes/header.php";
?>

<!-- sidenavbar area start-->
<?php
include"includes/side-navbar.php";
?>
<!-- sidenavbar area finish-->
<div class="main">
	<section>

    <?php
    if (isset($_GET['id_post'])) {
    $id_post = $_GET['id_post'];
    $sql="select * from post where id=$id_post";
    $res=mysqli_query($conn,$sql);
    if (mysqli_num_rows($res)) {
      $row=mysqli_fetch_assoc($res);
    ?>
		<div class="container-fluid  heading">
      <div class="text-center card-header  text-light bg-dark">
      <h2>Update posts Here</h2>
      </div>
			<form action="editpost.php?id=<?php echo $id_post ; ?>" method="POST" enctype="multipart/form-data">
				<div class="form-group">
      			<h3>Title For Post</h3>
      			<textarea type="text" class="form-control"  placeholder="Enter Title" name="title">
              <?php echo $row['title']; ?>
            </textarea>
    			</div>

    			<div class="form-group">
      			<h3>Content For Post</h3>
      			<textarea name="content" id="ckeditor">
              <?php echo $row['content']; ?>
   				  </textarea>
    			</div>
        <h3>Upload Image For Post</h3>
        <div class="my-3 ">
        <input type="file" id="myFile" name="postimg" class="btn  btn-success" >
        </div>
				<div class="text-center">
    			<button type="submit" class="btn btn-lg btn-dark" name="update_post">Update Post</button>
				</div>
			</form>
		</div>
    <?php
  }}
    ?>
	</section>
<!--SLIDES IMAGES-->
  <hr class="my-3">
  <section>
  
    <?php
    if (isset($_GET['id_slide'])) {
    $id_slide = $_GET['id_slide'];
    $sql="select * from slider_image where id=$id_slide";
    $res=mysqli_query($conn,$sql);
    if (mysqli_num_rows($res)) {
      $row=mysqli_fetch_assoc($res);
    ?>

    <div class="container-fluid  heading">
      <div class="text-center card-header  text-light bg-dark">
      <h2>Upload Slides Here</h2>
      </div>

      <form action="editslide.php?id=<?php echo $id_slide ; ?>" method="POST" enctype="multipart/form-data">
        <h3>Upload Image For Slide</h3>
        <div class="my-3 ">
        <input type="file" id="myFile" name="slideimg" class="btn  btn-success" >
        </div>
        <div class="form-group">
            <h3>Title For IMAGE</h3>
            <textarea type="text" class="form-control"  placeholder="Enter Title For Image" name="slideimgtitle">
              <?php echo $row['img_heading']; ?>
            </textarea>
        </div>
        <div class="form-group">
            <h3>Content For IMAGE</h3>
            <textarea name="slideimgcontent"  class="form-control" placeholder="Content For Slider Image">
              <?php echo $row['img_text']; ?>
            </textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-lg btn-dark" name="updateslide">Update Slide</button>
        </div>
      </form>
    </div>
    <hr class="my-3">
    <?php
      }}
    ?>
  </section>
  
</div>
	<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
     CKEDITOR.replace( 'ckeditor' );
     </script>
<?php
include"includes/footer.php";
?>