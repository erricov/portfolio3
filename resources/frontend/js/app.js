import './bootstrap';

import "bootstrap";
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap-icons/font/bootstrap-icons.css";
// import "aos/dist/aos.css";
import "glightbox/dist/css/glightbox.min.css"
import '../css/app.css';
import '../css/style.css';

import 'bootstrap/dist/js/bootstrap.bundle';
// import 'aos/dist/aos';
import 'glightbox/dist/js/glightbox';
// import './main';


import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { createI18n } from 'vue-i18n'
import { ZiggyVue } from '../../../vendor/tightenco/ziggy';

// const appName = import.meta.env.VITE_APP_NAME || 'Laravel';
const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

const i18n = createI18n({
  locale: 'es',
  fallbackLocale: 'en',
  messages: {
    en: {
      header: {
        homepage: 'Home',
        about: 'About',
        services: 'Services',
        portfolio: 'Portfolio',
        contact: 'Contact',
      },
      message: {
        hello: 'hello world',
      },
    },
    es: {
      header: {
        homepage: 'Inicio',
        about: 'Acerca de mi',
        services: 'Servicios',
        portfolio: 'Portafolio',
        contact: 'Contacto',
      },
      message: {
        hello: 'Hola Mundo',
      },
    },
    it: {
      header: {
        homepage: 'Pagina Iniziale',
        about: 'Chi Sono',
        services: 'Servizi',
        portfolio: 'Portfolio',
        contact: 'Contatti',
      },
      message: {
        hello: 'Ciao Mondo',
      },
    },
  },
});

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(i18n)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});

 /**
  * Hide mobile nav on same-page/hash links
  */
 document.querySelectorAll('#navmenu a').forEach(navmenu => {
   navmenu.addEventListener('click', () => {
     if (document.querySelector('.mobile-nav-active')) {
       mobileNavToogle();
     }
   });

 });

 /**
  * Toggle mobile nav dropdowns
  */
 document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
   navmenu.addEventListener('click', function(e) {
     e.preventDefault();
     this.parentNode.classList.toggle('active');
     this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
     e.stopImmediatePropagation();
   });
 });


