<?php 
  if ( isset($_GET['dept_id']) && !empty($_GET['dept_id'])) {
    $id = $_GET['dept_id'];
    $gettValueByDept = $uni->gettValueByDept($id);
  }
?>
<?php 
    if ($gettValueByDept) {
      $i = 0;
      while($result = mysqli_fetch_array($gettValueByDept)){
       $i++;
       //print_r($result);
?>
  <div class="row border border-danger p-1 mt-2">
      <div class="col-md-3">
        <h5 class="uniPos">#<?php echo $i; ?></h5>
        <div class="p-4">
          <img src="admin/upload/<?php echo $result['uni_image']; ?>" width="150" alt="img">
        </div>
          
      </div>
      <div class="col-md-8 mb-2">
        <h2 class="text-dark"><b><?php echo $result['uni_name'] ?></b></h2>
        <h3 class="text-muted">Location: <?php echo $result['location']; ?></h3>
        <h4 class="text-muted">Bachelors: <?php echo $result['bchelors']; ?> </h4>
        <h5 class="text-muted">Entry Criteria: <?php echo $result['entry_criteria']; ?></h5>
        <h5 class="text-muted">Masters: <?php echo $result['masters']; ?></h5>
        <a href="<?php echo $result['link']; ?>" class="btn btn-primary">view</a >

      </div>
  </div>
<?php }}else{
  echo '<h2 class="text-center text-danger p-3">No Course Found</h2>';
} ?>