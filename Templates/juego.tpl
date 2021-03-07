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
            <p>cantidad de visitas: {$juego.visualizaciones}</p>
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
        <div id="comentarioYPuntuacion">
        </div>