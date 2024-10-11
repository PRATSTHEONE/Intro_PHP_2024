<?php 

$email1 = 'pancho@localhost.com';
$email2 = 'pancho@localhost';

// Validar las direcciones de correo
if (filter_var($email1, FILTER_VALIDATE_EMAIL)) {
  echo "El correo $email1 es correcto.\n";
} else {
  echo "Correo $email1 rechazado.\n";
}

if (filter_var($email2, FILTER_VALIDATE_EMAIL)) {
  echo "El correo $email2 es correcto.\n";
} else {
  echo "Correo $email2 rechazado.\n";
}