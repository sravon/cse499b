<?php 
	$connect = mysqli_connect("localhost","root","","client");
	if (isset($_POST['txt'])) {
		$sql = "SELECT * FROM university WHERE uni_name LIKE '%".$_POST['txt']."%'";
		
	}else{
		$sql = "SELECT * FROM university";

	} 
	$result = mysqli_query($connect, $sql);
	$output ='';
	if (mysqli_num_rows($result) > 0 ) {
		$i = 0;
		while ($row = mysqli_fetch_array($result)) {
			$i++;
			$output .='<div class="row border border-danger p-1">
    <div class="col-md-3">
      <h5 class="uniPos p-3">#'.$i.'</h5>
      <div class="p-4">
        <img src="admin/upload/'.$row['uni_image'].'" width="150" alt="img">
      </div>
        
    </div>
    <div class="col-md-8 mb-2">
      <h2 class="text-dark"><b>'.$row['uni_name'].'</b></h2>
      <h3 class="text-muted">Location:'.$row['location'].'</h3>
      <h4 class="text-muted">Bachelors: '.$row['bchelors'].' </h4>
      <h5 class="text-muted">Entry Criteria: '.$row['entry_criteria'].' </h5>
      <h5 class="text-muted">Masters: '.$row['masters'].' </h5>
      <a href="'.$row['link'].'" class="btn btn-primary">view</a>

    </div>
  </div>';
		}
echo $output;
	}else{
		echo '<h1 class="text-danger p-5">No search found</h1>';
	}
		
 
?>

