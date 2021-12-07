<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\PeliculaController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/peliculas/{pagina?}', 'PeliculaController@index');

Route::get('/detalle/{year?}', [ 
    'middleware' => 'testyear',
    'uses' => 'PeliculaController@detalle', /* asi se cambia el nombre a la ruta */
    'as' => 'detalle.pelicula'

]); 

Route::get('/redirigir', 'PeliculaController@redirigir'); /* tipo de redireccion */


Route::get('/formulario', 'PeliculaController@formulario'); /* la ruta del formulario*/


Route::post('/recibir', 'PeliculaController@recibir'); /* la ruta de recibir los datos*/


Route::resource('usuario', 'UsuarioController'); /* ruta del crud de usuario */


/* RUTAS DE FRUTAS*/

Route::group(['prefix'=>'frutas'], function(){

   Route::get('index', 'FrutaController@index'); 
   Route::get('detail/{id}', 'FrutaController@detail'); 
   Route::get('crear', 'FrutaController@create'); 
   Route::post('save', 'FrutaController@save'); 
   Route::get('delete/{id}', 'FrutaController@delete'); 
   Route::get('editar/{id}', 'FrutaController@edit'); 
   Route::post('update', 'FrutaController@update'); 


});





/* metodos http

GET: Conseguir datos
POST: Guardar datos
PUT: Actualizar recursos
DELETE: Eliminar recursos

*/

/*

Route::get('/mostrar-fecha', function () {

    $titulo = "Fecha del dia de hoy";
    return view('mostrar-fecha', array(

        'titulo' => $titulo
    ));
});


Route::get('/pelicula/{titulo}/{year?}', function ($titulo = 'No hay una pelicula seleccionada', $year = 2019) {

    return view('pelicula', array(

        'titulo' => $titulo,
        'year'   => $year
    ));
})->where(array(
    //ESTO ES PARA ESTABLECER UNA CONDICION EN LA RUTA
    'titulo' => '[a-zA-Z]+',
    'year' => '[0-9]+'
));


Route::get('/listado-peliculas', function () {

    $titulo = "Listado de pelis";
    $listado = array('batman', 'spider-man', 'troya');
    return view('peliculas.listado')
        ->with('titulo', $titulo) //es lo mismo que realizar un array pero con with
        ->with('listado', $listado);
});



Route::get('/pagina-generica', function () {

    return view('pagina');
});
 */
