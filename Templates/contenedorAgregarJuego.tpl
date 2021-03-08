<div id = "contenedorAgregarJuego">
    <div id="datosJuego">
        <h2>Agregar nuevo Juego</h2>
        <br>
        
        <form action="insertGame.php" method="POST" enctype="multipart/form-data">
            Nombre del Juego: <input type="text" name="nombre_juego" maxLength = 30 required/><br>
            Genero: <!--input type="text" name="genero" maxLength = 30 required/><br-->
            <select name="genero" id="genero">   
                {foreach from=$generos item=gen}
                    <option value={$gen.id}>{$gen.nombre}</option>
                {/foreach}   
            </select><br>
            Fecha de lanzamiento: <input type="date" min="1940-01-01" max="2040-12-31" name="fecha_lanzamiento" required/><br>
            Resumen: <input type="text" name="resumen" maxLength = 30 required/><br>
            Creado por: <input type="text" name="creado_por" maxLength = 30 required/><br>
            Video de Youtube: <input type="text" name="video_yoputube"/><br>
            Lista de consolas: <br><!--input type="text" name="lista_consolas" maxLength = 30 required/-->
            <select name="consolas[]" id="consola" multiple="multiple" tabindex="6" style="width:400px">
                {foreach from=$consolas item=con}
                    <option value={$con.id}>{$con.nombre}</option>
                    <!--input type="radio" id="radiob" name="radiob" value="{$con.id}">{$con.nombre}</input-->
                {/foreach}
            </select><br>
            <!--input type="submit" name="submit" style="padding:5px;" value="Submit"-->
            Imagen: <input type="file" accept=".jpg,.png" name= "imagen_juego" required/><br><br>
            <input type="submit" value="Insertar" /><br><br>
        </form>
    </div>
</div>

