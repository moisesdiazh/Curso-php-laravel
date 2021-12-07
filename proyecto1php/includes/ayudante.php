<?php
function mostrarError($errores, $campo)
{
	$alerta = '';
	if (isset($errores[$campo]) && !empty($campo)) {
		$alerta = "<div class='alerta alerta-error'>" . $errores[$campo] . "</div>";
	}

	return $alerta;
}
function borrarErrores()
{
	$borrado = false;
	if (isset($_SESSION['errores'])) {
		$_SESSION['errores'] = null;
		$borrado = true;
	}
	if (isset($_SESSION['errores_entrada'])) {
		$_SESSION['errores_entrada'] = null;
		$borrado = true;
	}
	if (isset($_SESSION['completado'])) {
		$_SESSION['completado'] = null;
		$borrado = true;
	}

	return $borrado;
}

function conseguirCategorias($conexion)
{
	$resultado = array();

	$sql = "SELECT * FROM categorias;";
	$categorias = mysqli_query($conexion, $sql);


	// mysqli_num_rows es para contar el numero de filas
	if ($categorias && mysqli_num_rows($categorias) >= 1) {

		$resultado = $categorias;
	}


	return $resultado;
}

function conseguirCategoria($conexion, $id)
{
	$resultado = array();

	$sql = "SELECT * FROM categorias WHERE id = '$id';";
	$categorias = mysqli_query($conexion, $sql);


	// mysqli_num_rows es para contar el numero de filas
	if ($categorias && mysqli_num_rows($categorias) >= 1) {

		$resultado = mysqli_fetch_assoc($categorias);
	}


	return $resultado;
}

// para conseguir la noticia en especifico y aparezca el usuario que creo la noticia como tal 
function conseguirEntrada($conexion, $id)
{

	$sql = "SELECT e.*, c.nombre AS 'categoria', CONCAT(u.nombre, ' ',u.apellidos) AS usuario FROM entradas e " .
		"INNER JOIN categorias c ON e.categoria_id = c.id " .
		"INNER JOIN usuarios u ON e.usuario_id = u.id " .
		"WHERE e.id = $id";

	$entrada = mysqli_query($conexion, $sql);

	$resultado = array();
	if ($entrada && mysqli_num_rows($entrada) >= 1) {
		$resultado = mysqli_fetch_assoc($entrada);
	}

	return $resultado;
}


//para la busqueda simplemente se le agrega la variable busqueda y la condicional
//, tambien aparece la categoria para que aparezca cuando este la noticia

function conseguirEntradas($conexion, $limit = null, $categoria = null, $busqueda = null)
{
	$resultado = array();
	$sql = "SELECT e.*, c.nombre AS 'categoria' FROM entradas e INNER JOIN categorias c ON e.categoria_id = c.id ";

	//es para que aparezca la noticia en especifico con la categoria que debe ser
	if (!empty($categoria)) {
		$sql .= "WHERE e.categoria_id = $categoria;";
	}
	if (!empty($busqueda)) {
		$sql .= "WHERE e.titulo LIKE '%$busqueda%';";
	}



	if ($limit) {
		// ESTO SERIA IGUAL A $SQL = $SQL."LIMIT 4"
		$sql .= "LIMIT 4";
	}
	$entradas = mysqli_query($conexion, $sql);

	if ($entradas && mysqli_num_rows($entradas) >= 1) {
		$resultado = $entradas;
	}

	return $resultado;
}
