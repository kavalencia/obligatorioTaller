<?php
/* Smarty version 3.1.39, created on 2021-03-02 12:13:35
  from '/var/www/ObligatorioTaller/Templates/destacado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_603e2bef797235_89028409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a8028132f5d66381e379fff9f34f6c20f271f23' => 
    array (
      0 => '/var/www/ObligatorioTaller/Templates/destacado.tpl',
      1 => 1614652175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603e2bef797235_89028409 (Smarty_Internal_Template $_smarty_tpl) {
?><a>Destacado</a>
<div class = juego-destacado>
  <img src="./img/juegosCaratula/<?php echo $_smarty_tpl->tpl_vars['dest']->value['poster'];?>
" alt="logo">
  <span class="nombre-juego"><?php echo $_smarty_tpl->tpl_vars['dest']->value['nombre'];?>
</span>
  <span class="precio-juego">puntuación: 5</span>
</div>

<?php }
}
