<!DOCTYPE html>
<?php 
    ini_set('display_errors', 1);
    require_once 'function.php';

    $usuarioLogueado = NULL;
    $error = NULL;
    if(isset($_SESSION['usuarioLogeado'])) {
        $usuarioLogueado = $_SESSION[usuarioLogueado];
    }
    if(isset($_GET['err'])){
        $error = $_GET['err'];
    }

    $mySmarty = getSmarty();
    $mySmarty->assign("usuarioLogueado", $usuarioLogueado);
    $mySmarty->assign("error", $error);
    $mySmarty->display("login.tpl");
?>