<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { ref, onMounted } from "vue";

var props = defineProps({
  menu: {
    type: Array,
    default: () => [],
  }
});

const showForm = ref(false);
const showContactInfo = ref(false);
const showFAQ = ref(false);

onMounted(() => {
  showForm.value = true;
  setTimeout(() => {
    showContactInfo.value = true;
  }, 500);
  setTimeout(() => {
    showFAQ.value = true;
  }, 1000);
});
</script>

<template>
    <GuestLayout :menu="menu">
        <div class="container">
            <div class="row my-5">
                <!-- Columna principal con formulario de contacto -->
                <div class="col-md-8">
                    <Transition name="slide-fade">
                        <div v-if="showForm" class="card card-custom shadow-sm p-4">
                            <h2 class="text-primary fw-bold mb-3">Formulario de Contacto</h2>
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nombre</label>
                                    <input type="text" id="name" class="form-control" placeholder="Tu nombre completo" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" class="form-control" placeholder="Tu email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Mensaje</label>
                                    <textarea id="message" class="form-control" rows="5" placeholder="Escribe tu mensaje aquí..." required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 mt-3">Enviar</button>
                            </form>
                        </div>
                    </Transition>
                </div>

                <!-- Columna derecha con información de contacto y preguntas frecuentes -->
                <div class="col-md-4">
                    <!-- Información de contacto -->
                    <Transition name="slide-fade">
                        <div v-if="showContactInfo" class="contact-info-section">
                            <h2 class="text-center text-primary fw-bold mb-3">Información de Contacto</h2>
                            <div class="card card-custom shadow-sm mb-4">
                                <div class="card-body">
                                    <p><strong>Email:</strong> contacto@elyerrico.dev</p>
                                    <p><strong>Teléfono:</strong> +123 456 7890</p>
                                    <p><strong>Ubicación:</strong> Ciudad, País</p>
                                    <p><strong>Horario de Atención:</strong> Lunes a Viernes, 9:00 am - 6:00 pm</p>
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
                                    <h5 class="fw-bold">¿Cuál es el tiempo de respuesta?</h5>
                                    <p class="text-muted">
                                        Usualmente respondo en un plazo de 24 a 48 horas. Sin embargo, si es un tema urgente, indícalo en el mensaje para priorizarlo.
                                    </p>
                                </div>
                            </div>

                            <!-- Pregunta 2 -->
                            <div class="card card-custom shadow-sm mb-3">
                                <div class="card-body">
                                    <h5 class="fw-bold">¿Ofreces reuniones virtuales?</h5>
                                    <p class="text-muted">
                                        Sí, se pueden agendar reuniones virtuales para discutir los detalles de tu proyecto y resolver cualquier duda que tengas.
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

.contact-info-section {
    padding-top: 20px;
}

.faq-section {
    padding-top: 20px;
}
</style>
