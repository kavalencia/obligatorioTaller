<!DOCTYPE html>
<?php
    ini_set('display_errors', 1);
    require_once 'function.php';
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
                    echo("hola");
                    $mySmarty = getSmarty();
                    $mySmarty->assign("juego", juego);
                    $mySmarty->display("juego.tpl");
                    
                    
                    
                    
                ?>
	</body>
</html>
