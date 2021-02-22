<!doctype html>
<html>
    <head>		 
        <meta charset="utf-8" lang="es">
        <title>TODO JUEGOS</title>
        <link rel="stylesheet" href="./css/todoJuegos.css" type="text/css">
    </head>
    <body>
        {if isset($usuarioLogueado)}
            {if {$usuarioLogueado.es_admin} == 1}
                {include file="encabezadoUsuarioLogeadoAdmin.tpl" usuarioLogueado=$usuarioLogueado}
                {$usuarioLogueado.email}
                hola
            {else}
                {include file="encabezadoUsuarioLogeadoComun.tpl" usuarioLogueado=$usuarioLogueado}
                {$usuarioLogueado.email}

                hola2
            {/if}
        {else}
            {include file="encabezado.tpl" usuarioLogueado=$usuarioLogueado}
            {$usuarioLogueado.email}
            hola3
        {/if}
        {include file="contenedorPrincipal.tpl" usuarioLogueado=$usuarioLogueado}  
    </body>
</html> 
