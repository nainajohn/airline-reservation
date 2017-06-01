<?php

$email = $_POST["lmail"];
$pass = $_POST["lpass"];

include 'db_connect.php';

$sql = "SELECT id, name FROM user WHERE email = '$email' AND password = '$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        session_start();
		$_SESSION['uname'] = $row['name'];
		$_SESSION['uid'] = $row['id'];
		$_SESSION['email'] = $email;
    }

    header("Location:user/index.php");
} 
else {
    header("Location:index.php?error=Invalid Email ID/Password");
}


$conn->close();
?>