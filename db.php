<?php

// db_curso_php_int
$conexion = null;

try {
  // Datos para DSN o Data Source Name
  $engine     = "mysql";
  $host       = "localhost";
  $name       = "db_curso_php_int";
  $charset    = "utf8";
  
  // Crendenciales de acceso
  $username   = "root";
  $password   = "";

  $options =
  [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ];
  
  // Nombre de Origen de Base de Datos
  // Debe ser motor:host=host;dbname=nombre base de datos;charset=charset
  $dsn        = sprintf("%s:host=%s;dbname=%s;charset=%s", $engine, $host, $name, $charset);
  $conexion   = new PDO($dsn, $username, $password, $options);

  // Para recibir excepciones en caso de errores
  // $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  return $conexion;

} catch (PDOException $e) {
  throw new Exception(sprintf("Hubo un error con la conexión a la base de datos: %s", $e->getMessage())); 
}
