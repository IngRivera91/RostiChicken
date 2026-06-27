/**
 * ==========================================================
 * Proyecto: RostiChicken
 * Archivo: app.js
 * ----------------------------------------------------------
 * Inicializador principal de la aplicación.
 * ==========================================================
 */

const App = {

    init() {

        this.scrollTop();

        this.externalLinks();

        console.log(
            '%c🍗 RostiChicken',
            'color:#FDB515;font-size:20px;font-weight:bold;'
        );

        console.log(
            '%cDesarrollado por IngRivera',
            'color:#FFFFFF;font-size:12px;'
        );

    },

    scrollTop() {

        window.addEventListener('load', () => {

            window.scrollTo({

                top: 0,

                behavior: 'instant'

            });

        });

    },

    externalLinks() {

        document.querySelectorAll('a[target="_blank"]').forEach(link => {

            if (!link.hasAttribute('rel')) {

                link.setAttribute('rel', 'noopener noreferrer');

            }

        });

    }

};

document.addEventListener('DOMContentLoaded', () => {

    App.init();

});