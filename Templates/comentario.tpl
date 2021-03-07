<div class="comentario">
    <div id="comentarioTexto">
        {$com.texto}
    </div>
    <div id="comentarioBoton">
            <input id="comId" type="hidden" name="comId" value={$com.id}></input>
            <input id="juegoId" type="hidden" name="juegoId" value={$com.id_juego}></input> 
            <input class="botoncom" type="submit" value="Borrar" />
    </div>
</div>