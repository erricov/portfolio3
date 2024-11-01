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
                                Servicios que ofrezco
                            </h2>
                            <p class="text-muted">
                                Como desarrollador web Full Stack, me especializo en construir aplicaciones personalizadas, optimizar sistemas existentes y mejorar la experiencia del usuario mediante tecnologías modernas. A continuación, puedes conocer más sobre mis principales servicios.
                            </p>
                        </div>
                    </Transition>

                    <!-- Servicio 1: Desarrollo de Aplicaciones a Medida -->
                    <Transition name="slide-fade">
                        <div v-if="showService1" class="card card-custom shadow-sm p-4 mt-4">
                            <h3 class="fw-bold">Desarrollo de Aplicaciones a Medida</h3>
                            <p class="text-muted">
                                Desarrollo aplicaciones a medida utilizando Laravel y Vue.js, enfocadas en eficiencia, escalabilidad y rendimiento. Cada aplicación está diseñada para satisfacer necesidades específicas del cliente, ya sea un sistema de gestión de inventarios, un portal de usuarios, o cualquier otra solución.
                            </p>
                            <ul>
                                <li>Diseño de interfaces de usuario interactivas y atractivas.</li>
                                <li>Optimización de la base de datos para un rendimiento óptimo.</li>
                                <li>Integración de funciones avanzadas como autenticación, notificaciones en tiempo real, y API REST.</li>
                            </ul>
                        </div>
                    </Transition>

                    <!-- Servicio 2: Integración de Sistemas -->
                    <Transition name="slide-fade">
                        <div v-if="showService2" class="card card-custom shadow-sm p-4 mt-4">
                            <h3 class="fw-bold">Integración de Sistemas</h3>
                            <p class="text-muted">
                                Con la creciente necesidad de automatización y eficiencia, ofrezco servicios de integración que permiten conectar distintos sistemas y aplicaciones. Realizo integraciones de APIs, ERP y plataformas e-commerce, creando un flujo de trabajo sin interrupciones entre tus sistemas.
                            </p>
                            <ul>
                                <li>Integración de API de terceros (Stripe, Paypal, Google Maps, etc.).</li>
                                <li>Conexión de sistemas CRM, ERP y otros sistemas empresariales.</li>
                                <li>Automatización de procesos y flujo de datos entre plataformas.</li>
                            </ul>
                        </div>
                    </Transition>

                    <!-- Servicio 3: Diseño y Desarrollo de Portafolios -->
                    <Transition name="slide-fade">
                        <div v-if="showService3" class="card card-custom shadow-sm p-4 mt-4">
                            <h3 class="fw-bold">Diseño y Desarrollo de Portafolios</h3>
                            <p class="text-muted">
                                Un portafolio es esencial para destacar tus habilidades y proyectos. Ofrezco servicios de diseño y desarrollo de portafolios, creando sitios web modernos, visualmente atractivos y totalmente responsivos que reflejan tu marca personal o profesional.
                            </p>
                            <ul>
                                <li>Diseño de UI/UX centrado en la experiencia del usuario.</li>
                                <li>Adaptación a dispositivos móviles para una visualización óptima en todas las pantallas.</li>
                                <li>Integración de animaciones y efectos visuales para un portafolio dinámico.</li>
                            </ul>
                        </div>
                    </Transition>
                </div>

                <!-- Columna derecha con testimonios y preguntas frecuentes -->
                <div class="col-md-4">
                    <!-- Testimonios -->
                    <Transition name="slide-fade">
                        <div v-if="showTestimonials" class="testimonials-section">
                            <h2 class="text-center text-primary fw-bold mb-3">Testimonios</h2>
                            
                            <!-- Testimonio 1 -->
                            <div class="card card-custom shadow-sm mb-4">
                                <div class="card-body">
                                    <p class="text-muted fst-italic">
                                        "Trabajar con Ely ha sido una excelente experiencia. Su habilidad para entender nuestros requisitos y desarrollar una solución personalizada ha sido clave para nuestro éxito."
                                    </p>
                                    <h6 class="fw-bold text-end">- Juan Pérez, CEO de Empresa X</h6>
                                </div>
                            </div>

                            <!-- Testimonio 2 -->
                            <div class="card card-custom shadow-sm mb-4">
                                <div class="card-body">
                                    <p class="text-muted fst-italic">
                                        "Ely superó nuestras expectativas. Su atención al detalle y su conocimiento técnico nos ayudaron a lanzar nuestro proyecto en tiempo récord."
                                    </p>
                                    <h6 class="fw-bold text-end">- María López, Directora de Proyectos en Innovatech</h6>
                                </div>
                            </div>
                        </div>
                    </Transition>

                    <!-- Preguntas Frecuentes -->
                    <Transition name="slide-fade">
                        <div v-if="showFAQ" class="faq-section mt-5">
                            <h2 class="text-center text-primary fw-bold mb-3">Preguntas Frecuentes</h2>
                            
                            <!-- Pregunta 1 -->
                            <div class="card card-custom shadow-sm mb-3">
                                <div class="card-body">
                                    <h5 class="fw-bold">¿Cuál es el proceso de trabajo?</h5>
                                    <p class="text-muted">
                                        Comienzo con una reunión inicial para entender tus necesidades. Luego, propongo un plan detallado y lo implemento en fases, manteniéndote informado en cada etapa.
                                    </p>
                                </div>
                            </div>

                            <!-- Pregunta 2 -->
                            <div class="card card-custom shadow-sm mb-3">
                                <div class="card-body">
                                    <h5 class="fw-bold">¿Ofreces soporte después del lanzamiento?</h5>
                                    <p class="text-muted">
                                        Sí, ofrezco soporte post-lanzamiento para asegurar que todo funcione correctamente y realizar ajustes necesarios según el feedback de los usuarios.
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
