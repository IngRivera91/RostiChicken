<?php

/**
 * ==========================================================
 * Proyecto: RostiChicken
 * Archivo: hero.php
 * ----------------------------------------------------------
 * Sección Hero principal.
 * ==========================================================
 */

if (!defined('APP_INIT')) {
    exit('Acceso directo no permitido.');
}

?>

<section id="inicio" class="hero">

    <div class="hero-slider">

        <?php foreach ($hero['images'] as $index => $image): ?>

            <div class="hero-slide <?= $index === 0 ? 'active' : ''; ?>">

                <img
                        src="<?= asset($image); ?>"
                        alt="<?= e(config('restaurant.name')); ?>">

            </div>

        <?php endforeach; ?>

    </div>

    <div class="hero-overlay"></div>

    <div class="container">

        <div class="hero-content">

        <span class="hero-subtitle">

            <?= e(config('restaurant.slogan')); ?>

        </span>

            <h1>

                <?= e(config('restaurant.name')); ?>

            </h1>

            <p>

                <?= e($hero['description']); ?>

            </p>

            <div class="hero-buttons">

                <a
                        href="<?= e($hero['buttonPrimary']['link']); ?>"
                        class="btn">

                    <?= e($hero['buttonPrimary']['text']); ?>

                </a>

                <a
                        href="https://wa.me/<?= e(config('restaurant.whatsapp')); ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="btn btn-outline">

                    <?= e($hero['buttonSecondary']['text']); ?>

                </a>

            </div>

        </div>

    </div>

</section>
