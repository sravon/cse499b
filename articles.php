<?php include 'inc/header.php'; ?>
<div class="container-fluid bg-secondary lineHeight">
  <div class="container p-5">
    <h1 class="text-center text-dark">Latest Updates on Study Abroad</h1>
  </div>
</div>
<section class="container-fluid">
  <div class="container">
    
    <div class="row pt-2">
      <div class="col-md-9">
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
                  <button class="btn btn-block btn-outline-dark">Read More</button>
              </div>
          </div>
  <?php }} ?>
          
          

        </div>
      </div>
      <div class="col-md-3">
        <div class="md-form active-purple active-purple-2 mb-3">
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </div>
        <div class="fb-page  mb-2" data-href="https://www.facebook.com/buyb00/" data-tabs="events" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/buyb00/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/buyb00/">BuyBoo.com</a></blockquote></div>
        <div>
          <h4>Top Articles</h4>
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="images/bro.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <p class="mb-0">This is a wider card with supporting</p>
                <p class=""><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="images/bro.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <p class="mb-0">This is a wider card with supporting</p>
                <p class=""><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="images/bro.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <p class="mb-0">This is a wider card with supporting</p>
                <p class=""><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'inc/footer.php'; ?>