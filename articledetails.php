<?php include 'inc/header.php'; ?>

<?php 
  if (isset($_GET['arid'])) {
    
    $allAri = $article->singleArticle($_GET['arid']);
    $row = mysqli_fetch_array($allAri);
  }

 ?>
<div class="container-fluid bg-secondary lineHeight">
  <div class="container p-5">
    <h1 class="text-center text-dark"><?php echo $row['title']; ?></h1>
  </div>
</div>
<section class="container-fluid">
  <div class="container">
    
    <div class="row pt-5 border">
      <div class="col-md-9 mx-auto">
        <div><?php echo htmlspecialchars_decode($row['content']); ?></div>
      </div>

    </div>
  </div>
</section>
<?php include 'inc/footer.php'; ?>