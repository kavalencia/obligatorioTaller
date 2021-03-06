<div class="comentario">
    <div id="comentarioTexto">
        {$com.texto}
    </div>
    <div id="comentarioBoton">
        <form action="borrarComentario.php" method="POST">
            <input id="comId" type="hidden" name="comId" value={$com.id}></input>
            <input id="juegoId" type="hidden" name="juegoId" value={$com.id_juego}></input> 
            <input id="botoncom" type="submit" value="Borrar" />
        </form>
    </div>
</div>