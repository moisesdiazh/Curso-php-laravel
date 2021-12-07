<h1>Gestión de productos</h1>

<!-- SE UTILIZA LO MISMO QUE SE USO EN EL INDEX DE CATEGORIA -->

<a href="<?=base_url?>producto/crear" class="button button-small"> Crear producto</a>
<!-- BOTON PARA CREAR CATEGORIA -->

<?php if (isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'): ?> <!-- AVISOS -->

    <strong class="alert-green"> El producto ha sido ingresado de forma correcta </strong>

    <?php elseif (isset($_SESSION['producto']) && $_SESSION['producto'] != 'complete'): ?>

        <strong class="alert-red"> El producto no ha sido ingresado de forma correcta </strong>


<?php endif; ?>

<?php Utils::deleteSession('producto'); ?> <!-- para cerrar la sesion -->

<?php if (isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'): ?> <!-- AVISOS CUANDO ELIMINAS -->

<strong class="alert-green"> El producto ha sido borrado de forma correcta </strong>

<?php elseif (isset($_SESSION['delete']) && $_SESSION['delete'] != 'complete'): ?>

    <strong class="alert-red"> El producto no ha sido borrado </strong>


<?php endif; ?>

<?php Utils::deleteSession('delete'); ?> <!-- para cerrar la sesion -->


<table>

<tr>

<th>ID</th>
<th>NOMBRE</th>
<th>PRECIO</th>
<th>STOCK</th>
<th>ACCIONES</th>


</tr>
<?php while($produc = $productos->fetch_object()): ?> <!-- ciclo para hacer la tabla que se encuentra en la base de datos-->

<tr>

<td><?=$produc->id;?></td>
<td><?=$produc->nombre;?></td>
<td><?=$produc->precio;?></td>
<td><?=$produc->stock;?></td>
<td>
        <!-- &id=<?=$produc->id?> ES PARA PASAR POR POST EL ELEMENTO QUE ELIMINAREMOS -->
<a href="<?=base_url?>producto/editar&id=<?=$produc->id?>" class="button button-gestion button-blue">Editar</a>
<a href="<?=base_url?>producto/eliminar&id=<?=$produc->id?>" class="button button-gestion">Eliminar</a>

</td>


</tr>

<?php endwhile; ?>

</table>
