<h2>Revisión de comentarios</h2>
<br>
{foreach from=$comentarios item=com}
    {include file="comentario.tpl" com=$com}
{/foreach}
<div>
    <button id="anterior"{if ($pagina <= 0)} disabled {/if}>Anterior</button>
    <button id="siguiente"{if ($pagina >= $ultimaPagina)} disabled {/if}>Siguiente</button>
</div>
