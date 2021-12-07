<h1>Registrarse</h1>

<?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>  <!-- PARA QUE DIGA LA SESION -->

    <strong class="alert_green" >Registro completado</strong>

<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>

    <strong class="alert_red" >Registro fallido, por favor introduzca correctamente sus datos</strong>

<?php endif; ?>

<?php Utils::deleteSession('register'); ?> <!-- PARA CERRAR LA SESION -->

<form action="<?=base_url?>usuario/save" method="POST">

<label for="nombre">Nombre</label>
<input type="text" name="nombre" required />

<label for="apellidos">Apellidos</label>
<input type="text" name="apellidos" required />

<label for="email">Email</label>
<input type="email" name="email" required />

<label for="password">Contraseña</label>
<input type="password" name="password" required />

<input type="submit" value="Registrarse">

</form>