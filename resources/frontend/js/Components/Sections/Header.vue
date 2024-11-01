<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';
import Logo from '@img/logo.png';
import NavLink from '@/Components/NavLink.vue';

// Reactive variables
const siteName = 'Ely Errico';

var props = defineProps({
  menu: {
    type: Array,
  }
});

// Toggle 'scrolled' class on body when scrolled down
function toggleScrolled() {
  const selectBody = document.body;
  const selectHeader = document.querySelector('#header');
  if (!selectHeader.classList.contains('scroll-up-sticky') &&
      !selectHeader.classList.contains('sticky-top') &&
      !selectHeader.classList.contains('fixed-top')) return;

  window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
}

// Set up scroll event listener on mount and clean up on unmount
onMounted(() => {
  document.addEventListener('scroll', toggleScrolled);
  toggleScrolled(); // Run on load
});

onBeforeUnmount(() => {
  document.removeEventListener('scroll', toggleScrolled);
});

// if body has class page-homepage add fixed-top class to header
var headClasses = 'header d-flex align-items-center';
if (document.body.classList.contains('page-homepage')) {
  headClasses += ' fixed-top';
} else {
  headClasses += ' sticky-top';
}
</script>

<template>
  <!-- <pre>{{ links }}</pre> Para verificar los datos en el DOM -->

  <header id="header" :class="headClasses">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- <img :src="Logo" alt="Logo"> -->
        <div class="logo-css">Ee</div>
        <h1 class="sitename">{{ siteName }}</h1>
      </a>

      <!-- Condicional para mostrar los enlaces solo cuando estén disponibles -->
      <nav v-if="menu.length" id="navmenu" class="navmenu">
        <ul>
          <li v-for="link in menu" :key="link.id">
            <NavLink
              v-if="link && link.url"
              :href="route(link.url)"
              :active="route().current(link.url)"
            >
              {{ link.name }}
            </NavLink>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <!-- <a class="btn-getstarted" href="#about">Get Started</a> -->

    </div>
  </header>
</template>
