<?php

require_once 'class.Conexion.BD.php';
require_once './libs/Smarty.class.php';

function getSmarty(){
    $mySmarty = new Smarty();
    $mySmarty->template_dir = 'Templates';
    $mySmarty->compile_dir = 'Templates_c';
    $mySmarty->cache_dir = 'Cache';
    $mySmarty->config_dir = 'Config';
  
    return $mySmarty;
}

function abrirConexion2() {
    $usuario = "root";
    $clave="root";
    
    $conexion = new ConexionBD("mysql", "localhost", "catalogo_juegos", $usuario, $clave);
    
    $conexion->conectar();
    
    return $conexion;
}

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
    
    $conexion = abrirConexion();
    
    $sql = "SELECT * FROM usuarios WHERE alias = :usuario";
    $sentencia = $conexion->prepare($sql);
    $sentencia->bindParam("usuario", $usuario, PDO::PARAM_STR);
    $sentencia->execute();
    $usuarioLogueado = $sentencia->fetch(PDO::FETCH_ASSOC);
    
    return $usuarioLogueado;
}

function abrirConexion() {
    $usuario = "root";
    $clave="root";
    
    $conexion = new PDO("mysql:host=localhost;dbname=catalogo_juegos", $usuario, $clave);
    
    return $conexion;
}

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