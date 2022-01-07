<?php 

 $filepath = realpath(dirname(__FILE__));
 include_once ($filepath.'/../lib/Database.php');
 include_once ($filepath.'/../helpers/Format.php');
class Article
{
	private $db;
	private $fm;

	function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}
	function allArticle(){
		$sql ='SELECT * FROM article ORDER BY art_id DESC';
		$fetchAll = $this->db->select($sql);
		return $fetchAll;
	}
	function singleArticle($id){
		$sql ="SELECT * FROM article WHERE art_id ='{$id}'";
		$fetchAll = $this->db->select($sql);
		return $fetchAll;
	}
	function insertValueArticle($data,$picture){
		$title = $this->fm->validation($data['title']);
		$title = mysqli_real_escape_string($this->db->link,$title);
		$des = $this->fm->validation($data['editor1']);
		$des = mysqli_real_escape_string($this->db->link,$des);

		$permited  = array('jpg', 'jpeg', 'png', 'gif');
		$file_name = $picture['image']['name'];
		$file_size = $picture['image']['size'];
		$file_temp = $picture['image']['tmp_name'];

		$div = explode('.', $file_name);
		$file_ext = strtolower(end($div));
		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		$uploaded_image = "upload/".$unique_image;
		$msg = "";
		if($title=="" || $des=="" || $file_name =="" ) {
		    $msg = "Field Not empty !";
		}elseif ($file_size >1048567) {
		    $msg = "Image Size should be less then 1MB!";
		} elseif (in_array($file_ext, $permited) === false) {
		    $msg = "You can upload only:-".implode(', ', $permited);
		} else{
			$sql ="INSERT INTO article(
						title,image,content)
						 VALUES(
						 '".$title."','".$unique_image."','".$des."')";
			$insert = $this->db->insert($sql);
			if ($insert) {
				$msg = 'Added success';
			}
		}
		return $msg;
	}
}
?>