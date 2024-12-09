<div class="header">
    <h2>Lista de Categoria</h2>
    <a href="/ejm/categorias/agregar">Agregar Categoria</a>
</div>


<table>
    <thead>
        <tr>
            <th>Categoria</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($respuesta['categorias'] as $categoria): ?>
            <tr>
                <td><?php echo $categoria->getCategoria(); ?></td>
                <td>
                    <a href="/ejm/categorias/<?php echo $categoria->getId();?>/edit" class="btn-edit">Editar</a>
                    <a href="/ejm/categorias/<?php echo $categoria->getId();?>/delete" class="btn-delete">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
