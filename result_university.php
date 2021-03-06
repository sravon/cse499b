<?php include 'inc/header.php'; ?>
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

<section class="container-fluid mt-2">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8 p-5">
			<h3 class="text-center p-2 text-light bg-success">Result Of Your Eligibility For <?php echo $university; ?></h3>
			
			
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
      <h5 class="text-center text-light">Copyright ??2020 All rights reserved | Web Design And Devlopment is made by <span class="text-danger">NSUERS</span></h5>
</footer>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0" nonce="ib9RtcIe"></script>
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  </body>
</html>


