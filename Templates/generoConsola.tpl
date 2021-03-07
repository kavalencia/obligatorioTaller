<form action="#">
  <label for="ordenar">Filtrar por genero:</label>
  <select name="genero" id="genero">   
      <option value=0>Todos</option>
      {foreach from=$generos item=gen}
        <option value={$gen.id}>{$gen.nombre}</option>
      {/foreach}   
  </select>
  <br><br>
</form>
<form action="#">
  <label for="ordenar">Filtrar por consola:</label>
  <select name="consola" id="consola">  
      <option value="">Todos</option>
      {foreach from=$consolas item=con}
        <option value={$con.id}>{$con.nombre}</option>
      {/foreach}         
  </select>
  <br><br>
</form>

