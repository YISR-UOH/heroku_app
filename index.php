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
            $result = pg_query($conn, "SELECT * FROM test");
            if (!$result) {
              echo "An error occurred.\n";
              exit;
            }

            while ($row = pg_fetch_row($result)) {
              echo "id: $row[0]  name: $row[1] age: $row[2] content: $row[3]";
              echo "<br />\n";
            }
        ?>
    </body>
</html>


