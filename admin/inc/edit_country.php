<?php 
	if ( isset($_GET['source']) && $_GET['source'] ='edit_country' && !empty($_GET['id'])) {
		$id = $_GET['id'];
		$gettValueContryId = $cntry->gettValueContryId($id);
	}else{
		echo '<script> location.replace("country.php"); </script>';
	}
?>
<?php 
	if ($gettValueContryId) {
	  $row1 = mysqli_fetch_array($gettValueContryId);
	}
?><?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
		$updateValueContry = $cntry->updateValueContry($_POST,$id);
		
	}
 ?>
<div class="row">
	<h4 class="text-danger text-center">----------------------- ! Edit ! --------------</h4>
	<div class="col-md-12">
		<form method="post" action=""> 
			<div class="row">
				<div class="col-md-1">
					<label class="text-dark h5">Title :</label>
				</div>
				<div class="col-md-4">
					<input type="text" name="title" required class="form-control" value="<?php echo $row1['title'] ?>">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-1">
					<label class="text-dark h5">Select :</label>
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
            <textarea name="editor1"><?php echo $row1['content']; ?></textarea>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
	</div>
</div>