<?php

// realizamos la conexion a la base de datos


class database {

    public static function conectar(){

//siempre se tiene que poner el numero de puerto 3308
        $conexion = new mysqli("localhost", "root", "", "notas_master", 3308); 
        $conexion->query("SET NAMES 'utf8'");

        return $conexion;
    }
}