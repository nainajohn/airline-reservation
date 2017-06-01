<?php  

session_start();
include '../db_connect.php';

if (isset($_POST['pnr'])) {
	$pnr = $_POST['pnr'];
}
else header("Location:index.php?error=");


 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) {
		die("Connection failed: <br>" . $conn->connect_error);
	}
	$sql = "SELECT * FROM bookings WHERE pnr='$pnr'";
	$result = $conn->query($sql);
	$row = mysqli_fetch_object($result);


if(!empty($row->adtitle)) {
$adtitles1=$row->adtitle;
$adnames1=$row->adults;
$adtitles11=explode(",", $adtitles1);
$adnames11=explode(",", $adnames1);
}


if(!empty($row->chtitle)) {
$chtitles1=$row->chtitle;
$chnames1=$row->children;
$chtitles11=explode(",", $chtitles1);
$chnames11=explode(",", $chnames1);
}


if(!empty($row->inftitle)) {
$inftitles1=$row->inftitle;
$infnames1=$row->infants;
$inftitles11=explode(",", $inftitles1);
$infnames11=explode(",", $infnames1);
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
  					<tr><th colspan="3">PNR No : <?php echo $row->pnr; ?></th></tr>
  					<tr><th colspan="3">Origin : <?php echo $row->origin; ?></th></tr>
  					<tr><th colspan="3">Destination : <?php echo $row->destin; ?></th></tr>
  					<tr><th colspan="3">Journey date : <?php echo $row->date; ?></th></tr>
  					<tr><th>Sl.No.</th><th>Passanger Name</th><th>Category</th></tr>
 					<?php 

 					for ($i=0; $i < count($adnames11); $i++) { 
 						echo '<tr><td>'.($i+1).'</td><td>'.$adtitles11[$i].
 						'.'.$adnames11[$i].'</td>'.
 						'<td>Adult'.
 						'</td></tr>';
 					}

 					for ($j=0; $j < count($chnames11); $j++) { 
 						echo '<tr><td>'.($j+$i+1).'</td><td>'.$chtitles11[$j].
 						'.'.$chnames11[$j].'</td>'.
 						'<td>Child'.
 						'</td></tr>';
 					}

 					for ($k=0; $k < count($infnames11); $k++) { 
 						echo '<tr><td>'.($k+$j+$i+1).'</td><td>'.$inftitles11[$k].
 						'.'.$infnames11[$k].'</td>'.
 						'<td>Infant'.
 						'</td></tr>';
 					}



 					 ?>
 					 <tr><th colspan="3">Total Fare : <?php echo $row->fare; ?></th></tr>
 					 <tr><th colspan="3"><?php echo $row->idproof; ?> Number of Adult <?php echo $row->idpassenger; ?> : <?php echo $row->idnum; ?></th></tr>
					</table>

				</div>
			</div>
			<div class="col-md-6">
  				<div id="main_r2">
  				<?php if ($row->ret == 1): ?>
  					<h4 class="head_4">Return Ticket</h4>

  					  					<table class="table table-bordered">
  					<tr><th colspan="3">PNR No : <?php echo $row->pnr; ?></th></tr>
  					<tr><th colspan="3">Origin : <?php #echo $jdest; ?></th></tr>
  					<tr><th colspan="3">Destination : <?php #echo $jsource; ?></th></tr>
  					<tr><th colspan="3">Journey date : <?php #echo $rdate; ?></th></tr>
  					<tr><th>Sl.No.</th><th>Passanger Name</th><th>Category</th></tr>
 					<?php 

 					for ($i=0; $i < count($adnames11); $i++) { 
 						echo '<tr><td>'.($i+1).'</td><td>'.$adtitles11[$i].
 						'.'.$adnames11[$i].'</td>'.
 						'<td>Adult'.
 						'</td></tr>';
 					}

 					for ($j=0; $j < count($chnames11); $j++) { 
 						echo '<tr><td>'.($j+$i+1).'</td><td>'.$chtitles11[$j].
 						'.'.$chnames11[$j].'</td>'.
 						'<td>Child'.
 						'</td></tr>';
 					}

 					for ($k=0; $k < count($infnames11); $k++) { 
 						echo '<tr><td>'.($k+$j+$i+1).'</td><td>'.$inftitles11[$k].
 						'.'.$infnames11[$k].'</td>'.
 						'<td>Infant'.
 						'</td></tr>';
 					}



 					 ?>
 					 <tr><th colspan="3">Total Fare : <?php echo $row->fare; ?></th></tr>
 					 <tr><th colspan="3"><?php echo $row->idproof; ?> Number of Adult <?php echo $row->idpassenger; ?> : <?php echo $row->idnum; ?></th></tr>
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