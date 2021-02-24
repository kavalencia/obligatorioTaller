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


function getJuegosDeSeleccion(){
    $conexion = abrirConexion();
    // "SELECT j.id, j.nombre, g.genero, j.poster, j.puntuacion FROM juegos j, generos g WHERE j.id_genero = g.id";
    $sql = "SELECT * FROM juegos";
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

