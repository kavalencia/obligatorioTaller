<?php
    ini_set('display_errors', 1);
    require_once 'function.php';

    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];
    
    $usuarioLogueado = login($usuario, $clave);
    //TODO Verificar la clave
    
    if (isset($usuarioLogueado)) {
        session_start();
        $_SESSION['usuarioLogueado'] = $usuarioLogueado;
        header('location:index.php');
    } else {
        header('location:login.php?err=1');
    }

