<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';
import axios from 'axios';
import Logo from '@img/logo.png';
import NavLink from '@/Components/NavLink.vue';

// Reactive variables
const siteName = 'Ely Errico';
const links = ref([]);

// Fetch links on component mount
onMounted(() => {
  axios.get('/menu-links')
    .then((response) => {
      links.value = response.data;
      console.log("HELLO");
      console.log(links.value); // Ensure this logs after data is fetched
    })
    .catch((error) => {
      if (error.response && error.response.status === 404) {
        console.error('Menu links not found (404):', error.response);
      } else {
        console.error('Error fetching menu links:', error);
      }
    });
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
</script>

<template>
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <img :src="Logo" alt="Logo">
        <h1 class="sitename">{{ siteName }}</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li v-for="link in links" :key="link.id">
            <NavLink
              :href="route(link.link)"
              :active="route().current(link.link)"
            >
              {{ link.name }}
            </NavLink>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="#about">Get Started</a>

    </div>
  </header>
</template>
