<?php 

// // Redondea al entero más cercano
// echo ceil(12.55); // Imprime 13

// // Cuenta los elementos dentro de un array u objeto
// $array = [1,2,3,4,5];
// echo count($array); // Imprime 5

// // Termina la ejecución del código
// die('Este parámetro es opcional.'); // Aquí termina la ejecución del código
// // Es lo mismo que exit()
// exit('Soy una versión de die más amigable.');

// // Imprime cualquier contenido en pantalla o consola
// echo('¡Aquí estoy de nuevo!'); // Imprime ¡Aquí estoy de nuevo!
// echo 'Funciono exactamente igual que el de arriba.'; // Imprime Funciono exactamente igual que el de arriba.

// // Válida si la variable está vacía
// // 0 es tomado como vacío, debes tener en cuenta eso, puede ser un falso positivo
// $var = '';
// if (empty($var)) {
//   echo 'Si está vacía'; // Se imprime esto
// } else {
//   echo 'No está vacía';
// }

// // Obtiene el contenido de un archivo
// $archivo = file_get_contents('el-archivo.txt');
// echo $archivo;

// // Guarda contenido en un archivo
// $contenido = 'Hola soy nuevo contenido.';
// file_put_contents('el-archivo.txt', $contenido);

// // Regresa el valor de una variable de entorno
// $navegador = getenv('HTTP_USER_AGENT');
// echo $navegador; // Mozilla


// header('Location: nueva-pagina.php'); // Redirige a nueva-pagina.php


// $html = '<h1>¡Hola mundo!</h1><script>alert("Bajo ataque!");</script>';
// echo htmlentities($html);

// include('footer.php'); // Carga el contenido del archivo footer.php

// ini_set('display_errors', '1'); // Muestra los errores en pantalla

// $foo = 'Si existo';
// if (isset($foo)) {
//   // Si existe, haz algo
// } else {
//   // Si no existe, haz otra cosa
// }

// mail('para@ti.com', 'Un nuevo asunto de correo', 'Este es mi mensaje.'); // Envía el correo electrónico

// $contraseña = '12345';
// echo md5($contraseña);

// mkdir('ruta/en/disco/nueva-carpeta');

// echo phpinfo();

// $string = 'Hola soy mundo.';
// preg_match('/soy/', $string, $coincidencias, PREG_OFFSET_CAPTURE);
// print_r($coincidencias);

// $array = [1, 2, 3];
// echo $array; // Lanza un error
// print_r($array); // Muestra el array en pantalla

// echo rand(0, 100); // Un número al azar entre 0 y 100

// $string = 'Hola mundo';
// echo str_replace('mundo', 'crayola', $string);

// $var = 'ABCDEF';
// echo strlen($var); // Imprime 6

// $var = '   Hola muchachoooooooos!    ';
// echo trim($var); // Quita los espacios extra al inicio y final del string

$template = 'Hola %s, soy %s, ¿tienes %s?';
echo sprintf($template, 'Panchito', 'Juanito', 'hambre');