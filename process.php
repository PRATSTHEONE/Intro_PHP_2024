<?php 
require_once "config.php";

// Nuestros procesos...
if (!isset($_POST["gamertag"])) {
  $_SESSION["error"] = "Acceso no autorizado.";
  header("Location: index.php?error=true");
  die;
}

try {
  // Información a ser insertada
  // $_POST = array_map('trim', $_POST);

  $gamertag = trim($_POST["gamertag"]);
  $nombre   = trim($_POST["nombre"]);
  $email    = trim($_POST["email"]);
  $juego    = trim($_POST["juego"]);
  $miembros = trim($_POST["miembros"]);
  $url      = trim($_POST["url"]);
  $color    = trim($_POST["color"]);

  // Validar el gamertag
  if (strlen($gamertag) < 5) {
    throw new Exception("Tu gamertag no es válido.");
  }

  // Validar el email del usuario
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    throw new Exception("Ingresa un correo electrónico válido.");
  }

  // Nueva conexión a la base de datos
  $db = conectar();

  $sql = "INSERT INTO equipos 
  (gamertag, nombre, email, juego, miembros, url, color) 
  VALUES 
  (:gamertag, :nombre, :email, :juego, :miembros, :url, :color)";

  $sentencia = $db->prepare($sql);

  // Bind de cada columna con su valor
  $sentencia->bindParam("gamertag", $gamertag);
  $sentencia->bindParam("nombre"  , $nombre);
  $sentencia->bindParam("email"   , $email);
  $sentencia->bindParam("juego"   , $juego);
  $sentencia->bindParam("miembros", $miembros);
  $sentencia->bindParam("url"     , $url);
  $sentencia->bindParam("color"   , $color);

  $sentencia->execute();

  // Para obtener el ID del registro insertado
  $id_equipo = $db->lastInsertId();

  // Cierra la conexión a la db
  $db = null;

  $_SESSION["exito"] = sprintf("Se agregó con éxito tu equipo con ID %s", $id_equipo);
  header("Location: index.php");
  die;


} catch (Exception $e) {
  $_SESSION["error"] = $e->getMessage();
  header("Location: index.php?error=true");
  die;
}