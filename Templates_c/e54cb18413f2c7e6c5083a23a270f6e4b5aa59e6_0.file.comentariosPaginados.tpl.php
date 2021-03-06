<?php
/* Smarty version 3.1.39, created on 2021-03-06 06:29:09
  from '/var/www/ObligatorioTaller/Templates/comentariosPaginados.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60432135c107d1_95574125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e54cb18413f2c7e6c5083a23a270f6e4b5aa59e6' => 
    array (
      0 => '/var/www/ObligatorioTaller/Templates/comentariosPaginados.tpl',
      1 => 1614652175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:comentario.tpl' => 1,
  ),
),false)) {
function content_60432135c107d1_95574125 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Revisión de comentarios</h2>
<br>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comentarios']->value, 'com');
$_smarty_tpl->tpl_vars['com']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['com']->value) {
$_smarty_tpl->tpl_vars['com']->do_else = false;
?>
    <?php $_smarty_tpl->_subTemplateRender("file:comentario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('com'=>$_smarty_tpl->tpl_vars['com']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<div>
    <button id="anterior"<?php if (($_smarty_tpl->tpl_vars['pagina']->value <= 0)) {?> disabled <?php }?>>Anterior</button>
    <button id="siguiente"<?php if (($_smarty_tpl->tpl_vars['pagina']->value >= $_smarty_tpl->tpl_vars['ultimaPagina']->value)) {?> disabled <?php }?>>Siguiente</button>
</div>
<?php }
}
