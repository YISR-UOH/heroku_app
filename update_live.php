<!-- se realiza la consulta y retorna una tabla -->

<?php
  include 'db/db.php';
  
  echo "<table>";
  echo "<tr>";
  echo "<th>id</th>";
  echo "<th>name</th>";
  echo "<th>age</th>";
  echo "<th>content</th>";
  echo "</tr>";
  
  $sql = "SELECT * FROM test.test";
  foreach ($conn->query($sql) as $row) {
    echo "<tr>";
    echo "<td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "</tr>";
  }
  
  echo "</table>";


?>