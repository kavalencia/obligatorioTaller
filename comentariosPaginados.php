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
    
    $comentarios = getComentarios($pagina, $texto);
    
    $ultimaPagina = ultimaPaginaDeComentarios($texto);
    
    $mySmarty->assign("comentarios", $comentarios);
    $mySmarty->assign("pagina", $pagina);
    $mySmarty->assign("ultimaPagina", $ultimaPagina);
    $mySmarty->display("comentariosPaginados.tpl");