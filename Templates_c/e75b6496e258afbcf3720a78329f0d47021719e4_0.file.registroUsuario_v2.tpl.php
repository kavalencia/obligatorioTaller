<?php
/* Smarty version 3.1.39, created on 2021-03-05 22:34:34
  from '/var/www/ObligatorioTaller/Templates/registroUsuario_v2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6042b1fadeb875_00313763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e75b6496e258afbcf3720a78329f0d47021719e4' => 
    array (
      0 => '/var/www/ObligatorioTaller/Templates/registroUsuario_v2.tpl',
      1 => 1614983603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6042b1fadeb875_00313763 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="registrarse">
    <form action="doRegister.php" method="POST">
        Email: <input type="email" name="usuario" maxlength="30"  
        placeholder="ejemplo@gmail.com" pattern=[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}
        title="Email obligatorio" required/><br>
        Alias: <input type="text" name="alias" maxlength="30" title="Alias obligatorio" required/><br>
        Contraseña: <input type="password" pattern=".{8,}"  name="clave" id="clave" title="Debe contener al menos 8 caracteres" required/><br>
        <?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
           <label>Revise los datos, hay algún error</label>
        <?php }?>
        <br>
        <input type="submit" value="Ingresar"/>
    </form>  
</div>

  
        
    
<div id="respAjax"></div>
<div id="mensajeValidacion">
    <h3>Nivel de seguridad de su contraseña: <progress id="porc" value="0" max="100"></progress><span id="porcNum">0%</span></h3>
  <p id="letterAndCapital" class="invalid"></b></p>
  <p id="letterAndNumber" class="invalid"></b></p>
   <p id="masDeDiezCaracteres" class="invalid"><b></b></p>
</div><?php }
}
