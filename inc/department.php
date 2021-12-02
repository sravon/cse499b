<?php 
  if ( isset($_GET['dept_id']) && !empty($_GET['dept_id'])) {
    $id = $_GET['dept_id'];
    $gettValueByDept = $uni->gettValueByDept($id);
  }
?>
<?php 
    if ($gettValueByDept) {
      while($result = mysqli_fetch_array($gettValueByDept)){
       
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
  echo '<h2 class="text-center text-danger p-3">No Course Found</h2>';
} ?>