<h1>Formulario en Laravel</h1>

                <!-- este action es para imprimir la accion -->
<form action="{{ action('PeliculaController@recibir')}}" method="POST">

{{ csrf_field() }} <!-- siempre es importante colocar esto en el formulario para protegerlo de ataques -->

<label for="nombre">Nombre</label>
<input type="text" name="nombre" />

<br>

<label for="email">Correo</label>
<input type="email" name="email" />

<br>

<input type="submit" value="Enviar" />


</form>