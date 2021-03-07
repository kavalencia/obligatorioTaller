<?php
    ini_set('display_errors', 1);
    require_once 'function.php';
    error_reporting(E_ERROR);
    
    $usuario = $_POST["usuario"];
    $alias = $_POST["alias"];
    $clave = $_POST["clave"];
    
    $idUsuario = register($usuario, $alias, $clave);
    
    if (isset($usuarioLogueado)) {
        session_start();
        $_SESSION['usuarioLogueado'] = $usuarioLogueado;
        header('location:index.php');
    } else {
        header('location:login.php');
    }