<?php
ini_set('display_errors', 1);
require_once 'function.php';

session_start();
$usuarioLogueado = NULL;
if(isset($_SESSION['usuarioLogueado'])) {
    $usuarioLogueado = $_SESSION['usuarioLogueado'];
}

$gens = obtenerGeneros();
$cons = obtenerConsolas();
$mySmarty = getSmarty();
$mySmarty->assign("usuarioLogueado", $usuarioLogueado);
$mySmarty->assign("gens", $gens);
$mySmarty->assign("cons", $cons);
$mySmarty->display("addGame.tpl");
