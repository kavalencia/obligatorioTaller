<?php
/* Smarty version 3.1.39, created on 2021-03-04 16:09:51
  from '/var/www/ObligatorioTaller/Templates/searchFilters.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6041064fea3db2_90889192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '305e1151f93c7bee9479c372e5728dbbfd259134' => 
    array (
      0 => '/var/www/ObligatorioTaller/Templates/searchFilters.tpl',
      1 => 1614874175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6041064fea3db2_90889192 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="/action_page.php">
  <input type="search" id="texto" name="gsearch" placeholder="Search">
  <input id="buscar" type="submit">
  <br><br>
</form>

<form action="#">
  <label for="ordenar">Filtrar por genero:</label>
  <select name="genero" id="genero">   
      <option value=0></option>
      <option value=1>Acción</option>
      <option value=2>Mmorpg</option>
      <option value=3>Aventura</option>
      <option value=4>Mundo abierto</option>
      <option value=5>Shooter</option>
      <option value=6>Deporte</option>
      <option value=7>Carreras</option>
      <option value=8>Rpg</option>
  </select>
  <br><br>
</form>
<form action="#">
  <label for="ordenar">Filtrar por consola:</label>
  <select name="consola" id="consola">  
      <option value=""></option>
      <option value="1">PlayStation4</option>
      <option value="2">PlayStation3</option>
      <option value="3">Xbox360</option>
      <option value="4">Pc</option>
      <option value="5">Super nintendo</option>
      <option value="6">Nintendo Switch</option>
      <option value="7">Nintendo64</option>
  </select>
  <br><br>
</form>

<?php }
}
