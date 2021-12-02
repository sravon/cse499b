<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
		$insertValueArticle = $article->insertValueArticle($_POST,$_FILES);
	}
 ?>

<div class="row">
	<h2 class="text-center bg-success"><?php if (isset($insertValueArticle)) {
		echo $insertValueArticle;
	} ?></h2>
	<div class="col-md-12">
		<form method="post" action="" enctype="multipart/form-data"> 
			<div class="row">
				<div class="col-md-1">
					<label class="text-dark h5">Title :</label>
				</div>
				<div class="col-md-4">
					<input type="text" name="title" required class="form-control">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-1">
					<label class="text-dark h5">Image :</label>
				</div>
				<div class="col-md-4">
					<input type="file" name="image" class="form-control">
				</div>
			</div>
			<br>
            <textarea name="editor1"></textarea>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
	</div>
</div>