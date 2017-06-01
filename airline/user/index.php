<?php 

session_start();

include '../db_connect.php';

if (isset($_SESSION['uid'])) {
}

else header("Location:../index.php?error=You are unauthorized to access this page");

$page = $_GET['page'];

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
  			<h4 class="main_header">Welcome <?php echo $_SESSION['uname']; ?> | User ID : <?php echo $_SESSION['uid']; ?> | Email : <?php echo $_SESSION['email']; ?> | <a href="../logout.php">Logout</a></h4>
  			<?php 
  			if (isset($errm)) {
  				echo '<div class="alert alert-danger" role="alert">Oops an error occured! '.$errm.'</div>';
  			}
  			if (isset($msg)) {
  				echo '<div class="alert alert-success" role="alert">'.$msg.'</div>';
  			}
  			?>

  			<div class="col-md-6">
  				<div id="main_l1">
  					<h4 class="head_4">Search Flights</h4>
  					<form class="form-signin" action="search.php" method="post">
  						<label for="inputEmail" class="form_label">Select Origin</label>
  						<select name="jsource" class="form-control">
  							<option></option>

  							<?php 

  							$sql = "SELECT source FROM flights" ;
  							$result = $conn->query($sql);

  							if ($result->num_rows > 0) {
			        // output data of each row
  								while($row = $result->fetch_assoc()) {
  									echo '<option>'.$row['source'].'</option>';
  								}
  							}

  							?>

  						</select>
  						<label for="inputPassword" class="form_label">Select Destination</label>
  						<select name="jdest" class="form-control">
  							<option></option>

  							<?php 

  							$sql = "SELECT source FROM flights" ;
  							$result = $conn->query($sql);

  							if ($result->num_rows > 0) {
			        // output data of each row
  								while($row = $result->fetch_assoc()) {
  									echo '<option>'.$row['source'].'</option>';
  								}
  							}

  							?>

  						</select>
  						<label class="form_label" for="element_3">Depart Date </label><br>
  						<div class="row">
  							<div class="col-xs-2 marg">
  								<input id="element_3_2" name="jdated" class="form-control text" size="2" maxlength="2" value="" type="text" placeholder="DD">
  							</div>
  							<div class="col-xs-2 marg">
  								<input id="element_3_1" name="jdatem" class="form-control text" size="2" maxlength="2" value="" type="text" placeholder="MM">
  							</div>
  							<div class="col-xs-4 marg">
  								<input id="element_3_3" name="jdatey" class="form-control text" size="4" maxlength="4" value="" type="text" placeholder="YYYY">
  							</div>

  							<div class="col-xs-2 marg">
  								<img id="cal_img_3" class="datepicker" src="../images/calendar/calendar.gif" alt="Pick a date.">	
  							</div>
  							<script type="text/javascript">
  								Calendar.setup({
  									inputField	 : "element_3_3",
  									baseField    : "element_3",
  									displayArea  : "calendar_3",
  									button		 : "cal_img_3",
  									ifFormat	 : "%B %e, %Y",
  									onSelect	 : selectDate
  								});
  							</script>
  						</div>
  						<label class="form_label" for="element_3">Return Date </label><br>
  						<div class="row">
  							<div class="col-xs-2 marg">
  								<input id="element_4_2" name="rdated" class="form-control text" size="2" maxlength="2" value="" type="text" placeholder="DD">
  							</div>
  							<div class="col-xs-2 marg">
  								<input id="element_4_1" name="rdatem" class="form-control text" size="2" maxlength="2" value="" type="text" placeholder="MM">
  							</div>
  							<div class="col-xs-4 marg">
  								<input id="element_4_3" name="rdatey" class="form-control text" size="4" maxlength="4" value="" type="text" placeholder="YYYY">
  							</div>

  							<div class="col-xs-2 marg">
  								<img id="cal_img_4" class="datepicker" src="../images/calendar/calendar.gif" alt="Pick a date.">	
  							</div>
  							<script type="text/javascript">
  								Calendar.setup({
  									inputField	 : "element_4_3",
  									baseField    : "element_4",
  									displayArea  : "calendar_4",
  									button		 : "cal_img_4",
  									ifFormat	 : "%B %e, %Y",
  									onSelect	 : selectDate
  								});
  							</script>
  						</div>

  						<button class="btn btn-primary btn-sub" type="submit">Search</button>
  					</form>
  				</div>
  			</div>



  			<div class="col-md-6">
  				<div id="main_r1">
  					<h4 class="head_4">Check PNR Status</h4>
  					<form class="form-signin" action="pnrs.php" method="post">
  						<label for="inputEmail" class="form_label">PNR Number</label>
  						<input type="text" name="pnr" id="inputEmail" class="form-control" placeholder="Enter your PNR Number" required >
  						

  						<button class="btn btn-primary btn-sub" type="submit">Check Status</button>
  					</form>
  				</div>
  			</div>

  		</section><!--main_c-->

  	</div> <!-- /container -->


  	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  	<script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
  </html>
