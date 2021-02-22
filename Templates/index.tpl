<!doctype html>
<html>
    <head>		 
        <meta charset="utf-8" lang="es">
        <title>TODO JUEGOS</title>
        <link rel="stylesheet" href="./css/todoJuegos.css" type="text/css">
    </head>
    <body>
        {if isset($usuarioLogueado)}
            {if {$usuarioLogueado.esAdmin} == 1}
                {include file="encabezadoUsuarioLogeadoAdmin.tpl" usuarioLogueado=$usuarioLogueado}
                hola
            {else}
                {include file="encabezadoUsuarioLogeadoComun.tpl" usuarioLogueado=$usuarioLogueado}
                hola2
            {/if}
        {else}
            {include file="encabezado.tpl" usuarioLogueado=$usuarioLogueado}
            hola3
        {/if}
        {include file="contenedorPrincipal.tpl"}  
    </body>
</html> 
