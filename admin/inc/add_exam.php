<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
		$insertValueExam = $exam->insertValueExam($_POST);
	}
 ?>

<div class="row">
	<h5 class="text-center bg-success"><?php if (isset($insertValueExam)) {
		echo $insertValueExam;
	} ?></h5>
	<div class="col-md-12">
		<form method="post" action=""> 
			<div class="row">
				<div class="col-md-1">
					<label class="text-dark h5">Title :</label>
				</div>
				<div class="col-md-4">
					<input type="text" name="title" required class="form-control" placeholder="example:about,exam,pattern">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-1">
					<label class="text-dark h5">Select :</label>
				</div>
				<div class="col-md-4">
					<select name="exam">
						<option value="">Select Option</option>
		<?php 
			$allExam =$exam->allExam();
			if ($allExam) {
  				while($row = mysqli_fetch_array($allExam)){
  					echo '<option value="'.$row['exam_id'].'">'.strtoupper($row['exam_title']).'</option>';
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