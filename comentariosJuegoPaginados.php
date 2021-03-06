<?php

ini_set('display_errors', 1);
require_once 'function.php';
error_reporting(E_ERROR);

$mySmarty = getSmarty();

$pagina = 0;
if (isset($_GET['pag'])) {
    $pagina = $_GET['pag'];
}

$texto = "";
if (isset($_GET['texto'])) {
    $texto = $_GET['texto'];
}

if (isset($_GET['juegoId'])) {
    $juegoId = $_GET['juegoId'];
}

if (isset($_GET['com'])) {
    $com = $_GET['com'];
}

if (isset($_GET['puntaje'])) {
    $puntaje = $_GET['puntaje'];
}

session_start();
$usuarioLogueado = NULL;
if (isset($_SESSION['usuarioLogueado'])) {
    $usuarioLogueado = $_SESSION['usuarioLogueado'];
}

$comentarios = getComentariosDeJuego($pagina, $texto, $juegoId);
$ultimaPagina = ultimaPaginaDeComentariosDelJuego($texto, $juegoId);

$mySmarty->assign("comentarios", $comentarios);
$mySmarty->assign("pagina", $pagina);
$mySmarty->assign("ultimaPagina", $ultimaPagina);
$mySmarty->assign("usuarioLogueado", $usuarioLogueado);
$mySmarty->assign("com", $usuarioLogueado);
$mySmarty->assign("puntaje", $usuarioLogueado);
$mySmarty->display("comentariosJuegoPaginados.tpl");
?>