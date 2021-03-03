<!doctype html>
<html>
    <head>		 
        <meta charset="utf-8" lang="es">
        <title>TODO JUEGOS</title>
        <link rel="stylesheet" href="./css/todoJuegos.css" type="text/css">
        <script script="text/javascript" src="./js/jquery-3.5.1.min.js"></script>
        <script script="text/javascript" src="./js/main.js"></script>
        
    </head>
    <body>
        {if isset($usuarioLogueado)}
            {if {$usuarioLogueado.es_admin} == 1}
                {include file="encabezadoUsuarioLogeadoAdmin.tpl" usuarioLogueado=$usuarioLogueado}
            {else}
                {include file="encabezadoUsuarioLogeadoComun.tpl" usuarioLogueado=$usuarioLogueado}
            {/if}
        {else}
            {include file="encabezado.tpl" usuarioLogueado=$usuarioLogueado}
        {/if}
        <div class="titulo-juegos"><a>Juegos</a></div>
        {include file="destacado.tpl" dest=$destacado[0]}
        <div class="filter"> {include file="filters.tpl"} </div> 
        <div id="contenedorJuegos"> </div>
    </body>
</html> 
