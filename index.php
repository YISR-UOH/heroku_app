<?php
    include("db/db.php");
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ayudantia</title>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>     
    </head>

    <body>

        <p> hola aaa<p>
        <?php
            include("db/db.php");
            echo "<p> adasdaf <p>";
            $sql = "SELECT name FROM SYSOBJECTS WHERE xtype = 'U'";
            echo "<p>". $sql ."<p>";
            $result =  $conn->query($sql);
            echo "<p> adasdaf <p>";
            if ($result->num_rows > 0) {
            // output data of each row
                echo "<p> adasdaf <p>";
                while($row = $result->fetch_assoc()) {
                    echo "id: " . $row["name"]. "<br>";
                }
            } else {
              echo "<p>0 results<p>";
            }
        
        ?>
    </body>
</html>


