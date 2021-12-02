<div align="center">
	<h1 class="text-center text-danger" style="width: 40%;border: 5px solid #ccc">All Courses</h1>
</div>

<div class="row">
	<a href="?name=add_course" class="btn btn-success">Add Courses</a>
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
				       			<td><?php echo $row1['course_name']; ?></td>
				       			<td><?php echo $row1['Duration']; ?></td>
				       			<td><a href="details.php?name=country&id=<?php echo $row1['course_id']; ?>" class="btn btn-primary">View</a></td>
				       			<td><a href="university.php?name=edit_course&id=<?php echo $row1['course_id']; ?>" class="btn btn-primary">Edit</a></td>
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