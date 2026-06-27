/**
 * ==========================================================
 * Proyecto: RostiChicken
 * Archivo: promotions.js
 * ----------------------------------------------------------
 * Comportamiento de la sección Promociones.
 * ==========================================================
 */

const initPromotions = () => {

    const cards = document.querySelectorAll('.promotion-card');

    if (!cards.length) {
        return;
    }

    const observer = new IntersectionObserver(entries => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {

                entry.target.classList.add('fade-up');

                observer.unobserve(entry.target);

            }

        });

    }, {

        threshold: .15

    });

    cards.forEach(card => observer.observe(card));

};

document.addEventListener('DOMContentLoaded', initPromotions);