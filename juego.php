<?php
    ini_set('display_errors', 1);
    require_once 'function.php';
    error_reporting(E_ERROR);
?>
<html>
	<head>
		<meta charset="utf-8" lang="es">
		<title>Tu Tienda Online</title>
		<link rel="stylesheet" href="./css/todoJuegos.css" type="text/css">
                <script script="text/javascript" src="./js/jquery-3.5.1.min.js"></script>
                <script script="text/javascript" src="./js/comentariosJuego.js"></script>
                <script script="text/javascript" src="./js/nuevoComentario.js"></script>
	</head>
	<body>
		<?php 
                    $juegId = 1;
                    
                    if(isset($_GET["juegId"])) {
                        $juegId = $_GET["juegId"];
                    }   
                    
                    session_start();
                    $usuarioLogueado = NULL;
                    if (isset($_SESSION['usuarioLogueado'])) {
                        $usuarioLogueado = $_SESSION['usuarioLogueado'];
                    }
                    
                    $juego = getJuego($juegId);
                    $tipoConsolas = getCantidadConsolasPorJuego($juegId);
                    $mySmarty = getSmarty();
                    $mySmarty->assign("juego", $juego);
                    $mySmarty->assign("tipoConsolas", $tipoConsolas);
                    $mySmarty->assign("usuarioLogueado", $usuarioLogueado);
                    $mySmarty->display("juego.tpl");
                ?>
	</body>
</html>

