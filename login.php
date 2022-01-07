
<!DOCTYPE html>
<html>
<head>
  <title>Client Project</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
      .header{
        height: 100vh;background:url(images/effect.jpg);background-size: cover;
        position: relative;overflow: hidden;
      }
      .header:after{
        content: "";
        position: absolute;bottom: 0;left: 0;width: 100%;
        background-image: url(https://uradi.me/assets/index/svg/wave-static-02.svg);
        background-repeat: no-repeat;
        height: 200px;
      }
    </style>
</head>
<body class="header" > 
<section class="container-fluid mt-5 mb-3">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-6">
<?php
  spl_autoload_register(function ($class) {
     include 'classes/' . $class . '.php';
 });
    $user = new User();
 ?>
<?php 
 
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])){
        $cutomerlog = $user->cutomerLogin($_POST);
    }

 ?>
        <div><?php if (isset($cutomerlog)) {
          echo '<h5 class="text-danger">'.$cutomerlog.'</h5>';
        } ?></div>
        <form class="bg-secondary p-3" method="post">
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
              <a href="registration.php" class="text-light ml-3">Don't have an account? Click here</a>
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
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
  </body>
</html>
