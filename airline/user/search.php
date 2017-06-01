<?php  
session_start();
include '../db_connect.php';


date_default_timezone_set('Asia/Calcutta');

$jdd=$_POST['jdated'];
$jdm=$_POST['jdatem'];
$jdy=$_POST['jdatey'];
$rdd=$_POST['rdated'];
$rdm=$_POST['rdatem'];
$rdy=$_POST['rdatey'];

$jdate=$jdd.'-'.$jdm.'-'.$jdy;
$rdate=$rdd.'-'.$rdm.'-'.$rdy;
$jsource=$_POST['jsource'];
$jdest=$_POST['jdest'];

$cdate = date('d-m-Y');//current date

$ret = '0';

function datecheck($d1, $d2) {
	//unix timestamp
	if (strtotime($d1)<strtotime($d2)) {
		return true;
	}
	else return false;
}


if (datecheck($cdate, $jdate) == true) {
}
else header("Location:index.php?error=Choose a valid Depart Date");
if (!empty($_POST['rdated'])) {
	if (datecheck($jdate, $rdate) == true) {
		$ret = '1';
	}
	else header("Location:index.php?error=Choose a valid Return Date");
}



if ($jsource == $jdest) {
	header("Location:index.php?error=Origin and Destination are same");
}

function getday($date){
	$timestamp = strtotime($date);
	$day = date('l', $timestamp);
	//var_dump($day);
	return $day;
}
function getflights($source,$dest,$fdate,$f)
{

	if ($f == 'j') {
		$flagv = 'selectedflight';
	} else $flagv = 'selectedretflight';

	$fday=getday($fdate);
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "airline";

// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) {
		die("Connection failed: <br>" . $conn->connect_error);
	}
	$sql = "SELECT * FROM flights WHERE source='$source' AND dest='$dest' AND jday='$fday'" ;
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
// output data of each row
		while($row = $result->fetch_assoc()) {

			echo '<label class="radio-inline form_label">
			<input type="radio" id="inlineCheckbox1" name="'.$flagv.'" value="'.$row['flightnum'].'">';

			echo $row['flightnum'].' | ';
			echo $row['source'];
			echo " "."To"." ";
			echo $row['dest'].' | ';
			echo $fdate.' | ';
			echo $row['jtime'].' | ';
			echo 'Rs.'. $row['fare'];
			global $fare1;
			$fare1=$row->fare;
			echo '</label>';
			echo "<br>";
			echo "<br>";
		}
	}
	else {
		echo "<label class='form_label'>No matching flights available</label>";
	}
	
	
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
  			<h4 class="main_header">Welcome <a href="index.php"> <?php echo $_SESSION['uname']; ?> </a> | User ID : <?php echo $_SESSION['uid']; ?> | Email : <?php echo $_SESSION['email']; ?> | <a href="../logout.php">Logout</a></h4>
  			

  			<div class="col-md-12">
  				<div id="main_l">
  					<h4 class="head_4">Departure Flights</h4>
  					<form class="form-signin" action="book1.php" method="post">
  						
  						<?php  
  						getflights($jsource,$jdest,$jdate,'j');
  						?>

  						
  						<?php
  						if ($ret == '1') {
  							echo '<h4 class="head_4">Return Flights</h4>';
  							getflights($jdest,$jsource,$rdate,'r');
					  	}  
  						
  						?>

  					</div>
  				</div>
  				<center>
  					<input type="hidden" name="jdate" value="<?php echo $jdate ?>">
  					<input type="hidden" name="rdate" value="<?php echo $rdate ?>">
  					<input type="hidden" name="jsource" value="<?php echo $jsource ?>">
  					<input type="hidden" name="jdest" value="<?php echo $jdest ?>">
  					<input type="hidden" name="ret" value="<?php echo $ret ?>">
  					<button class="btn btn-primary btn-sub" type="submit">Next</button>
  				</center>
  			</form>
  		</section><!--main_c-->

  	</div> <!-- /container -->


  	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  	<script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
  </html>
