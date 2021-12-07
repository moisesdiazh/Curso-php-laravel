
<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>


<div id="container">
<?php require_once 'includes/lateral.php'; ?>

<div id="principal">
      
        <h1>Crear noticia</h1>
<p>
Ingrese el nombre de la categoria de la noticia.
</p>
<br/>
<form action="guardar-categoria.php" method="POST">

<label for="nombre">Categoria:</label>
<input type="text" name="nombre" />

<input type="submit" value="Guardar">

</form>



</div>



<div class="clearfix"></div>
</div>

<!--fin de principal-->


<?php require_once 'includes/piedepagina.php'; ?>

</body>


</html>