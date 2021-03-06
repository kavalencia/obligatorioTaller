<?php
/* Smarty version 3.1.39, created on 2021-03-05 19:11:40
  from '/var/www/ObligatorioTaller/Templates/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6042826c9d5a49_61740193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbd9fd35bc299d67e14b069c7e2deacfd3f2a858' => 
    array (
      0 => '/var/www/ObligatorioTaller/Templates/register.tpl',
      1 => 1614971453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezadoSinLogin.tpl' => 1,
    'file:registroUsuario_v2.tpl' => 1,
  ),
),false)) {
function content_6042826c9d5a49_61740193 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
    <head>		 
        <meta charset="utf-8" lang="es">
        <title>Registro TODO JUEGOS</title>
        <link rel="stylesheet" href="./css/todoJuegos.css" type="text/css">
        <?php echo '<script'; ?>
 script="text/javascript" src="./js/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 script="text/javascript" src="./js/passwordValidation.js"><?php echo '</script'; ?>
>
        <link >
    </head>
    <body>
        <?php $_smarty_tpl->_subTemplateRender("file:encabezadoSinLogin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
        <?php $_smarty_tpl->_subTemplateRender("file:registroUsuario_v2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('porcentaje'=>$_smarty_tpl->tpl_vars['porcentaje']->value), 0, false);
?>
    </body>
</html><?php }
}
