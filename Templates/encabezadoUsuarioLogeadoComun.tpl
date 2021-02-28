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
        {if isset($usuarioLogueado)}
            Hola {$usuarioLogueado.alias}
            <a href="./dologout.php">Cerrar Sesion</a>
        {else}
            <a href="register.php">Registrarse</a>
            <a href="login.php">Iniciar sesion</a>
        {/if}
        <!--img id="img_user" src="./img/usuario.png" alt=""-->
    </div>
</div>
