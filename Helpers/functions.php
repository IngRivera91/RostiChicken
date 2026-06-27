<?php

/**
 * ==========================================================
 * Proyecto: RostiChicken
 * Archivo: functions.php
 * ----------------------------------------------------------
 * Funciones auxiliares del proyecto.
 * ==========================================================
 */

if (!defined('APP_INIT')) {
    exit('Acceso directo no permitido.');
}

/**
 * Obtiene un valor del archivo config.php
 *
 * Ejemplo:
 * config('restaurant.name');
 */
function config(string $key, mixed $default = null): mixed
{
    global $config;

    $value = $config;

    foreach (explode('.', $key) as $segment) {

        if (!is_array($value) || !array_key_exists($segment, $value)) {
            return $default;
        }

        $value = $value[$segment];
    }

    return $value;
}

/**
 * Devuelve la ruta de un recurso dentro de /public/img
 *
 * Ejemplo:
 * asset('hero/hero1.png');
 */
function asset(string $path): string
{
    return 'img/' . ltrim($path, '/');
}

/**
 * Formatea un precio en pesos mexicanos.
 *
 * Ejemplo:
 * $149
 */
function price(float|int $price): string
{
    return '$' . number_format($price, 0);
}

/**
 * Escapa texto para evitar XSS.
 */
function e(?string $value): string
{
    return htmlspecialchars(
        $value ?? '',
        ENT_QUOTES,
        'UTF-8'
    );
}

/**
 * Devuelve "active" cuando el id coincide.
 */
function active(string $current, string $expected): string
{
    return $current === $expected ? 'active' : '';
}

/**
 * Devuelve el año actual.
 */
function currentYear(): string
{
    return date('Y');
}