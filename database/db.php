<?php

// Create connection

$conn = new PDO('pgsql:host=bcgvo3crlk65uicfag0j-postgresql.services.clever-cloud.com;dbname=test', 'uw49pfruyeq3om3uq0tk', 'uw49pfruyeq3om3uq0tk');

// Check connection
echo "hola mundo";

if ($conn) {
    echo "Successfully connected to database: " . pg_dbname($conn) . " on " .  pg_host($conn) . "<br/>\n";
} else {
    echo pg_last_error($conn);
    exit;
}
?>
