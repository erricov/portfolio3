<template>
  <!-- Preloader -->
  <div id="preloader"></div>
</template>

<script>

export default {
  data() {
    return {
      loading: true,
    };
  },
  mounted() {
    // Simulación de carga. Aquí podrías hacer la llamada a la API o algo similar.
    setTimeout(() => {
      const preloader = document.querySelector('#preloader');
      preloader.remove();
    }, 1000); // Cambia el tiempo según tu necesidad
  },
};
</script>

<style scoped>
/* Puedes agregar estilos personalizados si es necesario */
</style>