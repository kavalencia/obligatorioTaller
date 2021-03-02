<?php

require_once 'class.Conexion.BD.php';
require_once './libs/Smarty.class.php';



function abrirConexion2() {
    $usuario = "root";
    $clave="root";
    
    $conexion = new PDO("mysql:host=localhost;dbname=catalogo_juegos", $usuario, $clave);
    
    return $conexion;
}

function abrirConexion() {
    $usuario = "root";
    $clave="root";
    
    $conexion = new ConexionBD("mysql", "localhost", "catalogo_juegos", $usuario, $clave);
    
    $conexion->conectar();
    
    return $conexion;
}

function getSmarty(){
    $mySmarty = new Smarty();
    $mySmarty->template_dir = 'Templates';
    $mySmarty->compile_dir = 'Templates_c';
    $mySmarty->cache_dir = 'Cache';
    $mySmarty->config_dir = 'Config';
  
    return $mySmarty;
}


function getCantidadConsolasPorJuego($id){
    $conexion = abrirConexion();  
    $sql = "SELECT c.nombre 
            FROM juegos j, juegos_consolas jc, consolas c  
            WHERE j.id = :id AND j.id = jc.id_juego AND jc.id_consola =c.id";  
    $conexion->consulta($sql, array(array("id", $id, "int")));
    return $conexion->restantesRegistros();
}



function getJuego($id){
    $conexion = abrirConexion();  
    $sql = "SELECT * FROM juegos WHERE id = :id";
    $conexion->consulta($sql, array(array("id", $id, "int")));
    return $conexion->siguienteRegistro();
}

function getProducto($id){
    $conexion = abrirConexion2();
    $sql = "SELECT * FROM productos WHERE id = :id";
    $conexion->consulta($sql, array(array("id", $id, "int")));
    return $conexion->siguienteRegistro();
    /*$producto = NULL;
    foreach(getCategorias() as $cat) {
        foreach(getProductosDeCategoria($cat["id"]) as $prod) {
            if($prod["id"] == $id) {
                $producto = $prod;
            }
        }
    }
   
    return $producto;*/
}
/*
function getJuego($id){
    $juego = NULL;
    foreach (getJuegosDeSeleccion() as $juego) {   
        if($juego[id] == $id){
            $juego = $juego[id];
        }
    }
    return $juego;
}
*/

function getComentarios($pagina = 0, $texto = ''){
    
    $size = 3;
    $offset = $pagina * $size;
    $conexion = abrirConexion();
    
    $params = array(
        array("texto", '%'.$texto.'%', "string"),
        array("offset", $offset, "int"),
        array("size", $size, "int"),
    );
    $sql = "SELECT * FROM comentarios WHERE texto LIKE :texto LIMIT :offset, :size";
    $conexion->consulta($sql, $params);
    return $conexion->restantesRegistros();    
}

function ultimaPaginaDeComentarios($texto){
    
    $conexion = abrirConexion();
    
    $params = array(
        array("texto", '%'.$texto.'%', "string"),
    );
    $sql = "SELECT count(*) as total FROM comentarios WHERE texto LIKE :texto";
    $conexion->consulta($sql, $params);
    $fila = $conexion->siguienteRegistro();
    $size = 3;
    $paginas = ceil($fila["total"]/$size) - 1;
    
    return $paginas;
}

function ultimaPaginaDeJuegos($texto){
    $conexion = abrirConexion();  
    $params = array(
        array("texto", '%'.$texto.'%', "string"),
    );
    
    $sql = "SELECT COUNT(j.id) as total FROM juegos j, generos g WHERE j.id_genero = g.id AND j.nombre LIKE :texto";
    $conexion->consulta($sql, $params);
    $size = 8;
    $fila = $conexion->siguienteRegistro();  
    $paginas = ceil($fila["total"]/$size) - 1;
    
    return $paginas;
}


function getJuegosDeSeleccion($pagina = 0, $texto = ''){
    $size = 8;
    $offset = $pagina * $size;
    $conexion = abrirConexion();
    
    $params = array(
        array("texto", '%'.$texto.'%', "string"),
        array("offset", $offset, "int"),
        array("size", $size, "int"),
    );
    $sql = "SELECT j.id, j.nombre, j.poster, j.puntuacion, g.nombre as genero FROM juegos j, generos g WHERE j.id_genero = g.id AND j.nombre LIKE :texto LIMIT :offset, :size";
    $conexion->consulta($sql, $params);   
    return $conexion->restantesRegistros();
}


function getJuegoDestacado(){
    $conexion = abrirConexion();
    $sql = "SELECT j.*, COUNT(*) AS cant_comentarios
            FROM juegos j, comentarios c
            WHERE j.id = c.id_juego
            GROUP BY j.id
            ORDER BY cant_comentarios DESC
            LIMIT 1";
    $conexion->consulta($sql);    
    return $conexion->restantesRegistros();
}

/*
function getJuegosDeSeleccion() {
    $juegos = array();
        $juegos[] = array("id" => 1, 
          "nombre" => "Mario", 
          "descripcion" => "juego demas", 
          "precio" => 10, 
          "imagen" => "juegoImg");
        $juegos[] = array("id" => 2, 
          "nombre" => "Lol", 
          "descripcion" => "juego bueno", 
          "precio" => 15, 
          "imagen" => "juegoImg");
        $juegos[] = array("id" => 3, 
          "nombre" => "word of warcraft", 
          "descripcion" => "mmorpg", 
          "precio" => 20, 
          "imagen" => "juegoImg");
        $juegos[] = array("id" => 4, 
          "nombre" => "4GB DDR 2", 
          "descripcion" => "poca memoria y lenta", 
          "precio" => 50, 
          "imagen" => "juegoImg");
        $juegos[] = array("id" => 5, 
          "nombre" => "8 GB DDR 3", 
          "descripcion" => "bastante memoria y velocidad normal", 
          "precio" => 120, 
          "imagen" => "juegoImg");
        $juegos[] = array("id" => 6, 
          "nombre" => "16 GB DDR5", 
          "descripcion" => "mucha memoria y super rapida", 
          "precio" => 195, 
          "imagen" => "juegoImg");
         $juegos[] = array("id" => 7, 
          "nombre" => "16 GB DDR5", 
          "descripcion" => "mucha memoria y super rapida", 
          "precio" => 195, 
          "imagen" => "juegoImg");
          $juegos[] = array("id" => 8, 
          "nombre" => "16 GB DDR5", 
          "descripcion" => "mucha memoria y super rapida", 
          "precio" => 195, 
          "imagen" => "juegoImg");
          $juegos[] = array("id" => 9, 
          "nombre" => "16 GB DDR5", 
          "descripcion" => "mucha memoria y super rapida", 
          "precio" => 195, 
          "imagen" => "juegoImg");
          $juegos[] = array("id" => 10, 
          "nombre" => "16 GB DDR5", 
          "descripcion" => "mucha memoria y super rapida", 
          "precio" => 195, 
          "imagen" => "juegoImg");
          return $juegos;
}*/
    





function login($usuario, $clave) {
    /*if($usuario == 'test' && $clave == 'test') {
        return array(
          "email" => "test@test.com",
            "alias" => "test",
            "password" => "test",
            "esAdmin" => "0"
        );
    };
    
    return NULL*/
    
    $conexion = abrirConexion2();
    
    $sql = "SELECT * FROM usuarios WHERE alias = :usuario";
    $sentencia = $conexion->prepare($sql);
    $sentencia->bindParam("usuario", $usuario, PDO::PARAM_STR);
    $sentencia->execute();
    $usuarioLogueado = $sentencia->fetch(PDO::FETCH_ASSOC);
    
    return $usuarioLogueado;
}

//function abrirConexion2() {
//    $usuario = "root";
//    $clave="root";
//    
//    $conexion = new PDO("mysql:host=localhost;dbname=catalogo_juegos", $usuario, $clave);
//    
//    return $conexion;
//}

function logout() {
    unset($_SESSION['usuarioLogueado']);
    session_destroy();
}

function insertarJuego($juego) {
    
    $conexion = abrirConexion();
    
    $sql = "INSERT INTO Juegos(nombre, id_genero, poster, puntuacion, fecha_lanzamiento, empresa, visualizacines, url_video, resumen) VALUES(:nombre, :id_genero, :poster, :puntuacion, :fecha_lanzamiento, :empresa, :visualizacines, :url_video, :resumen)";
    $sentencia = $conexion->prepare($sql);
    $sentencia->bindParam("nombre", $juego["nombre"], PDO::PARAM_STR);
    $sentencia->bindParam("id_genero", $juego["id_genero"], PDO::PARAM_INT);
    $sentencia->bindParam("poster", $juego["poster"], PDO::PARAM_LOB);
    $sentencia->bindParam("puntuacion", $juego["puntuacion"], PDO::PARAM_INT);
    $sentencia->bindParam("fecha_lanzamiento", $juego["fecha_lanzamiento"], PDO::PARAM_STR);
    $sentencia->bindParam("empresa", $juego["empresa"], PDO::PARAM_STR);
    $sentencia->bindParam("visualizacines", $juego["visualizacines"], PDO::PARAM_INT);
    $sentencia->bindParam("url_video", $juego["url_video"], PDO::PARAM_STR);
    $sentencia->bindParam("resumen", $juego["resumen"], PDO::PARAM_STR);
    
    $sentencia->execute();
}

