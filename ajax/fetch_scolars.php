<?php 
	$connect = mysqli_connect("localhost","root","","client");
	if (isset($_POST['txt'])) {
		$sql = "SELECT * FROM `university` JOIN scholarship ON university.uni_id = scholarship.uni_id WHERE university.country_id = '".$_POST['txt']."'";
		
	}
	$result = mysqli_query($connect, $sql);
	$output ='';
	if (mysqli_num_rows($result) > 0 ) {
		while ($row = mysqli_fetch_array($result)) {
			$output .='<div class="d-flex flex-row justify-content-between items-center border border-secondary p-2 mb-2">
  			<div class="">
  				<h4>Winston Churchill Foundation Scholarship</h4>
  				<p>Description: The Churchill Scholarship started in 1963 with three awards and has since grown to 14. It provides funding to American students for a year of masters study in science, mathematics, and engineering at the University of Cambridge, based at Churchill College. The prestigious schol...</p>
  			</div>
		  	<div class="w-50">
		  		<h6><span class="text-success">Benefits :</span>50,000 USD</h6>
		  		<h6><span class="text-success">Deadline :</span>50,000 USD</h6>
		  		<h6><span class="text-success">Level :</span>50,000 USD</h6>
		  		<a href="scholars.php?id='.$row['scholarship_id'].'" class="btn btn-success">Details description</a>
		  	</div>
		</div>';
		}
echo $output;
	}else{
		echo '<h1 class="text-danger p-5">No search found</h1>';
	}
		
 
?>

