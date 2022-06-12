<!-- se conecta a la base de datos -->

<?php
$usuario = "uw49pfruyeq3om3uq0tk";
$password = "U7rwqw4Kva71aUc8ljoX";
$host = "bcgvo3crlk65uicfag0j-postgresql.services.clever-cloud.com";
$basedatos = "bcgvo3crlk65uicfag0j";


try {
  $conn = new PDO("pgsql:host=bcgvo3crlk65uicfag0j-postgresql.services.clever-cloud.com;port=5432;dbname=bcgvo3crlk65uicfag0j;user=uw49pfruyeq3om3uq0tk;password=U7rwqw4Kva71aUc8ljoX");
}catch(Exception $e){
  echo "No se ha podido conectar con el servidor " .$e ;
}
catch(PDOException $e){die($e->getMessage());}
?>