<?php include "inc/header.php"; ?>
<?php 

$login = Session::get('login');
  if (!$login) {
    header("Location: login.php");
  }

?>

<section class="container-fluid alert-secondary h-25" style="height:200px;display: block;">
	<div class="container p-5 ">
		<h1 class="text-center">Order List</h1>
	</div>
</section>
<section class="container-fluid">
	<div class="row">
		
		<div class="col-md-10 mx-auto">
			<table class="table">
			  	<thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Name</th>
				      <th scope="col">Level</th>
				    </tr>
			  	</thead>
				<tbody>
				<?php 
					$result = $user->allScholarship(); 
					if($result){
						$i = 0;
						while($value = $result->fetch_assoc()){
							$i++;
				?>
				    <tr>
				      	<th scope="row"><?php echo $i; ?></th>
				      	<td><?php echo $value['scholarship']; ?></td>
				      	<td><?php echo $value['level']; ?></td>
				      	<td><a class="btn btn-outline-info" href="scholars.php?id=<?php echo $value['scholarship_id']; ?>">View</a></td>
				    </tr>
				<?php }} ?>
				</tbody>
			</table>
		</div>
	</div>
</section>
<?php include "inc/footer.php"; ?>