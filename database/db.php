<?php

$connectionInfo = array("UID" => "YISR", "pwd" => "yerkoISR098", "Database" => "test", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:com501.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

?>
