/**
 * ==========================================================
 * Proyecto: RostiChicken
 * Archivo: hero.js
 * ----------------------------------------------------------
 * Slider del Hero.
 * ==========================================================
 */

const initHero = () => {

    const slides = document.querySelectorAll('.hero-slide');

    if (!slides.length) {
        return;
    }

    let current = 0;

    const showSlide = index => {

        slides.forEach((slide, i) => {

            slide.classList.toggle('active', i === index);

        });

    };

    const nextSlide = () => {

        current++;

        if (current >= slides.length) {

            current = 0;

        }

        showSlide(current);

    };

    showSlide(current);

    setInterval(nextSlide, 5000);

};

document.addEventListener('DOMContentLoaded', initHero);