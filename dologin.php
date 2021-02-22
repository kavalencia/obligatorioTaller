<?php
    ini_set('display_errors', 1);
    require_once 'function.php';

    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];
    
    //Acá tengo que ir a la base de datos
    //buscar el usuario en BD
    //fijarme si es admin y pasar los datos correctos para mostrar el cabezal adecuado.
    
    $usuarioLogueado = login($usuario, $clave);

    if (isset($usuarioLogueado)) {
        session_start();
        $_SESSION['usuarioLogueado'] = $usuarioLogueado;
        header('location:index.php');
    } else {
        header('location:login.php?err=1');
    }

