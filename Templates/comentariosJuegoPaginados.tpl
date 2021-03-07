<div>
    <h2>Comentarios</h2>
    <br>
    {foreach from=$comentarios item=com}
        {if isset($usuarioLogueado)}
            {if {$usuarioLogueado.es_admin} == 1}
                {include file="comentariosJuegoAdmin.tpl" com=$com}
                <div>
                    <button id="anterior"{if ($pagina <= 0)} disabled {/if}>Anterior</button>
                    <button id="siguiente"{if ($pagina >= $ultimaPagina)} disabled {/if}>Siguiente</button>
                </div>    
            {else}
                <h3>Para revisar los comentarios debes ingresar como usuario administrador</h3>
                {*include file="comentariosJuegoComun.tpl" com=$com*}
            {/if}
        {else}
            {*include file="comentariosJuegoComun.tpl" com=$com*}
            <h3>Para revisar los comentarios debes ingresar como usuario administrador</h3>
        {/if}
    {/foreach}
</div>
