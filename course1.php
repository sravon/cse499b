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
        <h2 class="p-4 text-dark">Search your product which you want <br>Here</h2>
      </div>
      <div class="col-md-5">
        <div id="msg"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
          <input type="text" id="search_course" class="form-control" placeholder="Enter product Name" aria-label="Recipient's username" aria-describedby="basic-addon2">
          
          <div id="major"></div>
        
      </div>  
    </div>
  </div>
</section>
<section class="container-fluid container mt-4">
  <div id="result"></div>
</section>

 <?php include 'inc/footer.php'; ?>
<script type="text/javascript">
  $(document).ready(function(){
    
   $('#search_course').keyup(function(){
      var txt = $(this).val();
      if (txt != '') {
        $.ajax({
         url:"ajax/fetch_course.php",
         method:"POST",
         data:{txt:txt},
         success:function(data)
         {
          $('#major').fadeIn();
          $('#major').html(data);
         }
        });
      }
    });
    load_data();
    function load_data(value)
    {
      $.ajax({
       url:"ajax/fetch_course_list.php",
       method:"POST",
       data:{value:value},
       success:function(data)
       {
        $('#result').html(data);
       }
      });
    }
    $(document).on('click','li',function(){
      $('#search_course').val($(this).text());
      var value = $('#search_course').val();
      $('#major').fadeOut();
        load_data(value);
        if(document.location.href.contains('?')) {
            var url = document.location.href+"&success=yes";
        }else{
            var url = document.location.href+"?success=yes";
        }
          document.location = url;
      
    })
 })
 </script>