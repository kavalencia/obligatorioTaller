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


function getJuego($id){
    $conexion = abrirConexion();
    $sql = "SELECT * FROM juegos WHERE id = :id";
    $sentencia = $conexion->prepare($sql);
    $sentencia->bindParam("id", $id, PDO::PARAM_INT);
    $sentencia->execute();
    $categoria = $sentencia->fetch(PDO::FETCH_ASSOC);   
    return $juego;
}


function getJuegosDeSeleccion(){
    $conexion = abrirConexion();
    // "SELECT j.id, j.nombre, g.genero, j.poster, j.puntuacion FROM juegos j, generos g WHERE j.id_genero = g.id";
    $sql = "SELECT * FROM juegos";
    $conexion->consulta($sql);    
    return $conexion->restantesRegistros();
}

function login($usuario, $clave) {
    $conexion = abrirConexion2();
    
    $sql = "SELECT * FROM usuarios WHERE alias = :usuario";
    $sentencia = $conexion->prepare($sql);
    $sentencia->bindParam("usuario", $usuario, PDO::PARAM_STR);
    $sentencia->execute();
    $usuarioLogueado = $sentencia->fetch(PDO::FETCH_ASSOC);
    
    return $usuarioLogueado;
}

function register($usuario, $alias, $clave) {
    $conexion = abrirConexion2();
    
    //$sql = "SELECT * FROM usuarios WHERE alias = :usuario";
    //$sentencia = $conexion->prepare($sql);
    //$sentencia->bindParam("usuario", $usuario, PDO::PARAM_STR);
    //$sentencia->execute();
    //$usuarioLogueado = $sentencia->fetch(PDO::FETCH_ASSOC);
    
    return $usuarioLogueado;
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
    
    $sql = "DELETE FROM comentarios WHERE id = :comId";
    $sentencia = $conexion->prepare($sql);
    $sentencia->bindParam("comId", $comId, PDO::PARAM_INT);
    
    $sentencia->execute();
}

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