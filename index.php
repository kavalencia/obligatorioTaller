<!DOCTYPE html>
<?php
ini_set('display_errors', 1);
require_once 'function.php';

$usuarioLogueado = NULL;
if(isset($_SESSION['usuarioLogeado'])) {
    $usuarioLogueado = $_SESSION[usuarioLogueado];
}

$mySmarty = getSmarty();
$mySmarty->display("index.tpl");
?>
