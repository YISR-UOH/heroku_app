<?php
  include 'db/db.php';
  if(isset($_POST['search'])){
    $search = $_POST['search'];

    if(strlen($search) >= 1){
      $sql = "SELECT * FROM test.test WHERE name LIKE '%".$search."%'";
      foreach($conn->query($sql)as $row){
        $id = $row[0];
        $name = $row[1]; 
        $age = $row[2];
        $content = $row[3];
        echo "<div class='data'>$id $name</p>$age<br/>$content<br /></div>";
      }
    }
    if(strlen($search) == 0){
      $sql = "SELECT * FROM test.test ";
      foreach($conn->query($sql)as $row){
        $id = $row[0];
        $name = $row[1]; 
        $age = $row[2];
        $content = $row[3];
        echo "<div class='data'>$id $name</p>$age<br/>$content<br /></div>";
      }
    }
  }
?>