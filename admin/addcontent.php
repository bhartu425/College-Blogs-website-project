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
		<div class="container-fluid  heading">
      <div class="text-center card-header  text-light bg-dark">
      <h2>Upload posts Here</h2>
      </div>
			<form action="addpost.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
      			<h3>Title For Post</h3>
      			<input type="text" class="form-control"  placeholder="Enter Title" name="title">
    			</div>

    			<div class="form-group">
      			<h3>Content For Post</h3>
      			<textarea name="content" id="ckeditor">
   				</textarea>
    			</div>
        <h3>Upload Image For Post</h3>
        <div class="my-3 ">
        <input type="file" id="myFile" name="postimg" class="btn  btn-success" >
        </div>
				<div class="text-center">
    			<button type="submit" class="btn btn-lg btn-dark" name="publish">Publish</button>
				</div>
			</form>
		</div>
	</section>
<!--SLIDES IMAGES-->
  <hr class="my-3">
  <section>
    <div class="container-fluid  heading">
      <div class="text-center card-header  text-light bg-dark">
      <h2>Upload Slides Here</h2>
      </div>

      <form action="addslide.php" method="POST" enctype="multipart/form-data">
        <h3>Upload Image For Slide</h3>
        <div class="my-3 ">
        <input type="file" id="myFile" name="slideimg" class="btn  btn-success" >
        </div>
        <div class="form-group">
            <h3>Title For IMAGE</h3>
            <input type="text" class="form-control"  placeholder="Enter Title For Image" name="slideimgtitle">
        </div>
        <div class="form-group">
            <h3>Content For IMAGE</h3>
            <textarea name="slideimgcontent"  class="form-control" placeholder="Content For Slider Image"></textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-lg btn-dark" name="uploadslide">Upload Slide</button>
        </div>
      </form>
    </div>
    <hr class="my-3">
  </section>
  
</div>
	<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script>
     CKEDITOR.replace( 'ckeditor' );
     </script>
<?php
include"includes/footer.php";
?>