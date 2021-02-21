<?php

require_once './libs/Smarty.class.php';

function getSmarty(){
    $mySmarty = new Smarty();
    $mySmarty->template_dir = 'Templates';
    $mySmarty->compile_dir = 'Templates_c';
    $mySmarty->cache_dir = 'Cache';
    $mySmarty->config_dir = 'Config';
  
    return $mySmarty;
}

function login($usuario, $clave) {
    if($usuario == 'test' && $clave == 'test') {
        return array(
          "usuario" => "test",
            "nombre" => "usuario de prueba"
        );
    };
    
    return NULL;
}

function abrirConexion() {
    $usuario = "root";
    $clave="root";
    
    $conexion = new PDO("mysql:host=localhost;dbname=catalogo_juegos", $usuario, $clave);
    
    //$conexion->conectar();
    
    return $conexion;
}