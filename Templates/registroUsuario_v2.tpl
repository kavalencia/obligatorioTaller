<div id="registrarse">
    <form action="doRegister.php" method="POST">
        Email: <input type="text" name="usuario" /><br>
        Alias: <input type="text" name="alias" /><br>
        Contraseña: <input type="password" name="clave" /><br>
        {if isset($error)}
           <label>Revise los datos, hay algún error</label>
        {/if}
        <br>
        <input type="submit" value="Ingresar" />
    </form>
</div>
