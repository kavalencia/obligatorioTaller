<?php
/* Smarty version 3.1.39, created on 2021-03-05 02:51:52
  from '/var/www/ObligatorioTaller/Templates/encabezadoUsuarioLogeadoComun.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60419cc8403349_51523949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee34f2c59633d35eb2b5cfefc4d698ffed97e9e0' => 
    array (
      0 => '/var/www/ObligatorioTaller/Templates/encabezadoUsuarioLogeadoComun.tpl',
      1 => 1614864212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:searchFilters.tpl' => 1,
  ),
),false)) {
function content_60419cc8403349_51523949 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="encabezado">
    <img id="img_logo" src="./img/logo.png" alt="">
    <div>
        <h1 id='cabezal'>Todo Juegos</h1>
        <?php $_smarty_tpl->_subTemplateRender("file:searchFilters.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div id="menu_usuario">
        <?php if ((isset($_smarty_tpl->tpl_vars['usuarioLogueado']->value))) {?>
            Hola <?php echo $_smarty_tpl->tpl_vars['usuarioLogueado']->value['alias'];?>

            <a href="./dologout.php">Cerrar Sesion</a>
        <?php } else { ?>
            <a href="register.php">Registrarse</a>
            <a href="login.php">Iniciar sesion</a>
        <?php }?>
        <!--img id="img_user" src="./img/usuario.png" alt=""-->
    </div>
</div>
<?php }
}
