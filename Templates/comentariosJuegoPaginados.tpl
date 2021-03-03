<div>
    <h2>Comentarios</h2>
    <br>
    {foreach from=$comentarios item=com}
        {if isset($usuarioLogueado)}
            {if {$usuarioLogueado.es_admin} == 1}
                {include file="comentariosJuegoAdmin.tpl" com=$com}
            {else}
                {include file="comentariosJuegoComun.tpl" com=$com}
            {/if}
        {else}
            {include file="comentariosJuegoComun.tpl" com=$com}
        {/if}
    {/foreach}
</div>
<div>
    <button id="anterior"{if ($pagina <= 0)} disabled {/if}>Anterior</button>
    <button id="siguiente"{if ($pagina >= $ultimaPagina)} disabled {/if}>Siguiente</button>
</div>
<div id="comentarioYPuntuacion">
    {if isset($usuarioLogueado)}
        {include file="comentarioYPuntuacion.tpl"}
    {/if}
</div>