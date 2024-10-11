<?php 

// Tiempo unix en segundos
echo time(); // Devuelve los segundos de la fecha exacta actual

// Formateo de fechas
echo date('d/m/Y h:i A'); // Imprime 20/02/2023 05:58 PM

// Tiempo con microsegundos
echo microtime();

// Calcular fechas
$caducidad = strtotime('+10 MIN');
echo sprintf("Ahorita es: %s\n", date('d/m/Y h:i A'));
echo sprintf("El token caducará el: %s", date('d/m/Y h:i A', $caducidad));