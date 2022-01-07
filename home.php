<?php 
	include 'inc/header.php'; 
 ?>

<style type="text/css">
	body
{
    background: #fff;
    font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
    font-size: 14px;
    color: #000;
    margin: 0;
    padding: 0;
    
}
a {
  text-decoration:none !important;
}
.lineHeight{
  margin-top: -5px;
}
.mainSelector{
  background-image: url(images/agency.jpg);
  background-size: cover;
  background-attachment: fixed;
  background-repeat: no-repeat;
  height: 340px;
}
#Mainnavbar{
  position: relative;
color: #fff;
box-shadow: 0px 2px 2px grey;
z-index: 99999;
background-color: #333 !important;
}
#major ul{  
  background-color:#eee;  
  cursor:pointer;  
}
#major li{  
  padding:12px;
 border-bottom: 1px dotted #ccc;
}
header{
  display: inline-block;
  padding: 0 100px;
  background: #262626;
  width: 100%;
  box-sizing: border-box;
}
header .logo{
  color: #fff;
  height: 50px;
  line-height: 50px;
  font-size: 24px;
  float: left;
  font-weight: bold;
}
header nav{
  float: right;
}
header nav ul{
  margin: 0;
  padding: 0;
  display: flex;
}
header nav ul li{
  list-style: none;
  position: relative;
}
header nav ul li.sub-menu:before{
  content: '\f0d7';
  font-family: fontAwesome;
  line-height: 50px;
  position: absolute;
  color: #fff;
  right: 5px;
}
header nav ul li.active.sub-menu:before{
  content: '\f0d8';
  font-family: fontAwesome;
  line-height: 50px;
  position: absolute;
  color: #fff;
  right: 5px;
}
header nav ul li ul{
  position: absolute;
  left: 0;
  background: #333;
  display: none;
}
header nav ul li.active ul{
  display: block;
}
header nav ul li ul li{
  display: block;
  width: 200px;
}
header nav ul li a{
  height: 50px;
  line-height: 50px;
  padding: 0 20px;
  color: #fff;
  text-decoration: none;
  display: block;
}
header nav ul li a:hover,
header nav ul li a:active{
  color:#fff;
  background: #2196f3;
}


.menu-toggle{
  color: #fff;
  float: right;
  line-height: 50px;
  font-size: 24px;
  cursor: pointer;
  display: none;
}
.sticky-top {
    position: -webkit-sticky !important;
    position: sticky !important;
    top: 0;
    z-index: 1020 !important;
}

/*footer design*/
.footer{
    padding: 30px 0px;
}

.top_btn {
  background-color: lightslategray;
  border: none;
  color: white;
  padding: 7px 11px;
  font-size: 16px;
  cursor: pointer;
  margin: 5px;
}

/* Darker background on mouse-over */
.top_btn:hover {
  background-color: rosybrown;
}
.middle_header:hover{
	background-color: lightslategray;
}




@media (max-width: 991px){
  header{
    display: inline-block;
    padding: 0 20px;
  }
  .menu-toggle{
    display: block;
  }
  header nav{
    /*display: none;*/
    position: absolute;
    width: 100%;
    background: #333;
    top: 50px;
    right: -100%;
    transition: 0.5s;
  }
  header nav.activation{
    right: 0;
  }
  header nav ul{
    display: block;
    text-align: center;
  }
  header nav ul li a{
    border-bottom: 1px solid rgba(0,0,0,.2);
  }
  header nav ul li.active ul{
    position: relative;
    background: #003e6f;
  }
  header nav ul li ul li{
    width: 100%;
  }
}

</style>
<section class="container-fluid">
	<div class="row">
		<div class="col-md-6 mainSelector pb-5" style="position:relative;">
			<div style="width: 70%;margin: 0 auto;background: rgba(87, 175, 191, 0.3);padding: 30px;position: absolute;top:20%">
				<h2 align="center" style="color: white;font-size: 40px;font-weight: bold;">Check Your Eligibility For Specific University</h2>
					<a href="matchertwo.php" class="btn btn-warning pull-right btn-lg text-dark">Search Now</a>
			</div>
		</div>
		<div class="col-md-6 mainSelector pb-5" style="position:relative;">
			<!-- <img src="images/sikkim.jpg" style="height: 555px;width: 100%;"> -->
			<div style="width: 70%;margin: 0 auto;background: rgba(87, 175, 191, 0.3);padding: 30px;position: absolute;top:20%">
				<h2 align="center" style="color: black;font-size: 40px;font-weight: bold;">Scholarships By Country</h2>
					<a href="countryscholarship.php" class="btn btn-warning pull-right btn-lg text-light">Search Now</a>
			</div>
				
		</div>
	</div>
	
</section> 

<section class="container-fluid container mt-3">
		<h2 style="font-size:40px; text-align: center;">Browse by countries</h2>
		<h6 style="text-align: center;">Where do you want to study abroad?</h6>
	<div class="row">
		
			<?php 
        $allCountry = $cntry->allCountry();
        if ($allCountry) {
          while($result = mysqli_fetch_array($allCountry)){
      ?>
	      <div class="col-md-4 mb-2">
					<a href="country_details.php?name=<?php echo $result['title']; ?>">
						<div class="figures" style="position:relative;width: 100%;">
							<img src="images/service.jpg" style="height: 255px;width: 100%;opacity: 0.5;">
							<h2 style="position:absolute;top:50%;text-align: center;width: 100%;color: fuchsia;"><?php echo strtoupper($result['title']); ?></h2>
						</div>
					</a>
			</div>
			<?php }} ?>
	</div>
	<div class="p-2" style="width: 100%;text-align: center;">
		<a href="country.php" class="btn btn-info">View All Countries</a>
	</div>
</section>
<section class="container-fluid container">
	<h2 style="font-size:40px; text-align: center;">What do you want to study abroad?</h2>
	<h6 style="text-align: center;">Where do you want to study abroad?</h6>
	<div class="row">
		<?php 
        $universityDept = $uni->allDept();
        if ($universityDept ) {
          while($result = mysqli_fetch_array($universityDept)){
    ?>
		<div class="col-md-3 mb-1">
      <a href="course.php?name=department&dept_id=<?php echo $result['dept_id']; ?>">
  			<div class="p-4 text-light bg-danger" >
  				<span><i class="fa fa-twitter" style="font-size: 51px;padding: 10px;"></i></span>
  				<h4 class="p-2"><?php echo strtoupper($result['dept_name']); ?></h4>
  			</div>
      </a>
		</div>
	  <?php }} ?>
		
	</div>
</section>

<section class="container-fluid container">
	<h2 style="font-size:40px; text-align: center;">Study Abroad Exams</h2>
	<h6 style="text-align: center;">All You Need to Know About Entrance Exams to Study Abroad.</h6>
	<div class="row">
		<?php 
      $allExam = $exam->allExam();
      if ($allExam) {
        while($result = mysqli_fetch_array($allExam)){
      ?>         
              
		<div class="col-md-3">
			<h5 class="p-4 bg-warning"><?php echo strtoupper($result['exam_title']); ?><span class="pull-right"><a href="#">View <i class="fa fa-arrow-right"></i></a></span></h5>
		</div>
	<?php }} ?>
	</div>
  <div class="p-2" style="width: 100%;text-align: center;">
    <a href="exam.php" class="btn btn-info">View All Exam</a>
  </div>
</section>

<footer class="footer text-center text-light container-fluid bg-dark">
  
      <div class="row">
        <div class="col-md-4">
          <div class="col-md-4">
            <h3 class="text-light">Service</h3>
            <p class="h6"><a href="country.html" class="text-muted">Gre</a></p>
            <p class="h6"><a href="exam.html" class="text-muted">Gmat</a></p>
            <p class="h6"><a href="forum.html" class="text-muted">Ielts</a></p>
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
          <p class="text-muted">5th flora, 700/D kings road, bashundhara</p>
          <p class="text-muted">lane auntor-1782</p>
          <p class="text-muted">+880113221237</p>
          <p class="text-muted">contact@cauntoree.com</p>
          <div >
            <button class="btn top_btn"><i class="fa fa-facebook"></i></button>
            <button class="btn top_btn"><i class="fa fa-twitter"></i></button>
          </div>
        </div>
      </div>
      <hr>
      <h5 class="text-center text-light">Copyright ©2020 All rights reserved | Web Design And Devlopment is made by <span class="text-danger">Nsuers</span></h5>
</footer>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0" nonce="ib9RtcIe"></script>
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/613eeecd25797d7a89fea0f6/1ffet9kt1';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<script type="text/javascript" src="js/custom.js"></script>
  </body>
</html>


