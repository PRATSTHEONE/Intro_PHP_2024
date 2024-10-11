<?php 

// Iniciamos la sesión
session_start();
// $_SESSION["token"] = 'abc123$_.1344xSWy';

// Leer contenido
// echo $_SESSION["token"];

// // Comprobar si existe
// if (isset($_SESSION["token"])) {
//   echo 'El token de la sesión es: ' . $_SESSION["token"];
// } else {
//   echo 'No existe la variable de sesión que buscas.';
// }

// // Modificar contenido
// $_SESSION["token"] = 'nuevotokenmuycool123$_';

// // Borrar variable
// unset($_SESSION["token"]);

// Destruir la sesión
session_destroy();

echo $_SESSION["token"];

// Ver todo lo que está incluido en la sesión actual
echo '<br><br>';
print_r($_SESSION);