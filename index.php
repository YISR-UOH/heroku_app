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
            $query = "SELECT id,name FROM test";
            $result = pg_query($conn, $query);
            $resultado = [];
            while ($row = pg_fetch_assoc($result)) {
               $resutado[] = $row;
            }
            //agregamos los encabezados correspondientes a la respuesta
            //un paso muy improtante que todos se saltean
            http_response_code(200)
            header("Content-type:application/json");

            // codificar la respuesta en formato JSON
            echo json_encode($resutado);

        ?>
    </body>
</html>


