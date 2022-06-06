<!doctype html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ayudantia</title>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>     
    </head>

    <body>
        <?php
            include 'database/db.php'
        ?>

        <p> hola aaa<p>
        <?php
            $query = 'SELECT * FROM test LIMIT 100';
            $result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

            echo "<table>\n";
            while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
                echo "\t<tr>\n";
                foreach ($line as $col_value) {
                    echo "\t\t<td>$col_value</td>\n";
                }
                echo "\t</tr>\n";
            }
            echo "</table>\n";
            // Liberando el conjunto de resultados
            pg_free_result($result);

            // Cerrando la conexión
            pg_close($conn);
        ?>
    </body>
</html>


