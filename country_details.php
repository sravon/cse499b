 <?php include 'inc/header.php'; ?>
 <?php
if (isset($_GET['name'])) {
  $title = $_GET['name'];
  $selctValueContry = $cntry->selectValueContry($title);
}
  
 ?>
<section class="container-fluid bg-success lineHeight">
  <div class="container p-5">
    <h1 class="text-light pull-left">Study Abroad Of <span class="text-warning"><?php echo strtoupper($title); ?></span></h1>
    <div class="pb-5">
      <img src="images/abroad-abroad-study.jpg" width="100" class="pull-right rounded-circle pb-3" alt="tt">
    </div>
      
  </div>
  <br>
</section>

<?php
$tab_menu = '';
$tab_content = '';
$count = 0;
if ($selctValueContry) {
  while ($row = mysqli_fetch_array($selctValueContry)) {
    if ($count==0) {
      $tab_menu .= '<li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#'.$row['id'].'" role="tab" aria-controls="home" aria-selected="true"><b class="h5">'.strtoupper($row['title']).'</b></a>
    </li>';
      $tab_content .= '<div class="tab-pane fade show active" id="'.$row['id'].'" role="tabpanel" aria-labelledby="home-tab">
      <div class="container mt-3">
        <p>'.htmlspecialchars_decode($row['content']).'</p>
      </div>
    </div>';
    }elseif($row['title'] == 'university'){
      $result = $uni->getUniversityById($row['cntry_id']);
      $university_html = '';
      $i = 0;
      while ($university = mysqli_fetch_array($result)){
        $i++;
        $university_html .= '
          <div class="row border border-danger p-1">
            <div class="col-md-3">
              <h5 class="uniPos">#'.$i.'</h5>
              <div class="p-4">
                <img src="images/'.$university['uni_image'].'" width="150" alt="img">
              </div> 
            </div>
            <div class="col-md-8 mb-2">
              <h2 class="text-dark"><b>'.$university['uni_name'].'</b></h2>
              <h3 class="text-muted">Location:Wellington, UK</h3>
              <h4 class="text-muted">Bachelors: GBP 16230 </h4>
              <h5 class="text-muted">Entry Criteria: IELTS , </h5>
              <h5 class="text-muted">Masters: GBP 18620 </h5>
              <a href="university_details.php" class="btn btn-primary">view</a>
            </div>
          </div>
        ';
      }
          
      $tab_menu .= '<li class="nav-item">
      <a class="nav-link" id="home-tab" data-toggle="tab" href="#'.$row['id'].'" role="tab" aria-controls="home" aria-selected="true"><b class="h5">'.strtoupper($row['title']).'</b></a>
    </li>';
      $tab_content .= '<div class="tab-pane fade" id="'.$row['id'].'" role="tabpanel" aria-labelledby="home-tab">
      <div class="container mt-3">
        '.$university_html.'
      </div>
    </div>';
    }else{
      $tab_menu .= '<li class="nav-item">
      <a class="nav-link" id="home-tab" data-toggle="tab" href="#'.$row['id'].'" role="tab" aria-controls="home" aria-selected="true"><b class="h5">'.strtoupper($row['title']).'</b></a>
    </li>';
      $tab_content .= '<div class="tab-pane fade" id="'.$row['id'].'" role="tabpanel" aria-labelledby="home-tab">
      <div class="container mt-3">
        <p>'.htmlspecialchars_decode($row['content']).'</p>
      </div>
    </div>';
    }
    $count++;
  }
}else{
  echo '<script> location.replace("country.php"); </script>';
}

?>
<section class="container-fluid mt-4">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <?php echo $tab_menu; ?>
    
  </ul>
  <div class="tab-content" id="myTabContent">
    <?php echo $tab_content; ?>
    
  </div>
</section>
<section class="container-fluid mt-5">
  <div class="container">
    <h1 class="p-3 text-center text-success">Which students already went abroad </h1><hr>
    <div class="row">
      <div class="col-md-4">
        <p class="text-design text-muted">Simple yet analytical approaches for problem-solving, explained by the faculty, was greatly helpful for solving difficult questions. The innovative teaching adopted by the faculty make the test much easier.</p>
        <div class="row">
          <div class="col-md-6">
            <img src="images/bro.jpg" alt="" width="100" class="img-fluid mx-auto d-block rounded-circle" >
          </div>
          <div class="col-md-6">
            <h5 class=""><b>mr rinko</b></h5>
            <p class="text-design text-muted">Simple yet analyticalr.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <p class="text-design text-muted">Simple yet analytical approaches for problem-solving, explained by the faculty, was greatly helpful for solving difficult questions. The innovative teaching adopted by the faculty make the test much easier.</p>
        <div class="row">
          <div class="col-md-6">
            <img src="images/bro.jpg" alt="" width="100" class="img-fluid mx-auto d-block rounded-circle" >
          </div>
          <div class="col-md-6">
            <h5 class=""><b>mr rinko</b></h5>
            <p class="text-design text-muted">Simple yet analyticalr.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <p class="text-design text-muted">Simple yet analytical approaches for problem-solving, explained by the faculty, was greatly helpful for solving difficult questions. The innovative teaching adopted by the faculty make the test much easier.</p>
        <div class="row">
          <div class="col-md-6">
            <img src="images/bro.jpg" alt="" width="100" class="img-fluid mx-auto d-block rounded-circle" >
          </div>
          <div class="col-md-6">
            <h5 class=""><b>mr rinko</b></h5>
            <p class="text-design text-muted">Simple yet analyticalr.</p>
          </div>
        </div>
      </div>
    </div>
      
  </div>
</section>
 <?php include 'inc/footer.php'; ?>