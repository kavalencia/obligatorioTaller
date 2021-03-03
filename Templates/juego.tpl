<!doctype html>
<html>
    <head>		 
        <meta charset="utf-8" lang="es">
        <title>TODO JUEGOS</title>
        <link rel="stylesheet" href="./css/todoJuegos.css" type="text/css">
        <script script="text/javascript" src="./js/jquery-3.5.1.min.js"></script>
        <script script="text/javascript" src="./js/comentarioJuego.js"></script>      
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
        
        {if isset($juego)}
            <h1>{$juego.nombre}</h1>
            <img src="./img/juegosCaratula/{$juego.poster}" alt="logo">
            <p>fecha lanzamiento: {$juego.fecha_lanzamiento}</p>
            <p>resumen: {$juego.resumen}</p>
            <p>producido por: {$juego.empresa}</p>
            <p>cantidad de visualizaciones: {$juego.visualizaciones}</p>
            <p>plataformas:
            {foreach from=$tipoConsolas item=consola}
                    <p>{$consola.nombre}</p>
            {/foreach}
            </p>
        {else}
            <p>Juego Inexistente</p>
        {/if} 
        <div id="comentariosJuegoPagina">
        </div>
    </body>
</html> 
