<?php
ini_set('display_errors', 1);
require_once 'function.php';
error_reporting(E_ERROR);
       
$generos = obtenerGeneros();
$consolas = obtenerConsolas();

$mySmarty = getSmarty(); 
$mySmarty->assign("generos", $generos);
$mySmarty->assign("consolas", $consolas);
$mySmarty->display("generoConsola.tpl");
