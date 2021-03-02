<!DOCTYPE html>
<?php
    ini_set('display_errors', 1);
    require_once 'function.php';
    error_reporting(E_ERROR);
?>
<html>
	<head>
		<meta charset="utf-8" lang="es">
		<title>Tu Tienda Online</title>
		<link rel="stylesheet" href="./css/ventas.css" type="text/css">
	</head>
	<body>
		<?php 
                    $juegId = 1;
                    
                    if(isset($_GET["juegId"])) {
                        $juegId = $_GET["juegId"];
                    }                 
                    $juego = getJuego($juegId);
                    $tipoConsolas = getCantidadConsolasPorJuego($juegId);
                    $mySmarty = getSmarty();
                    $mySmarty->assign("juego", $juego);
                    $mySmarty->assign("tipoConsolas", $tipoConsolas);         
                    $mySmarty->display("juego.tpl");
                ?>
	</body>
</html>
