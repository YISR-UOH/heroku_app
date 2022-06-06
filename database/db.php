<?php


$servername = "bcgvo3crlk65uicfag0j-postgresql.services.clever-cloud.com";
$username = "uw49pfruyeq3om3uq0tk";
$password = "uw49pfruyeq3om3uq0tk";
$port = 5432;
$dbname = "test";

// Create connection
$conn = pg_connect("host=bcgvo3crlk65uicfag0j-postgresql.services.clever-cloud.com port=5432 dbname=test user=uw49pfruyeq3om3uq0tk password=uw49pfruyeq3om3uq0tk");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  echo '<p>funciona<p>';
}

function get_tables() {
  $tables = array();
	$names = db_list("
		SELECT
			array_to_string( array_agg(c.relname), ',' ) AS names
		FROM
			pg_catalog.pg_class c
		LEFT JOIN
			pg_catalog.pg_namespace n ON n.oid = c.relnamespace
		WHERE
			c.relkind IN ('r', '')
		AND
			n.nspname NOT IN ('pg_catalog', 'pg_toast')
		AND
			pg_catalog.pg_table_is_visible(c.oid)
	", ',', false);
	foreach($names as $name){
		$tables[$name] = db_table_structure($name);
	}
	return $tables;
}

?>
