<?php

    $mysqli = new mysqli('bojyzjbmwzrwp95xw2by-mysql.services.clever-cloud.com:3306',  'urx7akvfarhudpec', 'd6E42LtkzyEX5HaYSXue','bojyzjbmwzrwp95xw2by');
    $mysqli->set_charset("utf8");
    if  (!$mysqli) {
        die('No pudo conectarse: ' . mysql_error());
    }
?>