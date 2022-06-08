<?php
include 'db/db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- link de css, titulo, link javascript, etc-->
    <meta charset="UTF-8"/>

    <title>ayudantia 6</title> <!--titulo de la pagina-->

    <link href="css/style.css" rel="stylesheet" type="text/css" > <!--link al archivo css-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
  </head>

  <body>

    <br />
    <div id="update_list"></div>
    <br />

    <p>Elementos en tabla test</p>

    <br />
    <div id="update_table"></div>
    <br />
    <input type="TEXT" id="search" />
      </p>
      <div id="result"></div>
    <br />
    <br />
    <p>agregar datos</p>
    <div>
      <form action="backend.php" method="post" id="add">
        name   : <input type="text" name="name"><br>
        age    : <input type="text" name="age"><br>
        content: <input type="text" name="content"><br>
        <input type="submit" >
      </form>
    </div>
    <br />
    <p>eliminar datos</p>
    <div>
      <form action="backend.php" method="post" id="del">
        name   : <input type="text" name="name"><br>
        age    : <input type="text" name="age"><br>
        content: <input type="text" name="content"><br>
        <input type="submit" >
      </form>
    </div>
    </p>

  </body>


</html>



