<?php 


// Esto es una variable
$constante = 123;

// Esto es una constante
define('MI_CONSTANTE', 'Hola, soy una constante!');

// Es un nombre válido pero debemos evitar que sea en bajas (minúsculas)
define('mi_constante', 'Esta es otra constante');

echo $constante . '<br>';
echo MI_CONSTANTE;
echo mi_constante;

echo '<br>';

// Validar si existe una constante
if (defined('MI_CONSTANTE')) {
  echo 'Ya está definida y su valor es: ' . MI_CONSTANTE;
} else {
  echo 'No está definida!';
}

// No se deben definir así
define('__MI_CONSTANTE__', 123);
echo __MI_CONSTANTE__.'<br>';

// Ejemplo de Magic constant de PHP
echo __DIR__;

