<?php

// Create connection
$conn = pg_connect("host=bcgvo3crlk65uicfag0j-postgresql.services.clever-cloud.com port=5432 user=uw49pfruyeq3om3uq0tk password=uw49pfruyeq3om3uq0tk");
// Check connection
echo "hola mundo";

if ($conn) {
    echo "Successfully connected to database: " . pg_dbname($conn) . " on " .  pg_host($conn) . "<br/>\n";
} else {
    echo pg_last_error($conn);
    exit;
}
?>
