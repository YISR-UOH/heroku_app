<?php


$servername = "com501.database.windows.net";
$username = "YISR";
$password = "yerkoISR098";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
