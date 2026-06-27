<?php

/**
 * ==========================================================
 * Proyecto: RostiChicken
 * Archivo: index.php
 * ----------------------------------------------------------
 * Punto de entrada principal de la aplicación.
 * ==========================================================
 */

define('APP_INIT', true);

/*
|--------------------------------------------------------------------------
| Configuración
|--------------------------------------------------------------------------
*/

require_once __DIR__ . '/../Config/config.php';

/*
|--------------------------------------------------------------------------
| Helpers
|--------------------------------------------------------------------------
*/

require_once __DIR__ . '/../Helpers/functions.php';

/*
|--------------------------------------------------------------------------
| Datos
|--------------------------------------------------------------------------
*/

require_once __DIR__ . '/../Data/hero.php';

require_once __DIR__ . '/../Data/menu.php';

require_once __DIR__ . '/../Data/promotions.php';

require_once __DIR__ . '/../Data/footer.php';

/*
|--------------------------------------------------------------------------
| Header
|--------------------------------------------------------------------------
*/

require_once __DIR__ . '/../Sections/Header/header.php';

/*
|--------------------------------------------------------------------------
| Contenido
|--------------------------------------------------------------------------
*/

require_once __DIR__ . '/../Sections/Hero/hero.php';

require_once __DIR__ . '/../Sections/Menu/menu.php';

require_once __DIR__ . '/../Sections/Promotions/promotions.php';

require_once __DIR__ . '/../Sections/Footer/footer.php';

?>

<!-- JavaScript -->

<script src="js/sections/header.js"></script>

<script src="js/sections/hero.js"></script>

<script src="js/sections/menu.js"></script>

<script src="js/sections/promotions.js"></script>

<script src="js/sections/footer.js"></script>

<script src="js/app.js"></script>
