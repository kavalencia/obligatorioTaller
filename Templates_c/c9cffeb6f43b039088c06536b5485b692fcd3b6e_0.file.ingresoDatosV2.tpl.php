<?php
/* Smarty version 3.1.39, created on 2021-03-04 22:02:52
  from '/var/www/ObligatorioTaller/Templates/ingresoDatosV2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6041590c07c238_70560558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9cffeb6f43b039088c06536b5485b692fcd3b6e' => 
    array (
      0 => '/var/www/ObligatorioTaller/Templates/ingresoDatosV2.tpl',
      1 => 1614652175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6041590c07c238_70560558 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="logearse">
    <form action="dologin.php" method="POST">
        Email: <input type="text" name="usuario" /><br>
        Contraseña: <input type="password" name="clave" /><br>
        <?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
           <label>Usuario o clave incorrecto.</label>
        <?php }?>
        <br>
        <input type="submit" value="Ingresar" />
        
    </form>
</div><?php }
}
