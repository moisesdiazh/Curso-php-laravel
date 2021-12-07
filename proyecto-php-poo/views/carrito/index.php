<h1>Compra</h1>
<?php if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1) : ?>
    <table>

        <tr>

            <th>Producto</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Unidades</th>
            <th>Eliminar</th>

        </tr>
        <?php foreach ($carrito as $indice => $elemento) :

            $producto = $elemento['producto'];
        ?>

            <tr>

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
                    <?= $elemento['unidades'] ?>

                    <div class="updown-unidades">
                    <a href="<?= base_url ?>carrito/up&index=<?= $indice ?>" class="button">+</a> <!-- boton para sumar -->

                    <a href="<?= base_url ?>carrito/down&index=<?= $indice ?>" class="button">-</a> <!-- boton para restar -->
                    </div>

                </td>

                <td>
                    <!--BOTON DE ELIMINAR -->
                    <a href="<?= base_url ?>carrito/delete&index=<?= $indice ?>" class="button button-carrito button-blue">Quitar del carrito</a>
                </td>
            </tr>

        <?php endforeach; ?>

    </table>
    <br>

    <div class="delete-carrito">
        <a href="<?= base_url ?>carrito/delete_all" class="button button-delete button-blue">Eliminar todo</a>

    </div>

    <div class="total-carrito">
        <?php $stats = Utils::statsCarrito() ?>
        <h3>Precio total: $ <?= $stats['total'] ?></h3>

        <a href="<?= base_url ?>pedido/hacer" class="button button-pedido">Realizar pedido</a>

    </div>

<?php else : ?>
    <h2>El carrito se encuentra vacio, seleccione "comprar" en los productos para ocupar el carrito.</h2>

<?php endif; ?>