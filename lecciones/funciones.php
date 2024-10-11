<?php
declare(strict_types=1);

/**
 * Regresa un saludo para saludar a cualquier usuario
 * @return string
 */
function saludarUsuario()
{
  return '¡Hola vaquero! Bienvenido.';
}

/**
 * Regresa un string indicando cuanto dinero fue cobrado
 *
 * @param float $cantidad
 * @param string $moneda
 * @return void
 */
function cobrar(float $cantidad, string $moneda = 'MXN')
{
  return 'Hemos cobrado $' . number_format($cantidad, 2) . ' ' . $moneda;
}

// Ejecución
// echo cobrar(12000.50);
echo cobrar(10.25, 'USD');