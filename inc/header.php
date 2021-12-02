
<?php 
   $filepath = realpath(dirname(__FILE__));
   include_once ($filepath.'/../helpers/Format.php');

 spl_autoload_register(function ($class) {
     include 'classes/' . $class . '.php';
 });
  $cntry = new Country();
  $exam = new Exam();
  $forum = new Forum();
  $article = new Article();
  $uni = new University();
  $mem = new Member();
  $rev = new Review();
  $page = new Page();

//  ?>
  <?php 
//  if (isset($_GET['logout'])) {
//    Session::destroy();
//  }
  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Schoolarships</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>  
<div id="donate" class="p-3" style="position: absolute;top: 50%;right: 0;width: 120px;z-index: 9999;background: #eee;border-radius: 5px;">
    <h6 class="text-center text-danger">Donate 200Tk</h6>
    <a class="btn btn-primary p-2" href="checkout.php?price=200">Checkout</a>
</div> 
<header id="Mainnavbar" class="sticky-top">
  <div class="logo">
    <a href="index.php"><img src="images/underline.jpg" class="rounded-circle" width="120"></a>
  </div>
  <nav class="activation">
    <ul class="mainUl">
      <li><a href="index.php">Home</a></li>
      <li class="sub-menu"><a href="country.php">Country</a>
        <ul>
        <?php 
            $allCountry = $cntry->allCountry();
            if ($allCountry) {
              while($result = mysqli_fetch_array($allCountry)){
                echo '<li><a href="country_details.php?name='.$result['title'].'">'.strtoupper($result['title']).'</a></li>';
              }
            }
        ?>
        </ul>
      </li>
      <li class="sub-menu"><a href="exam.php">exam</a>
        <ul>
          <?php 
            $allExam = $exam->allExam();
            if ($allExam) {
              while($result = mysqli_fetch_array($allExam)){
                echo '<li><a href="exam_details.php?name='.$result['exam_title'].'">'.strtoupper($result['exam_title']).'</a></li>';
              }
            }
          ?>
        </ul>
      </li>
      <li ><a href="university.php">University</a> </li>
      <li class="sub-menu"><a href="course.php">Course</a>
        <ul>
        <?php 
            $universityDept = $uni->allDept();
            if ($universityDept ) {
              while($result = mysqli_fetch_array($universityDept)){
                echo '<li><a href="course.php?name=department&dept_id='.$result['dept_id'].'">'.strtoupper($result['dept_name']).'</a></li>';
              }
            }
        ?>
        </ul>
      </li>
      <li ><a href="forum.php">Forum</a> </li>
      <li ><a href="articles.php">Articles</a> </li>
      <li><a href="contact_us.php">Contact us</a></li>
    </ul>
  </nav>
  <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
</header>
