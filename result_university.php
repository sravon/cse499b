
<?php 
$connect = mysqli_connect("localhost","root","","client");

	if (isset($_POST['submit'])) {
		
		$sql = "SELECT * FROM score 
				JOIN exam ON score.exam_id= exam.exam_id
				JOIN university ON university.uni_id= score.uni_id 
				WHERE score.uni_id = '".$_POST['university']."'";
	}
	$result = mysqli_query($connect, $sql);
	$output ='';
	$university = '';
	if (mysqli_num_rows($result) > 0 ) {
		while ($row = mysqli_fetch_array($result)) {
			$university = $row['uni_name'];
			$name = $row['exam_title'];
			if ( $_POST[$name] >= $row['score']) {
				$status ="Passed";
				$color = "text-success";
			}else{
				$status ="Failed";
				$color = "text-danger";
			}
			$output .= '
				<div class="row p-2 border border-secondary mb-2">
					<div class="col-md-4 ">
						<label for="inputPassword" class=" col-form-label"><b>Your '.$row['exam_title'].' Score:</b></label>
					  <label for="inputPassword" class=" col-form-label"><b>'.$_POST[$name].'</b></label>
					</div>
					<div class="col-md-4">
						<label for="inputPassword" class=" col-form-label"><b>Required '.$row['exam_title'].' :</b></label>
					  <label for="inputPassword" class=" col-form-label"><b>'.$row['score'].'</b></label>
					</div>
				  	<div class="col-md-4">
						<label for="inputPassword" class="col-form-label"><b>Status :</b></label>
					  <label for="inputPassword" class=" col-form-label '.$color.'"><b>'.$status.'</b></label>
					</div>
				</div>
				';
		}
	}

 
 ?>
 <!DOCTYPE html>
<html>
<head>
  <title>cse499 Project</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<header id="Mainnavbar" class="sticky-top">
  <div class="logo">
    <a href="index.php"><img src="images/footer.png" class="rounded-circle" width="100"></a>
  </div>
  <nav class="activation">
    <ul class="mainUl">
      <li><a href="index.php">Home</a></li>
      <li class="sub-menu"><a href="country.php">Country</a>
        <ul>
        	<li><a href="country_details.phpname=nai">candana</a></li>
        	<li><a href="country_details.phpname=nai">candana</a></li>
        </ul>
      </li>
      <li class="sub-menu"><a href="exam.php">exam</a>
        <ul>
          	<li><a href="country_details.phpname=nai">candana</a></li>
        	<li><a href="country_details.phpname=nai">candana</a></li>
        </ul>
      </li>
      <li ><a href="university.php">University</a> </li>
      <li class="sub-menu"><a href="course.php">Course</a>
        <ul>
       		<li><a href="country_details.phpname=nai">candana</a></li>
        	<li><a href="country_details.phpname=nai">candana</a></li>
        </ul>
      </li>
      <li ><a href="forum.php">Login</a> </li>
      <li ><a href="forum.php">SignUP</a> </li>
      <li ><a href="articles.php">Articles</a> </li>
      <li><a href="contact_us.php">Contact us</a></li>
    </ul>
  </nav>
  <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
</header>



<section class="container-fluid mt-2">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 p-5">
			<h3 class="text-center p-2 text-light bg-success">Result Of Your Eligibility For <?php echo $university; ?></h3>
			
			<div class="row p-2 border border-secondary mb-2">
				<div class="col-md-4">
					<label for="inputPassword" class=" col-form-label"><b>Your Cgpa Score:</b></label>
				  <label for="inputPassword" class=" col-form-label"><b>3.44</b></label>
				</div>
				<div class="col-md-4">
					<label for="inputPassword" class=" col-form-label"><b>Required Cgpa :</b></label>
				  <label for="inputPassword" class=" col-form-label"><b>3.44</b></label>
				</div>
			  	<div class="col-md-4">
					<label for="inputPassword" class="col-form-label"><b>Status :</b></label>
				  <label for="inputPassword" class=" col-form-label text-success"><b>Passed</b></label>
				</div>
			</div>
			<?php echo $output; ?>
		</div>
		<div class="col-md-2"></div>
	</div>
</section>

<footer class="footer text-center text-light container-fluid bg-dark">
  
      <div class="row">
        <div class="col-md-4">
          <div class="col-md-4">
            <h3 class="text-light">Service</h3>
            <p class="h6"><a href="country.html" class="text-muted">Gre</a></p>
            <p class="h6"><a href="exam.html" class="text-muted">Gmat</a></p>
            <p class="h6"><a href="forum.html" class="text-muted">Ilets</a></p>
          </div>
        </div>
        <div class="col-md-4">
          <h3 class="text-light">Useful Links</h3>
          <p class="h6"><a href="country.html" class="text-muted">Country</a></p>
          <p class="h6"><a href="exam.html" class="text-muted">Exam</a></p>
          <p class="h6"><a href="forum.html" class="text-muted">Forum</a></p>
        </div>
        <div class="col-md-4">
          <h4 class="text-light">Contact</h4>
          <p class="text-muted">5th flora, 700/D kings road, green</p>
          <p class="text-muted">lane New York-1782</p>
          <p class="text-muted">+10 367 826 2567</p>
          <p class="text-muted">contact@carpenter.com</p>
          <div >
            <button class="btn top_btn"><i class="fa fa-facebook"></i></button>
            <button class="btn top_btn"><i class="fa fa-twitter"></i></button>
            <button class="btn top_btn"><i class="fa fa-trash"></i></button>
            <button class="btn top_btn"><i class="fa fa-close"></i></button>
            <button class="btn top_btn"><i class="fa fa-folder"></i></button>
          </div>
        </div>
      </div>
      <hr>
      <h5 class="text-center text-light">Copyright ©2020 All rights reserved | Web Design And Devlopment is made by <span class="text-danger">NSUERS</span></h5>
</footer>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0" nonce="ib9RtcIe"></script>
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  </body>
</html>


