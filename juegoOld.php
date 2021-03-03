<?php

ini_set('display_errors', 1);
require_once 'function.php';
error_reporting(E_ERROR);
$juegId = 1;

if (isset($_GET["juegId"])) {
    $juegId = $_GET["juegId"];
}

session_start();
$usuarioLogueado = NULL;
if (isset($_SESSION['usuarioLogueado'])) {
    $usuarioLogueado = $_SESSION['usuarioLogueado'];
}

$juego = getJuego($juegId);
$tipoConsolas = getCantidadConsolasPorJuego($juegId);
$mySmarty = getSmarty();
$mySmarty->assign("juego", $juego);
$mySmarty->assign("tipoConsolas", $tipoConsolas);
$mySmarty->assign("usuarioLogueado", $usuarioLogueado);
$mySmarty->display("juego.tpl");
