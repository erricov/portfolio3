<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';

import Spinner from '@/Components/Spinner.vue';
import Hero from '@/Components/Hero.vue';


</script>
<style scoped>
.fade-enter-active, .fade-leave-active {
  transition: opacity 1s;
}
.fade-enter, .fade-leave-to {
  opacity: 0;
}

.scale-enter-active, .scale-leave-active {
  transition: transform 1s;
}
.scale-enter, .scale-leave-to {
  transform: scale(0);
}
</style>
<template>
  <GuestLayout>
    <!-- <Hero>
      <div class="row justify-content-center">
        <div class="col-lg-10 order-2 order-lg-1 d-flex flex-column justify-content-center text-aling-center">
          <h1 class="text-center">SOBRE MI</h1>
          <p class="text-center text-center fs-5"> Bienvenido a esta sección, donde podrás descubrir más sobre mi
            trayectoria en desarrollo web, mis habilidades técnicas y la experiencia que respaldo en cada proyecto. </p>
        </div>
      </div>
    </Hero> -->

    
    <!-- About Section -->
    <Transition>
      <section class="container my-5 about-section shadow-sm">
        <div class="row align-items-center">
          <div class="col-md-4 text-center">
            <transition name="scale" appear>
              <img src="your-photo.jpg" alt="Your photo" class="about-photo rounded-circle shadow">
            </transition>
          </div>
          <div class="col-md-8">
            <h2 class="fw-bold">Hi, I'm Ely Errico</h2>
            <p class="text-muted">I am a web developer with experience in Full Stack solutions using Laravel and Vue.js. I specialize in developing tailored applications for clients and creating custom portfolios.</p>
            <p class="text-muted">I love tackling challenging problems, especially in the mornings when I'm most fresh. Outside of coding, I enjoy exploring new technologies and improving my skills.</p>
            <a href="#contact" class="btn btn-primary mt-3">Get in Touch</a>
          </div>
        </div>
      </section>
    </Transition>

    <!-- Skills Section -->
    <transition name="fade" appear>
      <section class="container my-5">
        <h2 class="text-center mb-4 text-primary fw-bold">Skills</h2>
        <div class="row text-center">
          <div class="col-md-4 mb-4">
            <div class="card card-custom shadow-sm border-0">
              <div class="card-body">
                <h3>Frontend</h3>
                <p>HTML, CSS, JavaScript, Vue.js</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card card-custom shadow-sm border-0">
              <div class="card-body">
                <h3>Backend</h3>
                <p>PHP, Laravel, SQL/MySQL</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card card-custom shadow-sm border-0">
              <div class="card-body">
                <h3>Other</h3>
                <p>Ubuntu, Docker, Moodle</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </transition>


    <!-- Story Section -->
    <transition name="fade" appear>
      <section class="container my-5 story-section">
        <h2 class="text-center mb-4 text-primary fw-bold">My Story</h2>
        <p class="text-center text-muted mx-auto" style="max-width: 800px;">I started my journey in web development a few years ago, combining my technical knowledge and passion for solving problems to create efficient solutions. Today, I focus exclusively on programming and development, working on a variety of projects for clients and continually refining my skills.</p>
      </section>
    </transition>

  </GuestLayout>

  <!-- <Spinner /> -->
</template>
