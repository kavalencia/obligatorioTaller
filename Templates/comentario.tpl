<div class="comentario">
    <div id="comentarioTexto">
        {$com.texto}
    </div>
    <div id="comentarioBoton">
        <form action="borrarComentario.php" method="POST">
            <input type="hidden" name="comId" value="{$com.id}"></input>
            <input type="submit" value="Borrar" />
        </form>
    </div>
</div>