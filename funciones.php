<?php 

/**
 * Crea una conexión a la base de datos
 *
 * @return PDO
 */
function conectar()
{
  $db = require 'db.php';

  return $db;
}

/**
 * Regresa el error en caso de existir
 * 
 * @return string|false
 */
function mostrar_error()
{
  if (!isset($_SESSION["error"])) {
    return false;
  }

  $error = $_SESSION["error"];
  unset($_SESSION["error"]);

  $html = sprintf('<div class="alert alert-danger">%s</div>', $error);

  return $html;
}

/**
 * Regresa el mensaje de éxito guardado
 *
 * @return string|false
 */
function mostrar_mensaje()
{
  if (!isset($_SESSION["exito"])) {
    return false;
  }

  $msj = $_SESSION["exito"];
  unset($_SESSION["exito"]);

  $html = sprintf('<div class="alert alert-success">%s</div>', $msj);

  return $html;
}

/**
 * Regresa el array con los juegos disponibles
 *
 * @return array
 */
function cargar_juegos()
{
  $juegos =
  [
    ["Valorant"   , "Valorant"],
    ["LoL"        , "League Of Legends"],
    ["WZ2"        , "Warzone 2"],
    ["Overwatch 2", "Overwatch 2"],
    ["MGO"        , "Metal Gear Online"]
  ];

  return $juegos;
}