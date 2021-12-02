<?php 

 $filepath = realpath(dirname(__FILE__));
 include_once ($filepath.'/../lib/Database.php');
 include_once ($filepath.'/../helpers/Format.php');
class Member
{
	private $db;
	private $fm;

	function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
	function allMember(){
		$sql ='SELECT * FROM `member` ORDER BY mem_id DESC';
		$fetchAll = $this->db->select($sql);
		return $fetchAll;
	}
	function viewCourseOfUniversity($id){
	 	$id = $this->fm->validation($id);
		$id = mysqli_real_escape_string($this->db->link,$id);
	 	$sql = "SELECT * FROM `course` WHERE university_id='".$id."'";
	 	$fetchAll = $this->db->select($sql);
	 	return $fetchAll;
	}
	function insertValueMember($data,$picture){
		$name = $this->fm->validation($data['name']);
		$name = mysqli_real_escape_string($this->db->link,$name);
		$title = $this->fm->validation($data['title']);
		$title = mysqli_real_escape_string($this->db->link,$title);
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
		if($name==""|| $title=="" || $des=="" || $file_name =="" ) {
		    $msg = "Field Not empty !";
		}elseif ($file_size >1048567) {
		    $msg = "Image Size should be less then 1MB!";
		} elseif (in_array($file_ext, $permited) === false) {
		    $msg = "You can upload only:-".implode(', ', $permited);
		} else{
		    move_uploaded_file($file_temp, $uploaded_image);
		    $query = "INSERT INTO member(mem_name,mem_title,mem_image,mem_des) VALUES('{$name}','{$title}','{$unique_image}','{$des}')";
		    $inserted_rows = $this->db->insert($query);
		    if ($inserted_rows) {
		        $msg = "Added Successfully";
		    }else {
		        $msg = "Added Failed";
		    }
		}
		echo "<script>alert('".$msg."')</script>";
	}

	function updateValueMember($data,$picture){
		$mem_id = $this->fm->validation($data['mem_id']);
		$mem_id = mysqli_real_escape_string($this->db->link,$mem_id);
		$edit_name = $this->fm->validation($data['edit_name']);
		$edit_name = mysqli_real_escape_string($this->db->link,$edit_name);
		$edit_title = $this->fm->validation($data['edit_title']);
		$edit_title = mysqli_real_escape_string($this->db->link,$edit_title);
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
		if($edit_name==""|| $edit_title=="" || $description=="" ) {
		    $msg = "Field Not empty !";
		}else{
		    if (!empty($file_name)) {
			    if($file_size >1048567) {
			         $msg = "Image Size should be less then 1MB!";
			    } elseif (in_array($file_ext, $permited) === false) {
			         $msg = "You can upload only:-".implode(', ', $permited);
			    } else{
				     move_uploaded_file($file_temp, $uploaded_image);
				     $query = "UPDATE member SET ";
				     $query .= "mem_name= '{$edit_name}',";
				     $query .= "mem_title= '{$edit_title}',";
				     $query .= "mem_image = '{$unique_image}',";
				     $query .= "mem_des ='{$description}' ";
				     $query .= "WHERE mem_id = '{$mem_id}'";
				     $update_rows = $this->db->update($query);
		         	if ($update_rows) {
		             	echo "<script>alert('Update Successfully')</script>";
		             	echo '<script> location.replace("member.php"); </script>';
		         	}else {
		             	$msg ="Image Not Inserted !";
		         	}
		     	}
	 		}else{
			     $query = "UPDATE member SET ";
			     $query .= "mem_name= '{$edit_name}',";
				 $query .= "mem_title= '{$edit_title}',";
				 $query .= "mem_des ='{$description}' ";
			     $query .= "WHERE mem_id = '{$mem_id}'";
			     $update_rows = $this->db->update($query);
	         	if ($update_rows) {
	             	echo "<script>alert('Update Successfully without image ')</script>";
	             	echo '<script> location.replace("member.php"); </script>';
	         	}else {
	             	$msg ="Not updated !";
	         	}
	     	}
		}
		echo "<script>alert('".$msg."')</script>";
	}
}

?>