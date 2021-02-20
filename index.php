<!DOCTYPE html>
<?php 
    ini_set('display_errors', 1);
?>
<html>
	<head>
		<meta charset="utf-8" lang="es">
		<title>TODO JUEGOS</title>
		<link rel="stylesheet" href="./css/todoJuegos.css" type="text/css">
	</head>
	<body>
		<!-- Página inicial -->
		<div id="encabezado">
			<img id="img_logo" src="./img/logo.png" alt="">
                        <?php echo("<h1 id='cabezal'>"."Todo Juegos"."</h1>") ?>
                        <div id="menu_usuario">
                            <a href="register.php">Registrarse</a>
                            <a href="login.php">Iniciar sesion</a>
                            <img id="img_user" src="./img/usuario.png" alt="">
                        </div>
		</div>
                <div id="juegos">
                    <a>Juegos</a>
                </div>
                <div id="destacado">
                    <a>Destacado</a>
                </div>
	</body>
</html>