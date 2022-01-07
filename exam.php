<?php include 'inc/header.php'; ?>
<?php 

$login = Session::get('login');
  if (!$login) {
    header("Location: login.php");
  }

?>
<section class="container-fluid bg-success lineHeight">
  <div class="container p-5">
    <h1 class="text-light pull-left">Study Abroad Exams</h1>
    <div class="pb-5">
      <img src="images/abroad-abroad-study.jpg" width="100" class="pull-right rounded-circle pb-3" alt="tt">
    </div>
      
  </div>
  <br>
</section>
<section class="container container-fluid mt-4">
  <div class="row">
<?php 
$allExam = $exam->allExam();
if ($allExam) {
  while ($row = mysqli_fetch_array($allExam)){
 ?>
    <div class="col-md-4 mb-2 ">
      <h3 class="p-4 bg-secondary text-light text-center"><?php echo strtoupper($row['exam_title']); ?></h3>
      <ul class="list-group">
<?php 
 $viewExamContent = $exam->viewExamContent($row['exam_id']);
 if ($viewExamContent) {
    while($row1 = mysqli_fetch_array($viewExamContent)){
        echo '<li class="list-group-item">'.strtoupper($row1['title']).'<i class="fa fa-arrow-right pull-right" aria-hidden="true"></i></li>';
    }};
?>
        
        <li class="list-group-item">Exam Dates<i class="fa fa-arrow-right pull-right" aria-hidden="true"></i></li>
        <li class="list-group-item">Registration<i class="fa fa-arrow-right pull-right" aria-hidden="true"></i></li>
        <li class="list-group-item">Exam Fees<i class="fa fa-arrow-right pull-right" aria-hidden="true"></i></li>
        <li class="list-group-item">Exam Pattern<i class="fa fa-arrow-right pull-right" aria-hidden="true"></i></li>
        <li class="list-group-item">Syllabus<i class="fa fa-arrow-right pull-right" aria-hidden="true"></i></li>
        <li class="list-group-item">Preparation<i class="fa fa-arrow-right pull-right" aria-hidden="true"></i></li>
        <li class="list-group-item">Scores<i class="fa fa-arrow-right pull-right" aria-hidden="true"></i></li>
        <li class="list-group-item"><a href="" class="float-right pr-2">View All</a></li>
      </ul>
    </div>
<?php }} ?>
   
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