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
		<div class="col-md-3"></div>
		<div class="col-md-6 p-5">
			<h3 class="text-center p-2 text-light bg-success">Check Eligibility For Specific University</h3>
			<form class="border p-3" method="post" action="result_university.php">
				<div class="form-group row">
				  <label for="inputPassword" class="col-sm-3 col-form-label"><b>Your CGPA</b></label>
				  <div class="col-sm-9">
				  	<input type="text" name="cgpa" class="form-control" placeholder="Enter number">
				  </div>
				</div>
			  <div class="form-group row">
			    <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label"><b>Choose University :</b> </label>
			    <div class="col-sm-9">
				    <select class="form-control" id="uni" name="university">
						  <option>Select University</option>
						  <option value="15">Cornell University</option>
						  <option>University Of Chicago</option>
						  <option>Princeton university</option>
						</select>
					</div>
			  </div>
			  

			  <div class="form-group row">
				  <label for="inputPassword" class="col-sm-3 col-form-label"><b>Type programs</b></label>
				  <div class="col-sm-9">
				  	<input type="text" class="form-control" name="programs" value="MBA" readonly="">
				  </div>
				</div>
			  
				<div id="scorelist">
				</div>

				<div class="form-group row">
				  <label for="inputPassword" class="col-sm-3 col-form-label"><b>National</b></label>
				  <div class="col-sm-9">
				    <input type="text" class="form-control" name="nationality" value="Bangladeshi" readonly="">
				  </div>
				</div>
				<button type="submit" name="submit" class="btn btn-outline-primary">Search</button>
			</form>
		</div>
		<div class="col-md-3"></div>
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
<script type="text/javascript">
	$(document).ready(function(){
		$('#uni').change(function(){
			var txt = $(this).val()
			$.ajax({
         url:"ajax/fetch_scorelist.php",
         method:"POST",
         data:{txt:txt},
         success:function(data)
         {
          $("#scorelist").append(data);
         }
       });
			
		});
	})
</script>
  </body>
</html>


