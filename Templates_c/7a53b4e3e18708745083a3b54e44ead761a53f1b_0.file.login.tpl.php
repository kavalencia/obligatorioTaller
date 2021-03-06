<?php
/* Smarty version 3.1.39, created on 2021-03-04 22:02:52
  from '/var/www/ObligatorioTaller/Templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6041590c06f189_73199049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a53b4e3e18708745083a3b54e44ead761a53f1b' => 
    array (
      0 => '/var/www/ObligatorioTaller/Templates/login.tpl',
      1 => 1614652175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezadoSinLogin.tpl' => 1,
    'file:ingresoDatosV2.tpl' => 1,
  ),
),false)) {
function content_6041590c06f189_73199049 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
    <head>		 
        <meta charset="utf-8" lang="es">
        <title>Login TODO JUEGOS</title>
        <link rel="stylesheet" href="./css/todoJuegos.css" type="text/css">
    </head>
    <body>
        <?php $_smarty_tpl->_subTemplateRender("file:encabezadoSinLogin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
        <?php $_smarty_tpl->_subTemplateRender("file:ingresoDatosV2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('error'=>$_smarty_tpl->tpl_vars['error']->value), 0, false);
?>
    </body>
</html> 
<?php }
}
