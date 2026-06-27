<?php

/**
 * ==========================================================
 * Proyecto: RostiChicken
 * Archivo: menu.php
 * ----------------------------------------------------------
 * Contenido del menú.
 * ==========================================================
 */

if (!defined('APP_INIT')) {
    exit('Acceso directo no permitido.');
}

$menu = [

    'sauces' => [

        'BBQ',
        'Buffalo',
        'Mango Habanero',
        'Tamarindo',
        'Ajo Parmesano',
        'Habanero',
        'Lemon Pepper',
        'Diabla'

    ],

    'categories' => [

        [
            'id'    => 'alitas',
            'title' => 'Alitas',
            'image' => 'categories/alitas.png',
            'showSauces' => true,

            'products' => [

                [
                    'name'  => '10 piezas',
                    'price' => 149
                ],

                [
                    'name'  => '20 piezas',
                    'price' => 269
                ],

                [
                    'name'  => '30 piezas',
                    'price' => 359
                ]

            ]

        ],

        [
            'id'    => 'boneless',
            'title' => 'Boneless',
            'image' => 'categories/boneless.png',
            'showSauces' => true,

            'products' => [

                [
                    'name'        => '250 gr',
                    'description' => 'Incluye aderezo ranch y vegetales.',
                    'price'       => 149
                ],

                [
                    'name'        => '1/2 kg',
                    'description' => 'Incluye aderezo ranch y vegetales.',
                    'price'       => 269
                ],

                [
                    'name'        => '1 kg',
                    'description' => 'Incluye aderezo ranch y vegetales.',
                    'price'       => 409
                ]

            ]

        ],

        [
            'id'    => 'hamburguesas',
            'title' => 'Hamburguesas',
            'image' => 'categories/hamburguesas.png',

            'products' => [

                [
                    'name'        => 'Clásica',
                    'description' => 'Carne de res, queso, lechuga, tomate y papas.',
                    'price'       => 139
                ],

                [
                    'name'        => 'BBQ Bacon',
                    'description' => 'Carne de res, queso cheddar, tocino y salsa BBQ.',
                    'price'       => 159
                ],

                [
                    'name'        => 'Doble Rosti',
                    'description' => 'Doble carne, doble queso y papas.',
                    'price'       => 189
                ],

                [
                    'name'        => 'Pollo Crujiente',
                    'description' => 'Pechuga de pollo crujiente, lechuga, tomate, mayonesa y papas.',
                    'price'       => 149,
                    'isNew'       => true
                ],

                [
                    'name'        => 'Pollo Crujiente BBQ',
                    'description' => 'Pechuga de pollo crujiente, queso, lechuga y salsa BBQ. Con papas.',
                    'price'       => 155,
                    'isNew'       => true
                ]

            ]

        ],

        [
            'id'    => 'carnes',
            'title' => 'Carnes',
            'image' => 'categories/carnes.png',

            'products' => [

                [
                    'name'        => 'Arrachera Asada',
                    'size'        => '500 g',
                    'description' => 'Acompañada de cebollitas, chiles toreados y papas.',
                    'price'       => 309
                ],

                [
                    'name'        => 'Chuletita Asada',
                    'size'        => '500 g',
                    'description' => 'Acompañada de cebollitas, chiles toreados y papas.',
                    'price'       => 279
                ],

                [
                    'name'        => 'Fajitas de Res Asadas',
                    'size'        => '500 g',
                    'description' => 'Acompañada de cebollitas, chiles toreados y papas.',
                    'price'       => 279
                ]

            ]

        ],

        [
            'id'    => 'entradas',
            'title' => 'Entradas',
            'image' => 'categories/entradas.png',

            'products' => [

                [
                    'name'  => 'Papas a la francesa',
                    'price' => 59
                ],

                [
                    'name'  => 'Papas con carne de res (150 g)',
                    'price' => 119
                ],

                [
                    'name'  => 'Nuggets de pollo c/papas',
                    'price' => 109
                ],

                [
                    'name'  => 'Salchipapas',
                    'price' => 79
                ],

                [
                    'name'  => 'Guacamole',
                    'price' => 69
                ]

            ]

        ],

        [
            'id'    => 'cervezas',
            'title' => 'Cervezas',
            'image' => 'categories/cervezas.png',

            'products' => [

                [
                    'name'  => 'Corona',
                    'price' => 20
                ],

                [
                    'name'  => 'Victoria',
                    'price' => 20
                ],

                [
                    'name'  => 'Negra Modelo',
                    'price' => 45
                ],

                [
                    'name'  => 'Modelo Especial',
                    'price' => 45
                ],

                [
                    'name'  => 'Michelada',
                    'price' => 60
                ],

                [
                    'name'  => 'Chelada',
                    'price' => 55
                ]

            ]

        ],

        [
            'id'    => 'bebidas',
            'title' => 'Bebidas',
            'image' => 'categories/bebidas.png',

            'products' => [

                [
                    'name'  => 'Refrescos',
                    'price' => 30
                ],

                [
                    'name'  => 'Agua natural',
                    'price' => 30
                ],

                [
                    'name'  => 'Agua mineral',
                    'price' => 30
                ],

                [
                    'name'  => 'Limonada mineral',
                    'price' => 45
                ],

                [
                    'name'  => 'Naranjada mineral',
                    'price' => 45
                ],

                [
                    'name'  => 'Jamaica',
                    'price' => 30
                ],

                [
                    'name'  => 'Horchata',
                    'price' => 30
                ]

            ]

        ]

    ]

];