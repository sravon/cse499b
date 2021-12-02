<?php include 'inc/header.php'; ?>
<?php

  $allSlider1 = $forum->allSlider();
  function make_slide_indicators($allSlider1){
    if ($allSlider1) {
      $output = ''; 
      $count = 0;
      while($result = mysqli_fetch_array($allSlider1)){
        if($count == 0)
        {
         $output .= '
         <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
         ';
        }
        else
        {
         $output .= '
         <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
         ';
        }
        $count = $count + 1;
      }
      return $output;
    }
  }
$allSlider = $forum->allSlider();
  function make_slides($allSlider)
{
$output = '';
$count = 0;
  while($row = mysqli_fetch_array($allSlider))
  {
    if($count == 0)
    {
     $output .= '<div class="carousel-item active">';
    }
    else
    {
     $output .= '<div class="carousel-item">';
    }
    $output .= '
   <img src="admin/upload/'.$row["slide_image"].'" alt="'.$row["slide_name"].'" style="max-height:400px" />
   <div class="carousel-caption">
    <h3>'.$row["slide_name"].'</h3>
   </div>
  </div>
  ';
  $count = $count + 1;
  }
  return $output;
}
?>
<div class="container-fluid lineHeight">
    <div class="row">
        <div id="car" class="carousel slide" data-ride="carousel" data-interval="3000" >
           <ol class="carousel-indicators">
              <?php echo make_slide_indicators($allSlider1); ?>
           </ol>
            <div class="carousel-inner">
              <?php echo make_slides($allSlider); ?>
                
            </div>
            <a href="#car" class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a href="#car" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
</div>

<br>
<br>
<section class="head1 container-fluid">
    <div class="container">
         <div class="row sscounter">
           <div class="col-md-4 top_respon" align="center">
              <i class="fa fa-address-book-o" ></i>
              <h3 class="counter text-danger">1321</h3>
              <h5>OUR PLAYERS</h5>
           </div>
           <div class="col-md-4 top_respon" align="center">
              <i class="fa fa-address-book-o" ></i>
              <h3 class="counter text-danger">1321</h3>
              <h5>OUR PLAYERS</h5>
           </div>
           <div class="col-md-4 top_respon" align="center">
              <i class="fa fa-address-book-o" ></i>
              <h3 class="counter text-danger">1321</h3>
              <h5>OUR PLAYERS</h5>
           </div>
       </div>
    </div>
</section>
<br>
<section class="container-fluid container">
  <div class="row p-3" style="border: 2px solid red;border-radius: 21px;">
    <div class="col-md-3">
      <img src="images/question-mark.png" width="100" alt="img">
    </div>
    <div class="col-md-6 bg-success text-light p-3" style="border-radius: 15px 50px;">
      <h5 class="p-3"><b>-> Have Doubts related to Study Abroad?</b></h5>
      <h5><b>Ask the Community Dedicated to Overseas Education!</b></h5>
    </div>
    <div class="col-md-3 p-5">

      <button type="button" class="btn btn-outline-info btn-lg" data-toggle="modal" data-target="#exampleModalCenter">
        Ask Your Doubt
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Inquiry Form</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <form class="bg-light" style="padding: 10px">
                
                <div class="row">
                  <div class="col">
                    <label class="text-dark h5">First Name</label>
                      <input type="text" required class="form-control" placeholder="First name">
                  </div>
                  <div class="col">
                     <label class="text-dark h5">Last Name</label>
                     <input type="text" required class="form-control" placeholder="Last name">
                  </div>
                </div>
                  <br>
                  <div class="row">
                    <div class="col">
                      <label class="text-dark h5">Email</label>
                      <input type="email" class="form-control" placeholder="examplel@mail.com">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col">
                      <label class="text-dark h5">Mobile Number</label>
                        <input type="text" class="form-control" placeholder="Mobile Number">
                    </div>
                    <div class="col">
                      <label class="text-dark h5">Current City</label>
                      <input type="text" class="form-control" placeholder="city">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col">
                      <label class="text-dark h5">Interested Country</label>
                        <select class="form-control">
                          <option>Selcet Option</option>
                        </select>
                    </div>
                    <div class="col">
                      <label class="text-dark h5">Interested Program</label>
                        <select class="form-control">
                          <option>Selcet Option</option>
                      </select>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col">
                      <label class="text-dark h5">Interested Specialization</label>
                        <input type="text" class="form-control" placeholder="city">
                    </div>
                    <div class="col">
                      <label class="text-dark h5">Interested <br> University</label>
                        <input type="text" class="form-control" placeholder="city">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-4">
                      <label class="text-dark h5">Comment: </label>
                    </div>
                    <div class="col-md-8">
                      <textarea class="textArea" cols="41"></textarea>
                    </div>
                  </div>
                  <br>
                  <button class="btn btn-success">Submit</button>
              </form>

            </div>
            
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<br>
<div class="swiper-container container-fluid bg-secondary">
    <div class="swiper-wrapper">
 <?php 
    $memberlist = $mem->allMember();
    if ($memberlist ) {
      while($result = mysqli_fetch_array($memberlist )){
?>
          <div class="swiper-slide">
            <div class="imgBx">
              <img src="admin/upload/<?php echo $result['mem_image']; ?>">
            </div>
            <div class="details p-1">
              <h5><?php echo $result['mem_name'] ?> <span class="text-success">(<?php echo $result['mem_title'] ?>)</span></h5>
              <p class="text-design" ><?php echo $result['mem_des'] ?></p>
            </div>
          </div>
       
  <?php    }
    };
  ?> 
    </div>

    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>
<br>
<!--    start frult-->
<section class="fruit container-fluid bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-6 animated fadeInRight box1">
        <p class="h1 text-center">Our Focus</p>
        <img class=" mx-auto d-block" height="40" src="images/underline.jpg" alt="">
        <br>
        <p class="h4 text-justify text-muted">The MediaQueryData.padding value defines areas that might not be completely visible, like the display "notch" on the iPhone X. The scaffold's body is not inset by this padding value although an appBar or bottomNavigationBar will typically cause the body.</p>
        <br>
        <br>
      </div>
      <div class="col-md-6 animated fadeInLeft box1">
        <h4 class="p-2 text-success text-center border border-secondary">Our Events</h4>
<?php
  $allSlider1 = $forum->allImageById(1);
  function make_slide_indicators1($allSlider1){
    if ($allSlider1) {
      $output = ''; 
      $count = 0;
      while($result = mysqli_fetch_array($allSlider1)){
        if($count == 0)
        {
         $output .= '
         <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
         ';
        }
        else
        {
         $output .= '
         <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
         ';
        }
        $count = $count + 1;
      }
      return $output;
    }
  }
$allSlider = $forum->allImageById(1);
  function make_slides1($allSlider)
{
$output = '';
$count = 0;
  while($row = mysqli_fetch_array($allSlider))
  {
    if($count == 0)
    {
     $output .= '<div class="carousel-item active">';
    }
    else
    {
     $output .= '<div class="carousel-item">';
    }
    $output .= '
   <img src="admin/upload/'.$row["slide_image"].'" alt="'.$row["slide_name"].'" class="img-fluid mx-auto d-block rounded-circle" style="min-height: 400px" />
   <div class="carousel-caption">
    <h3>'.$row["slide_name"].'</h3>
   </div>
  </div>
  ';
  $count = $count + 1;
  }
  return $output;
}
?>
        <div class="carousel slide" data-ride="carousel" data-interval="2000" >
          <div class="carousel-inner">
              <?php echo make_slides1($allSlider); ?>
              <div class="carousel-item">
                  <img src="images/bro.jpg" alt="" class="img-fluid mx-auto d-block rounded-circle" >
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--    Services start-->
<section class="chef container-fluid">
    <div class="contrainer">
       <img class=" mx-auto d-block" height="40" src="images/underline.jpg" alt="">
       <h1 class="text-center"> <span class="text-info">Our </span>Services</h1>
       <img class="mx-auto d-block" height="40" src="images/underline.jpg" alt="">
       <br>
       <div class="row">
           <div class="col-md-3">
               <div class="card text-center">
                   <div class="card-body bg-primary text-light">
                      <h5 class="card-title text-light p-3" style="border-bottom: 2px solid #ccc;">Short Summary</h5>
                      <p class="card-text">At Collegepond, our foremost endeavor is to make your profile stand out by presenting it in the most optimal way, to help you secure admits from top-notch institutions across the globe. We highlight your strengths and address any weaknesses or shortcomings in your academic background, work experience or extracurricular activities.</p>
                   </div>
               </div>
               <br>
           </div>
          <div class="col-md-3 counseling-margin">
            <div class="p-3 counseling-margin-sub">
              <div class="containering counseling-margin-sub1">
                <img src="images/counselling.jpg" alt="Avatar" class="imaging" style="width: 290px;">
                <h3 >Counseling</h3>
                <div class="overlay overlayBottom">
                  <div class="contentLink mx-auto">
                    <h3 class="p-3">Counseling</h3>
                    <b ><a href="f" >PHD</a></b>
                    <hr>
                    <b ><a href="f" >MBA</a></b>
                    <hr>
                    <b><a href="f" >UNDERGRADUATE</a></b>
                    <hr>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 counseling-margin">
            <div class="p-3 counseling-margin-sub">
              <div class="containering counseling-margin-sub1">
                <img src="images/exam.jpg" alt="Avatar" class="imaging" style="width: 290px;">
                <h3 >EXAM</h3>
                <div class="overlay overlayBottom">
                  <div class="contentLink mx-auto">
                    <h3 class="p-3">EXAM</h3>
                    <b ><a href="f" >GRE</a></b>
                    <hr>
                    <b ><a href="f" >GMAT</a></b>
                    <hr>
                    <b><a href="f" >ILETS</a></b>
                    <hr>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 counseling-margin">
            <div class="p-3 counseling-margin-sub">
              <div class="containering counseling-margin-sub1">
                <img src="images/service.jpg" alt="Avatar" class="imaging" style="width: 290px;">
                <h3 >SERVICES</h3>
                <div class="overlay overlayBottom">
                  <div class="contentLink mx-auto">
                    <h3 class="p-3">SERVICES</h3>
                    <b ><a href="f" >WhatsApp</a></b>
                    <hr>
                    <b ><a href="f" >Fb Group</a></b>
                    <hr>
                    <b><a href="f" >Fb Page</a></b>
                    <hr>
                  </div>
                </div>
              </div>
            </div>
          </div>

       </div>
    </div>
</section>

<section class="container-fluid stImg">
  <div class="container">
    <div class="row" style="padding-top: 20px;margin-bottom: 90px;">
      <div class="col-md-3 text-info"><p>16+ YEARS OF EXPREIENCE</p></div>
      <div class="col-md-3 text-info"><p>16+ YEARS OF EXPREIENCE</p></div>
      <div class="col-md-3 text-info"><p>16+ YEARS OF EXPREIENCE</p></div>
      <div class="col-md-3 text-info"><p>16+ YEARS OF EXPREIENCE</p></div>
    </div>
  </div>
  <div class="container bg-white">
    <h3 class="text-center p-3">RECENT STUDENTS ADMITS</h3>
    <div class="row" id="Univerlist">
      <div class="container" align="center">
        <div class="slider responsive">
  <?php 
    $imager = $forum->allImageById(2);
    if ($imager) {
      while($result = mysqli_fetch_array($imager)){
        echo '<img src="admin/upload/'.$result['slide_image'].'" style="width: 100px;height: 100px;">';
      }
    };
  ?> 
        </div>
        
      </div>
  </div>
</section>
<section id="testimonial" >
  <div class="container">
<?php 
  $review = $rev->allReview();
  if ($review ) {
    $reviewimg = '';
    $reviewcontent = '';
    while($row = mysqli_fetch_array($review)){
      $reviewimg .= '<div class="slider_items">
            <img src="admin/upload/'.$row['rev_image'].'" class="rounded-circle" style="width: 100px;height: 66px;">
          </div>';
      $reviewcontent .= '<div class="slider_items">
        <h1>'.$row['rev_name'].'</h1>
        <p>President</p>
        <p>'.$row['rev_cmt'].'</p>
      </div>';
  }}
?>
    <div class="slider slider-nav"  width="100">
      <?php echo $reviewimg; ?>
      
    </div>
    <div class="slider slider-for">
      <?php echo $reviewcontent; ?>
      
    </div>
  </div>
</section>
<section class="head container-fluid mb-3">
    <div class="container">
      <img class=" mx-auto d-block" height="40" src="images/underline.jpg" alt="">
        <h1 class="text-center"> <span class="text-success">M</span>ission <span class="text-info">& </span><span class="text-success">V</span>ission</h1>
        <img class="mx-auto d-block" height="40" src="images/underline.jpg" alt="">
        <br>
        <div class="row ">
           <div class="col-md-5 mbbox bg-secondary animated fadeInLeft" style="padding: 29px;">
               <div class="card text-center">
                    <div class="card-body bg-light text-dark">
                       <p class="h3">Misson</p>
  <?php 
    $mission = $forum->othersValueGetById(3);
    if ($mission) {
      $row = mysqli_fetch_array($mission);
      echo "<p>".$row['other_content']."</p>";
    }
  ?>
                       
                    </div>
               </div>
           </div>
           <div class="col-md-2"></div>
           <div class="col-md-5 mbbox bg-secondary animated fadeInRight" style="padding: 29px;">
               <div class="card text-center">
                    <div class="card-body bg-light text-dark">
                       <p class="h3">Visson</p>
       <?php 
    $vission = $forum->othersValueGetById(4);
    if ($vission) {
      $row = mysqli_fetch_array($vission);
      echo "<p>".$row['other_content']."</p>";
    }
  ?>

                    </div>
               </div>
           </div>
        </div>
    </div>
</section>
<?php include 'inc/footer.php'; ?>