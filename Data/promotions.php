<?php

/**
 * ==========================================================
 * Proyecto: RostiChicken
 * Archivo: promotions.php
 * ----------------------------------------------------------
 * Promociones vigentes del restaurante.
 * ==========================================================
 */

if (!defined('APP_INIT')) {
    exit('Acceso directo no permitido.');
}

$promotions = [

    [
        'id' => 'martes-alitas',

        'title' => 'Martes de Alitas',

        'description' => '2 órdenes de alitas',

        'price' => 199,

        'image' => 'promotions/martes-alitas.webp'
    ],

    [
        'id' => 'jueves-boneless',

        'title' => 'Jueves de Boneless',

        'description' => '2 órdenes',

        'price' => 249,

        'image' => 'promotions/jueves-boneless.webp'
    ],

    [
        'id' => 'cubeta-rosti',

        'title' => 'Cubeta RostiChicken',

        'description' => '10 cervezas + 20 alitas',

        'price' => 409,

        'image' => 'promotions/cubeta-rosti.webp'
    ],

    [
        'id' => 'cubetazo',

        'title' => 'Cubetazo',

        'description' => '8 Chelitas',

        'price' => 150,

        'image' => 'promotions/cubetazo.webp',

        'featured' => true
    ]

];