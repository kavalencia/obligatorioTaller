<?php
/* Smarty version 3.1.39, created on 2021-03-04 13:25:59
  from '/var/www/ObligatorioTaller/Templates/encabezado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6040dfe750ccd1_90760166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a21daaf1c515ef9a82fefc1f013ea1e3bf17a46' => 
    array (
      0 => '/var/www/ObligatorioTaller/Templates/encabezado.tpl',
      1 => 1614864354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:searchFilters.tpl' => 1,
  ),
),false)) {
function content_6040dfe750ccd1_90760166 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="encabezado">
    <img id="img_logo" src="./img/logo.png" alt="">
    <div>
        <h1 id='cabezal'>Todo Juegos</h1>
        <?php $_smarty_tpl->_subTemplateRender("file:searchFilters.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div id="menu_usuario">
        <a href="register.php">Registrarse</a>
        <a href="login.php">Iniciar sesion</a>
        <!--img id="img_user" src="./img/usuario.png" alt=""-->
    </div>
</div>
<?php }
}
