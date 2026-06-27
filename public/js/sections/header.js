/**
 * ==========================================================
 * Proyecto: RostiChicken
 * Archivo: header.js
 * ----------------------------------------------------------
 * Comportamiento del Header.
 * ==========================================================
 */

const initHeader = () => {

    const header = document.querySelector('.header');

    const menu = document.querySelector('.nav');

    const toggle = document.querySelector('.menu-toggle');

    if (!header) {
        return;
    }

    const updateHeader = () => {

        if (window.scrollY > 40) {

            header.classList.add('scrolled');

        } else {

            header.classList.remove('scrolled');

        }

    };

    updateHeader();

    window.addEventListener('scroll', updateHeader);

    if (toggle && menu) {

        toggle.addEventListener('click', () => {

            menu.classList.toggle('active');

        });

        menu.querySelectorAll('a').forEach(link => {

            link.addEventListener('click', () => {

                menu.classList.remove('active');

            });

        });

    }

};

document.addEventListener('DOMContentLoaded', initHeader);