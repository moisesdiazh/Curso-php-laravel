<?php require_once 'includes/conexion.php'; ?>

<!---barra lateral--->
<aside id="sidebar">

<div id="buscador" class="block-aside">

    <!-- para el buscador es un formato parecido al loguin-->


        <h3>Buscar</h3>

        <form action="buscar.php" method="POST">

            <input type="text" name="busqueda" />

            <input type="submit" value="Buscar" />
        </form>
    </div>




    <!-- para mostrar nombre de la persona logueada-->
    <?php if (isset($_SESSION['usuarios'])) : ?>
        <div id="usuario-logueado" class="block-aside">
            <h3>Bienvenido, <?= $_SESSION['usuarios']['nombre'] . ' ' . $_SESSION['usuarios']['apellidos']; ?></h3>
            <!-- botones-->

            <!-- boton de cerrar sesion-->

            <a href="crear-categoria.php" class="categorias">Crear nueva categoria</a>
            <a href="crear-titulo.php" class="entradas">Crear titular </a>
            <a href="mis-datos.php" class="datos">Mis datos</a>
            <a href="cerrar.php" class="cerrar">Cerrar sesión </a>

        </div>

    <?php endif; ?>

<!--PARA OCULTAR SI TENEMOS UNA SESION ABIERTA-->
    <?php if (!isset($_SESSION['usuarios'])) : ?>


    <div id="login" class="block-aside">
        <h3>Identificate</h3>

        <!-- para mostrar logic incorrecto-->

        <?php if (isset($_SESSION['error_login'])) : ?>
            <div class="alerta alerta-error">
                <?= $_SESSION['error_login']; ?>
            </div>
        <?php endif; ?>

        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email" />

            <label for="password">Contraseña</label>
            <input type="password" name="password" />

            <input type="submit" value="Entrar" />
        </form>
    </div>


    <!---registro--->
    <div id="registro" class="block-aside">
        <h3>Registrate</h3>


        <!--alertas de errores-->
        <?php if (isset($_SESSION['completado'])) : ?>
            <div class="alerta alerta-exito">
                <?= $_SESSION['completado'] ?>
            </div>
        <?php elseif (isset($_SESSION['errores']['general'])) : ?>
            <div class="alerta alerta-error">
                <?= $_SESSION['errores']['general'] ?>
            </div>
        <?php endif; ?>

        <form action="registro.php" method="POST">

            <!---nombres--->
            <label for="nombre">Nombres</label>
            <input type="text" name="nombre" />
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

            <!---apellidos--->
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" />
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>


            <!---correo--->
            <label for="email">Email</label>
            <input type="email" name="email" />
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>


            <!---contraseña--->
            <label for="password">Password</label>
            <input type="password" name="password" />
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>


            <!---boton de enviar--->
            <input type="submit" name="submit" value="Registrar" />

        </form>

        <?php borrarErrores(); ?>
    </div>

        <!--ENDIF DE "PARA OCULTAR SI TENEMOS UNA SESION ABIERTA"-->
        <?php endif; ?>

     </aside>