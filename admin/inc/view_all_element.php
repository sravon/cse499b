
<div class="row">
	<h1 class="text-center text-danger">View All Elements</h1>
	<div class="col-md-12">
		<div class="row">

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