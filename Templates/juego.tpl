<!doctype html>
<html>
    <head>
        <title>{$juego.nombre}</title>
    </head>
    <body>
        {include file="encabezado.tpl"}
        {if isset($juego)}
            <h1>{$juego.nombre}</h1>
            <p>{$juego.descripcion}</p>
            <label> Precio U$S {$juego.precio}</label>
        {else}
            <h1>Juego Inexistente</h1>
        {/if}
    </body>
</html>
