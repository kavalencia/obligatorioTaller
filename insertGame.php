<?php
    ini_set('display_errors', 1);
    require_once 'function.php';
    error_reporting(E_ERROR);

    $juego = array();
    $juego[] = array(
        "nombre" => $_POST["nombre_juego"],
        "idGenero" => $_POST["genero"],
        "puntuacion" => $_POST["puntuacion"],
        "fechaLanzamiento" => $_POST["fecha_lanzamiento"],
        "empresa" => $_POST["creado_por"],
        "visualizaciones" => $_POST["cant_visitas"],
        "urlVideo" => $_POST["video_yoputube"],
        "resumen" => $_POST["resumen"],
        "listaConsolas" => $_POST["lista_consolas"],
    );
    
   $poster = $_FILES["imagen_juego"];
   $idJuego = insertarJuego($juego);
   
    
   var_dump($idJuego);
   
   var_dump($poster["tmp_name"]);
   
   if(is_uploaded_file($poster["tmp_name"])){
       move_uploaded_file($poster["tmp_name"], "img/juegosCaratula/" . $idJuego . $poster["tmp_name"]["type"]);
   }
    
    header('location:juego.php?juegId=' . $idJuego);
    
