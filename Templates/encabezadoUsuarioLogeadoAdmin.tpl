<div id="encabezado">
    <img id="img_logo" src="./img/logo.png" alt="">
    <div>
        <h1 id='cabezal'>Todo Juegos</h1>
          <form action="/action_page.php">
            <input type="search" id="texto" name="gsearch" placeholder="Search">
            <input id="buscar" type="submit">
        </form>
    </div>
    <div id="menu_usuario">
        <div id="menu_admin">
            {if isset($usuarioLogueado)}
                Hola administrador {$usuarioLogueado.alias}
                <br><a href="./addGame.php">Alta Juego</a>
                <br><a href="./reviewComment.php">Revision Comentarios</a>
                <br><a href="./dologout.php">Cerrar Sesion</a>
            {else}
                <a href="register.php">Registrarse</a>
                <a href="login.php">Iniciar sesion</a>
            {/if}
        </div>
        <div id="img_admin">
            <img id="img_user" src="./img/usuario.png" alt="">
        </div>
    </div>
</div>

        
      