@if(isset($fruta) && is_object($fruta)) <!-- REUTILIZAMOS EL CREATE PARA HACER EL EDIT -->

<h1>Editar fruta fruta</h1>

@else

<h1>Crear una fruta</h1>

@endif

<form action="{{ isset($fruta) ? action('FrutaController@update') : action('FrutaController@save') }}" method="POST">

{{ csrf_field() }} <!-- ES NECESARIO EN TODOS LOS FORMULARIOS PARA CORRERLO Y PROTEGER -->

@if(isset($fruta) && is_object($fruta)) <!-- usamos la condicional de arriba -->

<!-- usamos un input tipo hidden para recoger el id -->
<input type="hidden" name="id" value="{{ $fruta->id }}" /><br/>


@endif

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="{{ $fruta->nombre ?? ''}}" /><br/>

    <label for="descripcion">Descripción</label>
    <input type="text" name="descripcion" value="{{ $fruta->descripcion ?? ''}}" /><br/>

    <label for="precio">Precio</label>
    <input type="number" name="precio" value="{{ $fruta->precio ?? 0}}" /><br/>

    <input type="submit" value="Guardar" />


 

</form>

