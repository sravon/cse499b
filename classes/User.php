<?php 

 $filepath = realpath(dirname(__FILE__));
 include ($filepath.'/../lib/Database.php');
 include ($filepath.'/../lib/Session.php');
 include ($filepath.'/../helpers/Format.php');

class User
{
	private $db;
	private $fm;

	function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
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
		 		if (password_verify($password,$value['cus_pass'])) {
		 			Session::init();
		 			Session::set('login',true);
		 			Session::set('cmrId',$value['cus_id']);
		 			Session::set('cmrname',$value['cus_name']);
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

}

?>