

<div class="row">
	<h1 class="text-center text-danger">View All Elements</h1>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addcountry">
		Click Here to Add Country
	</button>

		<!-- Modal -->
		<div class="modal fade" id="addcountry" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h3 class="modal-title text-center text-success" id="exampleModalLabel">Add university</h3>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['save'])) {
		$insertValueUniversity = $cntry->addCountry($_POST);
		echo '<script type="text/javascript">alert("'.$insertValueUniversity.'")</script>';
	}
?>	
		
				<form method="post" >
				  	<div class="modal-body">
				  		<div class="row">
						    <div class="col-md-6">
						      <label>Country Name </label>
						    </div>
						    <div class="col-md-6">
						      <input type="text" name="country" class="form-control" placeholder="University name">
						    </div>
						</div>
						 <button type="submit" class="btn btn-primary" name="save">SAVE</button>
				  	</div>
				</form>
		    </div>
		  </div>
		</div>

	 <!-- start element -->
	<div class="col-md-12">
		<div class="row">
			<!-- Button trigger modal -->
		
<?php 
$allCountry = $cntry->allCountry();
if ($allCountry) {
  while ($row = mysqli_fetch_array($allCountry)){
 ?>

			<div class="col-md-6">
				<h4 class="bg-primary text-center" style="padding: 7px;"><?php echo $row['title']; ?></h4>
				<div class="table-responsive">
					<table class="table table-bordered table-hovered" style="border: 3px solid #ccc">
						<thead class="bg-success">
							<th class="text-center">Title</th>
							<th class="text-center">Content</th>
							<th></th>
							<th></th>
							<th>----</th>
						</thead>
				       	<tbody class="text-center">
<?php 
 $viewContryContent = $cntry->viewContryContent($row['id']);
 if ($viewContryContent) {
   	while($row1 = mysqli_fetch_array($viewContryContent)){;?>
   							<tr>
				       			<td><?php echo $row1['title']; ?></td>
				       			<td><?php echo htmlspecialchars_decode($fm->textShorten($row1['content'],20)); ?></td>
				       			<td><a href="details.php?name=country&id=<?php echo $row1['id']; ?>" class="btn btn-primary">View</a></td>
				       			<td><a href="?source=edit_country&id=<?php echo $row1['id']; ?>" class="btn btn-primary">Edit</a></td>
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