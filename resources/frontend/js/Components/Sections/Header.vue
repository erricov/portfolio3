<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';
import Logo from '@img/logo.png';
import NavLink from '@/Components/NavLink.vue';

// Reactive variables
const siteName = 'Ely Errico';
const links = ref([]);

// Fetch links on component mount
onMounted(() => {
  const cachedLinks = localStorage.getItem('menuLinks');
  
  if (cachedLinks) {
    links.value = JSON.parse(cachedLinks);
    // console.log('Using cached menu links:', links.value);
  } else {
    axios.get('/menu-links')
      .then((response) => {
        links.value = response.data; // Update the value of the ref
        localStorage.setItem('menuLinks', JSON.stringify(links.value)); // Cache the data
        // console.log('Fetched menu links:', links.value); // Ensure this logs after data is fetched
      })
      .catch((error) => {
        if (error.response && error.response.status === 404) {
          console.error('Menu links not found (404):', error.response);
        } else {
          console.error('Error fetching menu links:', error);
        }
      });
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
      <nav v-if="links.length" id="navmenu" class="navmenu">
        <ul>
          <li v-for="link in links" :key="link.id">
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
