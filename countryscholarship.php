<?php include 'inc/header.php'; ?>
	<section class="container-fluid mt-3 bg-secondary">
		<div class="p-4 container">
			<h2 class="text-center text-danger">Search Scholarship By country</h2>
			<div class="row">
		    <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label"><b>Choose University :</b> </label>
		    <div class="col-sm-9">
			    <select class="form-control" id="uni" name="university">
					  <option>Select University</option>
					  <option value="5">USA</option>
					  <option>Canada</option>
					  <option>Australia</option>
					</select>
				</div>
		</div>
	</section>
	<div class="container mt-3" id="scolarlist">
		
	</div>
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#uni').change(function(){
			var txt = $(this).val()
			$.ajax({
         url:"ajax/fetch_scolars.php",
         method:"POST",
         data:{txt:txt},
         success:function(data)
         {
          $("#scolarlist").html(data);
         }
       });
			
		});
	})
</script>
</body>
</html>