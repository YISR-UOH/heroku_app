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
            include 'database/db.php';
            $result = pg_query($conn, "SELECT id,name FROM test");
            while ($row = pg_fetch_row($result)) {
              echo "Author: $row[0]  E-mail: $row[1]";
              echo "<br />\n";
            }
        
        ?>
    </body>
</html>


