import './bootstrap';

import "bootstrap";
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap-icons/font/bootstrap-icons.css";
// import "aos/dist/aos.css";
import "glightbox/dist/css/glightbox.min.css"
import '../css/app.css';

import 'bootstrap/dist/js/bootstrap.bundle';
// import 'aos/dist/aos';
import 'glightbox/dist/js/glightbox';
// import './main';


import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../../vendor/tightenco/ziggy';

// const appName = import.meta.env.VITE_APP_NAME || 'Laravel';
const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

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
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});



/**
 * Apply .scrolled class to the body as the page is scrolled down
 */
function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
}

document.addEventListener('scroll', toggleScrolled);
window.addEventListener('load', toggleScrolled);


 /**
   * Mobile nav toggle
   */
//  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

//  function mobileNavToogle() {
//    document.querySelector('body').classList.toggle('mobile-nav-active');
//    mobileNavToggleBtn.classList.toggle('bi-list');
//    mobileNavToggleBtn.classList.toggle('bi-x');
//  }
//  mobileNavToggleBtn.addEventListener('click', mobileNavToogle);

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

 /**
  * Preloader
//   */
//  if (preloader) {
//    window.addEventListener('load', () => {
//      preloader.remove();
//    });
//  }



