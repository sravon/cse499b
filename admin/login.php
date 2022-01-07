<?php
     $filepath = realpath(dirname(__FILE__));
     include_once ($filepath.'/../classes/User.php');
    $user = new User();
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Client Project</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background: #cccc"> 
<section class="container-fluid" style="margin-top: 50px">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-6">
<?php 
 
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])){
        $cutomerlog = $user->adminLogin($_POST);
    }

 ?>
        <div><?php if (isset($cutomerlog)) {
          echo '<h5 class="text-danger">'.$cutomerlog.'</h5>';
        } ?></div>
        <form method="post" style="background: #fafafa;padding: 30px;">
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary" name="login">Sign in</button>
            </div>
          </div>
        </form>
      </div>
      </div>
      <div class="col-md-3">
      </div>
    </div>
  </div>
</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  </body>
</html>
