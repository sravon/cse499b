
<?php 
  $filepath = realpath(dirname(__FILE__));
   include_once ($filepath.'/../helpers/Format.php');
   include_once ($filepath.'/../lib/Session.php');
   
   Session::init();
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
  $user = new User();

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
<div id="donate" class="p-3" style="position: fixed;top: 50%;right: 0;width: 120px;z-index: 9999;background: #ccc;border-radius: 5px;">
    <h6 class="text-center text-danger">Donate 200Tk</h6>
    <a class="btn btn-primary p-2" href="checkout.php?price=200">Checkout</a>
</div> 
<header id="Mainnavbar" class="sticky-top">
  <div class="logo">
    <a href="index.php"><img src="images/LOGO.png" class="rounded-circle" width="90"></a>
  </div>
  <nav class="activation">
    <ul class="mainUl">
      <li><a href="index.php">Home</a></li>
      <li class="sub-menu"><a href="">Country</a>
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
      <li class="sub-menu"><a href="">Exam</a>
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
              <?php
                if (isset($_GET['logout'])) {
                  //$delid = $ct->delCustomerCart();
                  Session::destroy();
                }

                $login = Session::get('login');
                if ($login) {
              ?>
              
                     <li class="nav-item middle_header">
                         <div class="dropdown show d-flex p-1">
                            <img src="images/32.jpg" width="50" class="rounded-circle">
                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <?php echo Session::get('cmrname'); ?>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="profile.php">Profile</a>
                              <a class="dropdown-item" href="notification.php">Notification</a>
                              <a class="dropdown-item" href="?logout">logout</a>
                            </div>
                          </div>
                     </li>
                  <?php } ?>
    </ul>
  </nav>
  <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
</header>
