<?php include 'inc/header.php'; ?>
<div class="container-fluid bg-secondary lineHeight">
  <div class="container p-5">
    <h1 class="text-center text-dark">FAQs - Frequently Asked Questions</h1>
  </div>
</div>
<br>
<section class="container-fluid mt-4">
<?php 
   $getContry = $cntry->allCountry();
  
   if ($getContry) {
    $tab_menu = '';
    $tab_content = '';
    $i = 0;
    while ($result = mysqli_fetch_array($getContry)) {
      if ($i == 0) {
        $tab_menu .= '<li class="nav-item active">
       <a class="nav-link active" data-toggle="tab" href="#'.$result['id'].'" role="tab"><b class="h5">'.strtoupper($result['title']).'</b></a>
       </li>';
        $tab_content .='<div class="tab-pane fade show active" id="'.$result['id'].'" role="tabpanel" aria-labelledby="home-tab"><div class="container custom-accordion mt-3">';
      }
      else
      {
        $tab_menu .= '<li class="nav-item">
       <a class="nav-link" data-toggle="tab" href="#'.$result['id'].'" role="tab"><b class="h5">'.strtoupper($result['title']).'</b></a>
       </li>';
        $tab_content .='<div class="tab-pane fade" id="'.$result['id'].'" role="tabpanel"><div class="container custom-accordion mt-3">';
      }
      $getForum = $forum->viewForumContent($result['id']);
      $j= 0;
        while ($row = mysqli_fetch_array($getForum)) {
          if ($j == 0) {
            $tab_content .='<div class="accordion-item active">
        <div class="title">
          <h5><b>'.$row['question'].'</b></h5>
          <span class="open"><i class="fa fa-plus"></i></span>
          <span class="close"><i class="fa fa-minus"></i></span>
        </div>
        <div class="info">
          <p class="text-design">'.htmlspecialchars_decode($row['answer']).'</p>
        </div>
      </div>';
          }else{
            $tab_content .='<div class="accordion-item">
        <div class="title">
          <h5><b>'.$row['question'].'</b></h5>
          <span class="open"><i class="fa fa-plus"></i></span>
          <span class="close"><i class="fa fa-minus"></i></span>
        </div>
        <div class="info">
          <p class="text-design">'.htmlspecialchars_decode($row['answer']).'</p>
        </div>
      </div>';
          } 
          $j++;
        }
        
      $tab_content .= '</div></div>';
      $i++;
    }
   }
 ?>
  <ul class="nav nav-tabs" role="tablist">
    <?php
      echo $tab_menu;
    ?>

  </ul>
  <div class="tab-content" id="myTabContent">
    <?php
    echo $tab_content;
    ?>
  </div>
</section>
<br>
<?php include 'inc/footer.php'; ?>