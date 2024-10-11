<?php 
// logout.php
// Iniciamos el trabajo con sesiones
session_start();

// Destruimos la sesión
session_destroy();

// Redireccionamos
header('Location: login.php');
die;
