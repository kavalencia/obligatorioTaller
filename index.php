<!DOCTYPE html>
<?php
require 'Config/configuracion.php';
error_reporting(E_ERROR);
ini_set('display_errors', 1);
require_once 'function.php';


session_start();
$usuarioLogueado = NULL;
if (isset($_SESSION['usuarioLogueado'])) {
    $usuarioLogueado = $_SESSION['usuarioLogueado'];
}

$mySmarty = getSmarty();
$destacado = getJuegoDestacado();
$mySmarty->assign("destacado", $destacado);
$mySmarty->assign("usuarioLogueado", $usuarioLogueado);
$mySmarty->display("index.tpl");
?>

