<div id = "contenedorAgregarJuego">
    <div id="datosJuego">
        <h2>Agregar nuevo Juego</h2>
        <br>
        
        <form action="insertGame.php" method="POST">
            Nombre del Juego:<input type="text" name="nombre_juego"/><br>
            Genero:<input type="text" name="genero"/><br>
            Fecha de lanzamiento:<input type="text" name="fecha_lanzamiento"/><br>
            Resumen:<input type="text" name="resumen"/><br>
            Creado por:<input type="text" name="creado_por"/><br>
            Video de Youtube:<input type="text" name="video_yoputube"/><br>
            Cantidad de visitas:<input type="text" name="cant_visitas"/><br>
            Lista de consolas:<input type="text" name="lista_consolas"/><br>
            Imagen: <input type="text" name="imagen_juego"/><br>
            Puntuación: <input type="text" name="puntuacion"/><br>
            <input type="submit" value="Insertar" />
        </form>
    </div>
</div>

