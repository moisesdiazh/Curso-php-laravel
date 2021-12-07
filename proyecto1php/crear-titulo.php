<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>

<div id="container">
<?php require_once 'includes/lateral.php'; ?>


<div id="principal">

    <h1>Crear titular</h1>
    <p>
        Ingrese el titulo de su proxima noticia
    </p>
    <br />
    <form action="guardar-titulo.php" method="POST">

        <label for="titulo">Inserte el titulo:</label>
        <input type="text" name="titulo" />
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>


        <label for="descripcion">Texto:</label>
        <textarea name="descripcion"></textarea>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : ''; ?>


        <label for="categoria">Categorias</label>
        <select name="categoria">
                    <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>

            <?php    //while para que aparezcan las categorias a elegir
            $categorias = conseguirCategorias($db);
            if (!empty($categorias)) :
                while ($categoria = mysqli_fetch_array($categorias)) :
            ?>
                    <!--Este boton option es simplemente para que se pueda guardar la categoria con el id-->

                    <option value="<?= $categoria['id'] ?>">
                        <?= $categoria['nombre'] ?>
                    </option>
            <?php
                endwhile;
            endif;
            ?>
            <!--finalizacion del while e if-->
        </select>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'categoria') : ''; ?>

        <input type="submit" value="Guardar">

    </form>

    <?php borrarErrores();?>



    </div>



<div class="clearfix"></div>
</div>

<!--fin de principal-->


<?php require_once 'includes/piedepagina.php'; ?>

</body>


</html>