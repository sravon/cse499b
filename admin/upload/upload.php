<?php 

if (isset($_FILES['upload']['name'])) {
	$file = $_FILES['upload']['tmp_name'];
	$file_name = $_FILES['upload']['name'];
	$file_name_array = explode(".", $file_name);
	$ext = end($file_name_array);
	$new_image_name = rand(). '.'.$ext;
	chmod('upload', 0777);
	$allowed_ext = array('jpg','gif','png');
	if (in_array($ext, $allowed_ext)) {
		move_uploaded_file($file, $new_image_name);
		$function_number = $_GET['CKEditorFuncNum'];
		$url = 'http://localhost/project/admin/upload/'.$new_image_name;
		$messeage = '';
		echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($function_number,'$url','$messeage');</script>";
	}
}

 ?>