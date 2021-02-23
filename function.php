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

function getJuego($id){
    $juego = NULL;
    foreach (getJuegosDeSeleccion() as $juego) {   
        if($juego[id] == $id){
            $juego = $juego[id];
        }
    }
    return $juego;
}

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
}
    

