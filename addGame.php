<?php
ini_set('display_errors', 1);
require_once 'function.php';

session_start();
$usuarioLogueado = NULL;
if(isset($_SESSION['usuarioLogueado'])) {
    $usuarioLogueado = $_SESSION['usuarioLogueado'];
}

$mySmarty = getSmarty();
$mySmarty->assign("usuarioLogueado", $usuarioLogueado);
$mySmarty->display("addGame.tpl");
