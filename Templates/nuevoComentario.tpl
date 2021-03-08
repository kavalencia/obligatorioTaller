{if isset($usuarioLogueado)}
    {if (!$tieneComentario)}
        <h2>Tu comentario y puntaje nos interesa</h2>  
        <textarea id="nuevoCom" rows="5" cols="40">Ingresa tu comentario aquí</textarea>
        <p class="puntaje">
            <input id="radio1" type="radio" name="estrellas" value="5">
            <label for="radio1">★</label>
            <input id="radio2" type="radio" name="estrellas" value="4">
            <label for="radio2">★</label>
            <input id="radio3" type="radio" name="estrellas" value="3">
            <label for="radio3">★</label>
            <input id="radio4" type="radio" name="estrellas" value="2">
            <label for="radio4">★</label>
            <input id="radio5" type="radio" name="estrellas" value="1">
            <label for="radio5">★</label>
        </p>
        <input id="buttonComPun" type="button" value="Insertar">
    {else}
        <h3> Ya tienes un comentario y puntuacion para este juego </h3>
    {/if}
{/if}
