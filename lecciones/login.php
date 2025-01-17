<?php
// login.php 
// Iniciamos el trabajo con sesiones
session_start();

// Si el usuario ya está verificado, redireccionamos a perfil.php
if (isset($_SESSION["verificado"]) && $_SESSION["verificado"] == true) {
  header('Location: perfil.php');
  die;
}

// Verificamos si existe el parámetro GET verificado y es igual a true
if (isset($_GET["verificado"]) && $_GET["verificado"] == true) {
  $_SESSION["verificado"] = true;
  header('Location: perfil.php');
  die;
}

// Si no está verificado, le pedimos verificarse
echo '<h3>Presiona el link para ingresar</h3>';
echo '<a href="login.php?verificado=true">Verificar mi cuenta</a>';

