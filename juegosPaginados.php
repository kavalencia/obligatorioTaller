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


$orden = "normal";
if(isset($_GET['orden'])){
    $orden = $_GET['orden'];
}


$genero = "0";
if(isset($_GET['genero'])){
    $genero = $_GET['genero'];
}

$consola = "0";
if(isset($_GET['consola'])){
    $consola = $_GET['consola'];
}
 
var_dump("Consola"+$consola);
var_dump("Genero"+$genero);

$juegos = getJuegosDeSeleccion($pagina, $texto, $orden, $genero, $consola);
$ultimaPagina = ultimaPaginaDeJuegos($texto, $genero, $consola);

$mySmarty->assign("juegos", $juegos);
$mySmarty->assign("pagina", $pagina);
$mySmarty->assign("ultimaPagina", $ultimaPagina);
$mySmarty->display("juegosPaginados.tpl");
