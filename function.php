<?php
require 'Config/configuracion.php';
ini_set('display_errors', 1);
require_once 'class.Conexion.BD.php';
require_once './libs/Smarty.class.php';

function abrirConexion2() {
    $usuario = DB_USR;
    $clave = DB_PASS;
    var_dump($usuario);
    var_dump($clave);
    
    $conexion = new PDO("mysql:host=localhost;dbname=catalogo_juegos", $usuario, $clave);
    
    return $conexion;
}

function abrirConexion() {
    $usuario = DB_USR;
    $clave = DB_PASS;
    
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


function aumentarCantidadVisita($id, $visualizaciones){
    $visualizaciones++;
    $conexion = abrirConexion();
    $params = array(
        array("id", $id, "int"),
        array("visualizaciones", $visualizaciones, "int")
    );
    $sql = "UPDATE juegos SET visualizaciones = :visualizaciones WHERE id = :id";  
    $conexion->consulta($sql, $params);
    return $conexion->ultimoIdInsert();
}

function getTieneComentarioParaJuego($juegoId, $usuarioId){
    $conexion = abrirConexion(); 
    $params = array(
        array("juegoId", $juegoId, "int"),
        array("usuarioId", $usuarioId, "int"),
    );
    $sql = "SELECT COUNT(*) as cantComentarios
            FROM comentarios c 
            WHERE c.id_juego = :juegoId AND c.id_usuario = :usuarioId";  
    $conexion->consulta($sql, $params);
    $comentarioPorJuego = $conexion->siguienteRegistro();
    return ($comentarioPorJuego['cantComentarios'] != 0);
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


function ultimaPaginaDeJuegos($texto, $genero, $consola){
    $conexion = abrirConexion();  
    $params = array(
        array("texto", '%'.$texto.'%', "string"),
    );
    $sql = "SELECT COUNT(DISTINCT (j.id)) AS total FROM juegos j, generos g, consolas c, juegos_consolas jc  WHERE j.id_genero = g.id AND j.id = jc.id_juego AND jc.id_consola = c.id AND (j.nombre LIKE :texto OR g.nombre LIKE :texto OR c.nombre LIKE :texto)";
    if($genero != 0){
      $sql =  $sql . " AND g.id = " . $genero;
    }
    if($consola != 0){
      $sql =  $sql . " AND c.id = " . $consola;
    }
    $conexion->consulta($sql, $params);
    $size = 8;
    $fila = $conexion->siguienteRegistro();  
    $paginas = ceil($fila["total"]/$size) - 1;
    
    return $paginas;
}


function getJuegosDeSeleccion($pagina = 0, $texto = '', $orden, $genero, $consola){
    $size = 8;
    $offset = $pagina * $size;
    $conexion = abrirConexion();  
    $params = array(
        array("texto", '%'.$texto.'%', "string"),
        array("offset", $offset, "int"),
        array("size", $size, "int"),
    );
    
    $sql = "SELECT DISTINCT(j.id), j.nombre, j.poster, j.puntuacion, g.nombre as genero FROM juegos j, generos g, consolas c, juegos_consolas jc  WHERE j.id_genero = g.id AND j.id = jc.id_juego AND jc.id_consola = c.id AND j.nombre LIKE :texto";
    //$sql = "SELECT j.id, j.nombre, j.poster, j.puntuacion, g.nombre as genero FROM juegos j, generos g, consolas c, juegos_consolas jc  WHERE j.id_genero = g.id AND j.id = jc.id_juego AND jc.id_consola = c.id AND (j.nombre LIKE :texto OR g.nombre LIKE :texto OR c.nombre LIKE :texto)";
    
    $sqlLimit = " LIMIT :offset, :size";
    

    if($genero != 0){
      $sql =  $sql . " AND g.id = " . $genero;
    }
    if($consola != 0){
      $sql =  $sql . " AND c.id = " . $consola;
    }
    if($orden == "normal"){
        $sql = $sql . $sqlLimit;
    }
    if($orden == "lanzamientoAsc"){
        $columna = "fecha_lanzamiento";
        $sql = $sql . " ORDER BY " . $columna . " ASC" . $sqlLimit;
    }
    else if($orden == "lanzamientoDesc"){
        $columna = "fecha_lanzamiento";
        $sql = $sql . " ORDER BY " . $columna . " DESC" . $sqlLimit;
    }
    else if($orden == "puntajeAsc"){
        $columna = "puntuacion";
        $sql = $sql . " ORDER BY " . $columna . " ASC" . $sqlLimit;
    }
    else if($orden == "puntajeDesc"){
        $columna = "puntuacion";
        $sql = $sql . " ORDER BY " . $columna . " DESC" . $sqlLimit;
    }
    else if($orden == "cantVisualizacionesAsc"){
        $columna = "visualizaciones";
        $sql = $sql . " ORDER BY " . $columna . " ASC" . $sqlLimit;
    }
    else if ($orden == "cantVisualizacionesDesc"){
        $columna = "visualizaciones";
        $sql = $sql . " ORDER BY " . $columna . " DESC" . $sqlLimit;
    }
   
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

    $conexion = abrirConexion();
    $params = array(
        array("nombre", $juego["nombre"], "string"),
        array("id_genero", $juego["id_genero"], "int"),
        array("puntuacion", "0", "int"),
        array("fecha_lanzamiento", $juego["fecha_lanzamiento"], "string"),
        array("empresa", $juego["empresa"], "string"),
        array("visualizaciones", "0", "int"),
        array("url_video", $juego["url_video"], "string"),
        array("resumen", $juego["resumen"], "string"),
    );
    $sql = "INSERT INTO juegos (nombre, id_genero, puntuacion, fecha_lanzamiento, empresa, visualizaciones, url_video, resumen) VALUES(:nombre, :id_genero, :puntuacion, :fecha_lanzamiento, :empresa, :visualizaciones, :url_video, :resumen)";
    $conexion->consulta($sql, $params);
    return $conexion->ultimoIdInsert();
}

function update_ruta_imagen($idJuego, $ruta_imagen){
    $conexion = abrirConexion();
    $params = array(
        array("idJuego", $idJuego, "int"),
        array("ruta_imagen", $ruta_imagen, "string")
     );
    $sql = "UPDATE juegos SET poster = :ruta_imagen WHERE id = :idJuego";
    $conexion->consulta($sql, $params);
    return $conexion->ultimoIdInsert();
    
}

function updateListaConsolas($idJuego, $listaConsolas){
    $conexion = abrirConexion();
    for($i = 0; $i < count($listaConsolas); ++$i) {
        $params = array(
          array("id_juego", $idJuego, "int"),  
          array("id_consola", $listaConsolas[$i], "int"),  
        );
        $sql = "INSERT INTO juegos_consolas(id_juego, id_consola) VALUES (:id_juego, :id_consola)";
        $conexion->consulta($sql, $params);
    }
    
    return $conexion->ultimoIdInsert();
}

function updatePuntuacionJuego($juegoId){
    
    $conexion = abrirConexion();
    $params = array(
        array("juegoId", $juegoId, "int")
    );
    $sql = "UPDATE juegos SET puntuacion = (SELECT AVG(puntuacion) FROM comentarios WHERE id_juego = :juegoId) WHERE id = :juegoId";
    $conexion->consulta($sql, $params);
    return $conexion->ultimoIdInsert();
}

function insertComentarioJuego($com, $puntaje, $juegoId, $usuario){
    $conexion = abrirConexion();  
    
    $params = array(
        array("id_usuario", $usuario, "int"),
        array("id_juego", $juegoId, "int"),
        array("texto", $com, "string"),
        array("puntuacion", $puntaje, "int"),
    );
    
    $sql = "INSERT INTO comentarios(id_usuario, id_juego, texto, fecha, puntuacion) VALUES(:id_usuario, :id_juego, :texto, now(), :puntuacion)";
    $conexion->consulta($sql, $params);
    
    return $conexion->ultimoIdInsert();
}

function borrarComentario($comId){
    $conexion = abrirConexion();
    
    $params = array(
        array("comId", $comId, "int"),
    );
    $sql = "DELETE FROM comentarios WHERE id = :comId";
    $conexion->consulta($sql, $params);
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

function getComentariosDeJuego($pagina = 0, $texto = '', $juegoId){
    
    $size = 5;
    $offset = $pagina * $size;
    $conexion = abrirConexion();
    
    $params = array(
        array("texto", '%'.$texto.'%', "string"),
        array("offset", $offset, "int"),
        array("size", $size, "int"),
        array("juegoId", $juegoId, "int"),
    );
    $sql = "SELECT *
              FROM comentarios 
             WHERE texto 
              LIKE :texto
              AND id_juego = :juegoId
         ORDER BY fecha desc 
             LIMIT :offset, :size";
    $conexion->consulta($sql, $params);
    return $conexion->restantesRegistros();    
}

function ultimaPaginaDeComentariosDelJuego($texto, $juegoId){
    $conexion = abrirConexion();
    
    $params = array(
        array("texto", '%'.$texto.'%', "string"),
        array("juegoId", $juegoId, "int"),
    );
    $sql = "SELECT count(*) as total
              FROM comentarios 
             WHERE texto 
              LIKE :texto
              and id_juego = :juegoId";
    
    $conexion->consulta($sql, $params);
    $fila = $conexion->siguienteRegistro();
    $size = 5;
    $paginas = ceil($fila["total"] / $size) - 1;
    
    return $paginas;
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

function obtenerGeneros(){
    $conexion = abrirConexion();
    
    $sql = "SELECT id, nombre FROM generos";
    $conexion->consulta($sql);

    return $conexion->restantesRegistros();
        
}

function obtenerConsolas(){
    $conexion = abrirConexion();
    
    $sql = "SELECT id, nombre FROM consolas";
    $conexion->consulta($sql);
    return $conexion->restantesRegistros();
}