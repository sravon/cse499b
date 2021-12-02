
<div class="row">
	<h1 class="text-center text-danger">All Article</h1>
	<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-bordered table-hovered" style="border: 3px solid #ccc">
						<thead class="bg-success">
							<th class="text-center">Title</th>
							<th class="text-center">Content</th>
						</thead>
				       	<tbody class="text-center">
	<?php 
	$allAri = $article->allArticle();
	if ($allAri) {
	  while ($row = mysqli_fetch_array($allAri)){
	 ?>
   							<tr>
				       			<td><?php echo $row['title'] ?></td>
				       			<td><?php echo htmlspecialchars_decode($fm->textShorten($row['content'],100)); ?></td>
				       			<td><a href="" class="btn btn-primary">View</a></td>
				       			<td><a href="" class="btn btn-primary">Edit</a></td>
				       			<td><a href="" class="text-muted btn btn-danger"><b>X</b></a></td>
				       		</tr>
	<?php }} ?>
				    	</tbody>
					</table>
				</div>
	</div>
</div>