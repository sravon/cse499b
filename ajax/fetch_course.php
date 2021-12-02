<?php 
	$connect = mysqli_connect("localhost","root","","client");
	if (isset($_POST['txt'])) {
		$output ='';
		$sql = "SELECT * FROM course WHERE major LIKE '%".$_POST['txt']."%'";
		$result = mysqli_query($connect, $sql);
		$output .='<ul class="list-unstyled">';
		if (mysqli_num_rows($result) > 0 ) {
			while ($row = mysqli_fetch_array($result)) {
				$output .='<li>'.$row['major'].'</li>';
			}
		}else{
			$output .= '<li>Name not found</li>';
		}
		$output .='</ul>';
		echo $output;
	}
	
?>

