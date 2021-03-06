<?php
/* Smarty version 3.1.39, created on 2021-03-03 03:45:33
  from '/var/www/ObligatorioTaller/Templates/filters.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_603f065de97407_97260923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce7df01ffd738078c8c2cc8f1058da976c09a411' => 
    array (
      0 => '/var/www/ObligatorioTaller/Templates/filters.tpl',
      1 => 1614743118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603f065de97407_97260923 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="#">
  <label for="ordenar">Ordenar por:</label>
  <select name="orden" id="orden">
      <option value="normal">Orden por defecto</option>
    <optgroup label="Fecha lanzamiento">
      <option value="lanzamientoAsc">Ascendente</option>
      <option value="lanzamientoDesc">Descendente</option>
    </optgroup>
    <optgroup label="Puntaje">
      <option value="puntajeAsc">Ascendente</option>
      <option value="puntajeDesc">Descendente</option>
    </optgroup>
     <optgroup label="Cantidad visualizaciones">
      <option value="cantVisualizacionesAsc">Ascendente</option>
      <option value="cantVisualizacionesDesc">Descendente</option>
    </optgroup>
  </select>
  <br><br>
</form>
<!--  <h1>Fecha lanzamiento ordenado por:</h1>
<form action="/action_page.php">
        <select name="filter" id="filterLanzamiento" class="cmbLanzamiento">
          <option value="lanzamientoAsc">Fecha lanzamiento ascendente</option>
          <option value="lanzamientoDesc">Fecha lanzamiento descendente</option>
        </select>
        <br><br>    
        <input type="filtrar" value="Submit">
</form>


<h1>Puntaje ordenado por:</h1>
<form action="/action_page.php">
        <select name="filter" id="filterPuntaje" class="cmbPuntaje">
          <option value="puntajeAsc">Puntaje ascendente</option>
          <option value="puntajeDesc">Puntaje descendente</option>
        </select>
        <br><br>    
        <input type="filtrar" value="Submit">
</form>

<h1>Cantidad visualizaciones ordenado por:</h1>
<form action="/action_page.php">
        <select name="filter" id="filterCantVisualizaciones" class="cmbCantVisualizacion">
          <option value="visualizacionesAsc">Cantidad visualizaciones ascendente</option>
          <option value="visualizacionesDes">Cantidad visualizaciones descendente</option>
        </select>
        <br><br>    
        <input type="filtrar" value="Submit">
</form>-->
<?php }
}
