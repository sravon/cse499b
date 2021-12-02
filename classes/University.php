<?php 

 $filepath = realpath(dirname(__FILE__));
 include_once ($filepath.'/../lib/Database.php');
 include_once ($filepath.'/../helpers/Format.php');
class University
{
	private $db;
	private $fm;

	function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
	function allUniversity(){
		$sql ='SELECT * FROM `university`';
		$fetchAll = $this->db->select($sql);
		return $fetchAll;
	}

	function getUniversityById($id){
		$sql ="SELECT * FROM `university` Where country_id='$id'";
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
	function getCourseById($id){
		$sql = "SELECT * FROM course AS crs INNER JOIN university AS ver on(crs.university_id=ver.uni_id) WHERE course_id=5";
		$fetchAll = $this->db->select($sql);
	 	return $fetchAll;
	}
	function updateValueCourse($data,$id){
		$id = $this->fm->validation($id);
		$id = mysqli_real_escape_string($this->db->link,$id);
		$course_name = $this->fm->validation($data['course_name']);
		$course_name = mysqli_real_escape_string($this->db->link,$course_name);
		$per_year = $this->fm->validation($data['per_year']);
		$per_year= mysqli_real_escape_string($this->db->link,$per_year);
		$duration = $this->fm->validation($data['duration']);
		$duration = mysqli_real_escape_string($this->db->link,$duration);
		$exam_accept = $this->fm->validation($data['exam_accept']);
		$exam_accept = mysqli_real_escape_string($this->db->link,$exam_accept);
		$facilities = $this->fm->validation($data['facilities']);
		$facilities= mysqli_real_escape_string($this->db->link,$facilities);
		$others = $this->fm->validation($data['editor1']);
		$others = mysqli_real_escape_string($this->db->link,$others);
		$sql = "UPDATE `course` SET course_name = '".$course_name."',
				per_year='".$per_year."',Duration = '".$duration."',
				exam_accept='".$exam_accept."',facilities='".$facilities."',others='".$others."' WHERE course_id = '".$id."'";
		$fetchAll = $this->db->update($sql);
		if ($fetchAll) {
			echo '<script>alert("editing Success")</script>';
			echo '<script> location.replace("university.php"); </script>';
		}
	}
	function insertValueCourse($data){
		$course_name = $this->fm->validation($data['course_name']);
		$course_name = mysqli_real_escape_string($this->db->link,$course_name);
		$university = $this->fm->validation($data['university']);
		$university = mysqli_real_escape_string($this->db->link,$university);
		$per_year = $this->fm->validation($data['per_year']);
		$per_year= mysqli_real_escape_string($this->db->link,$per_year);
		$duration = $this->fm->validation($data['duration']);
		$duration = mysqli_real_escape_string($this->db->link,$duration);
		$exam_accept = $this->fm->validation($data['exam_accept']);
		$exam_accept = mysqli_real_escape_string($this->db->link,$exam_accept);
		$facilities = $this->fm->validation($data['facilities']);
		$facilities= mysqli_real_escape_string($this->db->link,$facilities);
		$others = $this->fm->validation($data['editor1']);
		$others = mysqli_real_escape_string($this->db->link,$others);
		$sql ="INSERT INTO course(
					course_name,university_id,per_year,Duration,exam_accept,facilities,others)
					 VALUES(
					 '".$course_name."','".$university."','".$per_year."','".$duration."','".$exam_accept."','".$facilities."','".$others."')";
		$insert = $this->db->insert($sql);
		if ($insert) {
			$msg = 'Added success';
		}else{
			$msg = 'Not Added success';
		}
		return $msg;
	}
	function insertValueUniversity($data,$picture){
		$uni_name = $this->fm->validation($data['uni_name']);
		$uni_name = mysqli_real_escape_string($this->db->link,$uni_name);
		$country = $this->fm->validation($data['country']);
		$country = mysqli_real_escape_string($this->db->link,$country);
		$location = $this->fm->validation($data['location']);
		$location= mysqli_real_escape_string($this->db->link,$location);
		$established = $this->fm->validation($data['established']);
		$established = mysqli_real_escape_string($this->db->link,$established);
		$type = $this->fm->validation($data['type']);
		$type = mysqli_real_escape_string($this->db->link,$type);
		$link = $this->fm->validation($data['link']);
		$link= mysqli_real_escape_string($this->db->link,$link);
		$permited  = array('jpg', 'jpeg', 'png', 'gif');
		$file_name = $picture['image']['name'];
		$file_size = $picture['image']['size'];
		$file_temp = $picture['image']['tmp_name'];

		$div = explode('.', $file_name);
		$file_ext = strtolower(end($div));
		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		$uploaded_image = "upload/".$unique_image;
		$msg = "";
		if($uni_name==""|| $country=="" || $location=="" || $established=="" || $type=="" || $link=="" ) {
		    $msg = "Field Not empty !";
		}elseif ($file_size >1048567) {
		    $msg = "Image Size should be less then 1MB!";
		} elseif (in_array($file_ext, $permited) === false) {
		    $msg = "You can upload only:-".implode(', ', $permited);
		} else{
		    move_uploaded_file($file_temp, $uploaded_image);
		    $query = "INSERT INTO university(uni_name,country_id,location,established,type,link,uni_image) VALUES('{$uni_name}','{$country}','{$location}','{$established}','{$type}','{$link}','{$unique_image}')";
		    $inserted_rows = $this->db->insert($query);
		    if ($inserted_rows) {
		        $msg = "Added Successfully";
		    }else {
		        $msg = "Added Failed";
		    }
		}
		echo "<script>alert('".$msg."')</script>";
	}
	function updateValueUniversity($data,$picture){
		$uni_id = $this->fm->validation($data['uni_id']);
		$uni_id = mysqli_real_escape_string($this->db->link,$uni_id);
		$edit_name = $this->fm->validation($data['edit_name']);
		$edit_name = mysqli_real_escape_string($this->db->link,$edit_name);
		$edit_location = $this->fm->validation($data['edit_location']);
		$edit_location = mysqli_real_escape_string($this->db->link,$edit_location);
		$edit_established = $this->fm->validation($data['edit_established']);
		$edit_established= mysqli_real_escape_string($this->db->link,$edit_established);
		$edit_type = $this->fm->validation($data['edit_type']);
		$edit_type = mysqli_real_escape_string($this->db->link,$edit_type);
		$edit_type = strtolower($edit_type);
		$edit_link = $this->fm->validation($data['edit_link']);
		$edit_link= mysqli_real_escape_string($this->db->link,$edit_link);

		$permited  = array('jpg', 'jpeg', 'png', 'gif');
		$file_name = $picture['edit_image']['name'];
		$file_size = $picture['edit_image']['size'];
		$file_temp = $picture['edit_image']['tmp_name'];

		$div = explode('.', $file_name);
		$file_ext = strtolower(end($div));
		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		$uploaded_image = "upload/".$unique_image;
		$msg = "";
		if($edit_name==""|| $edit_location=="" || $edit_established=="" || $edit_type=="" || $edit_link=="" ) {
		    $msg = "Field Not empty !";
		}else{
		    if (!empty($file_name)) {
			    if($file_size >1048567) {
			         $msg = "Image Size should be less then 1MB!";
			    } elseif (in_array($file_ext, $permited) === false) {
			         $msg = "You can upload only:-".implode(', ', $permited);
			    } else{
				     move_uploaded_file($file_temp, $uploaded_image);
				     $query = "UPDATE university SET ";
				     $query .= "uni_name= '{$edit_name}',";
				     $query .= "location= '{$edit_location}',";
				     $query .= "established= '{$edit_established}',";
				     $query .= "type = '{$edit_type}',";
				     $query .= "link = '{$edit_link}',";
				     $query .= "uni_image ='{$unique_image}' ";
				     $query .= "WHERE uni_id = '{$uni_id}'";
				     $update_rows = $this->db->update($query);
		         	if ($update_rows) {
		             	echo "<script>alert('Update Successfully')</script>";
		             	echo '<script> location.replace("university.php?name=view_all_university"); </script>';
		         	}else {
		             	$msg ="Image Not Inserted !";
		         	}
		     	}
	 		}else{
			     $query = "UPDATE university SET ";
			     $query .= "uni_name= '{$edit_name}',";
			     $query .= "location= '{$edit_location}',";
			     $query .= "established= '{$edit_established}',";
			     $query .= "type = '{$edit_type}',";
			     $query .= "link = '{$edit_link}' ";
			     $query .= "WHERE uni_id = '{$uni_id}'";
			     $update_rows = $this->db->update($query);
	         	if ($update_rows) {
	             	$msg = "Inserted Successfully";
	         	}else {
	             	$msg ="Not Inserted !";
	         	}
	     	}
		}
		echo "<script>alert('".$msg."')</script>";
	}

	function allDept(){
		$sql ='SELECT * FROM `department`';
		$fetchAll = $this->db->select($sql);
		return $fetchAll;
	}

	function allCourse(){
		$sql ='SELECT uni.uni_name FROM university uni
		 JOIN course cr ON (uni.uni_id = cr.university_id) 
		 JOIN department dept ON (dept.dept_id = cr.dept)';
		$fetchAll = $this->db->select($sql);
		return $fetchAll;
	}
	function gettValueByDept($id){
		$sql ='SELECT uni.uni_name FROM university uni
		 JOIN course cr ON (uni.uni_id = cr.university_id) 
		 JOIN department dept ON (dept.dept_id = cr.dept)
		 WHERE cr.dept = "'.$id.'"';
		$fetchAll = $this->db->select($sql);
		return $fetchAll;
	}

	function getValueByMajor($coursename){
		$coursename = $this->fm->validation($coursename);
		$coursename = mysqli_real_escape_string($this->db->link,$coursename);
		$coursename = strtolower($coursename);
		$sql ='SELECT uni.uni_name FROM university uni
		 JOIN course cr ON (uni.uni_id = cr.university_id) 
		 JOIN department dept ON (dept.dept_id = cr.dept)
		 WHERE cr.major = "'.$coursename.'"';
		$fetchAll = $this->db->select($sql);
		return $fetchAll;
	}

}

?>