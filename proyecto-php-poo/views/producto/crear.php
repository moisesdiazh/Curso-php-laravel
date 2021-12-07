<?php if (isset($edit) && isset($pro) && is_object($pro)) : ?>

    <h1>Editar producto <?=$pro->nombre?></h1>

    <?php $url_action = base_url."producto/save&id=".$pro->id; ?>


<?php else : ?>

    <h1>Crear nuevo producto</h1>

    <?php $url_action = base_url."producto/save"; ?>

<?php endif; ?>

<div class="form_container">

    <form action="<?= $url_action ?>" method="POST" enctype="multipart/form-data">

        <label for="nombre">Nombre</label>         <!-- ESTA TERNARIA SIGNIFICA: SI EXISTE LA VARIABLE $PRO Y 
                                                    $PRO ES UN OBJETO ENTONCES TRAE EL NOMBRE Y SINO (:) NO TRAIGAS NADA -->
        <input type="text" name="nombre" value="<?=isset($pro) && is_object($pro) ? $pro->nombre : ''; ?>" />

        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion"><?=isset($pro) && is_object($pro) ? $pro->descripcion : ''; ?></textarea>

        <label for="precio">Precio</label>
        <input type="text" name="precio" value="<?=isset($pro) && is_object($pro) ? $pro->precio : ''; ?>"/>

        <label for="stock">Stock</label>
        <input type="number" name="stock" value="<?=isset($pro) && is_object($pro) ? $pro->stock : ''; ?>"/>

        <label for="categoria">Categoria</label>
        <?php $categorias = Utils::showCategorias(); ?>
        <!-- para que me devuelva las categorias -->
        <select name="categoria">

            <?php while ($cat = $categorias->fetch_object()): ?>
                <!-- bucle para que recorra la lista de categorias -->


                                                    <!-- EN ESTA PARTE LA TERNARIA CAMBIA: SI EXISTE $PRO Y $PRO ES UN OBJETO 
                                                    Y $CAT en la base de datos llama al id 
                                                    y es igual a la llamada de $pro en la bd con el categoria_id 
                                                    entonces colocar el que estaba seleccionado, en este caso es cuando es una lista predeterminada -->
                <option value="<?= $cat->id; ?>" <?=isset($pro) && is_object($pro) && $cat->id == $pro->categoria_id ? 'selected' : ''; ?>>
                    <?= $cat->nombre ?>
                    <!-- donde apararece el nombre de la categoria -->
                </option>

            <?php endwhile; ?>

        </select>

        <label for="imagen">Imagen</label>
    <?php if(isset($pro) && is_object($pro) && !empty($pro->imagen)): ?>

        <img src="<?= base_url?>uploads/images/<?= $pro->imagen?>" class="thumb" />

    <?php  endif; ?>    
        <input type="file" name="imagen" />

        <input type="submit" value="Guardar" />

    </form>

</div>