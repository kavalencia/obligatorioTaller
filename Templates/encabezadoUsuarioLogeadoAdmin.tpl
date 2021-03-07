<div id="encabezado">
    <img id="img_logo" src="./img/logo.png" alt="">
    <div>
        <h1 id='cabezal'>Todo Juegos</h1>
        {include file="searchFilters.tpl"}
    </div>
    <div id="menu_usuario">
        <div id="menu_admin">
            {if isset($usuarioLogueado)}
                Hola administrador {$usuarioLogueado.alias}
                <br><a href="./addGame.php">Alta Juego</a>
                <br><a href='./reviewComment.php'>Revisión Comentarios</a>
                <br><a href="./dologout.php">Cerrar Sesion</a>
            {else}
                <a href="register.php">Registrarse</a>
                <a href="login.php">Iniciar sesion</a>
            {/if}
        </div>
    </div>
</div>

        
      