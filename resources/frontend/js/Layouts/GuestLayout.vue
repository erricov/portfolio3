<script setup>
import Header from '../Components/Sections/Header.vue';
import Footer from '../Components/Sections/Footer.vue';

import { usePage } from '@inertiajs/vue3';
const { component } = usePage();
const classes = "page-" + component.toLowerCase();

// Remove all classes from body
document.body.classList = '';

// add class to body
document.body.classList.add("index-page");
document.body.classList.add(classes);

// Set Document Title
document.title = component + ' | Ely Errico';
</script>

<template>
    <div>
        
        <Header />
        <!-- Page Content -->
        <main class="main">
            <slot />
        </main>
        <Footer />
    </div>
</template>
