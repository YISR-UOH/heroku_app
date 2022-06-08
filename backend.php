<?php
  include 'db/db.php';
  if(isset($_POST['search'])){
    $search = $_POST['search'];

    if(strlen($search) >= 1){
      ?>
      <table>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>content</th>
      </tr>
      <?php
        $sql = "SELECT * FROM test.test WHERE name LIKE '%".$search."%'";
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
    <?php
    }
  }
  if(isset($_POST['add'])){
    $data = explode('&',$_POST['add']);
    $name = explode('=',$data[0])[1];
    $age = explode('=',$data[1])[1];
    $content = explode('=',$data[2])[1];
    
    $sql = "INSERT INTO test.test (name, age, content) VALUES ('".$name."',".$age.",'".$content."')";
    try{
      $conn->query($sql);
      echo "Se agrego con exito el dato";
    }catch(Exception $e){
      echo 'Error '. $e;
    }
  }
  if(isset($_POST['del'])){
    $data = explode('&',$_POST['del']);
    $name = explode('=',$data[0])[1];
    $age = explode('=',$data[1])[1];
    $content = explode('=',$data[2])[1];
    
    $sql = "DELETE FROM test.test WHERE name = '".$name."' and age = ".$age." and content = '".$content."'";
    try{
      $conn->query($sql);
      echo "Se elimino con exito el dato";
    }catch(Exception $e){
      echo 'Error '. $e;
    }
  }

?>