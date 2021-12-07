<h1>Gestionar categorias</h1>

 <a href="<?=base_url?>categoria/crear" class="button button-small"> Crear Categoria</a>
<!-- BOTON PARA CREAR CATEGORIA -->


<table>

<tr>

<th>ID</th>
<th>NOMBRE</th>


</tr>
<?php while($cat = $categorias->fetch_object()): ?> <!-- ciclo para hacer la tabla que se encuentra en la base de datos-->

<tr>

<td><?=$cat->id;?></td>
<td><?=$cat->nombre;?></td>

</tr>

<?php endwhile; ?>

</table>

