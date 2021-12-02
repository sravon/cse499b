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
		<div class="col-md-6 bg-success">
			<div class="mt-5 mb-5 ml-3 mr-3 text-light">
				<h3>Find Best Universities and Courses to </h3>
				<h1><strong>Study Abroad</strong></h1>
				<div class="row" style="background-color: rgba(255,255,255,.3);padding: 20px; margin: 20px;">
					<div class="col-md-12">
						<form>
						  	<div class="form-group row">
						    	<label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg"><i class="fa fa-map-marker pr-2" style="font-size: 40px;"></i><span class="h5">Country</span></label>
						    	<div class="col-sm-8">
						      		<select id="inputState" class="form-control" style="height: 56px;color: #ccc;font-size: 18px;">
										<option selected>Choose Country</option>
										<option>USA</option>
										<option>CANADA</option>
										<option>UGANDA</option>
										<option>NIGERIA</option>
									</select>
						    	</div>
						  	</div>
						  	<div class="form-group row">
						    	<label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg"><i class="fa fa-book pr-2" style="font-size: 40px;"></i><span class="h5">Courses</span></label>
						    	<div class="col-sm-8">
						      		<select id="inputState" class="form-control" style="height: 56px;color: #ccc;font-size: 18px;">
										<option selected>Choose Course</option>
										<option>MASTER</option>
										<option>MT</option>
										<option>BBA</option>
										<option>CSER</option>
										<option>EEE</option>
										<option>DDD</option>
										<option>END</option>
									</select>
						    	</div>
						  	</div>
						  	<div class="form-group row">
						    	<label for="colFormLabelLg" class="col-sm-4 col-form-label col-form-label-lg"><i class="fa fa-user pr-2" style="font-size: 40px;"></i><span class="h5">Course Type</span></label>
						    	<div class="col-sm-8">
						      		<select id="inputState" class="form-control" style="height: 56px;color: #ccc;font-size: 18px;">
										<option selected>Choose Option</option>
										<option>A</option>
										<option>A</option>
										<option>A</option>
										<option>A</option>
										<option>A</option>
										<option>A</option>
										<option>A</option>
									</select>
						    	</div>
						  	</div>
						  	<button class="btn btn-outline-warning pull-right btn-lg">Search Now</button>
						</form>	
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 mainSelector">
			<!-- <img src="images/sikkim.jpg" style="height: 555px;width: 100%;"> -->
			<div style="width: 70%;margin: 0 auto;margin-top: 150px">
				<h2 align="center" style="color: darkorchid;font-size: 40px;font-weight: bold;">Find your Schoolarships</h2>
					<button class="btn btn-warning pull-right btn-lg text-light">Search Now</button>
			</div>
				
		</div>
	</div>
	
</section> 

<section class="container-fluid container mt-3">
		<h2 style="font-size:40px; text-align: center;">Browse by countries</h2>
		<h6 style="text-align: center;">Where do you want to study abroad?</h6>
	<div class="row">
		<div class="col-md-4 mb-2">
			<a href="">
			<div class="figures" style="position:relative;width: 100%;">
				<img src="images/service.jpg" style="height: 255px;width: 100%;opacity: 0.5;">
				<h2 style="position:absolute;top:50%;text-align: center;width: 100%;color: fuchsia;">USA</h2>
			</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="">
			<div class="figures" style="position:relative;width: 100%;">
				<img src="images/service.jpg" style="height: 255px;width: 100%;opacity: 0.5;">
				<h2 style="position:absolute;top:50%;text-align: center;width: 100%;color: fuchsia;">CANADA</h2>
			</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="">
			<div class="figures" style="position:relative;width: 100%;">
				<img src="images/service.jpg" style="height: 255px;width: 100%;opacity: 0.5;">
				<h2 style="position:absolute;top:50%;text-align: center;width: 100%;color: fuchsia;">UGANDA</h2>
			</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="">
			<div class="figures" style="position:relative;width: 100%;">
				<img src="images/service.jpg" style="height: 255px;width: 100%;opacity: 0.5;">
				<h2 style="position:absolute;top:50%;text-align: center;width: 100%;color: fuchsia;">GERMANY</h2>
			</div>
			</a>
		</div>
		<div class="col-md-4">
			<a href="">
			<div class="figures" style="position:relative;width: 100%;">
				<img src="images/service.jpg" style="height: 255px;width: 100%;opacity: 0.5;">
				<h2 style="position:absolute;top:50%;text-align: center;width: 100%;color: fuchsia;">NIGERIA</h2>
			</div>
			</a>
		</div>
	</div>
	<div class="p-2" style="width: 100%;text-align: center;">
		<button class="btn btn-info">View All Countries</button>
	</div>
</section>
<section class="container-fluid container">
	<h2 style="font-size:40px; text-align: center;">What do you want to study abroad?</h2>
	<h6 style="text-align: center;">Where do you want to study abroad?</h6>
	<div class="row">
		<div class="col-md-3 mb-1">
			<div class="p-4 text-light bg-danger" >
				<span><i class="fa fa-twitter" style="font-size: 51px;padding: 10px;"></i></span>
				<h2 class="p-2">MBA</h2>
			</div>
		</div>
		<div class="col-md-3 mb-1 ">
			<div class="p-4 text-light bg-danger" >
				<span><i class="fa fa-twitter" style="font-size: 51px;padding: 10px;"></i></span>
				<h2 class="p-2">SCIENCE</h2>
			</div>
		</div>
		<div class="col-md-3 ">
			<div class="p-4 text-light bg-danger" >
				<span><i class="fa fa-twitter" style="font-size: 51px;padding: 10px;"></i></span>
				<h2 class="p-2">ARTS</h2>
			</div>
		</div>
		<div class="col-md-3 ">
			<div class="p-4 text-light bg-danger" >
				<span><i class="fa fa-twitter" style="font-size: 51px;padding: 10px;"></i></span>
				<h2 class="p-2">MANAGEMENT</h2>
			</div>
		</div>
		<div class="col-md-3">
			<div class="p-4 text-light bg-danger" >
				<span><i class="fa fa-twitter" style="font-size: 51px;padding: 10px;"></i></span>
				<h2 class="p-2">IT</h2>
			</div>
		</div>
		<div class="col-md-3">
			<div class="p-4 text-light bg-danger" >
				<span><i class="fa fa-twitter" style="font-size: 51px;padding: 10px;"></i></span>
				<h2 class="p-2">ENGINEERING</h2>
			</div>
		</div>
	</div>
</section>

<section class="container-fluid container">
	<h2 style="font-size:40px; text-align: center;">Study Abroad Exams</h2>
	<h6 style="text-align: center;">All You Need to Know About Entrance Exams to Study Abroad.</h6>
	<div class="row">
		<div class="col-md-3">
			<h5 class="p-4 bg-warning">GMAT<span class="pull-right"><a href="#">View <i class="fa fa-arrow-right"></i></a></span></h5>
		</div>
		<div class="col-md-3">
			<h5 class="p-4 bg-warning">PTE<span class="pull-right"><a href="#">View <i class="fa fa-arrow-right"></i></a></span></a></span></h5>
		</div>
		<div class="col-md-3">
			<h5 class="p-4 bg-warning">SAT<span class="pull-right"><a href="#">View <i class="fa fa-arrow-right"></i></a></span></a></span></h5>
		</div>
		<div class="col-md-3">
			<h5 class="p-4 bg-warning">Ilets<span class="pull-right"><a href="#">View <i class="fa fa-arrow-right"></i></a></span></a></span></h5>
		</div>
		<div class="col-md-3">
			<h5 class="p-4 bg-warning">GRE<span class="pull-right"><a href="#">View <i class="fa fa-arrow-right"></i></a></span></a></span></h5>
		</div>
		<div class="col-md-3">
			<h5 class="p-4 bg-warning">TOEFL<span class="pull-right"><a href="#">View <i class="fa fa-arrow-right"></i></a></span></a></span></h5>
		</div>
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
      <h5 class="text-center text-light">Copyright ©2020 All rights reserved | Web Design And Devlopment is made by <span class="text-danger">Shrabon</span></h5>
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


