<?php
/* Smarty version 3.1.39, created on 2021-03-04 23:49:45
  from '/var/www/ObligatorioTaller/Templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60417219934196_48221207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46b966670c0c5f13d8ad11694584fd32cb592dc2' => 
    array (
      0 => '/var/www/ObligatorioTaller/Templates/index.tpl',
      1 => 1614898140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:encabezadoUsuarioLogeadoAdmin.tpl' => 1,
    'file:encabezadoUsuarioLogeadoComun.tpl' => 1,
    'file:encabezado.tpl' => 1,
    'file:destacado.tpl' => 1,
    'file:filters.tpl' => 1,
  ),
),false)) {
function content_60417219934196_48221207 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
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

        <?php if ((isset($_smarty_tpl->tpl_vars['usuarioLogueado']->value))) {?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['usuarioLogueado']->value['es_admin'];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 1) {?>
                <?php $_smarty_tpl->_subTemplateRender("file:encabezadoUsuarioLogeadoAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('usuarioLogueado'=>$_smarty_tpl->tpl_vars['usuarioLogueado']->value), 0, false);
?>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender("file:encabezadoUsuarioLogeadoComun.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('usuarioLogueado'=>$_smarty_tpl->tpl_vars['usuarioLogueado']->value), 0, false);
?>
            <?php }?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("file:encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('usuarioLogueado'=>$_smarty_tpl->tpl_vars['usuarioLogueado']->value), 0, false);
?>
        <?php }?>
        <div class="titulo-juegos"><a>Juegos</a></div>
        <?php $_smarty_tpl->_subTemplateRender("file:destacado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dest'=>$_smarty_tpl->tpl_vars['destacado']->value[0]), 0, false);
?>
        <div class="filter"> <?php $_smarty_tpl->_subTemplateRender("file:filters.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> </div> 
        <div id="contenedorJuegos"> </div>

    </body>
</html> 
<?php }
}
