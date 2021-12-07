<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PeliculaController extends Controller
{
   
    public function index($pagina = 1){ //retorna la vista

        $titulo = 'Listado de peliculas';
        return view('pelicula.index', [
            
            'titulo' => $titulo,
            'pagina' => $pagina
        ]);
    }

    public function detalle($year = null){

        
        return view('pelicula.detalle');
    }

    public function redirigir(){ /* tipo de redireccion exactamente al detalle*/

        return redirect()->action('PeliculaController@detalle'); 
    }

    public function formulario(){ //cargando la vista del formulario - aprendiendo a hacer formulario

        return view('pelicula.formulario');
    }

    public function recibir(Request $request){ //se debe colocar el use request arriba al principio para que pueda recibirlo
                    //request  es para acceder a la peticion http, input es para acceder al metodo de la libreria de request
        $nombre = $request->input('nombre');
        //recogemos el nombre

        $email = $request->input('email');
        //recogemos el email

        return "El nombre es: $nombre y el email es: $email";
    }
}
