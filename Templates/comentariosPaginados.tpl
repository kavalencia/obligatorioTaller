<h2>Revisión de comentarios</h2>
<br>
{foreach from=$comentarios item=com}
    {include file="comentario.tpl" com=$com}
{/foreach}
<div>
    <button id="anterior" {if $pagina <= 0}disable{/if}>Anterior</button>
    <button id="siguiente" {if $pagina <= $ultimaPagina}disable{/if}>Siguiente</button>
</div> 