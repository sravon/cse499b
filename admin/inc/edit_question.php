<?php 
	if ( isset($_GET['name']) && $_GET['name'] ='edit_country' && !empty($_GET['id'])) {
		$id = $_GET['id'];
		$gettValueForumId = $forum->gettValueForumId($id);
	}else{
		echo '<script> location.replace("forum.php"); </script>';
	}
?>
<?php 
	if ($gettValueForumId) {
	  $row1 = mysqli_fetch_array($gettValueForumId);
	}
?><?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
		$updateValueContry = $cntry->updateValueContry($_POST,$id);
		
	}
 ?>
<div class="row">
	<div align="center">
		<h1 class="text-center text-danger" style="width: 40%;border: 5px solid #ccc">Edit</h1>
	</div>
	<div class="col-md-12">
		<form method="post" action=""> 
			<div class="row">
				<div class="col-md-1">
					<label class="text-dark h5">Question :</label>
				</div>
				<div class="col-md-4">
					<input type="text" name="title" required class="form-control" value="<?php echo $row1['question'] ?>">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-1">
					<label class="text-dark h5">Select Country :</label>
				</div>
				<div class="col-md-4">
					<select name="country">
		<?php 
			$allCountry =$cntry->allCountry();
			if ($allCountry) {
  				while($row = mysqli_fetch_array($allCountry)){
  					if ($row['id'] == $row1['cntry_id']) {
  						echo '<option value="'.$row['id'].'">'.strtoupper($row['title']).'</option>';
  					}else{
  						echo '<option value="'.$row['id'].'">'.strtoupper($row['title']).'</option>';
  					}
  					
  				};
 			}
 
		 ?>
					</select>
				</div>
			</div><br>
            <textarea name="editor1"><?php echo $row1['answer']; ?></textarea>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
	</div>
</div>