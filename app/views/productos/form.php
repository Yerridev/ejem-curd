<h2><?php echo $respuesta['form']['title'];?></h2>
    <form action="editar_producto.php " method="post" enctype="multipart/form-data">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre del producto" value="Nombre Producto"  autocomplete="off">
        </div>
        <div>
            <img src="" alt="">
            <label for="Imagen">Imgaen</label>
            <input type="file" name="imagen" id="imagen" accept="image/*">
        </div>
        <div>
            <label>Categorias</label>
            <div>
                <label><input type="checkbox" name="Categoria" value="pizza" checked>Pizzas</label>
                <label><input type="checkbox" name="Categoria" value="bebidas">Bebidas</label>
            </div>
        </div>
            <div>
            <label for="Estado">Estado</label>
            <select name="Estado" id="Estado">
                <option value="">Activo</option>
                <option value=""  selected>Inactivo</option>
            </select>
            </div>
        <div class="buttons">
            <button type="submit"><?php echo $respuesta['form']['button'];?></button>
            <button type="button" onclick="location.href='/ejm/productos'">Cancelar</button>
        </div>
    </form>
