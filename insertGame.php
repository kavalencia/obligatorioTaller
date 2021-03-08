<?php
    ini_set('display_errors', 1);
    require_once 'function.php';
    error_reporting(E_ERROR);

    $juego = array();
    $juego = array(
        "nombre" => $_POST["nombre_juego"],
        "id_genero" => $_POST["genero"],
        "puntuacion" => $_POST["puntuacion"],
        "fecha_lanzamiento" => $_POST["fecha_lanzamiento"],
        "empresa" => $_POST["creado_por"],
        "url_video" => $_POST["video_yoputube"],
        "resumen" => $_POST["resumen"]
    );
   
    $listaConsolas = array();
    $listaConsolas = $_POST["consolas"];
    
   $poster = $_FILES["imagen_juego"];
   $idJuego = insertarJuego($juego);
     
   // Ejemplo 1
   $types  = $_FILES["imagen_juego"]["type"];
   $ext = explode("/", $types);
   $ruta_imagen = $idJuego.".".$ext[1];
   
   if(is_uploaded_file($poster["tmp_name"])){
       move_uploaded_file($poster["tmp_name"], "img/juegosCaratula/" . $ruta_imagen);
   }
   update_ruta_imagen($idJuego, $ruta_imagen);
   
   updateListaConsolas($idJuego, $listaConsolas);
 
   header('location:juego.php?juegId=' . $idJuego);