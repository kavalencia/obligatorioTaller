<!doctype html>
<html>
    <head>		 
        <meta charset="utf-8" lang="es">
        <title>Revision de Comentarios</title>
        <link rel="stylesheet" href="./css/todoJuegos.css" type="text/css">
        <script script="text/javascript" src="./js/jquery-3.5.1.min.js"></script>
        <script script="text/javascript" src="./js/comentarios.js"></script>
    </head>
    <body>
        {include file="encabezadoUsuarioLogeadoAdmin.tpl" usuarioLogueado=$usuarioLogueado}
        {if isset($usuarioLogueado)}
            <div id="contenedorComentarios"></div>
        {else}
            <h5>Para revisar los comentarios debes ingresar como usuario administrador</h5>
        {/if}
    </body>
</html> 
