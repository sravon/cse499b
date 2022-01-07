<?php 
	$connect = mysqli_connect("localhost","root","","client");
	if (isset($_POST['txt'])) {
		$output ='';
		$sql = "INSERT INTO `bookmarks`(`schollars_id`) VALUES ('".$_POST['txt']."')";
		$result = mysqli_query($connect, $sql);
		if ($result) {
			$output = 1;
		}else{
			$output = 0;
		}
		echo $output;
	}
	
?>

