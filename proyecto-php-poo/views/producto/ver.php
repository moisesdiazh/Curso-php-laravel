<?php if (isset($product)) : ?>
    <!-- SE USA EL MISMO VER DE CATEGORIA, se quita el num rows-->

    <h1><?= $product->nombre ?></h1>
    <div id="detail-product">

        <div class="image">
            <?php if ($product->imagen != null) : ?>
                <img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" /> <!-- PARA QUE SE VEA LA IMAGEN -->
            <?php else : ?>

                <img src="<?= base_url ?>assets/img/M.PNG" />
            <?php endif; ?>
        </div>

        <div class="data">
            <p class="description"><?= $product->descripcion ?></p> <!-- PARA QUE SE VEA EL PRECIO -->
            <p class="price"><?= $product->precio ?>$</p> <!-- PARA QUE SE VEA EL PRECIO -->
            <a href="<?=base_url?>carrito/add&id=<?=$product->id?>" class="button">Comprar</a>
        </div>

    </div>

<?php else : ?>
    <h1>El producto no existe</h1>

<?php endif; ?>