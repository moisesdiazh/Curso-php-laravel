<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete') : ?>

    <h1>Tu pedido se ha confirmado</h1>

    <p>Se ha guardado tu pedido, una vez se realice la transferencia bancaria a nuestra tienda con el coste total del pedido, será enviado al cliente.</p>

    <br>

    <?php if (isset($pedido)) : ?>
        <h3>Datos del pedido:</h3>
        Número de pedido: <?= $pedido->id ?><br>
        Total a pagar: <?= $pedido->costo ?><br>
        <br>
        <br>

        <table>

        <th>Producto</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Unidades</th>

        <?php while ($producto = $productos->fetch_object()) : ?>

            <tr> <!-- //SE COPIA EL TR DE EL INDEX DE CARRITO -->

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

<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete') : ?>

    <h1>Tu pedido NO ha sido realizado de forma exitosa.</h1>
<?php endif; ?>