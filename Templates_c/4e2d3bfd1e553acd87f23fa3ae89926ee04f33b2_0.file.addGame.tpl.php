<?php
/* Smarty version 3.1.39, created on 2021-02-24 10:07:45
  from '/var/www/ObligatorioTaller/Templates/addGame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60362571e82112_16808825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e2d3bfd1e553acd87f23fa3ae89926ee04f33b2' => 
    array (
      0 => '/var/www/ObligatorioTaller/Templates/addGame.tpl',
      1 => 1614136288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezadoUsuarioLogeadoAdmin.tpl' => 1,
    'file:contenedorAgregarJuego.tpl' => 1,
  ),
),false)) {
function content_60362571e82112_16808825 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
    <head>		 
        <meta charset="utf-8" lang="es">
        <title>Agregar Juego</title>
        <link rel="stylesheet" href="./css/todoJuegos.css" type="text/css">
    </head>
    <body>
        <?php $_smarty_tpl->_subTemplateRender("file:encabezadoUsuarioLogeadoAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('usuarioLogueado'=>$_smarty_tpl->tpl_vars['usuarioLogueado']->value), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:contenedorAgregarJuego.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </body>
</html> 
<?php }
}
