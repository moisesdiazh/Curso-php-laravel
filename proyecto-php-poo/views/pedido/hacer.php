<?php if (isset($_SESSION['identity'])) : ?>

    <h1>Realizar pedido</h1>
    <p>
    <li><a href="<?= base_url ?>carrito/index">Regresar al Carrito Vintage</a></li>
    </p>

    <br>
    <h3>Domicilio para el envio:</h3>
    <form action="<?= base_url . 'pedido/add' ?>" method="POST">

        <label for="region">Región</label>
        <input type="text" name="region" required />

        <label for="comuna">Comuna</label>
        <input type="text" name="comuna" required />

        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" required />

        <input type="submit" value="Confirmar pedido" />

    </form>

<?php else : ?>

    <h1>Para realizar la compra necesitas estar logueado</h1>

    <li><a href="<?= base_url ?>usuario/registro">Registrate aqui</a></li>

<?php endif; ?>