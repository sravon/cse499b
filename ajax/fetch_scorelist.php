<?php 
	$connect = mysqli_connect("localhost","root","","client");
	if (isset($_POST['txt'])) {
		$sql = "SELECT * FROM score JOIN exam ON score.exam_id= exam.exam_id WHERE uni_id = '".$_POST['txt']."'";
		
	}
	$result = mysqli_query($connect, $sql);
	$output ='';
	if (mysqli_num_rows($result) > 0 ) {
		while ($row = mysqli_fetch_array($result)) {
			$output .='<div class="form-group row">
				  <label for="inputPassword" class="col-sm-3 col-form-label"><b>Exam Type :</b></label>
				  <label for="inputPassword" class="col-sm-3 col-form-label"><b>'.$row['exam_title'].'</b></label>
				  <div class="col-sm-6">
				  	<input type="text" name="'.$row['exam_title'].'" class="form-control" placeholder="Enter Score">
				  </div>
				</div>';
		}
echo $output;
	}else{
		echo '<h1 class="text-danger p-5">No search found</h1>';
	}
		
 
?>

