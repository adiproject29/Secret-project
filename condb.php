<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbregister = "db_register";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbregister);


// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>