<?php

// crear cookies

//estructura
                                                                    //no son tan primordiales
// setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);



setcookie("micookie", "valor de mi galleta");

// cookie con expiracion

setcookie("unyear", "valor de mi cookie de 365 dias", time()+(60*60*24*365));

header('Location:ver_cookies.php');


?>

