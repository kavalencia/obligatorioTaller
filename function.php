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
    if($usuario == 'test' && $clave == 'test') {
        return array(
          "email" => "test@test.com",
            "alias" => "test",
            "password" => "test",
            "esAdmin" => "0"
        );
    };
    
    return NULL;
    
    /*$conexion = abrirConexion2();
    
    $sql = "SELECT * FROM categorias WHERE usuario = :usuario";
    $sentencia = $conexion->prepare($sql);
    $sentencia->bindParam("usuario", $usuario, PDO::PARAM_STR);
    $sentencia->execute();
    $usuarioLogeado = $sentencia->fetch(PDO::FETCH_ASSOC);
    
    return array(
        usuario => $usuarioLogeado->email,
        nombre => $usuarioLogeado->nombre,
        clave => $usuarioLogeado->nombre,
        
    );
    
    $conexion->consulta($sql);
    
    return $conexion->restantesRegistros(); */
}

function abrirConexion() {
    $usuario = "root";
    $clave="root";
    
    $conexion = new PDO("mysql:host=localhost;dbname=catalogo_juegos", $usuario, $clave);
    
    //$conexion->conectar();
    
    return $conexion;
}

function logout() {
    unset($_SESSION['usuarioLogueado']);
    session_destroy();
}