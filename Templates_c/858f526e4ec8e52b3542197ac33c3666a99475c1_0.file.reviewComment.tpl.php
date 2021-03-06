<?php
/* Smarty version 3.1.39, created on 2021-03-06 06:29:09
  from '/var/www/ObligatorioTaller/Templates/reviewComment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60432135a9a752_97011444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '858f526e4ec8e52b3542197ac33c3666a99475c1' => 
    array (
      0 => '/var/www/ObligatorioTaller/Templates/reviewComment.tpl',
      1 => 1614652175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezadoUsuarioLogeadoAdmin.tpl' => 1,
  ),
),false)) {
function content_60432135a9a752_97011444 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
    <head>		 
        <meta charset="utf-8" lang="es">
        <title>Revision de Comentarios</title>
        <link rel="stylesheet" href="./css/todoJuegos.css" type="text/css">
        <?php echo '<script'; ?>
 script="text/javascript" src="./js/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 script="text/javascript" src="./js/comentarios.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        <?php $_smarty_tpl->_subTemplateRender("file:encabezadoUsuarioLogeadoAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('usuarioLogueado'=>$_smarty_tpl->tpl_vars['usuarioLogueado']->value), 0, false);
?>
        <div id="contenedorComentarios"></div>
    </body>
</html> 
<?php }
}
