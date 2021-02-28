<?php
    ini_set('display_errors', 1);
    require_once 'function.php';

    $comId = $_POST["comId"];
    
    borrarComentario($comId);
    
    if (isset($usuarioLogueado)) {
        session_start();
        $_SESSION['usuarioLogueado'] = $usuarioLogueado;
        header('location:reviewComment.php');
    } else {
        header('location:reviewComment?err=1');
    }

