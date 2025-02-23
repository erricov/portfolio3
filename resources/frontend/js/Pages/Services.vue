<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { ref, onMounted } from "vue";

var props = defineProps({
  menu: {
    type: Array,
    default: () => [],
  }
});

const show = ref(false);
const showService1 = ref(false);
const showService2 = ref(false);
const showService3 = ref(false);
const showTestimonials = ref(false);
const showFAQ = ref(false);

onMounted(() => {
  show.value = true;
  setTimeout(() => {
    showService1.value = true;
  }, 500);
  setTimeout(() => {
    showService2.value = true;
  }, 1000);
  setTimeout(() => {
    showService3.value = true;
  }, 1500);
  setTimeout(() => {
    showTestimonials.value = true;
  }, 2000);
  setTimeout(() => {
    showFAQ.value = true;
  }, 2500);
});
</script>

<template>
    <GuestLayout :menu="menu">
        <div class="container">
            <div class="row my-5">
                <!-- Columna principal de servicios -->
                <div class="col-md-8">
                    <!-- Introducción de Servicios -->
                    <Transition name="slide-fade">
                        <div v-if="show" class="card card-custom shadow-sm p-4">
                            <h2 class="text-primary fw-bold">
                                {{ $t('services.title') }}
                            </h2>
                            <p class="text-muted">
                                {{ $t('services.description') }}
                            </p>
                        </div>
                    </Transition>

                    <!-- Servicio 1: Desarrollo de Aplicaciones a Medida -->
                    <Transition name="slide-fade">
                        <div v-if="showService1" class="card card-custom shadow-sm p-4 mt-4">
                            <h3 class="fw-bold">{{ $t('services.service1.title') }}</h3>
                            <p class="text-muted">
                                {{ $t('services.service1.description') }}
                            </p>
                            <ul>
                                <li>{{ $t('services.service1.points[0]') }}</li>
                                <li>{{ $t('services.service1.points[1]') }}</li>
                                <li>{{ $t('services.service1.points[2]') }}</li>
                            </ul>
                        </div>
                    </Transition>

                    <!-- Servicio 2: Integración de Sistemas -->
                    <Transition name="slide-fade">
                        <div v-if="showService2" class="card card-custom shadow-sm p-4 mt-4">
                            <h3 class="fw-bold">{{ $t('services.service2.title') }}</h3>
                            <p class="text-muted">
                                {{ $t('services.service2.description') }}
                            </p>
                            <ul>
                                <li>{{ $t('services.service2.points[0]') }}</li>
                                <li>{{ $t('services.service2.points[1]') }}</li>
                                <li>{{ $t('services.service2.points[2]') }}</li>
                            </ul>
                        </div>
                    </Transition>

                    <!-- Servicio 3: Diseño y Desarrollo de Portafolios -->
                    <Transition name="slide-fade">
                        <div v-if="showService3" class="card card-custom shadow-sm p-4 mt-4">
                            <h3 class="fw-bold">{{ $t('services.service3.title') }}</h3>
                            <p class="text-muted">
                                {{ $t('services.service3.description') }}
                            </p>
                            <ul>
                                <li>{{ $t('services.service3.points[0]') }}</li>
                                <li>{{ $t('services.service3.points[1]') }}</li>
                                <li>{{ $t('services.service3.points[2]') }}</li>
                            </ul>
                        </div>
                    </Transition>
                </div>

                <!-- Columna derecha con testimonios y preguntas frecuentes -->
                <div class="col-md-4">
                    <!-- Testimonios -->
                    <Transition name="slide-fade">
                        <div v-if="showTestimonials" class="testimonials-section">
                            <h2 class="text-center text-primary fw-bold mb-3">{{ $t('services.testimonials.title') }}</h2>
                            
                            <!-- Testimonio 1 -->
                            <div class="card card-custom shadow-sm mb-4">
                                <div class="card-body">
                                    <p class="text-muted fst-italic">
                                        {{ $t('services.testimonials.testimonial1.text') }}
                                    </p>
                                    <h6 class="fw-bold text-end">{{ $t('services.testimonials.testimonial1.author') }}</h6>
                                </div>
                            </div>

                            <!-- Testimonio 2 -->
                            <div class="card card-custom shadow-sm mb-4">
                                <div class="card-body">
                                    <p class="text-muted fst-italic">
                                        {{ $t('services.testimonials.testimonial2.text') }}
                                    </p>
                                    <h6 class="fw-bold text-end">{{ $t('services.testimonials.testimonial2.author') }}</h6>
                                </div>
                            </div>
                        </div>
                    </Transition>

                    <!-- Preguntas Frecuentes -->
                    <Transition name="slide-fade">
                        <div v-if="showFAQ" class="faq-section mt-5">
                            <h2 class="text-center text-primary fw-bold mb-3">{{ $t('services.faq.title') }}</h2>
                            
                            <!-- Pregunta 1 -->
                            <div class="card card-custom shadow-sm mb-3">
                                <div class="card-body">
                                    <h5 class="fw-bold">{{ $t('services.faq.question1.question') }}</h5>
                                    <p class="text-muted">
                                        {{ $t('services.faq.question1.answer') }}
                                    </p>
                                </div>
                            </div>

                            <!-- Pregunta 2 -->
                            <div class="card card-custom shadow-sm mb-3">
                                <div class="card-body">
                                    <h5 class="fw-bold">{{ $t('services.faq.question2.question') }}</h5>
                                    <p class="text-muted">
                                        {{ $t('services.faq.question2.answer') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </Transition>
                </div>
            </div>
        </div>
    </GuestLayout>
</template>

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

h2, h5 {
    color: #34495e;
}

.text-muted {
    color: #7f8c8d !important;
}

.card-custom {
    background-color: #f7f9fc;
    border-radius: 10px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.card-custom:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

/* Sección de testimonios */
.testimonials-section {
    padding-top: 20px;
}

.faq-section {
    padding-top: 20px;
}
</style>
