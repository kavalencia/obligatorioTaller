<?php
/* Smarty version 3.1.39, created on 2021-03-06 06:29:09
  from '/var/www/ObligatorioTaller/Templates/comentario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60432135c20a71_81932149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16b176eafa90e7801ed563b15f86716542974fe5' => 
    array (
      0 => '/var/www/ObligatorioTaller/Templates/comentario.tpl',
      1 => 1614652175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60432135c20a71_81932149 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="comentario">
    <div id="comentarioTexto">
        <?php echo $_smarty_tpl->tpl_vars['com']->value['texto'];?>

    </div>
    <div id="comentarioBoton">
        <form action="borrarComentario.php" method="POST">
            <input type="hidden" name="comId" value="<?php echo $_smarty_tpl->tpl_vars['com']->value['id'];?>
"></input>
            <input type="submit" value="Borrar" />
        </form>
    </div>
</div><?php }
}
