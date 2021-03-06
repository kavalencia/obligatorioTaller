<?php
/* Smarty version 3.1.39, created on 2021-02-24 04:46:36
  from '/var/www/ObligatorioTaller/Templates/contenedorJuegos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6035da2c6e3416_34561676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66ed719fd48e84b6f7a83b39a16e9b5c27020702' => 
    array (
      0 => '/var/www/ObligatorioTaller/Templates/contenedorJuegos.tpl',
      1 => 1614141899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:filters.tpl' => 1,
    'file:juegos.tpl' => 1,
  ),
),false)) {
function content_6035da2c6e3416_34561676 (Smarty_Internal_Template $_smarty_tpl) {
?><div id = "contenedorJuegos">   
    <div class="filter"> <?php $_smarty_tpl->_subTemplateRender("file:filters.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> </div>
    <div id="juegos"><?php $_smarty_tpl->_subTemplateRender("file:juegos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('juegos'=>$_smarty_tpl->tpl_vars['juegos']->value), 0, false);
?></div>      
</div>
 
<?php }
}
