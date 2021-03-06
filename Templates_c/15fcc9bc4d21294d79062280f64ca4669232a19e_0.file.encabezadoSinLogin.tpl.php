<?php
/* Smarty version 3.1.39, created on 2021-03-04 19:18:26
  from '/var/www/ObligatorioTaller/Templates/encabezadoSinLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604132829b0d69_50922088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15fcc9bc4d21294d79062280f64ca4669232a19e' => 
    array (
      0 => '/var/www/ObligatorioTaller/Templates/encabezadoSinLogin.tpl',
      1 => 1614652175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604132829b0d69_50922088 (Smarty_Internal_Template $_smarty_tpl) {
?><!--div id="encabezado">
    <img id="img_logo" src="./img/logo.png" alt="">
    <h1 id="cabezal"> Todo Juegos</h1>
    <div id="menu_usuario">
    </div>      
    <h2>Ingrese sus datos</h2>  
</div-->

<div id="encabezado">
    <img id="img_logo" src="./img/logo.png" alt="">
    <div>
        <h1 id='cabezal'>Todo Juegos</h1>
        <!--form action="/action_page.php">
            <input type="search" id="gsearch" name="gsearch" placeholder="Search">
            <input type="submit">
        </form-->
    </div>
    <div id="menu_usuario">
        <a href="register.php">Registrarse</a>
        <a href="login.php">Iniciar sesion</a>
        <!--img id="img_user" src="./img/usuario.png" alt=""-->
    </div>
</div><?php }
}
