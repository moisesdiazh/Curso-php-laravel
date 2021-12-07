<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutaController extends Controller
{
    public function index()
    {
        /* utilizo el get para sacar todas los registros de la base de datos */

        //se coloca get para que pueda devolver la informacion de la base de datos

        $frutas = DB::table('frutas')
            ->orderBy('id', 'desc') /* uso de order by para ordenar las frutas */
            ->get(); /* esto es la consulta */

        return view('fruta.index', [

            'frutas' => $frutas
        ]);
    }

    public function detail($id)
    {

        //se hace un where porque se necesita sacar una unica fruta, una sola fila
        $fruta = DB::table('frutas')->where('id', '=', $id)->first();

        return view('fruta.detail', [

            'fruta' => $fruta

        ]);
    }

    public function create()
    {

        return view('fruta.create');
    }

    public function save(Request $request)
    {

        //donde se guarda el registro

        $fruta = DB::table('frutas')->insert(array(
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio'),
            'fecha' => date('Y-m-d')
        ));
        //el with es similar a una sesion para que aparezca el mensaje

        return redirect()->action('FrutaController@index')->with('status', 'Fruta creada correctamente');
    }

    public function edit($id)
    {
        //Se saca el registro de la bd
        $fruta = DB::table('frutas')->where('id', $id)->first();

        //se pasa el objeto a la vista y se rellena el formulario

        return view('fruta.create', [

            'fruta' => $fruta
        ]);
    }

    public function delete($id)
    {

        $fruta = DB::table('frutas')->where('id', $id)->delete();
        //el with es similar a una sesion para que aparezca el mensaje
        return redirect()->action('FrutaController@index')->with('status', 'Fruta eliminada correctamente');
    }

    public function update(Request $request)
    {
        $id = $request->input('id'); //recogemos el id ya que viene por post

        $fruta = DB::table('frutas')->where('id', $id)
            ->update(array(

                'nombre' => $request->input('nombre'),
                'descripcion' => $request->input('descripcion'),
                'precio' => $request->input('precio')
            ));

            return redirect()->action('FrutaController@index')->with('status', 'Fruta actualizada correctamente');
        }
}
