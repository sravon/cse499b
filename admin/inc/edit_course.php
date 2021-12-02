<?php 
	if ( isset($_GET['name']) && $_GET['name'] ='edit_course' && !empty($_GET['id'])) {
		$id = $_GET['id'];
		$getCourseById = $uni->getCourseById($id);
	}else{
		echo '<script> location.replace("university.php"); </script>';
	}
?>
<?php 
	if ($getCourseById) {
	  $row1 = mysqli_fetch_array($getCourseById);
	}
?><?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
		$updateValueCourse = $uni->updateValueCourse($_POST,$id);
		
	}
 ?>
<div class="row">
	<h4 class="text-danger text-center">----------------------- ! Edit ! --------------</h4>
	<br>
	<div class="col-md-12">
		<form method="post" action="">
      		<div class="row">
			    <div class="col-md-6">
			      <input type="text" id="course_name" name="course_name" class="form-control" placeholder="course name" value="<?php echo $row1['course_name']; ?>">
			    </div>
			    <div class="col-md-6">
			      <input type="text" id="uni_name" name="uni_name" readonly class="form-control" placeholder="University Name" value="<?php echo $row1['uni_name']; ?>">
			    </div>
			</div>
			<br>
			<div class="row">
			    <div class="col-md-6">
			      <input type="text" id="per_year" name="per_year" class="form-control" placeholder="Per Year" value="<?php echo $row1['per_year']; ?>">
			    </div>
			    <div class="col-md-6">
			      <input type="text" id="duration" name="duration" class="form-control" placeholder="Duration" value="<?php echo $row1['Duration']; ?>">
			    </div>
			</div>
			<br>
			<div class="row">
			    <div class="col-md-6">
			      <input type="text" name="exam_accept" id="exam_accept" class="form-control" placeholder="Exam Accepted" value="<?php echo $row1['exam_accept']; ?>">
			    </div>
			    <div class="col-md-6">
			      <input type="text" id="facilities" name="facilities" class="form-control" placeholder="Facilities" value="<?php echo $row1['facilities']; ?>">
			    </div>
			</div>
			<br>
			<textarea name="editor1" id="others"><?php echo $row1['others'] ?></textarea>
			 <button type="submit" class="btn btn-primary" name="update">UPDATE</button>
			
        </form>
	</div>
</div>