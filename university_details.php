 <?php include 'inc/header.php'; ?>
<div class="container-fluid bg-secondary lineHeight">
  <div class="container p-5">
    <h1 class="text-center text-dark">University Details</h1>
  </div>
</div>
<br>
<section class="container-fluid container mt-4">
  <div class="row border border-danger p-1">
    <div class="col-md-3">
      <div class="p-5">
        <img src="images/bro.jpg" width="150" alt="img">
      </div>
        
    </div>
    <div class="col-md-8 mb-2">
      <h3 class="text-dark"><b>UNIVERSITY OF OXFORD</b></h2>
      <h4 class="text-muted">Location:Wellington, UK</h3>
      <h4 class="text-muted">Bachelors: GBP 16230 </h4>
      <h5 class="text-muted">Entry Criteria: IELTS , </h5>
      <h5 class="text-muted">Masters: GBP 18620 </h5>
      <button class="btn btn-primary">view</button>

    </div>
  </div>
</section>
<section class="container-fluid container mt-4">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#courses" role="tab" aria-controls="home" aria-selected="true"><b class="h5">Courses</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#ranking" role="tab" aria-controls="profile" aria-selected="false"><b class="h5">ranking</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tution_fees" role="tab" aria-controls="contact" aria-selected="false"><b class="h5">tution fees</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="home-tab" data-toggle="tab" href="#exam_accepted" role="tab" aria-controls="home" aria-selected="true"><b class="h5">exam accepted</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#gallery" role="tab" aria-controls="profile" aria-selected="false"><b class="h5">gallery</b></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#apply_now" role="tab" aria-controls="contact" aria-selected="false"><b class="h5">apply now</b></a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="courses" role="tabpanel" aria-labelledby="home-tab">
      <div class="container mt-3">
        <div>
          <h3>Execitve MBA</h3>
          <div class="row">
            <div class="col-md-3">
              <h5 class="text-muted">Duration</h5>
              <h5 class="text-dark">21 Month</h5>
            </div>
            <div class="col-md-3">
              <h5 class="text-muted">Tusion Fees</h5>
              <h5 class="text-dark">GBP 39250</h5>
            </div>
            <div class="col-md-3">
              <h5 class="text-muted">Exams Accepted</h5>
              <h5 class="text-dark">GMAT,ILETS</h5>
            </div>
            <div class="col-md-3">
              <button class="btn btn-success">view Details</button>
            </div>
          </div>
        </div>
        <hr>
        <div>
          <h3>Execitve MBA</h3>
          <div class="row">
            <div class="col-md-3">
              <h5 class="text-muted">Duration</h5>
              <h5 class="text-dark">21 Month</h5>
            </div>
            <div class="col-md-3">
              <h5 class="text-muted">Tusion Fees</h5>
              <h5 class="text-dark">GBP 39250</h5>
            </div>
            <div class="col-md-3">
              <h5 class="text-muted">Exams Accepted</h5>
              <h5 class="text-dark">GMAT,ILETS</h5>
            </div>
            <div class="col-md-3">
              <button class="btn btn-success">view Details</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="tab-pane fade" id="ranking" role="tabpanel" aria-labelledby="profile-tab">
      <div class="container mt-3">
        <h2 class="p-2">University of Oxford Ranking </h2>
        <hr>
        <div class="row">
          <div class="col-md-2">
            <img src="" alt="img">
          </div>
          <div class="col-md-6">
            <h3 class="text-dark">QS World University Ranking</h3>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-2">
            <img src="" alt="img">
          </div>
          <div class="col-md-6">
            <h3 class="text-dark">QS World University Ranking</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="tution_fees" role="tabpanel" aria-labelledby="contact-tab">
      <div class="container mt-3">
        <h2 class="p-2">University of Oxford Tuition Fees </h2>
        <hr>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead class="bg-success text-center text-light h5">
              <th>Courses</th>
              <th>Duration</th>
              <th>Tuition Fees</th>
            </thead>
            <tbody class="h6">
              <tr>
                <td>Medicine and HealthCare (1 Courses) </td>
                <td>6 year</td>
                <td>GBP 17040</td>
              </tr>
              <tr>
                <td>Medicine and HealthCare (1 Courses) </td>
                <td>6 year</td>
                <td>GBP 17040</td>
              </tr>
              <tr>
                <td>Medicine and HealthCare (1 Courses) </td>
                <td>6 year</td>
                <td>GBP 17040</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="exam_accepted" role="tabpanel" aria-labelledby="home-tab">
      <div class="container mt-3">
        <h2 class="p-2">University of Oxford Entry Requirements</h2>
        <hr>
        <div class="table-responsive" style="width: 60%">
          <table class="table table-bordered">
            <thead class="bg-success text-center text-light h5">
              <th>Courses</th>
              <th>Exam</th>
            </thead>
            <tbody class="h6">
              <tr>
                <td>Medicine and HealthCare (1 Courses) </td>
                <td>6 year</td>
              </tr>
              <tr>
                <td>Medicine and HealthCare (1 Courses) </td>
                <td>6 year</td>
              </tr>
              <tr>
                <td>Medicine and HealthCare (1 Courses) </td>
                <td>6 year</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="profile-tab">gallery</div>
    <div class="tab-pane fade" id="exam_fees" role="tabpanel" aria-labelledby="contact-tab">exam_fees</div>
    <div class="tab-pane fade" id="apply_now" role="tabpanel" aria-labelledby="home-tab">apply_now</div>
  </div>
</section>
<br>
<?php include 'inc/footer.php'; ?>