<?php 

include 'db_connect.php';

if (isset($_POST['rname'], $_POST['rpass'], $_POST['rgen'], $_POST['rmail'], $_POST['rphone'])) {
	//Retrieving Variables
	$name = $_POST['rname'];
	$pass = $_POST['rpass'];
	$gen = $_POST['rgen'];
	$email = $_POST['rmail'];
	$phone = $_POST['rphone'];

	date_default_timezone_set('Asia/Calcutta');
	$date= date('m-d-Y-H-i-s') ;


	if ($gen == 'Male') {
		$gen = 0;
	} elseif ($gen == 'Female') {
		$gen = 1;
	}
	else $gen = 0;

	$prep_stmt = "SELECT id FROM user WHERE email = ? LIMIT 1";
	$stmt = $conn->prepare($prep_stmt);
   //Checking for existing email  
	if ($stmt) {
		$stmt->bind_param('s', $email);
		$stmt->execute();
		$stmt->store_result();

		if ($stmt->num_rows == 1) {
            // A user with this email address already exists
			header("Location:index.php?error=This Email address already exists.");
			exit();
		}

	} else {
		header("Location:index.php?error=Database Error.");
		exit();
	}
    //Inserting into database
	if ($insert_stmt = $conn->prepare("INSERT INTO user (name, password, gender, email, phone, regtime) VALUES (?, ?, ?, ?, ?, ?)")) {
		$insert_stmt->bind_param('ssssss', $name, $pass, $gen, $email, $phone, $date);
		if (!$insert_stmt->execute()) {
			echo $conn->error;
			header('Location:index.php?error=Registration failure: INSERT');
		}
		header("Location:index.php?msg=New user Added.");
		exit();
	}
}
?>