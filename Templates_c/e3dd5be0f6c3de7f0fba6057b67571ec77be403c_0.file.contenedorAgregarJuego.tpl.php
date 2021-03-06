<?php
/* Smarty version 3.1.39, created on 2021-03-06 02:28:21
  from '/var/www/ObligatorioTaller/Templates/contenedorAgregarJuego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6042e8c5818e55_83332466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3dd5be0f6c3de7f0fba6057b67571ec77be403c' => 
    array (
      0 => '/var/www/ObligatorioTaller/Templates/contenedorAgregarJuego.tpl',
      1 => 1614997697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6042e8c5818e55_83332466 (Smarty_Internal_Template $_smarty_tpl) {
?><div id = "contenedorAgregarJuego">
    <div id="datosJuego">
        <h2>Agregar nuevo Juego</h2>
        <br>
        
        <form action="insertGame.php" method="POST">
            Nombre del Juego: <input type="text" name="nombre_juego" maxLength = 30 required/><br>
            Genero: <input type="text" name="genero" maxLength = 30 required/><br>
            Fecha de lanzamiento: <input type="date" min="1940-01-01" max="2040-12-31" name="fecha_lanzamiento" required/><br>
            Resumen: <input type="text" name="resumen" maxLength = 30 required/><br>
            Creado por: <input type="text" name="creado_por" maxLength = 30 required/><br>
            Video de Youtube: <input type="text" name="video_yoputube"/><br>
            Cantidad de visitas: <input type="text" name="cant_visitas" maxLength = 30 required/><br>
            Lista de consolas: <input type="text" name="lista_consolas" maxLength = 30 required/><br>
            <!-- Imagen: <input type="text" name="imagen_juego" required/><br> -->
            Imagen: <input type="file" accept=".png" name= "imagen_juego" required/><br><br>
            <input type="submit" value="Guardar" /><br><br>
            <input type="submit" value="Insertar" />
        </form>
    </div>
</div>

<?php }
}
