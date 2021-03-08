<?php

ini_set('display_errors', 1);
require_once 'function.php';
error_reporting(E_ERROR);

$mySmarty = getSmarty();
$tieneComentario = false;
$pagina = 0;
$texto = "";


if (isset($_GET['pag'])) {
    $pagina = $_GET['pag'];
}
if (isset($_GET['texto'])) {
    $texto = $_GET['texto'];
}

if (isset($_GET['juegoId'])) {
    $juegoId = $_GET['juegoId'];
}

if (isset($_GET['comId'])) {
    $comId = $_GET['comId'];
}

if (isset($_GET['borrar'])) {
    $borrar = $_GET['borrar'];
}

if (isset($_GET['puntaje'])) {
    $puntaje = $_GET['puntaje'];
}

if (isset($_GET['com'])) {
    $com = $_GET['com'];
}

if (isset($_GET['inicio'])) {
    $inicio = $_GET['inicio'];
}

session_start();
$usuarioLogueado = NULL;
if (isset($_SESSION['usuarioLogueado'])) {
    $usuarioLogueado = $_SESSION['usuarioLogueado'];
    $tieneComentario = getTieneComentarioParaJuego($juegoId, $usuarioLogueado['id']);
}

if (!$borrar && $inicio == 0 && !$tieneComentario){   
    insertComentarioJuego($com, $puntaje, $juegoId, $usuarioLogueado['id']);
}

if($borrar){
    borrarComentario($comId);
}
updatePuntuacionJuego($juegoId);
$tieneComentario = getTieneComentarioParaJuego($juegoId, $usuarioLogueado['id']);

$comentarios = getComentariosDeJuego($pagina, $texto, $juegoId);
$ultimaPagina = ultimaPaginaDeComentariosDelJuego($texto, $juegoId);

$mySmarty->assign("tieneComentario", $tieneComentario);
$mySmarty->assign("comentarios", $comentarios);
$mySmarty->assign("pagina", $pagina);
$mySmarty->assign("ultimaPagina", $ultimaPagina);
$mySmarty->assign("usuarioLogueado", $usuarioLogueado);
$mySmarty->assign("com", $usuarioLogueado);
$mySmarty->assign("puntaje", $usuarioLogueado);
$mySmarty->display("comentariosJuegoPaginados.tpl");
?>
