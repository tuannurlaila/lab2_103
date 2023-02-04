<?php
$servername = "localhost";
$username = "cpe1389";
$password = "20112545";
$dbname = "cpe1389";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>