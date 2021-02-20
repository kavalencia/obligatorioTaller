<!DOCTYPE html>
<?php 
   // require_once 'datos.php';
    ini_set('display_errors', 1);
    
?>
<html>
	<head>
		<meta charset="utf-8" lang="es">
		<title>Tu Tienda Online</title>
		<link rel="stylesheet" href="./css/ventas.css" type="text/css">
	</head>
	<body>
		<!-- acá va el comentario -->
		<div id="encabezado">
			<img src="./img/logo.png" alt="">
                        <?php // echo("<h1 id='cabezal'>"."Tu Tienda Online"."</h1>") ?>
			
			<h2>El mejor sitio de compras en la web</h2>
		</div>
		<div id="menu">
			<a href="#">Página principal</a>
                        <?php
//                            session_start();
//                            if(isset($_SESSION['usuarioLogueado'])) {
//                                $usuario = $_SESSION['usuarioLogueado'];
//                                echo('Hola,'.$usuario['nombre'].' <a href="./dologout.php">Logout</a>');
//                            }else {
//                                echo('<a href="./login.php">Inicio de sesión</a>');
//                            }
                        ?>
			<a href="./contacto.html">Contacto</a>
		</div>
		<div id="categorias">
			<h2>Categorías</h2>
			<ul>
                            <?php 
//                                foreach(getCategorias() as $categoria) {
//                                    echo("<li><a href='index.php?catId=".$categoria["id"]."'>".$categoria["nombre"]."</a></li>");
//                                }
                            ?>
			</ul>
		</div>
		<div id="buscador">
			<label for="buscar">Ingresa tu búsqueda: </label>
			<input type="text">
			<input type="button" value="Buscar">
		</div>
		<div id="productos">
                    <h3>
                    <?php 
                    
//                        $catId = 1;
//                        
//                        //echo($_COOKIE["ultimaCategoria"]);
//                        
//                        if(isset($_GET["catId"])) {
//                            $catId = $_GET["catId"];
//                        } else if(isset($_COOKIE["ultimaCategoria"])) {
//                            $catId = $_COOKIE["ultimaCategoria"];
//                        }
//                        
//                        $categoria = getCategoria($catId);
//                        if(isset($categoria)){
//                            setCookie('ultimaCategoria', $catId, time() + (60*60*24));
//                            echo($categoria["nombre"]);
//                        }else {
//                            echo("Categoría Inexistente");
//                        }
//                    ?>
                    </h3>
                     <?php 
                        $productos = getProductosDeCategoria($catId);
                        foreach($productos as $prod) {
                            echo('<a href="producto.php?prodId='.$prod["id"].'">');
                            echo('<div class="producto">');
                            echo('<img src="./img/'.$prod["imagen"].'" alt="logo">');
                            echo('<span class="nombre-producto">'.$prod["nombre"].'</span>');
                            echo('<p>'.$prod["descripcion"].'</p>');
                            echo('<span class="precio-producto">U$S'.$prod["precio"].'</span>');
                            echo('</div>');
                            echo('</a>');
                        }
                    ?>
		</div>
	</body>
</html>
