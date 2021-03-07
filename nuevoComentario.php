<?php

ini_set('display_errors', 1);
require_once 'function.php';
error_reporting(E_ERROR);

$mySmarty = getSmarty();

$tieneComentario = false;

if (isset($_GET['juegoId'])) {
    $juegoId = $_GET['juegoId'];
}

if (isset($_GET['puntaje'])) {
    $puntaje = $_GET['puntaje'];
}

session_start();
$usuarioLogueado = NULL;
if (isset($_SESSION['usuarioLogueado'])) {
    $usuarioLogueado = $_SESSION['usuarioLogueado'];
    $tieneComentario = getTieneComentarioParaJuego($juegoId, $usuarioLogueado['id']);
}


if (isset($_GET['com'])) {
    $com = $_GET['com'];
}

if (isset($_GET['inicio'])) {
    $inicio = $_GET['inicio'];
}
    

if ($inicio == 0 ){   
    insertComentarioJuego($com, $puntaje, $juegoId, $usuarioLogueado['id']);
    updatePuntuacionJuego($juegoId);
}

$mySmarty->assign("tieneComentario", $tieneComentario);
$mySmarty->assign("usuarioLogueado", $usuarioLogueado);
$mySmarty->display("nuevoComentario.tpl");
?>
 