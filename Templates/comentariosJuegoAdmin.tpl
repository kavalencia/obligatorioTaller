<div class="comentario">
    <div id="comentarioTexto">
        {$com.texto}
    </div>
    <div id="comentarioBoton">
        <form action="borrarComentarioJuego.php" method="POST">
            <input type="hidden" name="comId" value="{$com.id}"></input>
            <input type="hidden" name="juegoId" value="{$com.id_juego}"></input>
            <input id="botonBorrar" type="submit" value="Borrar" />
        </form>
    </div>
</div>
