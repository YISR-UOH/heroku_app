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

        <p> hola <p>
        <?php
            $sql = "SELECT name FROM SYSOBJECTS WHERE xtype = 'U';";
            $result = Sdb->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "id: " . $row["name"]. "<br>";
                }
            } else {
              echo "0 results";
            }
        
        ?>
    </body>
</html>


