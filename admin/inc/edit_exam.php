<?php 
	if ( isset($_GET['source']) && $_GET['source'] ='edit_exam' && !empty($_GET['id'])) {
		$id = $_GET['id'];
		$gettValueExamId = $exam->gettValueExamId($id);
	}else{
		echo '<script> location.replace("exam.php"); </script>';
	}
?>
<?php 
	if ($gettValueExamId) {
	  $row1 = mysqli_fetch_array($gettValueExamId);
	}
?><?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
		$updateValueExam = $exam->updateValueExam($_POST,$id);
		
	}
 ?>
<div class="row">
	<h4 class="text-danger text-center">----------------------- ! Edit ! --------------</h4>
	<br>
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
					<select name="exam">
		<?php 
			$allExam =$exam->allExam();
			if ($allExam) {
  				while($row = mysqli_fetch_array($allExam)){
  					if ($row['exam_id'] == $row1['exam_id']) {
  						echo '<option value="'.$row['exam_id'].'">'.strtoupper($row['exam_title']).'</option>';
  					}else{
  						echo '<option value="'.$row['exam_id'].'">'.strtoupper($row['exam_title']).'</option>';
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