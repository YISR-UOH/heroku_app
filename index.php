<?php
include 'db/db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- link de css, titulo, link javascript, etc-->
    <meta charset="UTF-8"/>

    <title>ayudantia 08/06/2022</title> <!--titulo de la pagina-->

    <link href="css/style.css" rel="stylesheet" type="text/css" > <!--link al archivo css-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> <!-- link para incluir el codigo ajax; que es ajax: https://es.wikipedia.org/wiki/AJAX#:~:text=AJAX%2C%20acr%C3%B3nimo%20de%20Asynchronous%20JavaScript,para%20crear%20aplicaciones%20web%20as%C3%ADncronas -->

    <script src="js/script.js"></script> <!-- link javascript -->
  </head>

  <body>

    <br />
    <div id="update_list"></div> <!-- muestra las tablas disponibles y la cantidad de elementos el codigo esta en script.js-->
    <br />

    <p>Elementos en tabla test</p>

    <br />
    <div id="update_table"></div><!-- muestra la tabla test y sus elementos el codigo esta en script.js-->
    <br />

    <input type="TEXT" id="search" placeholder="busqueda por nombre"/> <!--Busca elementos en la tabla test el codigo esta en script.js-->
    <p>

    </p>
      <div id="result"></div><!--se muestran los resultados dependiendo de lo ingresado en search el codigo esta en script.js-->
    <br />
    <br />
    <p>agregar datos</p>
    <div>
      <form action="backend.php" method="post" id="add"><!-- se agregan los datos ingresados a la tabla test -->
        name   : <input type="text" name="name" required><br>
        age    : <input type="text" name="age" required><br>
        content: <input type="text" name="content" required><br>
        <input type="submit" >
      </form>
    </div>
    <br />
    <p>eliminar datos</p>
    <div>
      <form action="backend.php" method="post" id="del"> <!-- se eliminan los datos ingresados a la tabla test -->
        name   : <input type="text" name="name" required><br>
        age    : <input type="text" name="age" required><br>
        content: <input type="text" name="content" required><br>
        <input type="submit" >
      </form>
    </div>
    </p>

  </body>


</html>



