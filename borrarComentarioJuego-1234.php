<?php
    ini_set('display_errors', 1);
    require_once 'function.php';
    error_reporting(E_ERROR);

    $comId = $_POST["comId"];
    $juegoId = $_POST["juegoId"];
    
    borrarComentario($comId);
    updatePuntuacionJuego($juegoId);
    
    if (isset($usuarioLogueado)) {
        //session_start();
        $_SESSION['usuarioLogueado'] = $usuarioLogueado;
    }
    header('location:juego.php?juegId='.$juegoId);
