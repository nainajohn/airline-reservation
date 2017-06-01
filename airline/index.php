<?php 
if(isset($_GET['error'])) {
  $errm = $_GET['error'];
}
if(isset($_GET['msg'])) {
  $msg = $_GET['msg'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Airline Reservation System</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="styles.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body>

      <div class="container">
        <section id="main_c">
          <h2 class="main_header">Book your flight here!</h2>
          <?php 
          if (isset($errm)) {
            echo '<div class="alert alert-danger" role="alert">'.$errm.'</div>';
          }
          if (isset($msg)) {
            echo '<div class="alert alert-success" role="alert">'.$msg.'</div>';
          }
          ?>
          
          <div class="col-md-6">
          <div id="main_l">
            <h4 class="head_4">Login Here</h4>
            <form class="form-signin" action="login.php" method="post">
              <label for="inputEmail" class="form_label">User Email</label>
              <input type="email" name="lmail" id="inputEmail" class="form-control" placeholder="Enter your Email ID" required autofocus>
              <label for="inputPassword" class="form_label">Password</label>
              <input type="password" name="lpass" id="inputPassword" class="form-control" placeholder="Enter Your Password" required>
              <label class="form_main"></label>
              <button class="btn btn-primary btn-sub" type="submit">Sign in</button>
            </form>
          </div>
          </div>
          
          <div class="col-md-6">
          <div id="main_r">
            <h4 class="head_4">Register Now</h4>
            <form class="form-signin" action="regs.php" method="post">
              <label for="inputEmail" class="form_label">User Name</label>
              <input type="text" name="rname" id="inputEmail" class="form-control" placeholder="Enter your Name" required >
              <label for="inputPassword" class="form_label">Password</label>
              <input type="password" name="rpass" id="inputPassword" class="form-control" placeholder="Enter a Password" required>
              <label for="inputPassword" class="form_label">Gender</label>
              <select name="rgen" class="form-control">
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
              </select>
              <label for="inputEmail" class="form_label">User Email</label>
              <input type="email" name="rmail" id="inputEmail" class="form-control" placeholder="Enter your Email ID" required >
              
              <label for="inputEmail" class="form_label">Phone Number</label>
               <div class="input-group">
                <div class="input-group-addon">+91</div>
                <input type="text" class="form-control" id="exampleInputAmount" placeholder="Enter your 10 digit phone number" required maxlength="10" minlength="10" name="rphone">
              </div>
              
              <label class="form_main"></label>

              <button class="btn btn-primary btn-sub" type="submit">Register Now</button>
            </form>
            </div>
          </div>

        </section><!--main_c-->

      </div> <!-- /container -->


      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="js/ie10-viewport-bug-workaround.js"></script>
    </body>
    </html>
