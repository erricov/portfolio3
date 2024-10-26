<script setup>
import Logo from '@img/logo.png';
import NavLink from '@/Components/NavLink.vue';

var siteName = 'Ely Errico';

var links = [
    { 'text': 'Home', 'link': 'homepage' },
    { 'text': 'About', 'link': 'about' },
    { 'text': 'Services', 'link': 'services' },
    { 'text': 'Portfolio', 'link': 'portfolio' },
    { 'text': 'Contact', 'link': 'contact' },
]


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

</script>


<template>
    <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img :src="Logo" alt="">
        <h1 class="sitename">{{ siteName }}</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
            <li v-for="link in links" :key="link.text">
              <NavLink
                  :href="route(link.link)"
                  :active="route().current(link.link)"
              >
                {{ link.text }}
              </NavLink>

                <!-- <a :href="route(link.link)">{{ link.text }}</a> -->
            </li>
            <!-- <li><a href="#team">Team</a></li> -->
            <!-- <li><a href="#pricing">Pricing</a></li> -->
            <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="#about">Get Started</a>

    </div>
  </header>
</template>