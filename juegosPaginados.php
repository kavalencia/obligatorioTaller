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

$juegos = getJuegosDeSeleccion($pagina, $texto);
$ultimaPagina = ultimaPaginaDeJuegos($texto);

$mySmarty->assign("juegos", $juegos);
$mySmarty->assign("pagina", $pagina);
$mySmarty->assign("ultimaPagina", $ultimaPagina);
$mySmarty->display("juegosPaginados.tpl");
