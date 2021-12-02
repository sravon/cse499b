 <?php include 'inc/header.php'; ?>

<?php 
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $getValueByMajor = $uni->getValueByMajor();
    $result = mysqli_fetch_array($getValueByMajor);
      echo '<script>alert("'.$result['dept_id'].'") </script>';
  }

 ?>
<section class="container-fluid bg-success lineHeight">
  <div class="container p-5">
    <h1 class="text-light pull-left">All University</h1>
    <div class="pb-5">
      <img src="images/abroad-abroad-study.jpg" width="100" class="pull-right rounded-circle pb-3" alt="tt">
    </div>
      
  </div>
  <br>
</section>
<section class="container-fluid mainSelector">
  <div class="container pb-5">
    <div class="row">
      <div class="col-md-7">
        <h2 class="p-4 text-dark">Search your product which you want <br>Here</h2>
      </div>
      <div class="col-md-5">
        <div id="msg"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <form method="get" action="">
          <div class="input-group">
            <input type="text" class="form-control" id="search_course" placeholder="Enter course name here" aria-label="Recipient's username" aria-describedby="basic-addon2" name="search_value">
            <div class="input-group-append bg-secondary">
              <button type="submit" class="btn btn-secondary" name="submit">Search</button>
              
            </div>
          </div>
          <div id="major"></div>
       </form>
      </div>  
    </div>
  </div>
</section>
<section class="container-fluid container mt-4">
   
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
</section>

 <?php include 'inc/footer.php'; ?>
<script type="text/javascript">
  $(document).ready(function(){
    
   $('#search_course').keyup(function(){
      var txt = $(this).val();
      if (txt != '') {
        $.ajax({
         url:"ajax/fetch_course.php",
         method:"POST",
         data:{txt:txt},
         success:function(data)
         {
          $('#major').fadeIn();
          $('#major').html(data);
         }
        });
      }
    });
    
    $(document).on('click','li',function(){
      $('#search_course').val($(this).text());
      var value = $('#search_course').val();
      $('#major').fadeOut();
    })
 })
 </script>