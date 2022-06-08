<?php
  include 'db/db.php';
  
  echo "<table>";
  echo "<tr>";
  echo "<th>name</th>";
  echo "<th>elementos</th>";
  echo "</tr>";
  
  $sql = "SELECT table_name FROM bcgvo3crlk65uicfag0j.INFORMATION_SCHEMA.TABLES WHERE table_schema = 'test' ";
  foreach ($conn->query($sql) as $row) {
    $sql = "SELECT count(id) FROM test.".$row[0];
    echo "<tr>";
    echo "<td>".$row[0]."</td>";
    foreach ($conn->query($sql) as $row) {
      echo "<td>".$row[0]."</td>";
    }
    echo "</tr>";
  }
  
  echo "</table>";


?>