<?php
//CLASE CONTROLLER
class UsuarioController {


    //FUNCION PARA MOSTRAR TODOS LOS USUARIOS
public function mostrarTodos(){
//SE INVOCA EL REQUIRE DEL MODELO USUARIO PARA PODER USAR LA FUNCION
require_once 'models/usuario.php';

$usuario = new Usuario();
//SE REALIZA UNA VARIABLE PARA IGUALAR EL CALL DE $USUARIO->conseguirTodos()
$todos_los_usuarios = $usuario->conseguirTodos('usuarios');

require_once 'views/usuarios/mostrar-todos.php';
} 
//FUNCION PARA CREAR LA CUAL REALIAZMOS UN FORMULARIO
public function crear(){

require_once 'views/usuarios/crear.php';

}
}