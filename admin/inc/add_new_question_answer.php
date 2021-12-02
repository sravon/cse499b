<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
		$insertValueForum = $forum->insertValueForum($_POST);
	}
 ?>

<div class="row">
	<h5 class="text-center bg-success"><?php if (isset($insertValueForum)) {
		echo $insertValueForum;
	} ?></h5>
	<div class="col-md-12">
		<form method="post" action=""> 
			<div class="row">
				<div class="col-md-1">
					<label class="text-dark h5">Question :</label>
				</div>
				<div class="col-md-6">
					<input type="text" name="title" required class="form-control" placeholder="Type question here">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-1">
					<label class="text-dark h5">Select :</label>
				</div>
				<div class="col-md-4">
					<select name="country">
						<option value="">Select Country</option>
		<?php 
			$allCountry =$cntry->allCountry();
			if ($allCountry) {
  				while($row = mysqli_fetch_array($allCountry)){
  					echo '<option value="'.$row['id'].'">'.strtoupper($row['title']).'</option>';
  				};
 			}
 
		 ?>
					</select>
				</div>
			</div><br>
            <textarea name="editor1"></textarea>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
	</div>
</div>