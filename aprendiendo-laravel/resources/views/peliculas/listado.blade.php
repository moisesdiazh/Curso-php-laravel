@include('includes.header')
<!-- para realizar el include con blade -->

<!-- Imprimir por pantalla con blade -->
 
<h1>{{$titulo}}</h1>

<h2> {{$listado[1]}} </h2>

<P> {{date('Y')}} </P>


{{-- ESTO ES UN COMENTARIO CON BLADE --}}


<!-- PARA MOSTRAR CUANDO EXISTE ALGO COMO SI FUERA CON ISSET, el doble signo de interrogacion es "OR" -->

{{ $director ?? 'No hay ningun director' }}


<!-- Condicionales if  -->

@if($titulo && count($listado) >=2 )

<h1>El titulo existe y es este: {{$titulo}} y el listado es mayor a 2</h1>

@elseif($titulo)

<h1>El titulo existe y el lista NO ES MAYOR A 2</h1>

@else

<h1>El titulo no existe</h1>

@endif


<!-- Bucles -->

<!-- Bucle FOR -->

@for($i = 0; $i <=20; $i++)

El numero es: {{$i}}<br>

@endfor

<hr/>

<!-- Bucle while --> 

<?php $contador = 1 ?>

@while($contador < 50)


@if($contador % 2 == 0)

Numero PAR: {{$contador}} <br>

@endif


<?php $contador++; ?>

@endwhile


<!-- Bucle foreach -->

@foreach($listado as $pelicula)

<p>{{$pelicula}}</p>

@endforeach

@include('includes.footer')












