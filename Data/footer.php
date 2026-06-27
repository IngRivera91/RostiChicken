<?php

/**
 * ==========================================================
 * Proyecto: RostiChicken
 * Archivo: footer.php
 * ----------------------------------------------------------
 * Contenido de la sección Footer.
 * ==========================================================
 */

if (!defined('APP_INIT')) {
    exit('Acceso directo no permitido.');
}

$footer = [

    'message' => '¡Gracias por tu preferencia!',

    'copyright' => sprintf(
        '© %s %s. Todos los derechos reservados.',
        date('Y'),
        config('restaurant.name')
    ),

    'developer' => [

        'show' => true,

        'text' => 'Desarrollado por',

        'name' => 'IngRivera',

        'url' => 'https://ingrivera.com'

    ]

];