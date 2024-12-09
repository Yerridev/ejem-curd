<h2><?php echo $respuesta['form']['title']; ?></h2>
<form action="agregarCategoria.php" method="post">
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre de la categoria" autocomplete="off">
    </div>
    
    <div class="buttons">
        <button type="submit"><?php echo $respuesta['form']['button']; ?></button>
        <button type="button" onclick="location.href='/ejm/categorias'">Cancelar</button>
    </div>
</form>
