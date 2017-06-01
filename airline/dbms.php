<?php

/*
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: <br>" . $conn->connect_error);
} 
echo "Connected successfully <br>";


// Create database
$sql = "CREATE DATABASE cecstock";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
*/

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cecstock";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: <br>" . $conn->connect_error);
} 
else echo "Database connected successfully <br>";

/*
// User Table
$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
password VARCHAR(16) NOT NULL,
type INT(1) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Users created successfully <br>";
} else {
    echo "Error creating User's table: <br>" . $conn->error;
}


//Initialization of users
$sql = "INSERT INTO users (id, name, password, type)
VALUES ('100000', 'admin', 'adminpass', '1')";

if ($conn->query($sql) === TRUE) {
    echo "Initialization of users done successfully <br>";
} else {
    echo "Error in Initialization of users: " . $sql . "<br>" . $conn->error;
}
echo "Admin account created. <br> Admin password is : adminpass <br> Admin user id is : 100000";



// User Table
$sql = "CREATE TABLE products (
pid INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
brand VARCHAR(30) NOT NULL,
disc FLOAT(2) NOT NULL,
vat FLOAT(2) NOT NULL,
expiry DATE NOT NULL,
eprice FLT(6) NOT NULL,
cprice FLOAT(6) NOT NULL,
mrp FLOAT(6) NOT NULL,
quant FLOAT(6) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Products table created successfully <br>";
} else {
    echo "Error creating Products table: <br>" . $conn->error;
}



//Initialization of Products
$sql = "INSERT INTO products (pid, name, brand, disc, vat, expiry, eprice, cprice, mrp, quant)
VALUES ('10000', 'product1', 'brand1', '15', '7.83', '2016-03-20', '100', '80', '85', '40')";

if ($conn->query($sql) === TRUE) {
    echo "Initialization of Products done successfully <br>";
} else {
    echo "Error in Initialization of Products: " . $sql . "<br>" . $conn->error;
}
*/

$conn->close();

?>