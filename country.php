<?php include 'inc/header.php'; ?>
<section class="container-fluid lineHeight" style="background-image: url(images/country.png);background-size: cover;background-attachment:repeat;background-repeat: repeat;">
  <div class="container p-5">
    <h1 class="text-secondary text-center bg-primary rounded-circle p-3"><b>COUNTRY</b></h1>
  </div>
  <br>
</section>
<section class="container container-fluid mt-4">
  <div class="row">
<?php 
$allCountry = $cntry->allCountry();
if ($allCountry) {
  while ($row = mysqli_fetch_array($allCountry)){
 ?>
    <div class="col-md-4 mb-2 ">
      <h3 class="p-4 bg-info text-light text-center"><?php echo strtoupper($row['title']); ?></h3>
      <ul class="list-group">
<?php 
 $viewContryContent = $cntry->viewContryContent($row['id']);
 if ($viewContryContent) {
    while($row1 = mysqli_fetch_array($viewContryContent)){
      echo '<li class="list-group-item">'.strtoupper($row1['title']).'<a href="country_details.html"><i class="fa fa-arrow-right pull-right" aria-hidden="true"></i></a></li>';
    }}
?>
        <li class="list-group-item"><a href="country_details.php?name=<?php echo $row['title'] ?>" class="float-right pr-2">View All</a></li>
      </ul>
    </div>
<?php }} ?>
    
  </div>
</section>
<section class="container-fluid mt-1">
  <div class="container ">
    <h1 class="text-center text-secondary p-3">Who already went Abroad</h1>
    <div class="row">
      <div class="col-md-4">
        <img src="images/bro.jpg" alt="" class="img-fluid mx-auto d-block rounded-circle" >
        <div class="mt-3" style="box-sizing: content-box;">
          <h3 class="text-primary">In-Class Training</h3>
          <p class="text-design text-muted">This program is well suited for individuals who have not scored well in the diagnostic exam or are looking to score above a 325.</p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="images/bro.jpg" alt="" class="img-fluid mx-auto d-block rounded-circle" >
        <div class="mt-3" style="box-sizing: content-box;">
          <h3 class="text-primary">One On One Coaching</h3>
          <p class="text-design text-muted">This program is well suited for individuals who have not scored well in the diagnostic exam or are looking to score above a 325.</p>
        </div>
      </div>
      <div class="col-md-4">
        <img src="images/bro.jpg" alt="" class="img-fluid mx-auto d-block rounded-circle" >
        <div class="mt-3" style="box-sizing: content-box;">
          <h3 class="text-primary">Test Series & Doubt Solving</h3>
          <p class="text-design text-muted">This program is well suited for individuals who have not scored well in the diagnostic exam or are looking to score above a 325.</p>
        </div>
      </div>
    </div>
  </div>
  <hr>
</section>
<?php include 'inc/footer.php'; ?>