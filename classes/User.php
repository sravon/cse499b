<?php 

 $filepath = realpath(dirname(__FILE__));
 include_once ($filepath.'/../lib/Database.php');
 include_once ($filepath.'/../lib/Session.php');
 include_once ($filepath.'/../helpers/Format.php');

class User
{
	private $db;
	private $fm;

	function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}


	function allScholarship(){
		$qry = "SELECT * FROM `bookmarks` JOIN scholarship ON scholarship.scholarship_id = bookmarks.schollars_id";
	 	$result=$this->db->select($qry);
	 	if ($result != false) {
	 		return $result;
	 	}
	}
	function userById($id){
		$qry = "SELECT * FROM tbl_customer WHERE cus_id = '$id'";
	 	$result=$this->db->select($qry);
	 	if ($result != false) {
	 		return $result->fetch_assoc();
	 	}
	}

	public function adminLogin($data){
		$email = $this->fm->validation($data['email']);
		$password = $this->fm->validation($data['password']);

		$email = mysqli_real_escape_string($this->db->link,$email);
		$password = mysqli_real_escape_string($this->db->link,$password);
		if (empty($email) || empty($password)) {
		 	$loginmsg = "Username or Password must not be empty";
		 }else{
		 	$qry = "SELECT * FROM tbl_admin WHERE 
		 			adminEmail = '$email'";
		 	$result=$this->db->select($qry);
		 	if ($result != false) {
		 		$value = $result->fetch_assoc();
		 		if ($password == $value['adminPass']) {
		 			Session::init();
		 			Session::set('login',true);
		 			Session::set('cmrId',$value['adminId']);
		 			Session::set('cmrname',$value['adminName']);
		 			Session::set('username',$value['adminUser']);
		 			header("Location: index.php");
		 		}else{
		 			$loginmsg = "<span class='text-danger'>Username And Password Not Match !</span>";
		 		}
		 	}else{
		 		$loginmsg ="<span class='text-danger'>not found email.Please resgister first</span>";
		 	}	
		}
		return $loginmsg;
	}

	public function cutomerLogin($data){
		$email = $this->fm->validation($data['email']);
		$password = $this->fm->validation($data['password']);

		$email = mysqli_real_escape_string($this->db->link,$email);
		$password = mysqli_real_escape_string($this->db->link,$password);
		if (empty($email) || empty($password)) {
		 	$loginmsg = "Username or Password must not be empty";
		 }else{
		 	$qry = "SELECT * FROM tbl_customer WHERE 
		 			cus_email = '$email'";
		 	$result=$this->db->select($qry);
		 	if ($result != false) {
		 		$value = $result->fetch_assoc();
		 		if ($password == $value['cus_pass']) {
		 			Session::init();
		 			Session::set('login',true);
		 			Session::set('cmrId',$value['cus_id']);
		 			Session::set('cmrname',$value['cus_name']);
		 			Session::set('username',$value['nickname']);
		 			Session::set('avadar',$value['avadar']);
		 			Session::set('email',$value['cus_email']);
		 			Session::set('gender',$value['cus_gender']);
		 			Session::set('phone',$value['cus_phone']);
		 			header("Location: home.php");
		 		}else{
		 			$loginmsg = "<span class='text-danger'>Username And Password Not Match !</span>";
		 		}
		 	}else{
		 		$loginmsg ="<span class='text-danger'>not found email.Please resgister first</span>";
		 	}	
		}
		return $loginmsg;
	}

	public function cutomerregister($data){
		$fname = $this->fm->validation($data['fname']);
		$lname = $this->fm->validation($data['lname']);
		$name = $fname . ' ' . $lname;
		$username = $this->fm->validation($data['username']);

		$address = $this->fm->validation($data['address']);
		$gender = $this->fm->validation($data['gender']);
		$city = $this->fm->validation($data['city']);
		$postcode = $this->fm->validation($data['postcode']);
		$phone = $this->fm->validation($data['phone']);
		$email = $this->fm->validation($data['email']);
		$password_confirmation = $this->fm->validation($data['password']);
		$password = $this->fm->validation($data['password']);

		$email = mysqli_real_escape_string($this->db->link,$email);
		$password = mysqli_real_escape_string($this->db->link,$password);

		if (empty($fname) || empty($lname) || empty($username) || empty($phone) || empty($email) || empty($password)) {
		 	$loginmsg = "Fields must not be empty";
		 }else{
		 	$sql = "INSERT INTO `tbl_customer`(`cus_name`, `cus_email`, `cus_pass`,`cus_gender`, `cus_country`, `cus_state`, `cus_address`, `cus_phone`, `cus_code`, `nickname`)  
			VALUES ('{$name}','{$email}','{$password}','{$gender}','bangladesh','{$city}','{$address}','{$phone}','{$postcode}','{$username}')";
		 	$result=$this->db->insert($sql);
		 	if ($result) {
		 			$loginmsg = "<span class='text-success'>Register Success !</span>";
		 	}else{
		 		$loginmsg ="<span class='text-danger'register Failed</span>";
		 	}	
		}
		return $loginmsg;
	}

	public function cutomerUpdate($data,$cmrid){
		$name = $this->fm->validation($data['name']);
		$username = $this->fm->validation($data['username']);

		$address = $this->fm->validation($data['address']);
		$gender = $this->fm->validation($data['gender']);
		$city = $this->fm->validation($data['city']);
		$postcode = $this->fm->validation($data['postcode']);
		$phone = $this->fm->validation($data['phone']);
		$email = $this->fm->validation($data['email']);

		$email = mysqli_real_escape_string($this->db->link,$email);

		if ( empty($username) || empty($phone) || empty($email) ) {
		 	$loginmsg = "Fields must not be empty";
		}else{
			$sql = "UPDATE `tbl_customer` SET `cus_name`='{$name}',`cus_email`='{$email}',`cus_gender`='{$gender}',`cus_country`='bangladesh',`cus_state`='{$city}',`cus_address`='{$address}',`cus_phone`='{$phone}',`cus_code`='{$postcode}',`nickname`='{$username}' WHERE cus_id = '{$cmrid}'";
		 	$result=$this->db->insert($sql);
		 	if ($result) {
		 			$loginmsg = "<span class='text-success'>Update Success !</span>";
		 	}else{
		 		$loginmsg ="<span class='text-danger'register Failed</span>";
		 	}	
		}
		return $loginmsg;
	}

}

?>