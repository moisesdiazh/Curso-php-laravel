<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>



<div id="container">
<?php require_once 'includes/lateral.php'; ?>


<div id="principal">
    <h1> Mis datos </h1>

    <?php if (isset($_SESSION['completado'])) : ?>
        <div class="alerta alerta-exito">
            <?= $_SESSION['completado'] ?>
        </div>
    <?php elseif (isset($_SESSION['errores']['general'])) : ?>
        <div class="alerta alerta-error">
            <?= $_SESSION['errores']['general'] ?>
        </div>
    <?php endif; ?>

    <form action="actualizar-usuario.php" method="POST">

        <!---nombres--->
        <label for="nombre">Nombres</label>
        <input type="text" name="nombre" value="<?=$_SESSION['usuarios']['nombre'];?>" />
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

        <!---apellidos--->
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" value="<?=$_SESSION['usuarios']['apellidos'];?>" />
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>


        <!---correo--->
        <label for="email">Email</label>
        <input type="email" name="email" value="<?=$_SESSION['usuarios']['email'];?>" />
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>



        <!---boton de enviar--->
        <input type="submit" name="submit" value="Actualizar" />

    </form>

    <?php borrarErrores(); ?>




    </div>



    <div class="clearfix"></div>
</div>

<!--fin de principal-->


<?php require_once 'includes/piedepagina.php'; ?>

</body>


</html>