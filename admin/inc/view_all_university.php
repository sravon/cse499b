<div align="center">
	<h1 class="text-center text-danger" style="width: 40%;border: 5px solid #ccc">All University</h1>
</div>

	<div class="row">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adduniversity">
		  Click Here to Add University
		</button>

		<!-- Modal -->
		<div class="modal fade" id="adduniversity" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
		$insertValueUniversity = $uni->insertValueUniversity($_POST,$_FILES);
		
	}
?>	
		
				<form method="post" enctype="multipart/form-data">
				  	<div class="modal-body">
				  		<div class="row">
						    <div class="col-md-6">
						      <input type="text" name="uni_name" class="form-control" placeholder="University name">
						    </div>
						    <div class="col-md-6">
						      <select class="form-control" name="country">
						      	<option>Select Country</option>
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
						</div>
						<br>
						<div class="row">
						    <div class="col-md-6">
						      <input type="text" name="location" class="form-control" placeholder="Location">
						    </div>
						    <div class="col-md-6">
						      <input type="text" name="established" class="form-control" placeholder="Established">
						    </div>
						</div>
						<br>
						<div class="row">
						    <div class="col-md-6">
						      <select class="form-control" name="type">
						      	<option value="">Select type</option>
						      	<option value="0">public </option>
						      	<option value="1">Private</option>
						      </select>
						    </div>
						    <div class="col-md-6">
						      <input type="file" id="image" name="image" class="form-control">
						    </div>
						</div>
						<br>
						<div class="row">
						    <div class="col-md-4">
						      <label class="text-center" style="padding: 17px;">Link</label>
						    </div>
						    <div class="col-md-8">
						      <input type="text" name="link" class="form-control" placeholder="enter link here">
						    </div>
						</div>
						<br>
						 <button type="submit" class="btn btn-primary" name="save">SAVE</button>
				  	</div>
				</form>
		    </div>
		  </div>
		</div>
		<br>
		<br>
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table table-bordered table-hovered" style="border: 3px solid #ccc">
					<thead class="bg-success">
						<th class="text-center">serial no</th>
						<th class="text-center">Name</th>
						<th class="text-center">Country</th>
						<th class="text-center">location</th>
						<th class="text-center">Established</th>
						<th class="text-center">Type</th>
						<th class="text-center">Image</th>
						<th class="text-center">Link</th>
					</thead>
			       	<tbody class="text-center">
<?php 
$allUni = $uni->allUniversity();
if ($allUni) {
	$i = 0;
  while ($row = mysqli_fetch_array($allUni)){
  	$i++;
?>
							<tr>
			       			<td><?php echo $i; ?></td>
			       			<td><?php echo $row['uni_name']; ?></td>
			       			
		<?php 
			$allCountry =$cntry->allCountry();
			if ($allCountry) {
  				while($row1 = mysqli_fetch_array($allCountry)){
  					if ($row1['id']==$row['country_id']) {
  						echo "<td >".$row1['title']."</td>";
  					}
  					
  				};
 			}
 
		 ?>
			       				
			       			<td><?php echo $row['location']; ?></td>
			       			<td ><?php echo $row['established']; ?></td>
			       			<td><?php 
			       				if ($row['type'] == 0) {
			       					echo 'public';
			       				}else{
			       					echo 'private';
			       				}
			       			 ?></td>
			       			<td ><?php echo $row['uni_image']; ?></td>
			       			<td ><?php echo $row['link']; ?></td>
			       			<td><a href="details.php?name=country&id=<?php echo $row['uni_id']; ?>" class="btn btn-primary">View</a></td>
			       			<td><button class="editbtn btn btn-warning">Edit</button></td>
			       			<td><a href="" class="text-muted btn btn-danger"><b>X</b></a></td>
			       			<td><?php echo $row['uni_id'] ?></td>
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
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
		$UpdateValueUniversity = $uni->updateValueUniversity($_POST,$_FILES);
		
	}
?>	
		<form method="post" enctype="multipart/form-data">
		  	<div class="modal-body">
		  		<div class="row">
				    <div class="col-md-6">
				      <input type="hidden" id="edit_id" name="uni_id">
				      <input type="text" id="name" name="edit_name" class="form-control" placeholder="University name">
				    </div>
				    <div class="col-md-6">
				      <input type="text" id="edit_cnty" name="edit_cnty" class="form-control" readonly placeholder="Country name">
				    </div>
				</div>
				<br>
				<div class="row">
				    <div class="col-md-6">
				      <input type="text" id="edit_location" name="edit_location" class="form-control" placeholder="Location">
				    </div>
				    <div class="col-md-6">
				      <input type="text" name="edit_established" id="established" class="form-control" placeholder="Established">
				    </div>
				</div>
				<br>
				<div class="row">
				    <div class="col-md-6">
				      	<input type="text" id="type" name="edit_type" class="form-control">
				    </div>
				    <div class="col-md-6">
				      <input type="file" name="edit_image" class="form-control">
				    </div>
				</div>
				<br>
				<div class="row">
				    <div class="col-md-4">
				      <label class="text-center" style="padding: 17px;">Image</label>
				    </div>
				    <div class="col-md-8">
				      <img src="" id="show_image" width="50" alt="university_image">
				    </div>
				</div>
				<br>
				<div class="row">
				    <div class="col-md-4">
				      <label class="text-center" style="padding: 17px;">Link</label>
				    </div>
				    <div class="col-md-8">
				      <input type="text" id="link" name="edit_link" class="form-control" placeholder="enter link here">
				    </div>
				</div>
				<br>
				 <button type="submit" class="btn btn-primary" name="update">update</button>
		  	</div>
		</form>
      </div>
    </div>
  </div>
</div>