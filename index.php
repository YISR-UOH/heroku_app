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
            echo "<p> Conectado <p>";
            if ($db) {
                echo "<p> Conectado <p>";
            }
        ?>
    </body>
</html>


