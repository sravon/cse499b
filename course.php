 <?php include 'inc/header.php'; ?>
<?php 

$login = Session::get('login');
  if (!$login) {
    header("Location: login.php");
  }

?>
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
            <input type="hidden" name="searchbar" value="showcourse">
            <input type="text" class="form-control" id="search_course" placeholder="Enter course name here" aria-label="Recipient's username" aria-describedby="basic-addon2" name="coursename">
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
      if (isset($_GET['name'])) {
         $source = $_GET['name'];
      }elseif (isset($_GET['searchbar'])){
          $source = $_GET['searchbar'];
      }else{
          $source = '';
      }
      switch ($source) {
          case 'department':
              include "inc/department.php";
              break;
          case 'showcourse':
              include "inc/showcourse.php";
              break;
          default:
              include "inc/couseList.php";
              break;
      }
   ?>

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