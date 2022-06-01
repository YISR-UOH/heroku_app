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
        $serverName = "com501.database.windows.net"; // update me
        $connectionOptions = array(
            "Database" => "test", // update me
            "Uid" => "YISR", // update me
            "PWD" => "yerkoISR098" // update me
        );
        try{
            $conn = sqlsrv_connect($serverName, $connectionOptions);
        }
        catch{
            echo "<p> adasdaf <p>";
        }
        $sql = "SELECT name FROM SYSOBJECTS WHERE xtype = 'U'";
        echo "<p>". $sql ."<p>";
        
        ?>
    </body>
</html>


