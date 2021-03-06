<?php
/* Smarty version 3.1.39, created on 2021-03-02 12:13:32
  from '/var/www/ObligatorioTaller/Templates/juego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_603e2bec294db6_55540896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7109e706561db88032c458d03019cf6851912b4' => 
    array (
      0 => '/var/www/ObligatorioTaller/Templates/juego.tpl',
      1 => 1614652175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezado.tpl' => 1,
  ),
),false)) {
function content_603e2bec294db6_55540896 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
    <head>		 
        <meta charset="utf-8" lang="es">
        <title>TODO JUEGOS</title>
        <link rel="stylesheet" href="./css/todoJuegos.css" type="text/css">
        <?php echo '<script'; ?>
 script="text/javascript" src="./js/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 script="text/javascript" src="./js/main.js"><?php echo '</script'; ?>
>      
    </head>
    <body>

        <?php $_smarty_tpl->_subTemplateRender("file:encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['juego']->value))) {?>
            <h1><?php echo $_smarty_tpl->tpl_vars['juego']->value['nombre'];?>
</h1>
            <img src="./img/juegosCaratula/<?php echo $_smarty_tpl->tpl_vars['juego']->value['poster'];?>
" alt="logo">
            <p>fecha lanzamiento: <?php echo $_smarty_tpl->tpl_vars['juego']->value['fecha_lanzamiento'];?>
</p>
            <p>resumen: <?php echo $_smarty_tpl->tpl_vars['juego']->value['resumen'];?>
</p>
            <p>producido por: <?php echo $_smarty_tpl->tpl_vars['juego']->value['empresa'];?>
</p>
            <p>cantidad de visualizaciones: <?php echo $_smarty_tpl->tpl_vars['juego']->value['visualizaciones'];?>
</p>
            <p>plataformas:
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tipoConsolas']->value, 'consola');
$_smarty_tpl->tpl_vars['consola']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['consola']->value) {
$_smarty_tpl->tpl_vars['consola']->do_else = false;
?>
                    <p><?php echo $_smarty_tpl->tpl_vars['consola']->value['nombre'];?>
</p>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </p>
        <?php } else { ?>
            <p>Juego Inexistente</p>
        <?php }?> 
    </body>
</html> 
<?php }
}
