/**
 * ==========================================================
 * Proyecto: RostiChicken
 * Archivo: menu.js
 * ----------------------------------------------------------
 * Comportamiento de la sección Menú.
 * ==========================================================
 */

const initMenu = () => {

    const links = document.querySelectorAll('.menu-nav-item');

    if (!links.length) {
        return;
    }

    links.forEach(link => {

        link.addEventListener('click', event => {

            event.preventDefault();

            const target = document.querySelector(
                link.getAttribute('href')
            );

            if (!target) {
                return;
            }

            const offset = document.querySelector('.header').offsetHeight;

            const position =
                target.getBoundingClientRect().top +
                window.pageYOffset -
                offset -
                20;

            window.scrollTo({

                top: position,

                behavior: 'smooth'

            });

        });

    });

    const sections = document.querySelectorAll('.menu-category');

    const observer = new IntersectionObserver(entries => {

        entries.forEach(entry => {

            if (!entry.isIntersecting) {
                return;
            }

            links.forEach(link => {

                link.classList.remove('active');

                if (link.getAttribute('href') === '#' + entry.target.id) {

                    link.classList.add('active');

                }

            });

        });

    }, {

        threshold: .35

    });

    sections.forEach(section => observer.observe(section));

};

document.addEventListener('DOMContentLoaded', initMenu);