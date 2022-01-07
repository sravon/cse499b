<?php include 'inc/header.php'; ?>
<?php 

$login = Session::get('login');
  if (!$login) {
    header("Location: login.php");
  }

?>
<?php
if (isset($_GET['name'])) {
  $title = $_GET['name'];
  $selectValueExam = $exam->selectValueExam($title);
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
<section class="container-fluid mt-1">
  <div class="container bg-info">
    <h2 class="p-5 text-light"><b>VIEW OUR FALL 2019 GRE SCORECARD</b> <a href="" class="btn btn-lg btn-outline-dark pull-right">View</a></h2>
  </div>
</section>
<?php
$tab_menu = '';
$tab_content = '';
$count = 0;
if ($selectValueExam) {
  while ($row = mysqli_fetch_array($selectValueExam)) {
    if ($count==0) {
      $tab_menu .= '<li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#'.$row['examcontent_id'].'" role="tab" aria-controls="home" aria-selected="true"><b class="h5">'.strtoupper($row['title']).'</b></a>
    </li>';
      $tab_content .= '<div class="tab-pane fade show active" id="'.$row['examcontent_id'].'" role="tabpanel" aria-labelledby="home-tab">
      <div class="container mt-3">
        <p>'.htmlspecialchars_decode($row['content']).'</p>
      </div>
    </div>';
    }else{
      $tab_menu .= '<li class="nav-item">
      <a class="nav-link" id="home-tab" data-toggle="tab" href="#'.$row['examcontent_id'].'" role="tab" aria-controls="home" aria-selected="true"><b class="h5">'.strtoupper($row['title']).'</b></a>
    </li>';
      $tab_content .= '<div class="tab-pane fade" id="'.$row['examcontent_id'].'" role="tabpanel" aria-labelledby="home-tab">
      <div class="container mt-3">
        <p>'.htmlspecialchars_decode($row['content']).'</p>
      </div>
    </div>';
    }
    $count++;
  }
}else{
  echo '<script> location.replace("exam.php"); </script>';
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

<footer class="footer text-center text-light container-fluid bg-dark">
  <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="info">
            <ul class="nav nav-pills">
              <li><a href="" class="text-white"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
              <li><a href="" class="text-white"><i class="fa fa-envelope"></i> info@domain.com</a></li>
            </ul>
          </div>
          
        </div>
        <div class="col-md-6">
          <div class="pull-right">
            <button class="btn top_btn"><i class="fa fa-facebook"></i></button>
            <button class="btn top_btn"><i class="fa fa-twitter"></i></button>
            <button class="btn top_btn"><i class="fa fa-trash"></i></button>
            <button class="btn top_btn"><i class="fa fa-close"></i></button>
            <button class="btn top_btn"><i class="fa fa-folder"></i></button>
          </div>
        </div>
      </div>
    </div>
</footer>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" ></script>
<script type="text/javascript" src="js/jry.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>

<script type="text/javascript" src="js/swiper.js"></script>
<script type="text/javascript">
  $('.menu-toggle').hover(function(){
    $('nav').toggleClass('activation');
  });
  $('ul.mainUl li').hover(function(){
    $(this).siblings().removeClass('active');
    $(this).toggleClass('active');
  });
  $('.touchHere').hover(function(){
    $('#consert').css(({"position": "absolute", "top": "20px"}));
  });
  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    arrows:false,
    centerMode: true,
    focusOnSelect: true,
    variableWidth: true,
    autoplay: true,
    autoplaySpeed: 2000,
  });
  $('.responsive').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  arrows:false,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
</script>
  </body>
</html>