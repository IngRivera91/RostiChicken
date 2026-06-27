<?php

/**
 * ==========================================================
 * Proyecto: RostiChicken
 * Archivo: header.php
 * ----------------------------------------------------------
 * Cabecera principal del sitio.
 * ==========================================================
 */

if (!defined('APP_INIT')) {
    exit('Acceso directo no permitido.');
}

?>
<!DOCTYPE html>
<html lang="<?= e(config('site.language')); ?>">

<head>

    <meta charset="<?= e(config('site.charset')); ?>">

    <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0">

    <title><?= e(config('seo.title')); ?></title>

    <meta
            name="description"
            content="<?= e(config('seo.description')); ?>">

    <meta
            name="keywords"
            content="<?= e(config('seo.keywords')); ?>">

    <meta
            name="author"
            content="<?= e(config('seo.author')); ?>">

    <meta
            name="robots"
            content="<?= e(config('seo.robots')); ?>">

    <meta
            name="theme-color"
            content="<?= e(config('theme.primary')); ?>">

    <link
            rel="icon"
            type="image/png"
            href="<?= asset('logo/favicon.png'); ?>">

    <!-- Google Fonts -->

    <link
            rel="preconnect"
            href="https://fonts.googleapis.com">

    <link
            rel="preconnect"
            href="https://fonts.gstatic.com"
            crossorigin>

    <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
            rel="stylesheet">

    <!-- CSS -->

    <link
            rel="stylesheet"
            href="css/style.css">

</head>

<body>

<header class="header">

    <div class="container">

        <a
                href="#inicio"
                class="logo"
                aria-label="<?= e(config('restaurant.name')); ?>">

            <img
                    src="<?= asset('logo/logo.png'); ?>"
                    alt="<?= e(config('restaurant.name')); ?>">

        </a>

        <nav
                class="nav"
                id="nav">

            <a href="#inicio">
                Inicio
            </a>

            <a href="#menu">
                Menú
            </a>

            <a href="#promotions">
                Promociones
            </a>

        </nav>

        <a
                href="https://wa.me/<?= e(config('restaurant.whatsapp')); ?>"
                target="_blank"
                rel="noopener noreferrer"
                class="btn-whatsapp">

            Pedir por WhatsApp

        </a>

        <button
                class="menu-toggle"
                id="menuToggle"
                type="button"
                aria-label="Abrir menú">

            ☰

        </button>

    </div>

</header>

<main>

