<?php
/* Smarty version 3.1.39, created on 2021-02-24 04:44:23
  from '/var/www/ObligatorioTaller/Templates/contenedorPrincipal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6035d9a7d12ca0_40227947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec7e8207ef8fc7ac5882dd95e038f531a9c0d68b' => 
    array (
      0 => '/var/www/ObligatorioTaller/Templates/contenedorPrincipal.tpl',
      1 => 1614141862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:filters.tpl' => 1,
    'file:juegos.tpl' => 1,
  ),
),false)) {
function content_6035d9a7d12ca0_40227947 (Smarty_Internal_Template $_smarty_tpl) {
?><div id = "contenedorPrincipal">
    
    <div class="filter"> <?php $_smarty_tpl->_subTemplateRender("file:filters.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> </div>
    <div id="juegos"><?php $_smarty_tpl->_subTemplateRender("file:juegos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('juegos'=>$_smarty_tpl->tpl_vars['juegos']->value), 0, false);
?></div>   
    
</div>
 
<?php }
}
