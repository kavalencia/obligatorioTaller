<?php
    ini_set('display_errors', 1);
    require_once 'function.php';

    $juego = array();
    $juego[] = array(
        "nombre" => $_POST["nombre_juego"],
        "idGenero" => $_POST["genero"],
        "poster" => $_POST["imagen_juego"],
        "puntuacion" => $_POST["puntuacion"],
        "fechaLanzamiento" => $_POST["fecha_lanzamiento"],
        "empresa" => $_POST["creado_por"],
        "visualizaciones" => $_POST["cant_visitas"],
        "urlVideo" => $_POST["video_yoputube"],
        "resumen" => $_POST["resumen"],
        "listaConsolas" => $_POST["lista_consolas"]);
        
    insertarJuego($juego);
    
    $imagen = $_FILE['imagen_juego'];
   
    if(is_uploaded_file($imagen['tmp_name'])){
        move_uploaded_file($imagen['tmp_name'], 'img/'.$id.'png');
    }
        
        
        header('location:addGame.php');
    
