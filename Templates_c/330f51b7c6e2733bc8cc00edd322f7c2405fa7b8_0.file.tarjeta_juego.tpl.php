<?php
/* Smarty version 3.1.39, created on 2021-03-02 12:13:32
  from '/var/www/ObligatorioTaller/Templates/tarjeta_juego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_603e2bec57a570_72877569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '330f51b7c6e2733bc8cc00edd322f7c2405fa7b8' => 
    array (
      0 => '/var/www/ObligatorioTaller/Templates/tarjeta_juego.tpl',
      1 => 1614652175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603e2bec57a570_72877569 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tarjeta-juego">
    <a href="juego.php?juegId=<?php echo $_smarty_tpl->tpl_vars['jueg']->value['id'];?>
">
    <div class="juego">
        <img src="./img/juegosCaratula/<?php echo $_smarty_tpl->tpl_vars['jueg']->value['poster'];?>
" alt="logo">
        <span class="nombre-juego"><?php echo $_smarty_tpl->tpl_vars['jueg']->value['nombre'];?>
</span>
        <p>género: <?php echo $_smarty_tpl->tpl_vars['jueg']->value['genero'];?>
</p>
        <span class="precio-juego">puntuación: <?php echo $_smarty_tpl->tpl_vars['jueg']->value['puntuacion'];?>
</span>
    </div>
    </a>
</div>

<?php }
}
