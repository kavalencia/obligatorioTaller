{foreach from=$juegos item=jueg}
    {include file="tarjeta_juego.tpl" jueg=$jueg}
{/foreach}
<div>
    <button id="anterior"{if ($pagina <= 0)} disabled {/if}>Anterior</button>
    <button id="siguiente"{if ($pagina >= $ultimaPagina)} disabled {/if}>Siguiente</button>
</div>