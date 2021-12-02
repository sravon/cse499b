<?php 

 $filepath = realpath(dirname(__FILE__));
 include_once ($filepath.'/../lib/Database.php');
 include_once ($filepath.'/../helpers/Format.php');
class Country
{
	private $db;
	private $fm;

	function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
	function allCountry(){
		$sql ='SELECT * FROM `country`';
		$fetchAll = $this->db->select($sql);
		return $fetchAll;
	}
	function insertValueContry($data){
		$title = $this->fm->validation($data['title']);
		$title = mysqli_real_escape_string($this->db->link,$title);
		$country = $this->fm->validation($data['country']);
		$country = mysqli_real_escape_string($this->db->link,$country);
		$des = $this->fm->validation($data['editor1']);
		$des = mysqli_real_escape_string($this->db->link,$des);
		$sql ="INSERT INTO maincontent(
					title,cntry_id,content)
					 VALUES(
					 '".$title."','".$country."','".$des."')";
		$insert = $this->db->insert($sql);
		if ($insert) {
			$msg = 'Added success';
		}
		return $msg;
	}
	function selectValueContry($name){
		$name = $this->fm->validation($name);
		$name = mysqli_real_escape_string($this->db->link,$name);
		$sql = 'SELECT m.id,m.title,m.cntry_id,m.content,c.title as country FROM `maincontent` m INNER JOIN country c ON(m.cntry_id = c.id) WHERE c.title="'.$name.'"';
		$fetchAll = $this->db->select($sql);
		return $fetchAll;
	}
	function viewContryContent($id){
	 	$id = $this->fm->validation($id);
		$id = mysqli_real_escape_string($this->db->link,$id);
	 	$sql = "SELECT * FROM `maincontent` WHERE cntry_id='".$id."'";
	 	$fetchAll = $this->db->select($sql);
	 	return $fetchAll;
	}
	function gettValueContryId($id){
		$id = $this->fm->validation($id);
		$id = mysqli_real_escape_string($this->db->link,$id);
		$sql = 'SELECT * FROM `maincontent` WHERE id="'.$id.'"';
		$fetchAll = $this->db->select($sql);
		return $fetchAll;
	}
	function updateValueContry($data,$id){
		$id = $this->fm->validation($id);
		$id = mysqli_real_escape_string($this->db->link,$id);
		$title = $this->fm->validation($data['title']);
		$title = mysqli_real_escape_string($this->db->link,$title);
		$country = $this->fm->validation($data['country']);
		$country = mysqli_real_escape_string($this->db->link,$country);
		$des = $this->fm->validation($data['editor1']);
		$des = mysqli_real_escape_string($this->db->link,$des);
		$sql = "UPDATE `maincontent` SET title = '".$title."',
				cntry_id='".$country."',content = '".$des."' WHERE id = '".$id."'";
		$fetchAll = $this->db->update($sql);
		if ($fetchAll) {
			echo '<script> location.replace("country.php"); </script>';
		}
	}
}