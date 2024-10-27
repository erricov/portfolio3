<script setup>
// defineProps(['title', 'description', 'image', 'cta', 'ctaLink']);
</script>
<template>
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <div class="container">
            <slot></slot> 
        </div>
    </section>
    <!-- /Hero Section -->
</template>
