<?php 

// Variable de control
$vueltas = 1;

// Break
for ($vueltas=1; $vueltas <= 10; $vueltas++) { 
  if ($vueltas == 5) {
    break;
  }

  echo $vueltas . "\n";
}

echo 'Estoy fuera del bucle.';

// // foreach
// $caja =
// [
//   ['nombre' => 'Jorge', 'color' => 'café'],
//   ['nombre' => 'Pedro', 'color' => 'verde'],
//   ['nombre' => 'Paco', 'color' => 'gris'],
//   ['nombre' => 'Juan', 'color' => 'azul']
// ];

// foreach ($caja as $index => $peluche) {
//   echo "Peluche #".$index." se llama ".$peluche['nombre']." y es de color ".$peluche['color']."\n";
// }

// for
// for ($vueltas; $vueltas <= 10; $vueltas++) { 
//   echo "Voy en la vuelta $vueltas\n";
// }

// do while
// do {
//   echo "Voy en la vuelta $vueltas\n";
//   $vueltas++;
// } while ($vueltas <= 10);

// While
// while ($vueltas <= 10) {
//   echo "Voy en la vuelta $vueltas\n";
//   $vueltas++; // se suma uno al valor actual de $vueltas
// }
