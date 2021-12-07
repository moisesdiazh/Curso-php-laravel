<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/ayudante.php'; ?>

<!---bucle para conseguir categoria en especifico--->
<?php
$entrada_actual = conseguirEntrada($db, $_GET['id']);
if (!isset($entrada_actual['id'])) {

    header("Location: index.php");
}
?>


<?php require_once 'includes/cabecera.php'; ?>


<div id="container">

    <?php require_once 'includes/lateral.php'; ?>

    <!---se copia el formuario de crear titulo-->

    <div id="principal">

<h1>Editar titular</h1>
<p>
    Edita el titulo de tu noticia <?=$entrada_actual['titulo'] ?>
</p>
<br />
<form action="guardar-titulo.php?editar=<?=$entrada_actual['id']?>" method="POST">

    <label for="titulo">Titulo:</label>
    <input type="text" name="titulo" value="<?=$entrada_actual['titulo'] ?>" />
    <?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>


    <label for="descripcion">Texto:</label>
    <textarea name="descripcion"><?=$entrada_actual['descripcion'] ?></textarea>
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

                <option value="<?= $categoria['id'] ?>" <?=$categoria['id'] == $entrada_actual['categoria_id'] ? 'selected="selected"' : '' ?>>
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
<!--final principal--->

<div class="clearfix"></div>
</div>
<!---fin del container--->
<?php require_once 'includes/piedepagina.php'; ?>



</body>


</html>