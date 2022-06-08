<?php
include 'db/db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- link de css, titulo, link javascript, etc-->
    <meta charset="UTF-8"/>

    <title>ayudantia 6</title> <!--titulo de la pagina-->

    <link href="css/style.css" rel="stylesheet" type="text/css" > <!--link al archivo css-->
    
  </head>

  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <br />
    <p>lista de tablas</p>
    <table>
      <tr>
        <th>name</th>
        <th>elementos</th>
      </tr>
      <?php
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
      ?>
    </table>
    <br />
    <p>Elementos en tabla test</p>
    <table>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>content</th>
      </tr>
      <?php
        $sql = 'SELECT * FROM test.test';
        foreach ($conn->query($sql) as $row) {
          echo "<tr>";
          echo "<td>".$row[0]."</td>";
          echo "<td>".$row[1]."</td>";
          echo "<td>".$row[2]."</td>";
          echo "<td>".$row[3]."</td>";
          echo "</tr>";
        }
      ?>
    </table>
    <br />
    <br />
    <input type="TEXT" id="search" />
      </p>
      <span id="result"></span>
    <br />
    <br />
    <p>crear tabla</p>
    $statements = 
  </body>


</html>



