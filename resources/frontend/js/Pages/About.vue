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
const showSkills1 = ref(false);
const showSkills2 = ref(false);
const showSkills3 = ref(false);
const showMyStory = ref(true);

onMounted(() => {
  show.value = true;
  setTimeout(() => {
    showSkills1.value = true;
  }, 500);
  setTimeout(() => {
    showSkills2.value = true;
  }, 1000);
  setTimeout(() => {
    showSkills3.value = true;
  }, 1500);
  setTimeout(() => {
    showMyStory.value = true;
  }, 2000);
});

</script>

<template>
    <GuestLayout :menu="menu">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-8">
                    <!-- Sección Sobre Mí -->
                    <Transition name="slide-fade">
                        <div v-if="show" class="card card-custom shadow-sm p-4">
                            <div class="row align-items-center">
                                <div class="col-md-4 text-center">
                                    <transition name="scale" appear>
                                        <img
                                            src="https://placehold.co/600x400"
                                            alt="Mi foto"
                                            class="about-photo rounded-circle shadow"
                                        />
                                    </transition>
                                </div>
                                <div class="col-md-8">
                                    <h2 class="fw-bold">
                                        {{ $t('about.hero.title') }}
                                    </h2>
                                    <p class="text-muted">
                                        {{ $t('about.hero.subtitle') }}
                                    </p>
                                    <p class="text-muted">
                                        {{ $t('about.contact.description') }}
                                    </p>
                                    <a
                                        href="#contact"
                                        class="btn btn-primary mt-3"
                                        >{{ $t('about.hero.contactButton') }}</a
                                    >
                                </div>
                            </div>
                        </div>
                    </Transition>

                    <!-- Sección de Mi Historia -->
                    <Transition name="slide-fade">
                        <div
                            v-if="showMyStory"
                            class="card card-custom shadow-sm p-4 mt-4"
                        >
                            <h2 class="text-center mb-4 text-primary fw-bold">
                                {{ $t('about.about.title') }}
                            </h2>
                            <p
                                class="text-center text-muted mx-auto"
                                style="max-width: 800px"
                            >
                                {{ $t('about.about.description') }}
                            </p>
                        </div>
                    </Transition>
                </div>
                <div class="col-md-4">
                    <Transition name="slide-fade">
                        <div v-if="show" class="">
                            <h2
                                class="text-center mb-3 text-primary fw-bold mt0 fs-4"
                            >
                                {{ $t('about.skills.title') }}
                            </h2>
                            <div class="text-center">
                                <!-- Frontend -->
                                <Transition name="slide-fade">
                                    <div class="col-md-12 mb-4 card card-custom shadow-sm " v-if="showSkills1">
                                        <div
                                            class="card card-custom shadow-sm border-0"
                                        >
                                            <div class="card-body">
                                                <h3>{{ $t('about.skills.frontend') }}</h3>
                                                <div
                                                    class="d-flex justify-content-center align-items-center gap-3"
                                                >
                                                    <img
                                                        src="https://cdn.simpleicons.org/html5/E34F26"
                                                        alt="HTML"
                                                        class="tech-icon"
                                                    />
                                                    <img
                                                        src="https://cdn.simpleicons.org/css3/1572B6"
                                                        alt="CSS"
                                                        class="tech-icon"
                                                    />
                                                    <img
                                                        src="https://cdn.simpleicons.org/javascript/F7DF1E"
                                                        alt="JavaScript"
                                                        class="tech-icon"
                                                    />
                                                    <img
                                                        src="https://cdn.simpleicons.org/vue.js/4FC08D"
                                                        alt="Vue.js"
                                                        class="tech-icon"
                                                    />
                                                    <img
                                                        src="https://cdn.simpleicons.org/jquery/0769AD"
                                                        alt="Jquery"
                                                        class="tech-icon"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </Transition>
                                <!-- Backend -->
                                <Transition name="slide-fade">
                                    <div class="col-md-12 mb-4 card card-custom shadow-sm " v-if="showSkills2">
                                        <div
                                            class="card card-custom shadow-sm border-0"
                                        >
                                            <div class="card-body">
                                                <h3>{{ $t('about.skills.backend') }}</h3>
                                                <div
                                                    class="d-flex justify-content-center align-items-center gap-3"
                                                >
                                                    <img
                                                        src="https://cdn.simpleicons.org/php/777BB4"
                                                        alt="PHP"
                                                        class="tech-icon"
                                                    />
                                                    <img
                                                        src="https://cdn.simpleicons.org/laravel/FF2D20"
                                                        alt="Laravel"
                                                        class="tech-icon"
                                                    />
                                                    <img
                                                        src="https://cdn.simpleicons.org/mysql/4479A1"
                                                        alt="MySQL"
                                                        class="tech-icon"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </Transition>
                                <!-- Otras -->
                                <Transition name="slide-fade">
                                    <div class="col-md-12 mb-4 card card-custom shadow-sm " v-if="showSkills3">
                                        <div
                                            class="card card-custom shadow-sm border-0"
                                        >
                                            <div class="card-body">
                                                <h3>{{ $t('about.skills.others') }}</h3>
                                                <div
                                                    class="d-flex justify-content-center align-items-center gap-3 flex-wrap"
                                                >
                                                    <img
                                                        src="https://cdn.simpleicons.org/ubuntu/E95420"
                                                        alt="Ubuntu"
                                                        class="tech-icon"
                                                    />
                                                    <img
                                                        src="https://cdn.simpleicons.org/docker/2496ED"
                                                        alt="Docker"
                                                        class="tech-icon"
                                                    />
                                                    <img
                                                        src="https://cdn.simpleicons.org/moodle/009FE3"
                                                        alt="Moodle"
                                                        class="tech-icon"
                                                    />
                                                    <img
                                                        src="https://cdn.simpleicons.org/wordpress/21759B"
                                                        alt="WordPress"
                                                        class="tech-icon"
                                                    />
                                                    <img
                                                        src="https://cdn.simpleicons.org/git/F05032"
                                                        alt="Git"
                                                        class="tech-icon"
                                                    />
                                                    <img
                                                        src="https://cdn.simpleicons.org/github/181717"
                                                        alt="GitHub"
                                                        class="tech-icon"
                                                    />
                                                    <img
                                                        src="https://cdn.simpleicons.org/figma/F24E1E"
                                                        alt="Figma"
                                                        class="tech-icon"
                                                    />
                                                    <img
                                                        src="https://cdn.simpleicons.org/adobeillustrator/FF9A00"
                                                        alt="Illustrator"
                                                        class="tech-icon"
                                                    />
                                                    <img
                                                        src="https://cdn.simpleicons.org/adobephotoshop/31A8FF"
                                                        alt="Photoshop"
                                                        class="tech-icon"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </Transition>
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

h2 {
    font-size: 2rem;
    color: #34495e;
}

.text-muted {
    color: #7f8c8d !important;
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
.about-section,
.story-section {
    background: #e5e7eb;
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
