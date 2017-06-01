<?php 

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

#echo "Connected successfully <br>"

?>