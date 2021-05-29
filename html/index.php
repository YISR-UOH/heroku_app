<?php include("..\database\db.php")?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tienda</title>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        <link href="..\css\card.css" rel="stylesheet">

        
    </head>

    <body>
        
        <div class="super">

            <div class="tienda">
                <span>aqui estara el logo, nombre y link a la pagina de inicio</span>
            </div>
            <div class="top">

                <div class="cuenta">
                    <a href="#">
                        <img src="../images/cuenta.png">
                    </a>
                </div>
                <div class="carrito">
                    <a href="#">
                        <img src="../images/shop.png">
                    </a>    
                </div>
                <div class="search">
                    <form>
                        <span class="icon">
                            <img src="../images/search.png">
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
                                        <img src="../images/steam.png" alt="">
                                        <div class="textos">
                                            <h1 class="titulo">Steam</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <img src="../images/ps4.png" alt="">
                                        <div class="textos">
                                            <h1 class="titulo">Playstation</h1>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="opcion">
                                    <div class="contenido-opcion">
                                        <img src="../images/xbox.png" alt="">
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
                    $res = $mysqli->query("SELECT * FROM juegos");
                    
                    while($row = $res->fetch_object()){
                        $plataforma=strval("'plataforma ".$row->id."'");
                        $plataforma=htmlspecialchars($plataforma, ENT_COMPAT);
                        $precio=strval("'precio ".$row->id."'");
                        $precio=htmlspecialchars($precio, ENT_COMPAT);
                        $valor=strval("'$".$row->precio."'");
                        $valor=htmlspecialchars($valor, ENT_COMPAT);

                        ?>
                        <div class="juego">
                            <ul class="thumb">
                                <li onmouseover="changePrice([<?php echo $precio ?>,<?php echo $valor?>]),changeImageSrc([<?php echo $plataforma?>,'../images/steam.png'])">
                                    <img src="../images/steam.png">
                                </li>
                                <li onmouseover="changePrice([<?php echo $precio ?>,<?php echo $valor?>]),changeImageSrc([<?php echo $plataforma?>,'../images/ps4.png'])">
                                    <img src="../images/ps4.png">
                                </li>
                                <li onmouseover="changePrice([<?php echo $precio ?>,<?php echo $valor?>]),changeImageSrc([<?php echo $plataforma?>,'../images/xbox.png'])">
                                    <img src="../images/xbox.png">
                                </li>
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
                                    <img src="../images/steam.png" class="plataforma" id=<?php echo $plataforma?>>
                                    <span>Precio</span>
                                    <li id=<?php echo $precio?>><?php echo $row->precio?></li>

                                </ul>

                                <a href="#" class="btn">
                                    <img src="../images/descargar.png">
                                </a>
                                
                            </div>
                        </div>


                    <?php }?>




                
                </div>
            </div>

            
        </div>
        <script src="..\js\card.js" type="text/javascript" charset="utf-8">
        </script>
    </body>
</html>

