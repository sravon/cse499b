<?php 
  include 'inc/header.php'; 
 ?>
<?php 

$login = Session::get('login');
  if (!$login) {
    header("Location: login.php");
  }

?>
<section class="container-fluid header">
  <div class="container mt-3">
    <div class="row">
<?php
    
    $userdata = $user->userById($_SESSION['cmrId']);
    print_r($userdata);
    echo "hi" . $_SESSION['cmrId'];
 ?>
<?php 
 
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])){
        $cutomerlog = $user->cutomerUpdate($_POST,$_SESSION['cmrId']);
        echo $cutomerlog;
    }

 ?>


<div class="col-md-7 border border-secondary rounded mb-1 p-3 mx-auto pt-5">
      <h4 class="text-center text-secondary p-3 bg-success rounded">Sign Up and Start Something!</h4>
      <div><?php if (isset($cutomerreg)) {
          echo '<h5 class="text-danger">'.$cutomerreg.'</h5>';
        } ?></div>
      
      <form id="formSignup" method="post" action="">
        <div class="form-group">
          <input type="text" name="name" class="form-control" aria-describedby="emailHelp" name="name" placeholder="Enter name" value="<?php echo $userdata['cus_name']; ?>" >
        </div>
        <div class="form-group">
          <input type="text" name="username" class="form-control" aria-describedby="emailHelp" name="email" placeholder="Enter name" value="<?php echo $userdata['nickname']; ?>" >
        </div>
        <div class="form-group">
          <input type="text" name="email" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter Username"
          value="<?php echo $userdata['cus_email']; ?>" >
        </div>
          
        <fieldset class="form-group border p-1">
            <div class="row">
              <legend class="col-form-label col-sm-3 pt-0"><strong>Gender :</strong></legend>
              <div class="col-sm-9 pt-2">
                <div class="form-check form-check-inline mr-5">
                  <input class="form-check-input" type="radio" name="gender" id="gridRadios1" <?php print ($userdata['cus_gender']  == 'm')? 'checked':null; ?> value="m">
                  <label class="form-check-label" for="gridRadios1">
                    MALE
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="gridRadios2" <?php print ($userdata['cus_gender']  == 'f')? 'checked':null; ?> value="f">
                  <label class="form-check-label" for="gridRadios2">
                    FEMALE
                  </label>
                </div>
              </div>
            </div>
        </fieldset>
        <div class="form-group">
            <input type="text" name="address" class="form-control" id="address" placeholder="Enter Address" value="<?php echo $userdata['cus_address']; ?>" >
        </div>
        <div class="row">
            <div class="col">
              <input type="text" name="city" class="form-control" placeholder="Enter City" value="<?php echo $userdata['cus_state']; ?>" >
            </div>
            <div class="col">
              <input type="text" name="postcode" class="form-control" placeholder="Enter Postcode" value="<?php echo $userdata['cus_code']; ?>" >
            </div>
        </div>
        <br>
        <div class="form-group">
            <input type="text" name="phone" class="form-control" id="phone" aria-describedby="phone" placeholder="Enter Number" maxlength="11" value="<?php echo $userdata['cus_phone']; ?>" />
        </div>
        
        <button type="submit" name="update" class="btn btn-outline-primary">Update</button>
      </form>
    </div>

      </div>
  </div>
</section>
<?php 
  include 'inc/footer.php'; 
 ?>
      


