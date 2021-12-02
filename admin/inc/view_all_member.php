<div align="center">
	<h1 class="text-center text-danger" style="width: 40%;border: 5px solid #ccc">All Courses</h1>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="row">

<?php 
$allUni = $uni->allUniversity();
if ($allUni) {
  while ($row = mysqli_fetch_array($allUni)){
  	$university_name = $row['uni_name'];
 ?>

			<div class="col-md-6">
				<h4 class="bg-primary text-center" style="padding: 7px;"><?php echo $row['uni_name']; ?></h4>
				<div class="table-responsive">
					<table class="table table-bordered table-hovered" style="border: 3px solid #ccc">
						<thead class="bg-success">
							<th class="text-center">Course_name</th>
							<th class="text-center">Duration</th>
							<th></th>
							<th></th>
							<th>----</th>
						</thead>
				       	<tbody class="text-center">
<?php 
 $viewCourse = $uni->viewCourseOfUniversity($row['uni_id']);
 if ($viewCourse ) {
   	while($row1 = mysqli_fetch_array($viewCourse )){?>
   							<tr>
				       			<td><?php echo $row1['course_id']; ?></td>
				       			<td style="display: none"><?php echo $university_name; ?></td>
				       			<td style="display: none"><?php echo $row1['per_year']; ?></td>
				       			<td><?php echo $row1['Duration']; ?></td>
				       			<td style="display: none"><?php echo $row1['exam_accept']; ?></td>
				       			<td style="display: none"><?php echo $row1['facilities']; ?></td>
				       			<td ><?php echo htmlspecialchars_decode($row1['others']); ?></td>
				       			<td><a href="details.php?name=country&id=<?php echo $row1['course_id']; ?>" class="btn btn-primary">View</a></td>
				       			<td><button class="btn btn-success editbtn">Edit</button></td>
				       			<td><a href="" class="text-muted btn btn-danger"><b>X</b></a></td>
				       		</tr>
   <?php
   }}else{
   		echo '<tr >
				       		<td colspan="5">empty</td>
				       		</tr>';
   }
?>
				       		
				       		
				     
				    	</tbody>
					</table>
					
				</div>
			</div>
				<?php }} ?>
		</div>

	</div>
</div>

<!-- ##################### Edit modal ################### -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title text-center text-success">edit Course</h3>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<?php
  $viewCourse = $uni->viewCourseOfUniversity($row['uni_id']);
 if ($viewCourse ) {
   	$row1 = mysqli_fetch_array($viewCourse );
   }
?>
      <form method="post">
      	<div class="modal-body">
      		<div class="row">
			    <div class="col-md-6">
			      <input type="text" id="course_name" name="course_name" class="form-control" placeholder="course name">
			    </div>
			    <div class="col-md-6">
			      <input type="text" id="uni_name" name="uni_name" readonly class="form-control" placeholder="University Name">
			    </div>
			</div>
			<br>
			<div class="row">
			    <div class="col-md-6">
			      <input type="text" id="per_year" class="form-control" placeholder="Per Year">
			    </div>
			    <div class="col-md-6">
			      <input type="text" id="duration" name="duration" class="form-control" placeholder="Duration">
			    </div>
			</div>
			<br>
			<div class="row">
			    <div class="col-md-6">
			      <input type="text" name="exam_accept" id="exam_accept" class="form-control" placeholder="Exam Accepted">
			    </div>
			    <div class="col-md-6">
			      <input type="text" id="facilities" name="acilities" class="form-control" placeholder="Facilities">
			    </div>
			</div>
			<br>
			<textarea name="editor1" id="others"></textarea>
			 <button type="submit" class="btn btn-primary" name="update">UPDATE</button>
      	</div>
      </form>
      </div>
    </div>
  </div>
</div>