<?php

session_start();
include '../db_connect.php';

$adults = $_POST['adults'];
$children = $_POST['children'];
$infants = $_POST['infants'];
$total = $_POST['total'];
$idproof = $_POST['id_type'];
$idnum = $_POST['pass_id_no'];
$fnum = $_POST['fnum'];
$rfnum = $_POST['rfnum'];
$idholder = $_POST['pass_id'];
$jdate = $_POST['jdate'];
$rdate = $_POST['rdate'];
$tfare = $_POST['tfare']; 
$tnfare = $_POST['tnfare']; 
$jsource = $_POST['jsource'];
$jdest = $_POST['jdest'];
$ret = $_POST['ret'];
$jdate = $_POST['jdate'];
$rdate = $_POST['rdate'];


$ftotal = $tfare + $tnfare;
if($_POST){
	if(isset($_POST["aname"])){
    $adnames = implode(",", $_POST["aname"]);}
	else{
		$adnames="";
	}
	
	if(isset($_POST["iname"]))
    {$infnames=implode(",", $_POST["iname"]);}
    else{
		$infnames="";
	}



    if(isset($_POST["cname"])){
	$chnames=implode(",", $_POST["cname"]);}
	else{
		$chnames="";
	}
	
	
	if(isset($_POST["atitle"])){
	$adtitle=implode(",", $_POST["atitle"]);}
	else{
		$adtitle="";
	}
	
	
	if(isset($_POST["ctitle"])){
    $chtitle=implode(",", $_POST["ctitle"]);}
	else{
		$chtitle="";
	}
	
	
	
	if(isset($_POST["ititle"])){
	$inftitle=implode(",", $_POST["ititle"]);}
	else{
		$inftitle="";
	}
	
}

$prefix=substr($fnum, 0, 2);
$pnr=$prefix . uniqid();

if ($insert_stmt = $conn->prepare("INSERT INTO bookings (flightnum,retflightnum,numofpass, adults, children,infants,fare, date, rdate, idproof,idnum,idpassenger,adtitle,chtitle,inftitle,pnr,origin,destin,ret) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")) {
		$insert_stmt->bind_param('ssssssssssssssssssi', $fnum, $rfnum, $total, $adnames, $chnames, $infnames, $ftotal, $jdate, $rdate, $idproof, $idnum, $idholder, $adtitle, $chtitle, $inftitle, $pnr, $jsource, $jdest, $ret);
		if (!$insert_stmt->execute()) {
			echo $conn->error;
			header('Location:index.php?error=Registration failure: INSERT');
		}




$adtitles11=explode(",", $adtitle);
$adnames11=explode(",", $adnames);



$chtitles11=explode(",", $chtitle);
$chnames11=explode(",", $chnames);



$inftitles11=explode(",", $inftitle);
$infnames11=explode(",", $infnames);



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
  			<h4 class="main_header">Welcome<a href="index.php"> <?php echo $_SESSION['uname']; ?> </a>| User ID : <?php echo $_SESSION['uid']; ?> | Email : <?php echo $_SESSION['email']; ?> | <a href="../logout.php">Logout</a></h4>
  			

  			<div class="col-md-6">
  				<div id="main_l2">
  					<h4 class="head_4">Deperture Ticket</h4>
  					<table class="table table-bordered">
  					<tr><th colspan="3">PNR No : <?php echo $pnr; ?></th></tr>
  					<tr><th colspan="3">Origin : <?php echo $jsource; ?></th></tr>
  					<tr><th colspan="3">Destination : <?php echo $jdest; ?></th></tr>
  					<tr><th colspan="3">Journey date : <?php echo $jdate; ?></th></tr>
  					<tr><th>Sl.No.</th><th>Passanger Name</th><th>Category</th></tr>
 					<?php 

 					for ($i=0; $i < $adults; $i++) { 
 						echo '<tr><td>'.($i+1).'</td><td>'.$adtitles11[$i].
 						'.'.$adnames11[$i].'</td>'.
 						'<td>Adult'.
 						'</td></tr>';
 					}

 					for ($j=0; $j < $children; $j++) { 
 						echo '<tr><td>'.($j+$i+1).'</td><td>'.$chtitles11[$j].
 						'.'.$chnames11[$j].'</td>'.
 						'<td>Child'.
 						'</td></tr>';
 					}

 					for ($k=0; $k < $infants; $k++) { 
 						echo '<tr><td>'.($k+$j+$i+1).'</td><td>'.$inftitles11[$k].
 						'.'.$infnames11[$k].'</td>'.
 						'<td>Infant'.
 						'</td></tr>';
 					}



 					 ?>
 					 <tr><th colspan="3">Total Fare : <?php echo $ftotal; ?></th></tr>
 					 <tr><th colspan="3"><?php echo $idproof; ?> Number of Adult <?php echo $idholder; ?> : <?php echo $idnum; ?></th></tr>
					</table>
				</div>
			</div>
			<div class="col-md-6">
  				<div id="main_r2">
  				<?php if($ret == 1): ?>
  					<h4 class="head_4">Return Ticket</h4>

  					  					<table class="table table-bordered">
  					<tr><th colspan="3">PNR No : <?php echo $pnr; ?></th></tr>
  					<tr><th colspan="3">Origin : <?php echo $jdest; ?></th></tr>
  					<tr><th colspan="3">Destination : <?php echo $jsource; ?></th></tr>
  					<tr><th colspan="3">Journey date : <?php echo $rdate; ?></th></tr>
  					<tr><th>Sl.No.</th><th>Passanger Name</th><th>Category</th></tr>
 					<?php 

 					for ($i=0; $i < $adults; $i++) { 
 						echo '<tr><td>'.($i+1).'</td><td>'.$adtitles11[$i].
 						'.'.$adnames11[$i].'</td>'.
 						'<td>Adult'.
 						'</td></tr>';
 					}

 					for ($j=0; $j < $children; $j++) { 
 						echo '<tr><td>'.($j+$i+1).'</td><td>'.$chtitles11[$j].
 						'.'.$chnames11[$j].'</td>'.
 						'<td>Child'.
 						'</td></tr>';
 					}

 					for ($k=0; $k < $infants; $k++) { 
 						echo '<tr><td>'.($k+$j+$i+1).'</td><td>'.$inftitles11[$k].
 						'.'.$infnames11[$k].'</td>'.
 						'<td>Infant'.
 						'</td></tr>';
 					}



 					 ?>
 					 <tr><th colspan="3">Total Fare : <?php echo $ftotal; ?></th></tr>
 					 <tr><th colspan="3"><?php echo $idproof; ?> Number of Adult <?php echo $idholder; ?> : <?php echo $idnum; ?></th></tr>
					</table>
				<?php else: ?>
				<?php endif; ?>
				</div>
			</div>
  				
  		</section><!--main_c-->

  	</div> <!-- /container -->


  	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  	<script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
  </html>