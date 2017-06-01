<?php
session_start();
include '../db_connect.php';


$adults = $_POST['nad'];
$children = $_POST['nch'];
$infants = $_POST['nin'];
$fnum = $_POST['fnum'];
$rfnum = $_POST['rfnum'];
$jdate = $_POST['jdate'];
$rdate = $_POST['rdate'];
$jsource = $_POST['jsource'];
$jdest = $_POST['jdest'];
$ret = $_POST['ret'];
$total = 0;


if ($stmt1 = $conn->prepare('SELECT fare 
	FROM flights
	WHERE flightnum = ?
	LIMIT 1')) {

	$stmt1->bind_param('s', $fnum);
	$stmt1->execute();    
	$stmt1->store_result();
	$stmt1->bind_result($fare);
	$stmt1->fetch();
}

if ($stmt2 = $conn->prepare('SELECT fare 
	FROM flights
	WHERE flightnum = ?
	LIMIT 1')) {

	$stmt2->bind_param('s', $rfnum);
	$stmt2->execute();    
	$stmt2->store_result();
	$stmt2->bind_result($rfare);
	$stmt2->fetch();
}

$tfare=($fare*$adults)+($fare*$children*.75)+($infants*$fare*.1);
$tnfare=($rfare*$adults)+($rfare*$children*.75)+($infants*$rfare*.1);

echo $tnfare;


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
  					<h4 class="head_4">Passenger Details</h4>
  					<form class="form-signin" action="book3.php" method="post">
  						<?php 
  						for ($i=1; $i <=$adults ; $i++) {
  						echo '
  						<label class="form_label">Adult '. $i.'</label>
  						<div class="row">
  						<div class="col-xs-2">
  						<select class="form-control" id="element_1" name="atitle[]"> 
  							<option selected="selected">Mr</option>
  							<option>Mrs</option>
  							<option>Ms</option>
						</select>
						</div>
						<div class="col-xs-10">
							<input type="text" name="aname[]" id="inputEmail" class="form-control" placeholder="Enter passenger name" required >
						</div>
						</div>'; 
						$total++;
  							
  						}
  						for ($i=1; $i <=$children ; $i++) {
  						echo '
  						<label class="form_label">Child '. $i.'</label>
  						<div class="row">
  						<div class="col-xs-2">
  						<select class="form-control" id="element_1" name="ctitle[]"> 
  							<option selected="selected">Master</option>
  							<option>Miss</option>
						</select>
						</div>
						<div class="col-xs-10">
							<input type="text" name="cname[]" id="inputEmail" class="form-control" placeholder="Enter passenger name" required >
						</div>
						</div>'; 
						$total++;
  							
  						}
  						for ($i=1; $i <=$infants ; $i++) {
  						echo '
  						<label class="form_label">Infant '. $i.'</label>
  						<div class="row">
  						<div class="col-xs-2">
  						<select class="form-control" id="element_1" name="ititle[]"> 
  							<option selected="selected">Mr</option>
  							<option>Mrs</option>
  							<option>Ms</option>
						</select>
						</div>
						<div class="col-xs-10">
							<input type="text" name="iname[]" id="inputEmail" class="form-control" placeholder="Enter passenger name" required >
						</div>
						</div>'; 
						$total++;
  							
  						}
  						
						?>
						<label class="form_label">Passenger Carrying ID Proof</label>
  						<select class="form-control" id="element_1" name="pass_id"> 
  						<?php 

  						for ($i=1; $i <=$adults ; $i++) {
  						echo '
  						<option value='.$i.'>Adult '.$i.'</option>'; 
  							
  						}
  						 ?>
  							
						</select>
						<label class="form_label">Select type of ID</label>
						<select class="form-control" name="id_type">
							<option>Election ID Card</option>
							<option>Driving Liscense</option>
							<option>Adhar Card</option>
						</select>
						<label class="form_label">ID proof number</label>
  						<input type="text" name="pass_id_no" id="inputEmail" class="form-control" placeholder="Enter ID proof number" required >
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
  					<input type="hidden" name="tfare" value="<?php echo $tfare ?>">
  					<input type="hidden" name="tnfare" value="<?php echo $tnfare ?>">
  					<input type="hidden" name="total" value="<?php echo $total ?>">
  					<input type="hidden" name="adults" value="<?php echo $adults ?>">
  					<input type="hidden" name="children" value="<?php echo $children ?>">
  					<input type="hidden" name="infants" value="<?php echo $infants ?>">
  					<button class="btn btn-primary btn-sub" type="submit">Next</button>
  				</center>
  			</form>
  		</section><!--main_c-->

  	</div> <!-- /container -->


  	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  	<script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
  </html>