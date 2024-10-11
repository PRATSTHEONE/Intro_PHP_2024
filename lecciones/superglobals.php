<?php 
// Super Globals


// print_r($_POST);
// print_r($_GET);

// Debemos iniciar sesión
session_start();

// Definimos algún valor
// $_SESSION["usuario"] = 'Mi nombre es Russell';

// echo '<pre>'; // Solo es para formatear de forma correcto el array
// print_r($_SESSION);
// echo '</pre>';

// echo $_SESSION["usuario"];

// Cookies almacenadas
// echo '<pre>';
// print_r($_COOKIE);
// echo '</pre>';

// Información actual del servidor
// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';

// Variables globales
// $global = 'Soy una variable global!';
// $pancho = 'Soy Pancho';

// function scope()
// {
//   $global = 'Soy una variable con scope dentro de la función: ' . __FUNCTION__;

//   return $global;
// }

// echo '<pre>';
// print_r($GLOBALS);
// echo '</pre>';
// print_r(scope());


// La petición
echo '<pre>';
print_r($_REQUEST);
print_r($_FILES);
echo '</pre>';
