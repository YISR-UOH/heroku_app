<?php

// Create connection

$conn = pg_connect("host=bcgvo3crlk65uicfag0j-postgresql.services.clever-cloud.com port=5432 dbname=bcgvo3crlk65uicfag0j user=uw49pfruyeq3om3uq0tk password=uw49pfruyeq3om3uq0tk");

if(!$conn) {
echo "Error: No se ha podido conectar a la base de datos\n";
} else {
echo "Conexión exitosa\n";
}

?>
