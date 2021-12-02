 <?php include 'inc/header.php'; ?>
<section class="container-fluid bg-success lineHeight">
  <div class="container p-5">
    <h1 class="text-light pull-left">All University</h1>
    <div class="pb-5">
      <img src="images/abroad-abroad-study.jpg" width="100" class="pull-right rounded-circle pb-3" alt="tt">
    </div>
      
  </div>
  <br>
</section>
<section class="container-fluid mainSelector">
  <div class="container pb-5">
    <div class="row">
      <div class="col-md-7">
        <h2 class="p-4 text-warning">Search University which you want Here</h2>
      </div>
      <div class="col-md-5">
        <div id="msg"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="input-group mb-3">
          <input type="text" id="search_university" class="form-control" placeholder="Enter University Name" aria-label="Recipient's username" aria-describedby="basic-addon2">
          
        </div>
      </div>  
    </div>
  </div>
</section>
<section class="container-fluid container mt-4">
  <div id="result"></div>
</section>
<section class="container-fluid mt-5">
  <div class="container">
    <h1 class="p-3 text-center text-success">Which students already went abroad </h1><hr>
    <div class="row">
      <div class="col-md-4">
        <p class="text-design text-muted">Simple yet analytical approaches for problem-solving, explained by the faculty, was greatly helpful for solving difficult questions. The innovative teaching adopted by the faculty make the test much easier.</p>
        <div class="row">
          <div class="col-md-6">
            <img src="images/bro.jpg" alt="" width="100" class="img-fluid mx-auto d-block rounded-circle" >
          </div>
          <div class="col-md-6">
            <h5 class=""><b>mr rinko</b></h5>
            <p class="text-design text-muted">Simple yet analyticalr.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <p class="text-design text-muted">Simple yet analytical approaches for problem-solving, explained by the faculty, was greatly helpful for solving difficult questions. The innovative teaching adopted by the faculty make the test much easier.</p>
        <div class="row">
          <div class="col-md-6">
            <img src="images/bro.jpg" alt="" width="100" class="img-fluid mx-auto d-block rounded-circle" >
          </div>
          <div class="col-md-6">
            <h5 class=""><b>mr rinko</b></h5>
            <p class="text-design text-muted">Simple yet analyticalr.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <p class="text-design text-muted">Simple yet analytical approaches for problem-solving, explained by the faculty, was greatly helpful for solving difficult questions. The innovative teaching adopted by the faculty make the test much easier.</p>
        <div class="row">
          <div class="col-md-6">
            <img src="images/bro.jpg" alt="" width="100" class="img-fluid mx-auto d-block rounded-circle" >
          </div>
          <div class="col-md-6">
            <h5 class=""><b>mr rinko</b></h5>
            <p class="text-design text-muted">Simple yet analyticalr.</p>
          </div>
        </div>
      </div>
    </div>
      
  </div>
</section>
 <?php include 'inc/footer.php'; ?>
<script type="text/javascript">
  $(document).ready(function(){
    load_data();
    function load_data(txt)
     {
      $.ajax({
       url:"ajax/fetch_university.php",
       method:"POST",
       data:{txt:txt},
       success:function(data)
       {
        $('#result').html(data);
       }
      });
     }
   $('#search_university').keyup(function(){
      var txt = $(this).val();
      if (txt != '') {
        load_data(txt);
      }else{
        load_data();
      }
    });
 })
 </script>