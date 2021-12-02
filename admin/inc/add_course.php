
<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['save'])) {
		$insertValueCourse = $uni->insertValueCourse($_POST);;
		
	}
 ?>
<div class="row">
	<h4 class="text-danger text-center">----------------------- ! Edit ! --------------</h4>
	<br>
	<h5 class="text-success"><?php if (isset($insertValueCourse)) {
		echo $insertValueCourse;
	} ?></h5>
	<div class="col-md-12">
		<form method="post" action="">
      		<div class="row">
			    <div class="col-md-6">
			      <input type="text" name="course_name" class="form-control" placeholder="course name" >
			    </div>
			    <div class="col-md-6">
			      <select class="form-control" name="university">
			      	<option>Select Option</option>
<?php 
$allUni = $uni->allUniversity();
if ($allUni) {
  while ($row = mysqli_fetch_array($allUni)){
  	echo '<option value="'.$row['uni_id'].'">'.$row['uni_name'].'</option>';
  }}
?>					
			      </select>
			    </div>
			</div>
			<br>
			<div class="row">
			    <div class="col-md-6">
			      <input type="text" name="per_year" class="form-control" placeholder="Per Year" >
			    </div>
			    <div class="col-md-6">
			      <input type="text" name="duration" class="form-control" placeholder="Duration" >
			    </div>
			</div>
			<br>
			<div class="row">
			    <div class="col-md-6">
			      <input type="text" name="exam_accept" class="form-control" placeholder="Exam Accepted" >
			    </div>
			    <div class="col-md-6">
			      <input type="text" name="facilities" class="form-control" placeholder="Facilities" >
			    </div>
			</div>
			<br>
			<textarea name="editor1"></textarea>
			 <button type="submit" class="btn btn-primary" name="save">Save</button>
			
        </form>
	</div>
</div>