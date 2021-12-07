<!-- VISTA DE ACCION LISTAR -->

<h1>Listado de notas</h1>

<!-- el fetch es para el arrays de objetos, este while es para que recorra la lista de notas -->

<?php while ($nota= $notas->fetch_object()): ?>

<?= $nota->titulo ?> - <?= $nota->fecha ?> <br>


<?php endwhile; ?>