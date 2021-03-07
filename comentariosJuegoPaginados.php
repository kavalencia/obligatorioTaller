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

if (isset($_GET['comId'])) {
    $comId = $_GET['comId'];
}

if (isset($_GET['borrar'])) {
    $borrar = $_GET['borrar'];
}

if($borrar == "1"){
    borrarComentario($comId);
    updatePuntuacionJuego($juegoId);
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
