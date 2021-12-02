<?php 

 $filepath = realpath(dirname(__FILE__));
 include_once ($filepath.'/../lib/Database.php');
 include_once ($filepath.'/../helpers/Format.php');
class Exam
{
	private $db;
	private $fm;

	function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
	function allExam(){
		$sql ='SELECT * FROM exam';
		$fetchAll = $this->db->select($sql);
		return $fetchAll;
	}
	function insertValueExam($data){
		$title = $this->fm->validation($data['title']);
		$title = mysqli_real_escape_string($this->db->link,$title);
		$exam = $this->fm->validation($data['exam']);
		$exam = mysqli_real_escape_string($this->db->link,$exam);
		$des = $this->fm->validation($data['editor1']);
		$des = mysqli_real_escape_string($this->db->link,$des);
		$sql ="INSERT INTO examcontent(
					title,exam_id,content)
					 VALUES(
					 '".$title."','".$exam."','".$des."')";
		$insert = $this->db->insert($sql);
		if ($insert) {
			$msg = 'Added success';
		}
		return $msg;
	}
	function viewExamContent($id){
	 	$id = $this->fm->validation($id);
		$id = mysqli_real_escape_string($this->db->link,$id);
	 	$sql = "SELECT * FROM examcontent WHERE exam_id='".$id."'";
	 	$fetchAll = $this->db->select($sql);
	 	return $fetchAll;
	}
	function gettValueexamId($id){
		$id = $this->fm->validation($id);
		$id = mysqli_real_escape_string($this->db->link,$id);
		$sql = 'SELECT * FROM examcontent WHERE examcontent_id="'.$id.'"';
		$fetchAll = $this->db->select($sql);
		return $fetchAll;
	}
	function updateValueExam($data,$id){
		$id = $this->fm->validation($id);
		$id = mysqli_real_escape_string($this->db->link,$id);
		$title = $this->fm->validation($data['title']);
		$title = mysqli_real_escape_string($this->db->link,$title);
		$exam = $this->fm->validation($data['exam']);
		$exam = mysqli_real_escape_string($this->db->link,$exam);
		$des = $this->fm->validation($data['editor1']);
		$des = mysqli_real_escape_string($this->db->link,$des);
		$sql = "UPDATE examcontent SET title = '".$title."',
				exam_id='".$exam."',content = '".$des."' WHERE examcontent_id = '".$id."'";
		$fetchAll = $this->db->update($sql);
		if ($fetchAll) {
			echo '<script> location.replace("exam.php"); </script>';
		}
	}

	function selectValueExam($name){
		$name = $this->fm->validation($name);
		$name = mysqli_real_escape_string($this->db->link,$name);
		$sql = 'SELECT ex.examcontent_id,ex.title,ex.content,e.exam_title as examing FROM examcontent ex INNER JOIN exam e ON(ex.exam_id = e.exam_id) WHERE e.exam_title="'.$name.'"';
		$fetchAll = $this->db->select($sql);
		return $fetchAll;
	}

}