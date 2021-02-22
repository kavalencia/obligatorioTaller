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
$mySmarty->assign("usuarioLogueado", $usuarioLogueado);
$mySmarty->display("index.tpl");
?>
<!--html>
    <head>		 
        <meta charset="utf-8" lang="es">
        <title>TODO JUEGOS</title>
        <link rel="stylesheet" href="./css/todoJuegos.css" type="text/css">
    </head>
    <body>
        //<?php
        //echo($usuarioLogueado);
        //?>
    </body>
</html--> 
