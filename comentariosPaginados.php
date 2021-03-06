<?php
    ini_set('display_errors', 1);
    require_once 'function.php';
    error_reporting(E_ERROR);
    
    $mySmarty = getSmarty();
    
    $pagina = 0;
    if(isset($_GET['pag'])){
        $pagina = $_GET['pag'];
    }
    
    $texto = "";
    if(isset($_GET['texto'])){
        $texto = $_GET['texto'];
    }
    
    $juegoId = 0;
    if(isset($_GET['juegoId'])){
        $juegoId = $_GET['juegoId'];
    }
    
    $comId = "";
    if(isset($_GET['comId'])){
        $comId = $_GET['comId'];
    }
    
    $borrar = "0";
    if(isset($_GET['borrar'])){
        $borrar = $_GET['borrar'];
    }

    if(borrar == "1"){
        borrarComentario($comId);
        updatePuntuacionJuego($juegoId);
    }
    
    $comentarios = getComentarios($pagina, $texto);
    $ultimaPagina = ultimaPaginaDeComentarios($texto);
    
    $mySmarty->assign("comentarios", $comentarios);
    $mySmarty->assign("pagina", $pagina);
    $mySmarty->assign("ultimaPagina", $ultimaPagina);
    $mySmarty->display("comentariosPaginados.tpl");