<?php

/**
 * ==========================================================
 * Proyecto: RostiChicken
 * Archivo: menu.php
 * ----------------------------------------------------------
 * Sección Menú.
 * ==========================================================
 */

if (!defined('APP_INIT')) {
    exit('Acceso directo no permitido.');
}

?>

<section
        id="menu"
        class="menu">

    <div class="container">

        <div class="section-header">

        <span class="section-subtitle">

            Nuestro Menú

        </span>

            <h2 class="section-title">

                Descubre nuestros platillos

            </h2>

            <p class="section-description">

                Todos nuestros platillos son preparados al momento con ingredientes frescos y de la mejor calidad.

            </p>

        </div>

        <!-- Navegación de categorías -->

        <nav class="menu-nav">

            <?php foreach ($menu['categories'] as $category): ?>

                <a
                        href="#<?= e($category['id']); ?>"
                        class="menu-nav-item">

                    <?= e($category['title']); ?>

                </a>

            <?php endforeach; ?>

        </nav>

        <!-- Categorías -->

        <?php foreach ($menu['categories'] as $category): ?>

            <section
                    id="<?= e($category['id']); ?>"
                    class="menu-category">

                <div class="menu-category-header">

                    <div class="menu-category-image">

                        <img
                                src="<?= asset($category['image']); ?>"
                                alt="<?= e($category['title']); ?>">

                    </div>

                    <div class="menu-category-content">

                        <h3>

                            <?= e($category['title']); ?>

                        </h3>

                        <?php if (!empty($category['showSauces'])): ?>

                            <div class="menu-sauces">

                            <span>

                                Salsas disponibles:

                            </span>

                                <ul>

                                    <?php foreach ($menu['sauces'] as $sauce): ?>

                                        <li>

                                            <?= e($sauce); ?>

                                        </li>

                                    <?php endforeach; ?>

                                </ul>

                            </div>

                        <?php endif; ?>

                    </div>

                </div>

                <div class="menu-products">

                    <?php foreach ($category['products'] as $product): ?>

                        <article class="menu-product">

                            <div class="menu-product-info">

                                <div class="menu-product-header">

                                    <h4>

                                        <?= e($product['name']); ?>

                                    </h4>

                                    <?php if (!empty($product['isNew'])): ?>

                                        <span class="badge-new">

                                        Nuevo

                                    </span>

                                    <?php endif; ?>

                                </div>

                                <?php if (!empty($product['size'])): ?>

                                    <span class="menu-product-size">

                                    <?= e($product['size']); ?>

                                </span>

                                <?php endif; ?>

                                <?php if (!empty($product['description'])): ?>

                                    <p>

                                        <?= e($product['description']); ?>

                                    </p>

                                <?php endif; ?>

                            </div>

                            <div class="menu-product-price">

                                <?= price($product['price']); ?>

                            </div>

                        </article>

                    <?php endforeach; ?>

                </div>

            </section>

        <?php endforeach; ?>

    </div>

</section>

