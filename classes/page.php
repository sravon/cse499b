<?php 

 $filepath = realpath(dirname(__FILE__));
 include_once ($filepath.'/../lib/Database.php');
 include_once ($filepath.'/../helpers/Format.php');
class Page
{
	private $db;
	private $fm;

	function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
	function allPage(){
		$sql ='SELECT * FROM page';
		$fetchAll = $this->db->select($sql);
		return $fetchAll;
	}
	function insertValueOfPage($data){
		$title = $this->fm->validation($data['title']);
		$title = mysqli_real_escape_string($this->db->link,$title);
		$des = $this->fm->validation($data['editor1']);
		$des = mysqli_real_escape_string($this->db->link,$des);
		$sql ="INSERT INTO page(
					page_title,page_content)
					 VALUES(
					 '".$title."','".$des."')";
		$insert = $this->db->insert($sql);
		if ($insert) {
			$msg = 'Added success';
		}
		return $msg;
	}
	function gettValuePageId($id){
		$id = $this->fm->validation($id);
		$id = mysqli_real_escape_string($this->db->link,$id);
		$sql = 'SELECT * FROM page WHERE page_id="'.$id.'"';
		$fetchAll = $this->db->select($sql);
		return $fetchAll;
	}

	function updateValueOfPage($data,$id){
		$id = $this->fm->validation($id);
		$id = mysqli_real_escape_string($this->db->link,$id);
		$title = $this->fm->validation($data['title']);
		$title = mysqli_real_escape_string($this->db->link,$title);
		$des = $this->fm->validation($data['editor1']);
		$des = mysqli_real_escape_string($this->db->link,$des);
		$msg = '';
		$sql = "UPDATE page SET 
		page_title = '".$title."',page_content = '".$des."' WHERE page_id = '".$id."'";
		$fetchAll = $this->db->update($sql);
		if ($fetchAll) {
			echo "<script>alert('Update success')</script>";
		}
		
	}

}