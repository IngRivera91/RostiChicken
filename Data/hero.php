<?php

/**
 * ==========================================================
 * Proyecto: RostiChicken
 * Archivo: hero.php
 * ----------------------------------------------------------
 * Contenido de la sección Hero.
 * ==========================================================
 */

if (!defined('APP_INIT')) {
    exit('Acceso directo no permitido.');
}

$hero = [

    'autoplay' => true,

    'delay' => 5000,

    'description' => 'Las mejores hamburguesas, alitas, carnes y bebidas preparadas al momento.',

    'buttonPrimary' => [

        'text' => 'Ver Menú',

        'link' => '#menu'

    ],

    'buttonSecondary' => [

        'text' => 'Pedir por WhatsApp'

    ],

    'images' => [

        'hero/hero1.png',

        'hero/hero2.png',

        'hero/hero3.png',

        'hero/hero4.png'

    ]

];