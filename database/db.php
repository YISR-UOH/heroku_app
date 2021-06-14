<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url("mysql://b4f1554d2086e8:0dc6ff26@us-cdbr-east-04.cleardb.com/heroku_8838651e8da9dd7?reconnect=true");
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$mysqli = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

?>