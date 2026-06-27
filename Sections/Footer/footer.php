<?php

/**
 * ==========================================================
 * Proyecto: RostiChicken
 * Archivo: footer.php
 * ----------------------------------------------------------
 * Pie de página del sitio.
 * ==========================================================
 */

if (!defined('APP_INIT')) {
    exit('Acceso directo no permitido.');
}

?>

</main>

<footer
        id="footer"
        class="footer">

    <div class="container">

        <div class="footer-content">

            <div class="footer-logo">

                <img
                        src="<?= asset('logo/logo.png'); ?>"
                        alt="<?= e(config('restaurant.name')); ?>">

                <h3>

                    <?= e(config('restaurant.name')); ?>

                </h3>

                <p>

                    <?= e($footer['message']); ?>

                </p>

            </div>

            <div class="footer-info">

                <div class="footer-item">

                    <h4>

                        Dirección

                    </h4>

                    <p>

                        <?= e(config('restaurant.address')); ?>

                    </p>

                </div>

                <div class="footer-item">

                    <h4>

                        Horario

                    </h4>

                    <p>

                        <?= e(config('restaurant.schedule.days')); ?>

                    </p>

                    <p>

                        <?= e(config('restaurant.schedule.hours')); ?>

                    </p>

                </div>

                <div class="footer-item">

                    <h4>

                        Teléfono

                    </h4>

                    <a href="tel:<?= e(config('restaurant.phone')); ?>">

                        <?= e(config('restaurant.phone')); ?>

                    </a>

                </div>

            </div>

            <div class="footer-actions">

                <a
                        href="https://wa.me/<?= e(config('restaurant.whatsapp')); ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="btn">

                    Pedir por WhatsApp

                </a>

            </div>

        </div>

        <div class="footer-bottom">

            <p>

                <?= e($footer['copyright']); ?>

            </p>

            <?php if ($footer['developer']['show']): ?>

                <p>

                    <?= e($footer['developer']['text']); ?>

                    <a
                            href="<?= e($footer['developer']['url']); ?>"
                            target="_blank"
                            rel="noopener noreferrer">

                        <?= e($footer['developer']['name']); ?>

                    </a>

                </p>

            <?php endif; ?>

        </div>

    </div>

</footer>

<script src="js/app.js"></script>

</body>

</html>
