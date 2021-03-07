<div id="logearse">
    <form action="dologin.php" method="POST">
        Email: <input type="text" name="usuario" /><br>
        Contraseña: <input type="password" name="clave" /><br>
        {if isset($error)}
           <label>Usuario o clave incorrecto.</label>
        {/if}
        <br>
        <input type="submit" value="Ingresar" />
        
    </form>
</div>