<div id = "contenedorAgregarJuego">
    <div id="datosJuego">
        <h2>Agregar nuevo Juego</h2>
        <br>
        
        <form action="insertGame.php" method="POST" enctype="multipart/form-data">
            Nombre del Juego: <input type="text" name="nombre_juego" maxLength = 30 required/><br>
            Genero: <input type="text" name="genero" maxLength = 30 required/><br>
            Fecha de lanzamiento: <input type="date" min="1940-01-01" max="2040-12-31" name="fecha_lanzamiento" required/><br>
            Resumen: <input type="text" name="resumen" maxLength = 30 required/><br>
            Creado por: <input type="text" name="creado_por" maxLength = 30 required/><br>
            Video de Youtube: <input type="text" name="video_yoputube"/><br>
            Cantidad de visitas: <input type="text" name="cant_visitas" maxLength = 30 required/><br>
            Lista de consolas: <input type="text" name="lista_consolas" maxLength = 30 required/><br>
            Imagen: <input type="file" accept=".jpg,.png" name= "imagen_juego" required/><br><br>
            <input type="submit" value="Insertar" /><br><br>
        </form>
    </div>
</div>

