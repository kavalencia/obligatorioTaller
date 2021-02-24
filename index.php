<!DOCTYPE html>
<?php
ini_set('display_errors', 1);
require_once 'function.php';

session_start();
$usuarioLogueado = NULL;
if(isset($_SESSION['usuarioLogueado'])) {
    $usuarioLogueado = $_SESSION['usuarioLogueado'];
}

$mySmarty = getSmarty();

$juegos = getJuegosDeSeleccion();
$mySmarty->assign("juegos", $juegos);
$mySmarty->assign("usuarioLogueado", $usuarioLogueado);
$mySmarty->display("index.tpl");
?>

