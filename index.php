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
        


            $servername = "com501.database.windows.net";
            $username = "YISR";
            $password = "yerkoISR098";
            $dbname = "test";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            echo "<p> adasdaf <p>";
            $sql = "SELECT name FROM SYSOBJECTS WHERE xtype = 'U'";
            echo "<p>". $sql ."<p>";
        
        ?>
    </body>
</html>


