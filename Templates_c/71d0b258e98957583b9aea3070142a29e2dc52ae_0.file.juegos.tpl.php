<?php
/* Smarty version 3.1.39, created on 2021-02-24 03:13:31
  from '/var/www/ObligatorioTaller/Templates/juegos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6035c45b79d9f1_89366411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71d0b258e98957583b9aea3070142a29e2dc52ae' => 
    array (
      0 => '/var/www/ObligatorioTaller/Templates/juegos.tpl',
      1 => 1614136288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tarjeta_juego.tpl' => 1,
  ),
),false)) {
function content_6035c45b79d9f1_89366411 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'jueg');
$_smarty_tpl->tpl_vars['jueg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['jueg']->value) {
$_smarty_tpl->tpl_vars['jueg']->do_else = false;
$_smarty_tpl->_subTemplateRender("file:tarjeta_juego.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('jueg'=>$_smarty_tpl->tpl_vars['jueg']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          
                            

                  <?php }
}
