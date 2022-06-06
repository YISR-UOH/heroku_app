<?php


$servername = "bcgvo3crlk65uicfag0j-postgresql.services.clever-cloud.com";
$username = "uw49pfruyeq3om3uq0tk";
$password = "uw49pfruyeq3om3uq0tk";
$port = 5432;
$dbname = "test";

// Create connection
$conn = pg_connect("host=bcgvo3crlk65uicfag0j-postgresql.services.clever-cloud.com port=5432 dbname=mary user=uw49pfruyeq3om3uq0tk password=uw49pfruyeq3om3uq0tk");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  echo '<p>funciona<p>';
}

?>
