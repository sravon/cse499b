
<?php 
  $getCourse = $uni->allCourse();
    if ($getCourse) {
      while($result = mysqli_fetch_array($getCourse)){
       
?>
  <div class="row border border-danger p-1 mt-2">
      <div class="col-md-3">
        <h5 class="uniPos">#3</h5>
        <div class="p-4">
          <img src="images/bro.jpg" width="150" alt="img">
        </div>
          
      </div>
      <div class="col-md-8 mb-2">
        <h2 class="text-dark"><b><?php echo $result['uni_name'] ?></b></h2>
        <h3 class="text-muted">Location:Wellington, UK</h3>
        <h4 class="text-muted">Bachelors: GBP 16230 </h4>
        <h5 class="text-muted">Entry Criteria: IELTS , </h5>
        <h5 class="text-muted">Masters: GBP 18620 </h5>
        <button class="btn btn-primary">view</button>

      </div>
  </div>
<?php }}else{
  echo '<h2 class="text-center text-danger p-3">No Search Found</h2>';
} ?>
