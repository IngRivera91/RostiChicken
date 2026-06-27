<?php

/**
 * ==========================================================
 * Proyecto: RostiChicken
 * Archivo: config.php
 * ----------------------------------------------------------
 * Configuración general del sistema.
 * ==========================================================
 */

if (!defined('APP_INIT')) {
    exit('Acceso directo no permitido.');
}

$config = [

    /*
    |--------------------------------------------------------------------------
    | Restaurante
    |--------------------------------------------------------------------------
    */

    'restaurant' => [
        'name'        => 'RostiChicken',
        'slogan'      => 'Tan grande como su sabor',
        'description' => 'Las mejores hamburguesas, alitas, carnes y bebidas preparadas al momento.',
        'phone'       => '2291234567',
        'whatsapp'    => '522291234567',
        'email'       => 'contacto@rostichicken.com',
        'address'     => 'Jesús Carranza, Veracruz',

        'schedule'    => [
            'days'  => 'Lunes a Domingo',
            'hours' => '1:00 PM - 11:00 PM'
        ]

    ],

    /*
    |--------------------------------------------------------------------------
    | Redes Sociales
    |--------------------------------------------------------------------------
    */

    'social' => [
        'facebook'  => '#',
        'instagram' => '#',
        'tiktok'    => '#',
        'maps'      => '#'
    ],

    /*
    |--------------------------------------------------------------------------
    | SEO
    |--------------------------------------------------------------------------
    */

    'seo' => [
        'title'       => 'RostiChicken | Restaurante Bar',
        'description' => 'Las mejores hamburguesas, alitas, carnes y bebidas.',
        'keywords'    => 'hamburguesas, alitas, carnes, cerveza, restaurante, bar',
        'author'      => 'IngRivera',
        'robots'      => 'index,follow'
    ],

    /*
    |--------------------------------------------------------------------------
    | Configuración General
    |--------------------------------------------------------------------------
    */

    'site' => [
        'language' => 'es',
        'charset' => 'UTF-8',
        'timezone' => 'America/Mexico_City',
        'currency' => '$',
        'version' => '1.0.0'
    ]
];