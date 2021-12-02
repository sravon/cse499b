<?php 

 $filepath = realpath(dirname(__FILE__));
 include_once ($filepath.'/../lib/Database.php');
 include_once ($filepath.'/../helpers/Format.php');
class Review
{
	private $db;
	private $fm;

	function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
	function allReview(){
		$sql ='SELECT * FROM `review` ORDER BY rev_id DESC';
		$fetchAll = $this->db->select($sql);
		return $fetchAll;
	}
	function insertValueReview($data,$picture){
		$name = $this->fm->validation($data['name']);
		$name = mysqli_real_escape_string($this->db->link,$name);
		$des = $this->fm->validation($data['des']);
		$des= mysqli_real_escape_string($this->db->link,$des);

		$permited  = array('jpg', 'jpeg', 'png', 'gif');
		$file_name = $picture['image']['name'];
		$file_size = $picture['image']['size'];
		$file_temp = $picture['image']['tmp_name'];

		$div = explode('.', $file_name);
		$file_ext = strtolower(end($div));
		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		$uploaded_image = "upload/".$unique_image;
		$msg = "";
		if($name==""|| $des=="" || $file_name =="" ) {
		    $msg = "Field Not empty !";
		}elseif ($file_size >1048567) {
		    $msg = "Image Size should be less then 1MB!";
		} elseif (in_array($file_ext, $permited) === false) {
		    $msg = "You can upload only:-".implode(', ', $permited);
		} else{
		    move_uploaded_file($file_temp, $uploaded_image);
		    $query = "INSERT INTO review(rev_name,rev_image,rev_cmt) VALUES('{$name}','{$unique_image}','{$des}')";
		    $inserted_rows = $this->db->insert($query);
		    if ($inserted_rows) {
		        $msg = "Added Successfully";
		    }else {
		        $msg = "Added Failed";
		    }
		}
		echo "<script>alert('".$msg."')</script>";
	}

	function updateValueReview($data,$picture){
		$rev_id = $this->fm->validation($data['rev_id']);
		$rev_id = mysqli_real_escape_string($this->db->link,$rev_id);
		$edit_name = $this->fm->validation($data['edit_name']);
		$edit_name = mysqli_real_escape_string($this->db->link,$edit_name);
		$description = $this->fm->validation($data['description']);
		$description= mysqli_real_escape_string($this->db->link,$description);

		$permited  = array('jpg', 'jpeg', 'png', 'gif');
		$file_name = $picture['edit_image']['name'];
		$file_size = $picture['edit_image']['size'];
		$file_temp = $picture['edit_image']['tmp_name'];

		$div = explode('.', $file_name);
		$file_ext = strtolower(end($div));
		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		$uploaded_image = "upload/".$unique_image;
		$msg = "";
		if($edit_name==""|| $description=="" ) {
		    $msg = "Field Not empty !";
		}else{
		    if (!empty($file_name)) {
			    if($file_size >1048567) {
			         $msg = "Image Size should be less then 1MB!";
			    } elseif (in_array($file_ext, $permited) === false) {
			         $msg = "You can upload only:-".implode(', ', $permited);
			    } else{
				     move_uploaded_file($file_temp, $uploaded_image);
				     $query = "UPDATE review SET ";
				     $query .= "rev_name= '{$edit_name}',";
				     $query .= "rev_image = '{$unique_image}',";
				     $query .= "rev_cmt ='{$description}' ";
				     $query .= "WHERE rev_id = '{$rev_id}'";
				     $update_rows = $this->db->update($query);
		         	if ($update_rows) {
		             	echo "<script>alert('Update Successfully')</script>";
		             	echo '<script> location.replace("member.php"); </script>';
		         	}else {
		             	$msg ="Image Not Inserted !";
		         	}
		     	}
	 		}else{
			     $query = "UPDATE review SET ";
			     $query .= "rev_name= '{$edit_name}',";
				 $query .= "rev_cmt ='{$description}' ";
			     $query .= "WHERE rev_id = '{$rev_id}'";
			     $update_rows = $this->db->update($query);
	         	if ($update_rows) {
	             	echo "<script>alert('Update Successfully without image ')</script>";
	             	echo '<script> location.replace("review.php"); </script>';
	         	}else {
	             	$msg ="Not updated !";
	         	}
	     	}
		}
		echo "<script>alert('".$msg."')</script>";
	}
}

?>