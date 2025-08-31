<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.7/css/bootstrap.min.css" integrity="sha512-fw7f+TcMjTb7bpbLJZlP8g2Y4XcCyFZW8uy8HsRZsH/SwbMw0plKHFHr99DN3l04VsYNwvzicUX/6qurvIxbxw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h3 class="heading">Login</h3>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-4"> <!-- Adjust width here -->
      
      <form class="row g-3" action="includes/login.inc.php" method="post">
        <div class="col-12">
          <input type="text" name="username" class="form-control" placeholder="Username">
        </div>
        <div class="col-12">
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </form>
      
    </div>
  </div>
</div>

<h3 class="heading">Sign Up</h3>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-4"> <!-- Adjust width here -->
      
      <form class="row g-3" action="includes/signup.inc.php" method="post">
        
        <?php 
        signup_inputs(); 
        ?>

        <div class="col-12">
<!-- input username--> 
        </div>
        <div class="col-12">
          <!-- input password-->
        </div>
        <div class="col-12">
          <!-- input email-->
        </div>
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-primary">Sign Up</button>
        </div>
      </form>
      
    </div>
  </div>
</div>

<div class="row justify-content-center">
  <div class="col-md-6 col-lg-4">
    <?php
    Check_signup_errors();
    ?>
  
  </div>
</div>

</div>

</body>
</html>