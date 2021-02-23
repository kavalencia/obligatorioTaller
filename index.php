<!DOCTYPE html>
<?php
ini_set('display_errors', 1);
require_once 'function.php';

$mySmarty = getSmarty();

$juegos = getJuegosDeSeleccion();
$mySmarty->assign("juegos", $juegos);

$mySmarty->display("index.tpl");
?>
