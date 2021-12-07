<h1>Detalle del pedido</h1>

<!-- manera de imprimir los datos del pedido-->
<?php if (isset($pedido)) : ?>

    <?php if (isset($_SESSION['admin'])) : ?>
        <!-- SOLO LE APARECE ESTA OPCION AL ADMIN Y PUEDE CAMBIAR EL ESTADO -->
        <h3>Cambiar estado del pedido</h3>

        <form action="<?= base_url ?>pedido/estado" method="POST">

            <input type="hidden" value="<?= $pedido->id ?>" name="pedido_id" /> <!-- es para que el id viaje por las cabeceras y por post y saber cual es el id -->

            <select name="estado">

                <option value="confirm" <?=$pedido->estado == "confirm" ? 'selected' : '' ;?> >Pendiente</option>
                <option value="preparation" <?=$pedido->estado == "preparation" ? 'selected' : '' ;?> >En preparación</option>
                <option value="ready" <?=$pedido->estado == "ready" ? 'selected' : '' ;?> >Preparado para enviar</option>
                <option value="sended" <?=$pedido->estado == "sended" ? 'selected' : '' ;?> >Enviado</option>

            </select>

            <input type="submit" value="Modificar estado" />
        </form>

        <br>

    <?php endif; ?>


    <h3>Dirección de envio</h3>
    Región: <?= $pedido->region ?><br>
    Comuna: <?= $pedido->comuna ?><br>
    Dirección: <?= $pedido->direccion ?><br>

    <h3>Datos del pedido:</h3>
    Estado: <?= Utils::showStatus($pedido->estado) ?><br>
    Número de pedido: <?= $pedido->id ?><br>
    Total a pagar: $<?= $pedido->costo ?><br>
    <br>
    <br>

    <table>

        <th>Producto</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Unidades</th>

        <?php while ($producto = $productos->fetch_object()) : ?>

            <tr>
                <!-- //SE COPIA EL TR DE EL INDEX DE CARRITO -->

                <td> <?php if ($producto->imagen != null) : ?>
                        <img src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" class="img_carrito" /> <!-- PARA QUE SE VEA LA IMAGEN -->
                    <?php else : ?>

                        <img src="<?= base_url ?>assets/img/M.PNG" class="img_carrito" />
                    <?php endif; ?>
                </td>

                <td>

                    <a href="<?= base_url ?>producto/ver&id=<?= $producto->id ?>"><?= $producto->nombre ?></a>
                </td>

                <td>

                    <?= $producto->precio ?>
                </td>

                <td>

                    <?= $producto->unidades ?>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>

<?php endif; ?>