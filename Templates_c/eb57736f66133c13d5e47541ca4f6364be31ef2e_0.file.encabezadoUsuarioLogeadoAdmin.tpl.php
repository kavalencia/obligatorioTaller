<?php
/* Smarty version 3.1.39, created on 2021-03-06 00:59:42
  from '/var/www/ObligatorioTaller/Templates/encabezadoUsuarioLogeadoAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6042d3fe0a8bc2_16573599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb57736f66133c13d5e47541ca4f6364be31ef2e' => 
    array (
      0 => '/var/www/ObligatorioTaller/Templates/encabezadoUsuarioLogeadoAdmin.tpl',
      1 => 1614864187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:searchFilters.tpl' => 1,
  ),
),false)) {
function content_6042d3fe0a8bc2_16573599 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="encabezado">
    <img id="img_logo" src="./img/logo.png" alt="">
    <div>
        <h1 id='cabezal'>Todo Juegos</h1>
        <?php $_smarty_tpl->_subTemplateRender("file:searchFilters.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div id="menu_usuario">
        <div id="menu_admin">
            <?php if ((isset($_smarty_tpl->tpl_vars['usuarioLogueado']->value))) {?>
                Hola administrador <?php echo $_smarty_tpl->tpl_vars['usuarioLogueado']->value['alias'];?>

                <br><a href="./addGame.php">Alta Juego</a>
                <br><a href='./reviewComment.php'>Revisión Comentarios</a>
                <br><a href="./dologout.php">Cerrar Sesion</a>
            <?php } else { ?>
                <a href="register.php">Registrarse</a>
                <a href="login.php">Iniciar sesion</a>
            <?php }?>
        </div>
        <!--div id="img_admin">
            <img id="img_user" src="./img/usuario.png" alt="">
        </div-->
    </div>
</div>

        
      <?php }
}
