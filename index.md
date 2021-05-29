<?php include("database\db.php")?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tienda</title>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        <link href="css\card.css" rel="stylesheet">

        
    </head>

    <body>
        
        <div class="super">

            <div class="tienda">
                <span>aqui estara el logo, nombre y link a la pagina de inicio</span>
            </div>
            <div class="top">

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
            </div>

   
            <div class="tarjeta">
                <?php 
                    $res = $mysqli->query("SELECT juegos.id,nombre,Steam.precio_steam,xbox.precio_xbox,playstation.precio_playstation,caratula FROM Steam,xbox,playstation INNER JOIN juegos ON juegos.id=id_juegos GROUP BY juegos.id");
                    $xbox = $mysqli->query("SELECT xbox.logo FROM xbox GROUP by logo");
                    $xbox = $xbox->fetch_object();
                    $steam= $mysqli->query("SELECT Steam.logo FROM Steam GROUP by logo");
                    $steam = $steam->fetch_object();
                    $ps4 = $mysqli->query("SELECT playstation.logo FROM playstation GROUP by logo");
                    $ps4 = $ps4->fetch_object();
                    while($row = $res->fetch_object()){
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
                                    <span class="info">
                                        <h2>Info</h2>
                                    </span>
                                    
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




                
                </div>
            </div>

            
        </div>

        <script src="js\card.js" type="text/javascript" charset="utf-8">
        </script>
    </body>
</html>

