<?php

function ValidarEmail($email){
    $status = "No valido";
if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
    $status = "Valido";





}

return $status;
}


if(isset($_GET['email'])){

echo ValidarEmail($_GET['email']);  


}else{

echo "<h1>Ingrese correctamente su correo<h1>";

}


?>



