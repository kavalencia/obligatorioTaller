<?php
/* Smarty version 3.1.39, created on 2021-02-24 10:08:49
  from '/var/www/ObligatorioTaller/Templates/registroUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_603625b1e2ac26_67825482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc03cf16e2a0382f209a9f37d9e3acb24d95b3bc' => 
    array (
      0 => '/var/www/ObligatorioTaller/Templates/registroUsuario.tpl',
      1 => 1614122507,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603625b1e2ac26_67825482 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="registrarse">
                    
                    <div id="container-principal">
                        <a>Registrarse</a>
                        <div id="container">
                            <label class="form-control-textfield-register-input">
                                <div class="form-control-control" >
                                    <span class="form-control-label">Email</span>
                                    <input type="text" valueId="email" name="email" maxlength="30">
                                </div>
                                <div class="form-control-border">
                                    <span class="form-control-message">Asegurate de tener acceso a este email</span>
                                </div>
                            </label>
                        </div>
                        <div id="container">
                            <label class="form-control-textfield-register-input">
                                <div class="form-control-control" >
                                    <span class="form-control-label">Email</span>
                                    <input type="text" valueId="alias" name="alias" maxlength="20">
                                </div>
                                <div class="form-control-border">
                                    <span class="form-control-message">Asegurate de tener acceso a este email</span>
                                </div>
                            </label>
                        </div>
                        <div id="pass-container">
                            <label class="form-control-textfield-register-input">
                                <div class="form-control-control" >
                                    <span class="form-control-label">Contraseña</span>
                                    <input type="password" value id="password" name="password" maxlength="20">
                                </div>
                                <div class="form-control-border">
                                    <span class="form-control-message">Usa entre 6 y 20 caracteres</span>
                                </div>
                            </label>
                        </div>
                        <div class="ui-form">
                            <button type="submit" class="button-submit">Continuar</button>
                        <a</div>
                    </div>
                    
                </div>
<?php }
}
