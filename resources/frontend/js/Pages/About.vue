<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { ref, onMounted } from 'vue';

const show = ref(false);

onMounted(() => {
    show.value = true;
});
</script>

<style scoped>
/* Transiciones */
.slide-fade-enter-active {
  transition: all 0.5s ease-out;
}
.slide-fade-leave-active {
  transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
}
.slide-fade-enter-from,
.slide-fade-leave-to {
  transform: translateY(10px);
  opacity: 0;
}

/* Estilos Generales */
.container {
  max-width: 1100px;
}

h2 {
  font-size: 2rem;
  color: #34495e;
}

.text-muted {
  color:#7f8c8d !important;
}

.btn-primary {
  background-color: var(--heading-color);
  border-color: var(--heading-color);
  font-weight: 600;
  transition: background-color 0.3s ease;
}
.btn-primary:hover {
  background-color: #2980b9;
}

/* Estilo para la imagen de perfil */
.about-photo {
  width: 150px;
  height: 150px;
  transition: transform 0.3s ease;
}
.about-photo:hover {
  transform: scale(1.1);
}

/* Tarjetas de habilidades */
.card-custom {
  background-color: #f7f9fc;
  border-radius: 10px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.card-custom:hover {
  transform: translateY(-10px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}
.card-body h3 {
  font-size: 1.25rem;
  font-weight: 600;
  color: #2c3e50;
}
.card-body p {
  font-size: 1rem;
  color: #7f8c8d;
}

/* Secciones */
.about-section, .story-section {
  background: #E5E7EB;
  padding: 40px;
  border-radius: 15px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}
.about-section p,
.story-section p {
  line-height: 1.6;
  font-size: 1.1rem;
}
.tech-icon {
  width: 32px;
  height: 32px;
  transition: transform 0.3s ease;
}
.tech-icon:hover {
  transform: scale(1.1);
}
</style>

<template>
  <GuestLayout>
    <!-- Sección Sobre Mí -->
    <Transition name="slide-fade">
      <section v-if="show" class="container my-5 about-section shadow-sm">
        <div class="row align-items-center">
          <div class="col-md-4 text-center">
            <transition name="scale" appear>
              <img src="https://placehold.co/600x400" alt="Mi foto" class="about-photo rounded-circle shadow">
            </transition>
          </div>
          <div class="col-md-8">
            <h2 class="fw-bold">Hola, soy Ely Errico</h2>
            <p class="text-muted">Soy desarrollador web con experiencia en soluciones Full Stack utilizando Laravel y Vue.js. Me especializo en desarrollar aplicaciones a medida para clientes y en crear portafolios personalizados.</p>
            <p class="text-muted">Disfruto resolver problemas complejos, especialmente en las mañanas cuando estoy más fresca. Fuera del código, me gusta explorar nuevas tecnologías y mejorar mis habilidades.</p>
            <a href="#contact" class="btn btn-primary mt-3">Contáctame</a>
          </div>
        </div>
      </section>
    </Transition>

   
    <!-- Sección de Habilidades -->
    <Transition name="slide-fade">
      <section v-if="show" class="container my-5">
        <h2 class="text-center mb-4 text-primary fw-bold">Habilidades</h2>
        <div class="row text-center">
          <!-- Frontend -->
          <div class="col-md-4 mb-4">
            <div class="card card-custom shadow-sm border-0">
              <div class="card-body">
                <h3>Frontend</h3>
                <div class="d-flex justify-content-center align-items-center gap-3">
                  <img src="https://cdn.simpleicons.org/html5/E34F26" alt="HTML" class="tech-icon">
                  <img src="https://cdn.simpleicons.org/css3/1572B6" alt="CSS" class="tech-icon">
                  <img src="https://cdn.simpleicons.org/javascript/F7DF1E" alt="JavaScript" class="tech-icon">
                  <img src="https://cdn.simpleicons.org/vue.js/4FC08D" alt="Vue.js" class="tech-icon">
                </div>
              </div>
            </div>
          </div>
          <!-- Backend -->
          <div class="col-md-4 mb-4">
            <div class="card card-custom shadow-sm border-0">
              <div class="card-body">
                <h3>Backend</h3>
                <div class="d-flex justify-content-center align-items-center gap-3">
                  <img src="https://cdn.simpleicons.org/php/777BB4" alt="PHP" class="tech-icon">
                  <img src="https://cdn.simpleicons.org/laravel/FF2D20" alt="Laravel" class="tech-icon">
                  <img src="https://cdn.simpleicons.org/mysql/4479A1" alt="MySQL" class="tech-icon">
                </div>
              </div>
            </div>
          </div>
          <!-- Otras -->
          <div class="col-md-4 mb-4">
            <div class="card card-custom shadow-sm border-0">
              <div class="card-body">
                <h3>Otras</h3>
                <div class="d-flex justify-content-center align-items-center gap-3">
                  <img src="https://cdn.simpleicons.org/ubuntu/E95420" alt="Ubuntu" class="tech-icon">
                  <img src="https://cdn.simpleicons.org/docker/2496ED" alt="Docker" class="tech-icon">
                  <img src="https://cdn.simpleicons.org/moodle/009FE3" alt="Moodle" class="tech-icon">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </Transition>

    <!-- Sección de Mi Historia -->
    <Transition name="slide-fade">
      <section v-if="show" class="container my-5 story-section">
        <h2 class="text-center mb-4 text-primary fw-bold">Mi Historia</h2>
        <p class="text-center text-muted mx-auto" style="max-width: 800px;">Comencé mi camino en el desarrollo web hace algunos años, combinando mis conocimientos técnicos y mi pasión por resolver problemas para crear soluciones eficientes. Hoy, me enfoco exclusivamente en programación y desarrollo, trabajando en diversos proyectos para clientes y perfeccionando continuamente mis habilidades.</p>
      </section>
    </Transition>
  </GuestLayout>
</template>
