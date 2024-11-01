<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { ref, onMounted } from "vue";


var props = defineProps({
  menu: {
    type: Array,
    default: () => [],
  }
});

</script>

<template>
    <GuestLayout :menu="menu">
        <div class="container">
            <div class="row my-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus nemo vero labore aut at nostrum numquam quia odit, a deleniti culpa. Ut accusamus at reprehenderit? Velit nisi dignissimos quibusdam at.
            </div>
        </div>
    </GuestLayout>
</template>

<style scoped>
</style>
