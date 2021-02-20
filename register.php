<!DOCTYPE html>
<?php 
    ini_set('display_errors', 1);
?>
<html>
	<head>
		<meta charset="utf-8" lang="es">
		<title>TODO JUEGOS</title>
		<link rel="stylesheet" href="./css/todoJuegos.css" type="text/css">
	</head>
	<body>
		<!-- Página inicial de registro -->
		<div id="encabezado">
			<img id="img_logo" src="./img/logo.png" alt="">
                        <?php echo("<h1 id='cabezal'>"."Todo Juegos"."</h1>")  ?>
                        <div id="menu_usuario">
                        </div>      
                        
                        <?php echo("<h2 id='cabezal'>"."Ingrese sus datos"."</h2>") ?>  
                        
                        
		</div>
                <div id="registrarse">
                    
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
	</body>