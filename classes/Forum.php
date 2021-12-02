<?php 

 $filepath = realpath(dirname(__FILE__));
 include_once ($filepath.'/../lib/Database.php');
 include_once ($filepath.'/../helpers/Format.php');
class Forum
{
	private $db;
	private $fm;

	function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
	function insertValueForum($data){
		$title = $this->fm->validation($data['title']);
		$title = mysqli_real_escape_string($this->db->link,$title);
		$country = $this->fm->validation($data['country']);
		$country = mysqli_real_escape_string($this->db->link,$country);
		$des = $this->fm->validation($data['editor1']);
		$des = mysqli_real_escape_string($this->db->link,$des);
		$sql ="INSERT INTO forum(
					country_id,question,answer)
					 VALUES(
					 '".$country."','".$title."','".$des."')";
		$insert = $this->db->insert($sql);
		if ($insert) {
			$msg = 'Added success';
		}
		return $msg;
	}
	function viewForumContent($id){
	 	$id = $this->fm->validation($id);
		$id = mysqli_real_escape_string($this->db->link,$id);
	 	$sql = "SELECT * FROM `forum` WHERE country_id='".$id."'";
	 	$fetchAll = $this->db->select($sql);
	 	return $fetchAll;
	}
	function gettValueForumId($id){
		$id = $this->fm->validation($id);
		$id = mysqli_real_escape_string($this->db->link,$id);
		$sql = 'SELECT * FROM `forum` WHERE forum_id="'.$id.'"';
		$fetchAll = $this->db->select($sql);
		return $fetchAll;
	}

	function insertValueImage($data,$picture){
		$name = $this->fm->validation($data['name']);
		$name = mysqli_real_escape_string($this->db->link,$name);
		$type = $this->fm->validation($data['type']);
		$type = mysqli_real_escape_string($this->db->link,$type);
		
		$permited  = array('jpg', 'jpeg', 'png', 'gif');
		$file_name = $picture['image']['name'];
		$file_size = $picture['image']['size'];
		$file_temp = $picture['image']['tmp_name'];

		$div = explode('.', $file_name);
		$file_ext = strtolower(end($div));
		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		$uploaded_image = "upload/".$unique_image;
		$msg = "";
		if($name=="" || $type=="" || $file_name=="" ) {
		    $msg = "Field Not empty !";
		}elseif ($file_size >1048567) {
		    $msg = "Image Size should be less then 1MB!";
		} elseif (in_array($file_ext, $permited) === false) {
		    $msg = "You can upload only:-".implode(', ', $permited);
		} else{
			if($data['type'] == 0 || $data['type'] == 1){
				$image_size = getimagesize($file_temp);
				if ($image_size[0] >= 1400) {
					if ($image_size[1] >= 400) {
						move_uploaded_file($file_temp, $uploaded_image);
					    $query = "INSERT INTO slider(slide_name,slide_image,image_type) VALUES('{$name}','{$unique_image}','{$type}')";
					    $inserted_rows = $this->db->insert($query);
					    if ($inserted_rows) {
					        $msg = "Added Successfully";
					    }else {
					        $msg = "Added Failed";
					    }
					}else{
						$msg ='Image height must be greater than 400px';
					}
				}else{
					$msg = 'Image width must be greater than 1400px';
				}
			}else{
				move_uploaded_file($file_temp, $uploaded_image);
			    $query = "INSERT INTO slider(slide_name,slide_image,image_type) VALUES('{$name}','{$unique_image}','{$type}')";
			    $inserted_rows = $this->db->insert($query);
			    if ($inserted_rows) {
			        $msg = "Added Successfully";
			    }else {
			        $msg = "Added Failed";
			    };
			}
		}
		echo "<script>alert('".$msg."')</script>";
	}

	function allImageById($type){
		$sql ='SELECT * FROM `slider` WHERE image_type="'.$type.'" ORDER BY slide_id DESC';
		$fetchAll = $this->db->select($sql);
		return $fetchAll;
	}
	function allSlider(){
		$sql ='SELECT * FROM `slider` WHERE image_type=0 OR image_type=1';
		$fetchAll = $this->db->select($sql);
		return $fetchAll;
	}

	function othersInfo(){
		$sql ='SELECT * FROM others ORDER BY other_id DESC';
		$fetchAll = $this->db->select($sql);
		return $fetchAll;
	}
	function othersValueGetById($id){
		$sql ='SELECT * FROM others WHERE other_id ="'.$id.'"';
		$fetchAll = $this->db->select($sql);
		return $fetchAll;
	}
	function updateValueOfOthers($data){
		$id = $this->fm->validation($data['id']);
		$id = mysqli_real_escape_string($this->db->link,$id);
		$name = $this->fm->validation($data['name']);
		$name = mysqli_real_escape_string($this->db->link,$name);
		$textArea = $this->fm->validation($data['textArea']);
		$textArea = mysqli_real_escape_string($this->db->link,$textArea);
		$sql = "UPDATE others SET other_title = '".$name."',
				other_content='".$textArea."' WHERE other_id = '".$id."'";
		$fetchAll = $this->db->update($sql);
		if ($fetchAll) {
			echo '<script> alert("added Suceess") </script>';
		}
	}
}
