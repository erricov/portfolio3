<template>
  <div v-if="loading" class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="spinner-border" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>
  <div v-else>
    <!-- Contenido de la página una vez que ha cargado -->
    <slot></slot>
  </div>
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
      this.loading = false;
    }, 1000); // Cambia el tiempo según tu necesidad
  },
};
</script>

<style scoped>
/* Puedes agregar estilos personalizados si es necesario */
</style>