<?php 

$a = 123;
$b = 10;
$c = 'pancho';
$d = true;

// Bloque Switch
switch ($a) {
  case 5:
    echo '$a es igual a 5';
    break;

  case 10:
    echo '$a es igual a 10';
    break;

  case 'lorem':
    echo '$a es igual a "lorem"';

  case 'ipsum':
    echo '$a es igual a "ipsum"';
    break;
  
  default:
    echo 'No se cumple ninguna de las anteriores.';
    break;
}

echo "\nEjecutando afuera del switch";


