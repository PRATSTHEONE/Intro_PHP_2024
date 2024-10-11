<?php 

// Sintaxis básica
// setcookie('nombre de la cookie', 'su valor', 'su caducidad');

// Crear un Cookie con el nombre de usuario
// setcookie('username', 'Pancho Doe', time() + 60); // expirará en 1 minuto

// Cargar el valor de una cookie
// echo $_COOKIE['username']; // Pancho Doe

// Editar el valor de una cookie
// setcookie('username', 'Pancho Editado');
// echo $_COOKIE['username']; // Pancho Editado

// Borrar cookie
unset($_COOKIE['username']);

