

<?php
  include 'db/db.php'; #se conecta a la base de datos

  if(isset($_POST['search'])){ #metodo post para generar la busqueda
    $search = $_POST['search'];

    if(strlen($search) >= 1){ #la busqueda debe ser de al menos 1 elemento
      # se genera la tabla
      ?>
      <table>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>content</th>
      </tr>
      <?php
        $sql = "SELECT * FROM test.test WHERE content LIKE '%".$search."%'";#se realiza la consulta
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
  if(isset($_POST['add'])){#metodo post para agregar datos a la tabla test
    #se parsea los datos para realiza la consulta
    $data = explode('&',$_POST['add']);
    $name = explode('=',$data[0])[1];
    $age = explode('=',$data[1])[1];
    $content = explode('=',$data[2])[1];
    
    $sql = "INSERT INTO test.test (name, age, content) VALUES ('".$name."',".$age.",'".$content."')";#se realiza la consulta
    try{
      $conn->query($sql);
      echo "Se agrego con exito el dato";
    }catch(Exception $e){
      echo 'Error '. $e;
    }
  }
  if(isset($_POST['del'])){#metodo post para eliminar datos a la tabla test
    #se parsea los datos para realiza la consulta
    $data = explode('&',$_POST['del']);
    $name = explode('=',$data[0])[1];
    $age = explode('=',$data[1])[1];
    $content = explode('=',$data[2])[1];
    
    $sql = "DELETE FROM test.test WHERE name = '".$name."' and age = ".$age." and content = '".$content."'";#se realiza la consulta
    try{
      $conn->query($sql);
      echo "Se elimino con exito el dato";
    }catch(Exception $e){
      echo 'Error '. $e;
    }
  }

?>