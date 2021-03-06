<?php
/* Smarty version 3.1.39, created on 2021-03-02 12:13:32
  from '/var/www/ObligatorioTaller/Templates/juegosPaginados.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_603e2bec55c946_69304446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2d09982a45bb4225a5bd8b9b3b2e8513c506540' => 
    array (
      0 => '/var/www/ObligatorioTaller/Templates/juegosPaginados.tpl',
      1 => 1614652175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tarjeta_juego.tpl' => 1,
  ),
),false)) {
function content_603e2bec55c946_69304446 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'jueg');
$_smarty_tpl->tpl_vars['jueg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['jueg']->value) {
$_smarty_tpl->tpl_vars['jueg']->do_else = false;
?>
    <?php $_smarty_tpl->_subTemplateRender("file:tarjeta_juego.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('jueg'=>$_smarty_tpl->tpl_vars['jueg']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<div>
    <button id="anterior"<?php if (($_smarty_tpl->tpl_vars['pagina']->value <= 0)) {?> disabled <?php }?>>Anterior</button>
    <button id="siguiente"<?php if (($_smarty_tpl->tpl_vars['pagina']->value >= $_smarty_tpl->tpl_vars['ultimaPagina']->value)) {?> disabled <?php }?>>Siguiente</button>
</div><?php }
}
