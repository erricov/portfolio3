<script setup>
import Header from '../Components/Sections/Header.vue';
import Footer from '../Components/Sections/Footer.vue';

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
