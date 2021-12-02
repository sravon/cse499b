<?php 
include "../lib/Session.php";
ob_start();
Session::init();

?>
<?php 
   $filepath = realpath(dirname(__FILE__));
   include_once ('../helpers/Format.php');
   
   Session::checkSession();
   spl_autoload_register(function ($class) {
     include '../classes/' . $class . '.php';
 });
    // include '../classes/Country.php';
    // include '../classes/Exam.php';
    // include '../classes/Forum.php';
    // include '../classes/Article.php';
    // include '../classes/University.php';
    // include '../classes/Member.php';
    // include '../classes/Review.php';
    // include '../classes/Page.php';
    $cntry = new Country();
    $exam = new Exam();
    $forum = new Forum();
    $article = new Article();
    $uni = new University();
    $mem = new Member();
    $rev = new Review();
    $page = new Page();
    
    $fm = new Format();
 ?>
<?php 
  if (isset($_GET['logout'])) {
    Session::destroy();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>