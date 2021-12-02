 <?php include 'inc/header.php'; ?>
<section class="container-fluid bg-success lineHeight">
  <div class="container p-5">
    <h1 class="text-light pull-left">Schoolarships</h1>
    <div class="pb-5">
      <img src="images/abroad-abroad-study.jpg" width="100" class="pull-right rounded-circle pb-3" alt="tt">
    </div>
      
  </div>
  <br>
</section>
<?php 
  $connect = mysqli_connect("localhost","root","","client");
  if (isset($_GET['id'])) {
    $sql = "SELECT * FROM `university` JOIN scholarship ON university.uni_id = scholarship.uni_id WHERE scholarship.scholarship_id = '".$_GET['id']."'";
    
  }
  $result = mysqli_query($connect, $sql);

  $output ='';
  if (mysqli_num_rows($result) > 0 ) {
    $row = mysqli_fetch_array($result);
  }
?>
<section class="container-fluid pt-4">
  <div class="container pb-5">
      <h3 class="text-center text-success mb-4"><?php echo $row['scholarship']; ?><small class="text-danger" style="font-size:15px;cursor: pointer;">(Scholarship Description)</small><span class="text-muted pull-right" id="bookmark"><i class="fa fa-bookmark" aria-hidden="true"></i></span></h3>
      <div class="row ">
        <div class="col-md-8">
          <h6 class="text-primary"><?php echo $row['scholarship']; ?></h6>
          <p>All applicants for admission who apply by December 1 are automatically considered for the Richmond Scholars Program. The University's most prestigious academic awards, these scholarships are given to 45 incoming students and range from full tuition to full tuition plus room and board. The Richmond Scholars program awards merit scholarships in four broad designations.</p>
          <p><strong>Program Benefits</strong></p>
          <ul>
            <li>Full-tuition scholarship, renewable for up to eight consecutive semesters of full-time enrollment, valued at approximately $181,000 over four years</li>
            <li>Eligibility for a one-time $3,000 grant to support a student-selected activity that enhances the academic experience</li>
            <li>Priority course registration and guaranteed on-campus housing</li>
            <li>Specially selected faculty mentors to guide students and help them fulfill their potential</li>
            <li>Special ticket vouchers to selected cultural events in the Modlin Center for the Arts</li>
          </ul>
          <h5><strong>Considerations</strong></h5>
          <p>The selection committee considers each student individually, evaluating their application in a highly personalized and holistic manner. The writing sample is particularly critical because it communicates some of the special contributions a student might make to the University. While grades and test scores are important, the committee is aware that they don't represent the whole student and, as a result, they are not used to automatically include or exclude an applicant from consideration.</p>
          <h4>University Name: <span class="text-info"><?php echo $row['uni_name'] ?></span></h4>
        </div>
        <div class="col-md-4">
          <div class="p-4">
            <h6><span class="text-success">Program</span>:<span class="text-muted"><?php echo $row['program']; ?></span></h6>
            <h6><span class="text-success">Amount</span>:<span class="text-muted"><?php echo $row['benefit'] ?></span></h6>
            <h6><span class="text-success">Deadline Date</span>:<span class="text-muted">  <?php echo $row['deadline']; ?></span></h6>
            <button class="btn btn-success">Apply Now</button>
          </div>
        </div>
      </div>
  </div>
</section>

 <?php include 'inc/footer.php'; ?>
<script type="text/javascript">
  $(document).ready(function(){
    $('#bookmark').click(function(){
      alert('Added successfull in your bookmarklist');
      $(this).removeClass("text-muted").addClass("text-primary");
    });
 })
 </script>