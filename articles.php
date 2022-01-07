<?php include 'inc/header.php'; ?>
<?php 

$login = Session::get('login');
  if (!$login) {
    header("Location: login.php");
  }

?>
<div class="container-fluid bg-secondary lineHeight">
  <div class="container p-5">
    <h1 class="text-center text-dark">Latest Updates on Study Abroad</h1>
  </div>
</div>
<section class="container-fluid">
  <div class="container">
    
    <div class="row pt-2">
      <div class="col-md-9 mx-auto">
        <div class="row">
          
  <?php 
  $allAri = $article->allArticle();
  if ($allAri) {
    while ($row = mysqli_fetch_array($allAri)){
   ?>
          <div class="col-md-4 mb-3">
              <div class="card text-center">
                  <img class="img-fluid mx-auto d-block" src="admin/upload/<?php echo $row['image'] ?>" alt="">
                  <div class="card-body bg-white" style="min-height: 100px;">
                    <p class="text-dark text-left h6"><?php echo $row['title']; ?></p>
                  </div>
                  <a type="submit" href="articledetails.php?arid=<?php echo $row['art_id']; ?>" class="btn btn-block btn-outline-dark">Read More</a>
              </div>
          </div>
  <?php }} ?>
          
          

        </div>
      </div>

    </div>
  </div>
</section>
<?php include 'inc/footer.php'; ?>