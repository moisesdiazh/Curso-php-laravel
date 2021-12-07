<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //crea en la tabla
    {
        /* Schema::create('usuarios', function (Blueprint $table) { 
            

            $table->increments('id');
            $table->string('nombre', 150);
            $table->string('email', 150);
            $table->string('password', 150);
            $table->integer('edad');
            $table->integer('sueldo');
            $table->timestamps(); 

        });
        */

    /*para realizarlo con sql se hace la siguiente manera*/    


    DB::statement("CREATE TABLE usuarios(

        id int (255) auto_increment not null,
        nombre varchar(255),
        email varchar(255),
        password varchar(255),
        PRIMARY KEY(id)
    );");

}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() 
    {
        Schema::drop('usuarios');
    }
}
