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
       <a class="nav-link active" id="home-tab" data-toggle="tab" href="#gmat_exam" role="tab" aria-controls="home" aria-selected="true"><b class="h5">USA</b></a>
       </li>';
      }
    }
   }
 ?>
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item active">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#gmat_exam" role="tab" aria-controls="home" aria-selected="true"><b class="h5">USA</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#eligibility" role="tab" aria-controls="profile" aria-selected="false"><b class="h5">CANADA</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#syllabus" role="tab" aria-controls="contact" aria-selected="false"><b class="h5">UGANDA</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="home-tab" data-toggle="tab" href="#exam_pattern" role="tab" aria-controls="home" aria-selected="true"><b class="h5">NEPAL</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#preparation" role="tab" aria-controls="profile" aria-selected="false"><b class="h5">BUTAN</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#exam_fees" role="tab" aria-controls="contact" aria-selected="false"><b class="h5">INDIA</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="home-tab" data-toggle="tab" href="#exam_date" role="tab" aria-controls="home" aria-selected="true"><b class="h5">CHINA</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#registration" role="tab" aria-controls="profile" aria-selected="false"><b class="h5">BALI</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#score" role="tab" aria-controls="contact" aria-selected="false"><b class="h5">MALAYSIA</b></a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="gmat_exam" role="tabpanel" aria-labelledby="home-tab">

  <div class="container custom-accordion mt-3">
    <div class="accordion-item active">
      <div class="title">
        <h5><b>Can You Study in USA for Free?</b></h5>
        <span class="open"><i class="fa fa-plus"></i></span>
        <span class="close"><i class="fa fa-minus"></i></span>
      </div>
      <div class="info">
        <p class="text-design">Unfortunately, the answer is no. Unlike Germany, where there are no tuition fees at public universities even for international students, the USA is different. Students can, however, apply for the fully-funded scholarships offered by some of the universities in USA, which can make their study in USA effectively free. Apart from tuition fees, they also cover living expenses for international students.</p>
      </div>
    </div>
    <div class="accordion-item">
      <div class="title">
        <h5><b>Where can I find the full USA University List?</b></h5>
        <span class="open"><i class="fa fa-plus"></i></span>
        <span class="close"><i class="fa fa-minus"></i></span>
      </div>
      <div class="info">
        <p class="text-design">Jeduka has prepared the full list of Universities in the USA to choose for the students and pick what suits them the best. We have a database of more than 790 colleges and universities in USA to provide the most accurate and up to date information. You can access the whole list here: Universities in USA.</p>
      </div>
    </div>
    <div class="accordion-item">
      <div class="title">
        <h5><b>What is the Cost of Studying in USA for Indian Students?</b></h5>
        <span class="open"><i class="fa fa-plus"></i></span>
        <span class="close"><i class="fa fa-minus"></i></span>
      </div>
      <div class="info">
        <p class="text-design">For Indian students, the cost of studying USA can be anywhere around $42500 to $70800, depending on the course, universities and the location one decides to choose. Keep in mind that the medical and management (MBA) courses are much higher compared to other courses. </p>
      </div>
    </div>
    <div class="accordion-item">
      <div class="title">
        <h5><b>What are some of the USA College's Admission Requirements?</b></h5>
        <span class="open"><i class="fa fa-plus"></i></span>
        <span class="close"><i class="fa fa-minus"></i></span>
      </div>
      <div class="info">
        <p>We have already mentioned the universities and colleges’ requirements for the USA above. The general requirements include the certificates, degrees and transcripts of the previous education, valid passport, test requirements, English language proficiency proof and so on. The best way to be aware of the exact requirements is to check out the specific requirements for the course you want to attend.</p>
      </div>
    </div>
  </div>

    </div>

    <div class="tab-pane fade" id="eligibility" role="tabpanel" aria-labelledby="profile-tab">ligibility</div>
    <div class="tab-pane fade" id="syllabus" role="tabpanel" aria-labelledby="contact-tab">syllabus</div>
    <div class="tab-pane fade" id="exam_pattern" role="tabpanel" aria-labelledby="home-tab">exam_pattern</div>
    <div class="tab-pane fade" id="preparation" role="tabpanel" aria-labelledby="profile-tab">preparation</div>
    <div class="tab-pane fade" id="exam_fees" role="tabpanel" aria-labelledby="contact-tab">exam_fees</div>
    <div class="tab-pane fade" id="exam_date" role="tabpanel" aria-labelledby="home-tab">exam_date</div>
    <div class="tab-pane fade" id="registration" role="tabpanel" aria-labelledby="profile-tab">registration</div>
    <div class="tab-pane fade" id="score" role="tabpanel" aria-labelledby="contact-tab">score</div>
  </div>
</section>
<br>
<?php include 'inc/footer.php'; ?>