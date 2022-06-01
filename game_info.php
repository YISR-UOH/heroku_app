<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url("mysql://b4f1554d2086e8:0dc6ff26@us-cdbr-east-04.cleardb.com/heroku_8838651e8da9dd7?reconnect=true");
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$mysqli = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tienda</title>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        <link href="css\card.css" rel="stylesheet">
        <link href="css\info.css" rel="stylesheet">

        
    </head>

    <body>
        <div class="super">
            <div class="panel">
                <div class="tienda">
                    <a href="#">
                        <img src="images/back.jpg">
                    </a>
                </div>
                <div class="cuenta">
                    <a href="#">
                        <img src="images/cuenta.png">
                    </a>
                </div>
                <div class="carrito">
                    <a href="#">
                        <img src="images/shop.png">
                    </a>    
                </div>
            </div>
            <div class="search">
                <form>
                    <span class="icon">
                        <img src="images/search.png">
                    </span>
                    <input type="text" placeholder="Buscar" id="mysearch" autocomplete="off">
                    <div class="selectbox">
                        <div class="select" id="select">
                            <div class="contenido-select">
                                <h1 class="titulo">Plataforma</h1>
                            </div>
                            <i class="fas fa-angle-down"></i>
                        </div>
        
                        <div class="opciones" id="opciones">
                            <a href="#" class="opcion">
                                <div class="contenido-opcion">
                                    <img src="images/steam.png" alt="">
                                    <div class="textos">
                                        <h1 class="titulo">Steam</h1>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="opcion">
                                <div class="contenido-opcion">
                                    <img src="images/ps4.png" alt="">
                                    <div class="textos">
                                        <h1 class="titulo">Playstation</h1>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="opcion">
                                <div class="contenido-opcion">
                                    <img src="images/xbox.png" alt="">
                                    <div class="textos">
                                        <h1 class="titulo">Xbox</h1>
                                    </div>
                                </div>
                            </a>

                        </div>
                        
                    </div>
        
                    <input type="hidden" name="plataforma" id="inputSelect" value="">
                </form>
            </div>

   
            <div class="tarjeta">
                <?php 
                    $res = $mysqli->query("SELECT juegos.id,nombre,Steam.precio_steam,xbox.precio_xbox,playstation.precio_playstation,caratula,descripcion,desarrollador,lanzamiento,video FROM Steam,xbox,playstation,descripcion INNER JOIN juegos ON juegos.id=id_juegos AND juegos.id=".$_GET["id"] ." GROUP BY juegos.id");
                    $xbox = $mysqli->query("SELECT xbox.logo FROM xbox GROUP by logo");
                    $xbox = $xbox->fetch_object();
                    $steam= $mysqli->query("SELECT Steam.logo FROM Steam GROUP by logo");
                    $steam = $steam->fetch_object();
                    $ps4 = $mysqli->query("SELECT playstation.logo FROM playstation GROUP by logo");
                    $ps4 = $ps4->fetch_object();
                    while($row = $res->fetch_object()){
                        $lanzamiento=$row->lanzamiento;
                        $desarrollador=$row->desarrollador;
                        $video=$row->video;
                        $descripcion=$row->descripcion;
                        $plataforma=strval("'plataforma ".$row->id."'");
                        $plataforma=htmlspecialchars($plataforma, ENT_COMPAT);
                        $precio=strval("'precio ".$row->id."'");
                        $precio=htmlspecialchars($precio, ENT_COMPAT);
                        $data=[[$row->precio_steam,$row->precio_playstation,$row->precio_xbox],[$steam->logo,$ps4->logo,$xbox->logo]]
                        ?>
                        <div class="juego">
                            <ul class="thumb">
                                <?php 
                                    for($i=0;$i<3;$i++){
                                        if($data[0][$i] !=null){
                                            $valor=$data[0][$i];
                                            $image=$data[1][$i];
                                            $data[0][$i]=strval("'$".$data[0][$i]."'");
                                            $data[0][$i]=htmlspecialchars($data[0][$i], ENT_COMPAT);
                                            $data[1][$i]=strval("'".$data[1][$i]."'");
                                            $data[1][$i]=htmlspecialchars($data[1][$i], ENT_COMPAT);
                                            

                                            ?>
                                            <li onmouseover="changePrice([<?php echo $precio ?>,<?php echo $data[0][$i]?>]),changeImageSrc([<?php echo $plataforma?>,<?php echo $data[1][$i]?>])">
                                                <img src=<?php echo $image?>>
                                            </li>
                                        <?php
                                        }
                                        
                                    }
                                
                                ?>

                            </ul>
                            <div class="imgBox">
                                <div class="titulo">
                                    <h2><?php echo $row->nombre?></h2>
                                </div>
                                <a href="#" class="caratula">
                                    
                                    <img src=<?php echo $row->caratula?>>
                                    
                                </a>


                                <ul class="price">
                                    <img src=<?php echo $image?> class="plataforma" id=<?php echo $plataforma?>>
                                    <span>Precio</span>
                                    <li id=<?php echo $precio?>><?php echo $valor?></li>

                                </ul>

                                <a href="#" class="btn">
                                    <img src="images/descargar.png">
                                </a>
                                
                            </div>
                        </div>
                <?php }?>

                  
                    <div class="juego">
                        <div class="video">
                            <iframe width="300" height="150" src=<?php echo $video?> title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>

                    </div>
                    <div class="juego">
                        <div class="descripcion">
                            <h2>
                                <?php 
                                    echo $descripcion;
                                ?>
                            </h2>
                        </div>
                    </div>

                    <div class="juego">
                        <div class="datos">
                            <h2>
                                <?php 
                                    echo "Desarrollador : ".$desarrollador;
                                ?>
                            </h2>
                            <h2>
                                <?php 
                                    echo "Lanzamiento : ".$lanzamiento;
                                ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>

        <script src="js\main.js" type="text/javascript" charset="utf-8">
        </script>
    </body>
</html>

