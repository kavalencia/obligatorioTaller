<div id="registrarse">
    <form action="doRegister.php" method="POST">
        Email: <input type="email" name="usuario" maxlength="30"  
        placeholder="ejemplo@gmail.com" pattern={literal}[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}{/literal}
        title="Email obligatorio" required/><br>
        Alias: <input type="text" name="alias" maxlength="30" title="Alias obligatorio" required/><br>
        Contraseña: <input type="password" pattern=".{literal}{8,}{/literal}"  name="clave" id="clave" title="Debe contener al menos 8 caracteres" required/><br>
        {if isset($error)}
           <label>Revise los datos, hay algún error</label>
        {/if}
        <br>
        <input type="submit" value="Ingresar"/>
    </form>  
</div>
 
<div id="mensajeValidacion">
    <h3>Nivel de seguridad de su contraseña: <progress id="porc" value="0" max="100"></progress><span id="porcNum">0% </span></h3>

</div>