<?php

ini_set('display_errors', 1);
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

function login($usuario, $clave) {
    $conexion = abrirConexion();
    $params = array(
        array("usuario", $usuario, "string"),
        array("clave", $clave, "string"),
    );
    $sql = "SELECT * FROM usuarios WHERE email = :usuario AND password = :clave";
    $conexion->consulta($sql, $params);
    $usuarioLogeado = $conexion->siguienteRegistro();
    
    if ($conexion->cantidadRegistros() >= 1)
        return $usuarioLogeado;
    else
        return NULL;
}

function register($usuario, $alias, $clave) {
    $conexion = abrirConexion();  
    $es_admin = "0";
    $params = array(
        array("usuario", $usuario, "string"),
        array("alias", $alias, "string"),
        array("clave", $clave, "string"),
        array("es_admin", $es_admin, "int"),
    );
    $sql = "INSERT INTO usuarios(email, alias, password, es_admin) VALUES(:usuario, :alias, :clave, :es_admin)";
    $conexion->consulta($sql, $params);
    
    return $conexion->ultimoIdInsert();
}

function logout() {
    unset($_SESSION['usuarioLogueado']);
    session_destroy();
}

function insertarJuego($juego) {
    
    $conexion = abrirConexion2();
    $params = array(
        array("nombre", $juego["nombre"], "string"),
        array("id_genero", $juego["id_genero"], "int"),
        array("poster", $juego["poster"], "string"),
        array("puntuacion", $juego["puntuacion"], "int"),
        array("fecha_lanzamiento", $juego["fecha_lanzamiento"], "date"),
        array("empresa", $juego["empresa"], "string"),
        array("visualizaciones", $juego["visualizaciones"], "int"),
        array("url_video", $juego["url_video"], "string"),
        array("resumen", $juego["resumen"], "string"),
    );
    $sql = "INSERT INTO Juegos(nombre, id_genero, poster, puntuacion, fecha_lanzamiento, empresa, visualizaciones, url_video, resumen) VALUES(:nombre, :id_genero, :poster, :puntuacion, :fecha_lanzamiento, :empresa, :visualizacines, :url_video, :resumen)";
    $conexion->consulta($sql, $params);
}

function borrarComentario($comId){
    $conexion = abrirConexion();
    $params = array(
        array("comId", $comId, "int"),
    );
    $sql = "DELETE FROM comentarios WHERE id = :comId";
    $conexion->consulta($sql, $params);
    return $conexion->restantesRegistros(); 
}

function getComentarios($pagina = 0, $texto = ''){
    
    $size = 8;
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
    $size = 8;
    $paginas = ceil($fila["total"] / $size) - 1;
    
    return $paginas;
}