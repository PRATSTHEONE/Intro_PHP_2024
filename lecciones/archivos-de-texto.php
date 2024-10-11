<?php 

// Abrir un archivo con nombre miarchivo.txt en modo lectura
$fp = fopen("miarchivo.txt", "r");


$fp = fopen("https://www.miurlbiencool.com", "r");

// Hacemos lo que necesitemos

fclose($fp);

// Abrir un archivo y leer todo su contenido
$archivo   = 'miarchivo.txt';
$fp        = fopen($archivo, 'r');
$contenido = fread($fp, filesize($archivo));

// Abrir un archivo y escribir nuevo contenido
$archivo         = 'miarchivo.txt';
$nuevo_contenido = 'Hola soy el nuevo contenido del archivo de texto uwu.';
$fp              = fopen($archivo, 'w');
// $fp              = fputs($archivo, 'w'); Otra alternativa a fwrite()
fwrite($fp, $nuevo_contenido);

$archivo         = "miarchivo.txt";
$nuevo_contenido = "Hola que tal";
$fp              = fopen($archivo, "w");
fwrite($fp, $nuevo_contenido, 4); // Escribirá sólo los primeros 4 bytes: Hola
fclose($fp);

// Puntero de archivo
$archivo   = 'miarchivo.txt';
$contenido = '1234567890'; // Es el contenido del archivo de texto
$fp        = fopen($archivo, 'r');
echo ftell($fp); // Imprime 0
fseek($fp, 10); // Coloca el puntero en el byte 10
echo ftell($fp); // Imprime 10













