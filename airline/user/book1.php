<?php
session_start();

if (isset($_POST['selectedflight'])) {
}
else header("Location:index.php?error=");

$fnum=$_POST['selectedflight'];
$rfnum=$_POST['selectedretflight'];
$jdate=$_POST['jdate'];
$rdate=$_POST['rdate'];
$jsource=$_POST['jsource'];
$jdest=$_POST['jdest'];
$ret=$_POST['ret'];


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

	<link href="../css/calendar.css" rel="stylesheet">

	<!-- Bootstrap core CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="../styles.css" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="../js/ie-emulation-modes-warning.js"></script>
	<script type="text/javascript" src="../js/calendar.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>

  <body>

  	<div class="container">
  		<section id="main_c">
  			<h4 class="main_header">Welcome <a href="index.php"> <?php echo $_SESSION['uname']; ?> </a> | User ID : <?php echo $_SESSION['uid']; ?> | Email : <?php echo $_SESSION['email']; ?> | <a href="../logout.php">Logout</a></h4>
  			

  			<div class="col-md-12">
  				<div id="main_l">
  					<h4 class="head_4">Passenger Number</h4>
  					<form class="form-signin" action="book2.php" method="post">
  						<label class="form_label">No. of Adults</label>
  						<select class="form-control" id="element_1" name="nad"> 
  							<option value="0" selected="selected">Zero</option>
  							<option value="1" >One</option>
  							<option value="2" >Two</option>
  							<option value="3" >Three</option>
  							<option value="4" >Four</option>
  							<option value="5" >Five</option>
  							<option value="6" >Six</option>
						</select>
						<label class="form_label">No. of Children</label>
  						<select class="form-control" id="element_1" name="nch"> 
  							<option value="0" selected="selected">Zero</option>
  							<option value="1" >One</option>
  							<option value="2" >Two</option>
						</select>
						<label class="form_label">No. of Infants</label>
  						<select class="form-control" id="element_1" name="nin"> 
  							<option value="0" selected="selected">Zero</option>
  							<option value="1" >One</option>
  							<option value="2" >Two</option>
						</select>
  					</div>
  				</div>
  				<center>
  					<input type="hidden" name="jdate" value="<?php echo $jdate ?>">
  					<input type="hidden" name="rdate" value="<?php echo $rdate ?>">
  					<input type="hidden" name="jsource" value="<?php echo $jsource ?>">
  					<input type="hidden" name="jdest" value="<?php echo $jdest ?>">
  					<input type="hidden" name="ret" value="<?php echo $ret ?>">
  					<input type="hidden" name="fnum" value="<?php echo $fnum ?>">
  					<input type="hidden" name="rfnum" value="<?php echo $rfnum ?>">
  					<button class="btn btn-primary btn-sub" type="submit">Next</button>
  				</center>
  			</form>
  		</section><!--main_c-->

  	</div> <!-- /container -->


  	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  	<script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
  </html>