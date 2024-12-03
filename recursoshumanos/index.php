<?php

session_start();
error_reporting(0);

$validar = $_SESSION['username'];

if($validar == null || $validar == ''){
    header("Location: ../login.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="icon" href="imgs/InndakaLogo.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Modulos</title>
</head>
<body>
    <!--  HEADER -->
    <header class="mod-Header">
        <div class="mod-Header-Left">
            <a href="#" class="mod-Button-Link">
                <img src="imgs/grupoArsol.png" alt="Logo">
            </a>
            <p id="mod-Bienvenida-header"> Bienvenida <b></b></p>
        </div>
        <div class="mod-Header-Center">
            <h1>MODULOS</h1>
        </div>
        <div class="mod-Header-Right">

        
        <a class="btn btn-warning" href="../cerrarSesion.php">Cerrar Sesion
        <i class="fa fa-power-off" aria-hidden="true"></i></a>
         <!--   <input type="text" placeholder="Buscar..." name="buscador" id="col-Input-Buscar">
            <button type="submit" onclick="buscarInformacion()"><i class="fa fa-search"></i></button> -->
      
        </div>
    </header>
     
     <div class="mod-Padre-Container">
        <div class="mod-Carrusel-Container">
            <div class="slide fade">
                <img src="imgs/1.png" alt="Imagen 1">
            </div>
            <div class="slide fade">
                <img src="imgs/2.png" alt="Imagen 2">
            </div>
            <div class="slide fade">
                <img src="imgs/3.png" alt="Imagen 3">
            </div>
            <div class="slide fade">
                <img src="imgs/4.png" alt="Imagen 4">
            </div>
            <div class="slide fade">
                <img src="imgs/5.png" alt="Imagen 5">
            </div>
            <div class="slide fade">
                <img src="imgs/6.png" alt="Imagen 6">
            </div>
            <div class="slide fade">
                <img src="imgs/7.png" alt="Imagen 7">
            </div>
            <div class="slide fade">
                <img src="imgs/8.png" alt="Imagen 8">
            </div>
            <div class="slide fade">
                <img src="imgs/9.png" alt="Imagen 9">
            </div>
        </div>
        <div class="mod-Modulos">
            <div class="mod-Colaboradores"  id="colaboradores-container">
                <div class="mod-Img">
                    <img src="imgs/fondo.png" alt="">
                </div>
              <div class="mod-Titulo-h2">
                <h2>Colaboradores</h2>
              </div>
            </div>
            <div class="mod-rum"  id="rum-container">
                <div class="mod-Img-Rum">
                    <img src="imgs/rum.png" alt="">
                </div>
              <div class="mod-Titulo-h2-Rum">
                <h2>RUM</h2>
              </div>
            </div>
            <div class="mod-rum-monitorista"  id="monitorista-container">
                <div class="mod-Img-monitorista">
                    <img src="imgs/rum.png" alt="">
                </div>
              <div class="mod-Titulo-h2-Monitorista">
                <h2>Rum Monitorista</h2>
              </div>
            </div>
            
        </div>
        <div class="mod-Modulos2">
            <div class="mod-gaceta"  id="gaceta-container">
                <div class="mod-Img-Gaceta">
                    <img src="imgs/gaceta.png" alt="">
                </div>
              <div class="mod-Titulo-h2-Gaceta">
                <h2>Gaceta Inf.</h2>
              </div>
            </div>
            <div class="mod-inven"  id="inventario-container">
                <div class="mod-Img-Inv">
                    <img src="imgs/inv.png" alt="">
                </div>
              <div class="mod-Titulo-h2-Inventario">
                <h2>Inventario</h2>
              </div>
            </div>
            <div class="mod-responsivas"  id="responsivas-container">
                <div class="mod-Img-resp">
                    <img src="imgs/responsivas.png" alt="">
                </div>
              <div class="mod-Titulo-h2-Responsivas">
                <h2>Responsivas</h2>
              </div>
            </div>
            
            
        </div>
     </div>
     
  

    <script src="script.js"></script>
</body>
</html>
