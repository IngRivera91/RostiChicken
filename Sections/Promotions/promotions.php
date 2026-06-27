<?php

/**
 * ==========================================================
 * Proyecto: RostiChicken
 * Archivo: promotions.php
 * ----------------------------------------------------------
 * Sección de Promociones.
 * ==========================================================
 */

if (!defined('APP_INIT')) {
    exit('Acceso directo no permitido.');
}

?>

<section
    id="promotions"
    class="promotions">

    <div class="container">

        <div class="section-header">

        <span class="section-subtitle">

            Promociones

        </span>

            <h2 class="section-title">

                Aprovecha nuestras promociones

            </h2>

            <p class="section-description">

                Todos los días tenemos promociones para que disfrutes más por menos.

            </p>

        </div>

        <div class="promotions-grid">

            <?php foreach ($promotions as $promotion): ?>

                <article class="promotion-card <?= !empty($promotion['featured']) ? 'featured' : ''; ?>">

                    <div class="promotion-image">

                        <img
                            src="<?= asset($promotion['image']); ?>"
                            alt="<?= e($promotion['title']); ?>">

                    </div>

                    <div class="promotion-content">

                        <h3>

                            <?= e($promotion['title']); ?>

                        </h3>

                        <p>

                            <?= e($promotion['description']); ?>

                        </p>

                        <div class="promotion-footer">

                        <span class="promotion-price">

                            <?= price($promotion['price']); ?>

                        </span>

                            <a
                                href="https://wa.me/<?= e(config('restaurant.whatsapp')); ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="btn">

                                Pedir

                            </a>

                        </div>

                    </div>

                </article>

            <?php endforeach; ?>

        </div>

    </div>

</section>
