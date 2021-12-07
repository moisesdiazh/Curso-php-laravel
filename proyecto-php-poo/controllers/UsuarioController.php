<?php

require_once 'models/usuario.php';

class usuarioController
{


    public function index()
    {

        echo "Controlador Usuarios, Accion Index";
    }

    public function registro()
    {

        require_once 'views/usuario/registro.php';
    }

    public function save()
    { //funtion para poder guardar el usuario
        if (isset($_POST)) {

            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;

            if ($nombre && $apellidos && $email && $password) {
                $usuario = new Usuario();
                $usuario->setNombre($nombre);
                $usuario->setApellidos($apellidos);
                $usuario->setEmail($email);
                $usuario->setPassword($password);

                $save = $usuario->save();
                if ($save) {  //si lo registra de manera correcta crea una sesion que la muestra en la pantalla de registro

                    $_SESSION['register'] = "complete";
                } else {

                    $_SESSION['register'] = "failed";
                }
            } else {
                $_SESSION['register'] = "failed";
            }
        } else {

            $_SESSION['register'] = "failed";
        }
        header("Location:" . base_url . 'usuario/registro');
    }

    public function login(){
        if(isset($_POST)){

            //identificar al usuario

            //consulta a la base de datos
            $usuario = new Usuario();
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);

            $identity = $usuario->login();

            //para mantener identificado al usuario
            if($identity && is_object($identity)){

                $_SESSION['identity'] = $identity;

                if($identity->rol == 'admin'){ //para identificar si el usuario es adminsitrador

                    $_SESSION['admin'] = true;

                }
            }else{

                $_SESSION['error_login'] = 'Identificación fallida';
            }


            //crear una sesion
        }

        header("Location:".base_url);
    }

    public function logout(){ //el cerrado de sesion
        if(isset($_SESSION['identity'])){

            unset($_SESSION['identity']);
        }

        if(isset($_SESSION['admin'])){

            unset($_SESSION['admin']);
        }

        header("Location:".base_url);
    }
} //fin clase
